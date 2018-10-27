<?php /**
Template Name: Imena
 **/ ?>
<?php get_header(); ?>

<script type="text/javascript" src="/resellers_form/jquery.js"></script>
<link rel="stylesheet" href="/resellers_form/check-form.css" media="all" />


<div id="main-reseller-form">

    <!-- COPY THIS -->
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/api_forms.php';
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

 <!-- END id="main-reseller-form"-->
</div>