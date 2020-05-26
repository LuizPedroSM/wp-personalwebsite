<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <?php wp_head();?>
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
                        <div class="social_button">
                            <a href="">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                        <div class="social_button">
                            <a href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <div class="social_button">
                            <a href="">
                                <i class="fab fa-google"></i>
                            </a>
                        </div>
                        <div class="social_button">
                            <a href="">
                                <i class="fab fa-wordpress"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>