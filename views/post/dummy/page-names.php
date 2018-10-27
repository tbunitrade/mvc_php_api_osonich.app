<?php
/**
 * Template Name : Names
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <?php
            echo "Hello Imena UA";
            ?>

            <?php
            require_once $_SERVER['DOCUMENT_ROOT'].'/api_forms.php';

            $form_config = array(
                'template'		=> 'default',
                'reseller_id'	=>  1274, // Your ResellerID
                'lang'			=> 'en' // 'ru','en'
            );

            if ($res = getForm( $form_config)) {
                echo $res; // Responce of imena_form service
            }
            ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
