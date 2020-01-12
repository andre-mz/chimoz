<?php
    require APPROOT . '/views/inc/header.php';
?>
    <div class="container mt-5 servico">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="dlt1 display-5 bold mt-3">
                    <?php echo $dados['evento']->titulo ;?>
                </h2>
                <hr>
            </div>
        </div>
    </div>

    <div class="container servico">
        <section id="main-content">
            <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="row  mt-3">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="servico">
                                    <p class="text-justify" style="font-size: 16px;padding: 1.1rem">
                                        <?php echo $dados['evento']->corpo ;?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12"  style="padding-bottom: .7rem">
                                <div class="servico" style="padding: .4rem">
                                    <div class="card-img" style="padding-bottom: .2rem">
                                        <img src="<?php echo URLROOT?>/public/img/showcase.png" alt="">
                                    </div>
                                    <div class="card-img">
                                        <img src="<?php echo URLROOT?>/public/img/COO.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div> <br>

    <div class="container servico">
        <div class="row">
            <div class="col-12 text-center">
                <p style="font-size: 18px;margin-top: .2rem">
                    Criado por:
                    <span style="font-weight: bolder;"><?php echo $dados['usuario']->nome ;?></span> /
                    no dia <?php echo $dados['evento']->data_criacao ;?>
                </p>
            </div>

            <?php if($dados['evento']->usuario_id == $_SESSION['usuario_id']) : ?>
                <div class="col" style="font-size: 18px;margin-bottom: 1rem">
                    <a style="width: 100%;" href="<?php echo URLROOT ;?>/Eventos/editar/<?php echo $dados['evento']->id;?>">
                        <button class="btn btn-outline-success" style="width: 100%;">
                            Editar
                        </button>
                    </a>
                </div>

                <div class="col">
                    <a style="width: 100%;" href="<?php echo URLROOT ;?>/Eventos/apagar/<?php echo $dados['evento']->id;?>">
                        <button class="btn btn-outline-danger" style="width: 100%;">
                            Apagar
                        </button>
                    </a>
                </div>
            <?php endif ;?>
        </div>
    </div> <br>


<?php
    require APPROOT .'/views/inc/footer.php';
?>