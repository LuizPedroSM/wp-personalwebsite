<?php 
get_header();
?>
<div class="container body_top">
    <div class="row">
        <div class="col-sm-5 p-0">
            <img src="https://www.google.com.br/google.jpg" alt="google" class="avatar">
        </div>
        <div class="col-sm p-0 d-flex flex-column">
            <div class="user_info m-4">
                <div class="welcome_box">Olá & Bem vindo(a)</div>
                <div class="welcome_name">Eu sou <span> <?php bloginfo('name');?> </span></div>
                <div class="welcome_desc"><?php bloginfo('description');?></div>
                <table border="0" width="100%">
                    <tr>
                        <td width="100" class="font-weight-bold">Idade:</td>
                        <td>99</td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Endereço:</td>
                        <td>Rua das ruas</td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">E-mail:</td>
                        <td>email@email.com</td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Telefone:</td>
                        <td>99 9999-9999</td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Site:</td>
                        <td>www.localhost.com</td>
                    </tr>
                </table>
            </div>
            <div class="social_area">
                <div class="social_button2">
                    <a href="">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
                <div class="social_button2">
                    <a href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
                <div class="social_button2">
                    <a href="">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
                <div class="social_button2">
                    <a href="">
                        <i class="fab fa-wordpress"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
get_footer();
?>