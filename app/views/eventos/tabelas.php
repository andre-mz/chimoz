<?php
require APPROOT . '/views/inc/header.php';
?>
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-sm-10">
                    <h3><i class="fa fa-angle-double-right mb-3"></i>
                        Tabelas...
                    </h3>
                </div>
            </div>
        </section>
    </section>



    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Autor</th>
                        <th>Titulo</th>
                        <th>data postada</th>
                        <th>Accao</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($dados['eventos'] as $evento) : ;?>
                        <tr class="text-center">
                            <th scope="row"><?php echo $evento->nome;?></th>
                            <td><?php echo $evento->titulo?></td>
                            <td><?php echo $evento->eventoCriacao?></td>
                            <td>
                                <a class="" href="<?php echo URLROOT?>/Eventos/visualizar/<?php echo $evento->eventosId?>">
                                   <button class="btn btn-outline-info" style="width: 100%;">
                                       <i class="fa fa-book"></i>
                                       Ler
                                   </button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<?php
require APPROOT . '/views/inc/footer.php';
?>
