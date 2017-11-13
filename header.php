<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(''); ?> <?php if(wp_title('', false)) { echo '-'; } ?> <?php bloginfo('name'); ?></title>
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif|Quicksand:700" rel="stylesheet">
        <style type="text/css">
        h1, h2, h3, h4, h5, h6 {
        font-family: "Quicksand", serif;
        }
        .pure-g [class*="pure-u"] {
        font-family: "PT Serif", serif;
        }
        .fixedbar {
        background: rgb(61, 79, 93);
        color: #fff;
        }
        </style>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <!-- start -->
        <div class="pure-g">

            <!-- fixed sidebar -->
            <div class="fixedbar pure-u-1 pure-u-md-1-5">
                <div class="fixedsidebar">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/purelogo.png" width="100%">
                    </a>
                    <?php purepress_nav(); // purepress menu ?>
                    <a class="pp-mobile-button"><i class="fa fa-bars" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- /fixed sidebar -->

            <!-- main content -->
            <div class="content pure-u-1 pure-u-md-3-5">
