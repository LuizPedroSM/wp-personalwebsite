<?php 
get_header();
?>
<div class="container body_top">
    <div class="row">
        <div class="col-sm-5 p-0">
            <?php if (get_theme_mod('lpw_img')):?>
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('lpw_img'));?>" alt="avatar" class="avatar" />
            <?php endif;?>
        </div>
        <div class="col-sm p-0 d-flex flex-column">
            <div class="user_info m-4">
                <div class="welcome_box">Olá & Bem vindo(a)</div>
                <div class="welcome_name">Eu sou <span> <?php bloginfo('name');?> </span></div>
                <div class="welcome_desc"><?php bloginfo('description');?></div>
                <table border="0" width="100%">
                    <?php if (get_theme_mod('lpw_idade')):?>
                    <tr>
                        <td width="100" class="font-weight-bold">Idade:</td>
                        <td><?php echo get_theme_mod('lpw_idade');?></td>
                    </tr>
                    <?php endif;?>

                    <?php if (get_theme_mod('lpw_endereco')):?>
                    <tr>
                        <td width="100" class="font-weight-bold">Endereço:</td>
                        <td><?php echo get_theme_mod('lpw_endereco');?></td>
                    </tr>
                    <?php endif;?>

                    <?php if (get_theme_mod('lpw_email')):?>
                    <tr>
                        <td width="100" class="font-weight-bold">E-mail:</td>
                        <td><?php echo get_theme_mod('lpw_email');?></td>
                    </tr>
                    <?php endif;?>

                    <?php if (get_theme_mod('lpw_telefone')):?>
                    <tr>
                        <td width="100" class="font-weight-bold">Telefone:</td>
                        <td><?php echo get_theme_mod('lpw_telefone');?></td>
                    </tr>
                    <?php endif;?>

                    <?php if (get_theme_mod('lpw_site')):?>
                    <tr>
                        <td width="100" class="font-weight-bold">Site:</td>
                        <td><?php echo get_theme_mod('lpw_site');?></td>
                    </tr>
                    <?php endif;?>

                </table>
            </div>
            <div class="social_area">

                <?php if (get_theme_mod('lpw_facebook')):?>
                <div class="social_button2">
                    <a href="<?php echo get_theme_mod('lpw_facebook');?>">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
                <?php endif;?>

                <?php if (get_theme_mod('lpw_twitter')):?>
                <div class="social_button2">
                    <a href="<?php echo get_theme_mod('lpw_twitter');?>">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
                <?php endif;?>

                <?php if (get_theme_mod('lpw_gplus')):?>
                <div class="social_button2">
                    <a href="<?php echo get_theme_mod('lpw_gplus');?>">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
                <?php endif;?>

                <?php if (get_theme_mod('lpw_blog')):?>
                <div class="social_button2">
                    <a href="<?php echo get_theme_mod('lpw_blog');?>">
                        <i class="fab fa-wordpress"></i>
                    </a>
                </div>
                <?php endif;?>

            </div>
        </div>
    </div>
</div>
<?php 
get_footer();
?>