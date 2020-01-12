<?php
/**
 * Created by PhpStorm.
 * User: Dalton
 * Date: 9/10/2019
 * Time: 2:42 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo SITENAME; ?></title>
    <!-- CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap');
        /*font-family: 'Open Sans', sans-serif;*/
        /*@import url('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500');
        /*'Roboto', sans-serif;*/
    </style>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/admin/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/admin/css/form-elementos.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/admin/css/estilo2.css">

</head>
<body>

    <!--Menu Superior-->
    <nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                        <span class="sr-only">
                            Toggle Navigation
                        </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo URLROOT;?>">
                    Faca o seu Registro
                </a>
            </div>
            <!--Coleta icons e links quando a tela for pequena-->
            <div class="collapse navbar-collapse" id="navbar-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                            <span class="li-text">
                                Siga-nos
                            </span>
                        <span class="li-text">
                            nas redes sociais:
                        </span>
                        <span class="li-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Top Content-->
    <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>Chimoz</strong>  Noticias</h1>
                        <div class="description">
                            <p>
                                Aqui ira entrar textos ou uma informacao acerca do registro de admin na pagina web
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 phone">
                        <img src="<?php echo URLROOT;?>/public/admin/img/phone.png" alt="">
                    </div>
                    <div class="col-sm-5 form-box">
                        <div class="form-top">
                            <div class="form-top-divider"></div>
                            <div class="form-top-left">
                                <p class="text-center">
                                    A integração de uma plataforma com a finalidade de fazer a disponibilização
                                    de informações  e com uma boa aceitação
                                </p>
                                <p class="text-center">
                                    relacionadas a eventos ira contribuir para um avanço fará com
                                    que as informações publicadas tenham mais credibilidade
                                </p>
                            </div>
                            <div class="form-top-divider"></div>
                        </div>
                        <div class="form-bottom">
                            <a href="<?php echo URLROOT;?>/Usuarios/login">
                                <button type="submit" name="entrar" class="btn">
                                    Publique ja o seu evento!
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- SERVICOS -->
    <div class="great-support-container section-container" style="margin-top: 15rem">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 great-support section-description wow fadeIn">
                    <h2>Eventos</h2>
                    <div class="divider-1"><span></span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7 great-support-box">
                    <div class="great-support-box-text great-support-box-text-left">
                        <h3 class="text-center">Ut wisi enim ad minim</h3>
                        <p class="medium-paragraph text-center">
                            Lorem ipsum dolor sit amet, <span class="colored-text">consectetur adipisicing</span> elit,
                            sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                            Exerci tation ullamcorper suscipit <span class="colored-text">lobortis nisl</span> ut aliquip ex ea commodo consequat.
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.
                        </p>
                    </div>
                </div>
                <div class="col-sm-5 great-support-box wow fadeInUp">
                    <img src="<?php echo URLROOT;?>/public/admin/img/pc.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- NOTICIAS -->
    <div class="call-to-action-container section-container section-container-image-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
                    <h2>Noticias</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                        aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                        aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials -->
    <div class="testimonials-container section-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 testimonials section-description wow fadeIn">
                    <h2><strong>Anucios</strong></h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 testimonial-list wow fadeInUp">
                    <div role="tabpanel">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                <div class="testimonial-image">
                                    <img src="<?php echo URLROOT;?>/public/admin/img/showcase.jpg" alt="">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                        Lorem ipsum dolor sit amet, consectetur"
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                <div class="testimonial-image">
                                    <img src="<?php echo URLROOT;?>/public/admin/img/pc.png" alt="">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                        ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo consequat"
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3">
                                <div class="testimonial-image">
                                    <img src="<?php echo URLROOT;?>/public/admin/img/phone.png" alt="" >
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                                        Lorem ipsum dolor sit amet, consectetur"
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab4">
                                <div class="testimonial-image">
                                    <img src="<?php echo URLROOT;?>/public/admin/img/chimoz.png" alt="">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                        ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                        lobortis nisl ut aliquip ex ea commodo consequat"
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 footer-copyright">
                    &copy; Todos direitos servados Chimoz.
                </div>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="<?php echo URLROOT; ?>/public/admin/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo URLROOT; ?>/public/admin/js/jquery.backstretch.min.js"></script>
    <script src="<?php echo URLROOT; ?>/public/admin/js/respond.js"></script>
    <script src="<?php echo URLROOT; ?>/public/admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo URLROOT; ?>/public/admin/js/retina-1.1.0.min.js"></script>
    <script src="<?php echo URLROOT; ?>/public/admin/js/scripts.js"></script>
    <script src="<?php echo URLROOT; ?>/public/admin/js/placeholder.js"></script>
    <script src="<?php echo URLROOT; ?>/public/admin/js/shiv.js"></script>

</body>
</html>

