<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ru-RU">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Reseller's form</title>
	<script type="text/javascript" src="/resellers_form/jquery.js"></script>
	<link rel="stylesheet" href="/resellers_form/check-form.css" media="all" />
</head>
<body>

<div id="main-reseller-form">

<!-- COPY THIS -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'http://sierra-group.in.ua/wp-content/themes/twentyseventeen/api_forms.php';
$RESELLER_ID = 1274;
$form_config = array(
	'template'		=> 'default',
	'reseller_id'	=> $RESELLER_ID, // Your ResellerID
	'lang'			=> 'ru' // 'ru','en'
	);

if ($res = getForm( $form_config)) {
	echo $res; // Responce of imena_form service 
}
?>
<!-- END -->

</div>

</body>
</html>