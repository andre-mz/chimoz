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
<body>

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

    <div class="top-content">
        <div class="container">

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1>Registro</h1>
                    <div class="descricao">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit tempor incididunt ut labore et!
                        </p>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 15px;">
                <div class="col-sm-2 col-sm-offset-2">
                    <span class="span">
                        <a style="color: #ffffff" href="<?php echo URLROOT ;?>/Usuarios/login">
                            Login
                        </a>
                    </span>
                    <span class="show-forms-disivor" style="color: #ffffff">
                        /
                    </span>
                    <span class="span">
                        <a  href="<?php echo URLROOT ;?>/Usuarios/registro">
                            Registrar
                        </a>
                    </span>


                </div>
            </div>

            <div class="row registro-form">
                <div class="col-sm-4 col-sm-offset-2">

                    <form class="l-form" for="role" action="<?php echo URLROOT ;?>/Usuarios/registro" method="post">
                        <div class="form-group">
                            <input type="text" placeholder="Nome..." name="nome" class="form-control form-control-lg
                            <?php echo (!empty($dados['nome_erro'])) ? 'is-invalid' : ''; ?>" value="<?php echo $dados['nome'];?>">
                            <span class="invalid-feedback">
                                <?php echo $dados['nome_erro'];?>
                            </span>
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Apelido..." name="apelido" class="form-control form-control-lg
                             <?php echo (!empty($dados['apelido_erro'])) ? 'is-invalid' : '';?>" value="<?php echo $dados['apelido']?>">
                            <span class="invalid-feedback">
                                <?php echo $dados['apelido_erro'];?>
                            </span>
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Email..." name="email" class="form-control form-control-lg
                            <?php echo (!empty($dados['email_erro'])) ? 'is-invalid' : '' ;?>" value="<?php echo $dados['email'] ;?>">
                            <span class="invalid-feedback">
                                <?php echo $dados['email_erro'];?>
                            </span>
                        </div>
                        <div class="form-group">

                        </div>
                </div>

                <div class="col-sm-4 col-sm-offset forms-right-icons">

                    <div class="form-group">
                        <input type="password" placeholder="Password..." name="password" class="form-control form-control-lg
                        <?php echo (!empty($dados['password_erro'])) ? 'is-invalid':'';?>" value="<?php echo $dados['password'];?>">
                        <span class="invalid-feedback">
                            <?php echo $dados['password_erro']; ?>
                        </span>
                    </div>
                    <div class="form-group">

                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirmar password..." name="confirma_password" class="form-control form-control-lg
                        <?php echo (!empty($dados['confirma_password_erro'])) ? 'is-invalid' : '' ;?>" value="<?php echo $dados['confirma_password'] ;?>">
                        <span class="invalid-feedback">
                            <?php echo $dados['confirma_password_erro'];?>
                        </span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-lg" value="Resgister">Resgister</button>
                    </div>
                    </form>
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