<!--?php require APPROOT . '/views/inc/header.php'; ?>-->
<?php
?>
<!DOCTYPE HTML>
<html>
<head>

    <title><?php echo SITENAME; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="descriao" content="Chimoz Noticias">
    <meta name="Autor" content="Dalton Bernardo">
    <meta name="Data" content="16/11/2019">
    <meta name="numero" content="site 3">

    <!-- CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap');
        /*font-family: 'Open Sans', sans-serif;*/
        /*@import url('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500');
        /*'Roboto', sans-serif;*/
    </style>

    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/admin/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/admin/css/form-elementos.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/admin/css/estilo2.css">


</head>
<body class="login">
<div>
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
                <a class="navbar-brand" href="<?php echo URLROOT; ?>">
                    Faca o seu Registro
                </a>
            </div>
            <!-Coleta icons e links quando a tela for pequena->
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
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1">
                                <span class="span">
                                    <a style="color: #ffffff" href="<?php echo URLROOT ;?>/Usuarios/registro">
                                        Registrar
                                    </a>
                                </span>
                                <span class="show-forms-disivor" style="color: #ffffff">
                                    /
                                </span>
                                <span class="span">
                                    <a href="<?php echo URLROOT ;?>/Usuarios/login">
                                        Login
                                    </a>
                                </span>
                                <span class="show-forms-disivor" style="color: #ffffff">
                                    /
                                </span>
                                <span class="span">
                                    <a href="<?php echo URLROOT ;?>/Usuarios/loginAdm">
                                        Login
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="form-top">
                            <div class="form-top-divider"></div>
                        </div>
                        <div class="card-header card-text">
                            <?php flash('register_success'); ?>
                        </div>
                        <div class="form-bottom">
                            <form class="l-form" for="role" action="<?php echo URLROOT ;?>/Usuarios/login" method="post">
                                <div class="form-group">
                                    <label class="sr-only" for="nome">email</label>
                                    <input type="text" name="email" id="l-form-email" placeholder="Email..." class="l-form-email form-control
                                    <?php echo (!empty($dados['email_erro'])) ? 'is-invalid' : '' ;?>" value="<?php echo $dados['email'] ;?>">
                                    <span class="invalid-feedback">
                                        <?php echo $dados['email_erro'];?>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="password">Password</label>
                                    <input type="Password" id="l-form-password" name="password" placeholder="Password..." class="l-form-password form-control
                                    <?php echo (!empty($dados['password_erro'])) ? 'is-invalid' : '' ;?>" value="<?php echo $dados['password'] ;?>">
                                    <span class="invalid-feedback">
                                        <?php echo $dados['password_erro'];?>
                                    </span>
                                </div>
                                <button type="submit" name="entrar" class="btn">
                                    Entrar!
                                </button>
                            </form>
                        </div>
                        <div class="form-top">
                            <div class="form-top-divider"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
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