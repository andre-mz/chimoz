
        </div>
    </div>

        <!--##################################################################################################################-->
        <!-- Footer -->
        <footer class="sticky-footer footer" >
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span style="color: white!important;">
                        Direitos Reservados
                        <i class="fa fa-copyright copy"></i>
                        Chimoz Noticias 2019
                    </span>
                </div>
            </div>
        </footer>

         <!--#################################################################################################################-->
        <!-- Logout Modal-->
        <div class="modal fade fade " id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Preparado para sair?
                        </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="fas fa-window-close"></i>
                            </span>
                        </button>
                    </div>

                    <div class="modal-body">
                        Selecionaste "Sair" Deseja mesmo terminar a sessao!
                    </div>
                    <div class="modal-footer">
                        <button class="btn-admin btn-outline-info"  data-dismiss="modal">
                            Cancelar
                        </button>
                        <a class="col-sm-6" href="<?php echo URLROOT;?>/Usuarios/logout">
                            <button class="btn-admin btn-outline-danger">
                                Sair
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <!--APAGAR MODAL--
        <div class="modal fade fade " id="delModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                           Deseja mesmo eliminar?
                        </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="fas fa-window-close"></i>
                            </span>
                        </button>
                    </div>

                    <div class="modal-body">
                        Selecionaste "eliminar" Deseja mesmo eliminar!
                    </div>
                    <div class="modal-footer">
                        <button class="btn-admin btn-outline-info"  data-dismiss="modal">
                            Cancelar
                        </button>
                        <a class="col-sm-6" href="<?php echo URLROOT ;?>/Eventos/apagar/<?php echo $dados['evento']->id;?>">
                            <button class="btn-admin btn-outline-danger">
                                Eliminar
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </div>-->

          <!-- script -->
        <script src="<?php echo URLROOT; ?>/public/admin/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo URLROOT; ?>/public/admin/js/sb-admin-2.min.js"></script>
        <script src="<?php echo URLROOT; ?>/public/admin/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="<?php echo URLROOT; ?>/public/admin/popper.1.14.6/popper.min.js"></script>
        <script src="<?php echo URLROOT; ?>/public/admin/bootstrap.4.2.1/bootstrap.min.js"></script>
        <script src="<?php echo URLROOT; ?>/public/admin/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo URLROOT; ?>/public/admin/js/wow.min.js"></script>
        <script src="<?php echo URLROOT; ?>/public/admin/js/waypoints.min.js"></script>
        <script src="<?php echo URLROOT; ?>/public/admin/js/scripts.js"></script>
        <script src="<?php echo URLROOT; ?>/public/admin/js/validacao.js"></script>
        <script src="<?php echo URLROOT; ?>/public/admin/js/baguetteBox.min.js"></script>
        <script src="<?php echo URLROOT; ?>/public/admin/js/dataTables.bootstrap4.js"></script>
        <script src="<?php echo URLROOT; ?>/public/admin/js/jquery.dataTables.js"></script>
        <script src="<?php echo URLROOT; ?>/public/admin/fontawesome-free/js/fontawesome.min.js"></script>
        <!--Tabelas-->
        <script src="<?php echo URLROOT; ?>/public/admin/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo URLROOT; ?>/public/admin/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo URLROOT; ?>/public/admin/demo/datatables-demo.js"></script>


        <script>
            baguetteBox.run('.tz-gallery');
        </script>


</body>
</html>