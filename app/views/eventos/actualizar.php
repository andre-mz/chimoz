<?php
require APPROOT . '/views/inc/header.php';
?>
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="row  mt-3">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="">
                                <div class="card-img">
                                    <img src="<?php echo URLROOT?>/public/admin/img/show/show-2.jpg" alt="" style="clip-path: polygon(3% 0, 100% 0%, 97% 100%, 0% 100%);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <div class="form-panel">
        <form class="form-horizontal style-form mt-3" method="POST"
              action="<?php echo URLROOT ;?>/Eventos/editar/<?php echo $dados['id']?>" style="padding: 1rem">

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="titulo" placeholder="Titulo do evento..." class="form-control
                        <?php echo (!empty($dados['titulo_erro'])) ? 'is-invalid' : '';?>" value="<?php echo $dados['titulo'];?>">
                        <span class="invalid-feedback">
                            <?php echo $dados['titulo_erro'];?>
                        </span>
                    </div>
                    <div class="col-sm-6">
                        <select name="cat" class="form-control
                        <?php echo (!empty($dados['cat_erro'])) ? 'is-invalid' : ''?>" value="<?php echo $dados['titulo']?>">
                            <option>Seleciona uma categoria</option>
                            <option value="Evento">Evento</option>
                            <option value="Noticia">Noticia</option>
                            <option value="Anucio">Anucio</option>
                        </select>
                        <span class="invalid-feedback">
                            <?php echo $dados['cat_erro']?>
                        </span>
                    </div>
                    <!--<div class="col-sm-6">
                        <input type="text" name="cat" placeholder="categoria" class="form-control
                        <?php echo (!empty($dados['cat_erro'])) ? 'is-invalid' : ''?>" value="<?php echo $dados['titulo']?>">
                        <span class="invalid-feedback">
                            <?php echo $dados['cat_erro']?>
                        </span>
                    </div>-->
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-12 control-label text-center">
                    Data da Realizacao do evento
                </label>
                <div class="row">
                    <div class="col-sm-12">
                        <input type="date" name="data" class="form-control text-center
                        <?php echo (!empty($dados['data_erro'])) ? 'is-invalid' : ''?>" value="<?php echo $dados['data']?>">
                        <span class="invalid-feedback">
                            <?php echo $dados['data_erro']?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="file" name="img1" placeholder="imagem 1" class="form-control
                        <?php echo (!empty($dados['img1_erro'])) ? 'is-invalid' : '';?>" value="<?php echo $dados['titulo'];?>">
                        <span class="invalid-feedback">
                            <?php echo $dados['img1_erro']?>
                        </span>
                    </div>
                    <div class="col-sm-6">
                        <input type="file" name="img2" placeholder="imagem 2" class="form-control
                        <?php echo (!empty($dados['img2_erro'])) ? 'is-invalid' : '';?>" value="<?php echo $dados['titulo'];?>">
                        <span class="invalid-feedback">
                            <?php echo $dados['img2_erro'];?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <textarea  name="corpo" id="contact-message" placeholder="Sua Mensagem" rows="5" class="form-control
                        <?php echo (!empty($dados['corpo_erro'])) ? 'is-invalid' : '';?>"><?php echo $dados['corpo'];?>">
                        </textarea>
                        <span class="invalid-feedback">
                            <?php echo $dados['corpo_erro'];?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary btn-block pull-left" value="Actualizar">
                    </div>
                </div>
            </div>
        </form>
        <div class="col-md-12">
            <a class="" href="<?php echo URLROOT?>/eventos/todos">
                <button class="btn btn-warning" style="width: 100%;">
                    Cancelar
                </button>
            </a>
        </div>
    </div><br>

<!--
    <div class="row">
        <div class="col-md-8 servico">
            <div class="card bg-light mt-5">
                <div class="card-body">
                    <form method="POST" action="<?php echo URLROOT ;?>/Eventos/editar/<?php echo $dados['id']?>">
                        <div class="form-group">
                            <label for="titulo"></label>
                            <input type="text" name="titulo" placeholder="Titulo do evento..." class="form-control form-control-lg
                             <?php echo (!empty($dados['titulo_erro'])) ? 'is-invalid' : '';?>" value="<?php echo $dados['titulo'];?>">
                            <span class="invalid-feedback">
                                <?php echo $dados['titulo_erro'];?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="corpo"></label>
                            <textarea type="text" name="corpo" rows="9" cols="70" placeholder="Insira o corpo do evento.." class="form-control form-control-lg
                            <?php echo (!empty($dados['corpo_erro'])) ? 'is-invalid' : '';?>"><?php echo $dados['corpo'];?>
                            </textarea>
                            <span class="invalid-feedback">
                                <?php echo $dados['corpo_erro'];?>
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input type="submit" class="btn btn-primary btn-block pull-left" value="Actualizar">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<br>
-->
<?php
require APPROOT .'/views/inc/footer.php';
?>