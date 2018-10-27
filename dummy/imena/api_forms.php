<?php
define(	"ENGINE_HOST", "forms.imena.ua");

if ($_REQUEST['type'] == 'ajax') {
	$form_config = array(
		'ip'			=> $_SERVER['REMOTE_ADDR'],
		'step'			=> 'check-domain',
		'name'			=> $_REQUEST['name'],
		'key'			=> $_REQUEST['key']
		);

	if ($res = getForm( $form_config)) {
		echo $res;
	}
}

function formGetParams($arr, $arr_name = "") {
	if (is_array($arr)) {
		$r = "";

		foreach($arr as $k => $v) {
			if (!is_array($v)) {
				if ($arr_name)
					$r .= "&".$arr_name."[".urlencode($k)."]"."=".urlencode(iconv('utf-8', 'cp1251', $v));
				else
					$r .= "&".urlencode($k)."=".urlencode(iconv('utf-8', 'cp1251', $v));
			} else {
				if ($arr_name)
					$r .= formGetParams($v, $arr_name."[".urlencode($k)."]");
				else
					$r .= formGetParams($v, urlencode($k));
			}
		}

		return $r;
	}
}

function getForm( $config = array(), $flush_output = false) {
	$step_action = array(
		'form'					=> '/show-form',
		'admin'					=> '/admin-form',
		'admin-check'			=> '/admin-check',
		'check'					=> '/check-domain-form',
		'check-domain'			=> '/check-domain',
		'transfer'				=> '/transfer-form',
		'ns'					=> '/ns-form',
		'agree_form'			=> '/agree-form',
		'reg_new_or_login'		=> '/reg_new_or_login',
		'login_form'			=> '/login_form',
		'login_client'			=> '/login_client',
		'login_client_by_name'	=> '/login_client_by_name',
		'reg_new_client_type'	=> '/reg_new_client_type',
		'reg_form'				=> '/reg_form',
		'reg_confirm'			=> '/reg_confirm',
		'create_client'			=> '/create_client',
		'reg_domain_form'		=> '/reg_domain_form',
		'reg_domain'			=> '/reg_domain',
		'pay_form'				=> '/pay_form',
		'pay'					=> '/pay',

		'get-zones'				=> '/get-zones',
		'get-zones-options'		=> '/get-zones-options',
		'get-license'			=> '/get-license',
		'reg-client-and-domain' => '/reg-client-and-domain',
		'reg-client-and-domain-data-only' => '/reg-client-and-domain-data-only'
		);

	$config['ip'] = $_SERVER['REMOTE_ADDR'];

	if (!isset( $config['step'])) {
		if (isset($_POST['step']) || isset($_GET['step'])) {
			$config['step'] = isset($_POST['step']) ? $_POST['step'] : $_GET['step'];
		} else {
			$config['step'] = 'form';
		}
	}

	if (isset( $step_action[$config['step']])) {
		$url = $step_action[$config['step']];

		if ($url and substr($url, 0, 1) == "/") {
			$vars = array_merge($_GET, $_POST, $config);
			$fp = @fsockopen(ENGINE_HOST, 80, $errno, $erstr, 30);
			if (!$fp) {
				switch ($config['lang']) {
					case 'ua':  {
						return "Сервіс тимчасово недоступний<br />\n";
						break;
					}

					case 'en':  {
						return "Service is temporary unavailable<br />\n";
						break;
					}

					case 'ru':
					default: {
						return "Сервис временно недоступен<br />\n";
						break;
					}
				}
			} else {
				$post = formGetParams($vars);
			    fputs($fp, "POST /".$url." HTTP/1.0\r\n");
				fputs($fp, "HOST: ".ENGINE_HOST."\r\n");
				fputs($fp, "ACCEPT: *\/*\r\n");
				fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
				fputs($fp, "Content-length: ".strlen($post)."\r\n");
				fputs($fp, "Connection: close\r\n\r\n");
				fputs($fp, $post."\r\n\r\n");
				$res = "";
				$content = false;
			    while (!feof($fp)) {
			    	$buffer = fgets( $fp, 1024);
			    	if ($flush_output) {
			    		if (preg_match( '/^\s+$/s', $buffer)) {
			    			$content = true;
			    		}
			    		if ($content) {
			    			echo $buffer;
			    		}
			    		flush();
			    	}
			        $res .= $buffer;
			    }
			    fclose($fp);
				$res = strstr($res, "\r\n\r\n");
				$res = substr($res, 4);
				return iconv('cp1251', 'utf-8', $res);
			}
		}
	}
}
