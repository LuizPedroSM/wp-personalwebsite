<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <?php wp_head();?>
    <style type="text/css">
    .half_bg,
    .social_area,
    .welcome_box {
        background-color: <?php echo get_theme_mod('lpw_color');
        ?>;
    }

    .welcome_name span {
        color: <?php echo get_theme_mod('lpw_color');
        ?>;
    }
    </style>
</head>

<body <?php body_class();?>>

    <div class="half_bg"></div>
    <header>
        <div class="container header_top">
            <div class="row">
                <div class="col-sm">
                    <h1><?php bloginfo('name');?></h1>
                    <h3><?php bloginfo('description');?></h3>
                </div>
                <div class="col-sm d-flex justify-content-end align-items-center">
                    <div class="social_area">
                        <?php if (get_theme_mod('lpw_facebook')):?>
                        <div class="social_button">
                            <a href="<?php echo get_theme_mod('lpw_facebook');?>">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                        <?php endif;?>

                        <?php if (get_theme_mod('lpw_twitter')):?>
                        <div class="social_button">
                            <a href="<?php echo get_theme_mod('lpw_twitter');?>">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <?php endif;?>

                        <?php if (get_theme_mod('lpw_gplus')):?>
                        <div class="social_button">
                            <a href="<?php echo get_theme_mod('lpw_gplus');?>">
                                <i class="fab fa-google"></i>
                            </a>
                        </div>
                        <?php endif;?>

                        <?php if (get_theme_mod('lpw_blog')):?>
                        <div class="social_button">
                            <a href="<?php echo get_theme_mod('lpw_blog');?>">
                                <i class="fab fa-wordpress"></i>
                            </a>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </header>