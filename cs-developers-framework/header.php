<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>    
        <?php //if ( is_singular()  ) {echo  ' | ' ; echo  the_title(); } ?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="col-lg-12">
            <a href='<?php echo esc_url( home_url() ); ?>'><h1><i class='fa fa-user fa-4x' area-hidden='true'></i>  Header</h1></a>
        </div>