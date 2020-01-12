<?php
    require APPROOT . '/views/inc/header.php';
?>

<!--
    <div class="row">
        <div class="col-md-8">
            <div class="card bg-light mt-5">

                <div class="card-header card-text">
                    <div class="row">
                        <div class="col">
                            <h5 class="mt-2">Criar Novo Evento</h5>
                        </div>
                        <div class="col-md-offset-0">
                            <a href="<?php echo URLROOT;?>/eventos" class="btn btn-success pull-right">
                                <i class="fa fa-backward"></i>
                                Sair
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="<?php echo URLROOT ;?>/Eventos/adicionar">

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
                            <textarea type="text" name="corpo" placeholder="Insira o corpo do evento.." class="form-control form-control-lg
                            <?php echo (!empty($dados['corpo_erro'])) ? 'is-invalid' : '';?>" value="<?php echo $dados['corpo_erro'];?>"></textarea>
                            <span class="invalid-feedback">
                                <?php echo $dados['corpo_erro'];?>
                            </span>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input type="submit" class="btn btn-primary btn-block pull-left" value="Criar">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
-->
    <div class="row">
        <div class="col-md-11">
            <h5 class="mt-2">Criar Novo Evento</h5>
        </div>
        <div class="col-md-0">
            <a href="<?php echo URLROOT;?>/eventos" class="btn btn-success pull-right">
                <i class="fa fa-backward"></i>
                Sair
            </a>
        </div>
    </div>



    <div class="form-panel">
        <form class="form-horizontal style-form mt-3" method="POST" action="<?php echo URLROOT ;?>/Eventos/adicionar" style="padding: 1rem">

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="titulo" placeholder="Titulo" class="form-control
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
                     <?php echo (!empty($dados['corpo_erro'])) ? 'is-invalid' : '';?>" value="<?php echo $dados['corpo_erro'];?>">
                    </textarea>
                        <span class="invalid-feedback">
                        <?php echo $dados['corpo_erro'];?>
                    </span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-outline-success btn-block pull-left" value="Criar">
                    </div>
                </div>
            </div>

        </form>
    </div><br>


<?php
    require APPROOT .'/views/inc/footer.php';
?>