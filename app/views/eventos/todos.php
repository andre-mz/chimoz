<?php
require APPROOT . '/views/inc/header.php';
?>

    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-sm-10">
                    <h3><i class="fa fa-angle-double-right mb-3"></i>
                       Eventos / Anucio / Noticia
                    </h3>
                </div>
                <div class="col-sm-2 mt-1 mb-4">
                    <a class="btn btn-primary pull-right" href="<?php echo URLROOT ;?>/eventos/adicionar">
                        <i class="fa fa-pencil"></i>
                        Criar Evento
                    </a>
                </div>
            </div>
        </section>
    </section>

    <section id="main-content" style="margin-top: -7rem">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="row">
                        <?php foreach ($dados['eventos'] as $evento) : ;?>
                            <div class="ccol-lg-6 col-md-4 col-sm-12">
                                <div class="content-panel pn">

                                    <div id="profile-01">
                                        <div class="card-img">
                                            <img src="<?php echo $evento->eventoImg?>" alt="">
                                        </div>
                                    </div>

                                    <div class="profile-01 centered div">
                                        <a class="fill-div" href="<?php echo URLROOT?>/Eventos/visualizar/<?php echo $evento->eventosId?>"><?php echo $evento->titulo?>...</a>
                                    </div>

                                    <div class="centered div-2">
                                        <h6><i class="fa fa-clock"></i><br/><?php echo $evento->eventoCriacao?></h6>
                                    </div>
                                </div>
                                <?php echo '<br>'?>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </section>
    </section>




<?php
require APPROOT . '/views/inc/footer.php';
?>
