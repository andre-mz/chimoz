    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar">

            <?php if(isset($_SESSION['usuario_id'])) : ?>
                <!-- Sidebar - icon -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo URLROOT;?>">
                    <img src="<?php echo URLROOT?>/public/admin/img/chimoz.png">
                </a>

                <!-- divisor -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Menu Inicial -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo URLROOT;?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>
                            Menu Inicial
                        </span>
                    </a>
                </li>

                <!-- DIVISOR -->
                <hr class="sidebar-divider">

                <!-- INTERFACE/MENU LATERAL -->
                <div class="sidebar-heading">
                    Interface
                </div>

                <!-- Nav Item - collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fa fa-text-height"></i>
                        <span>Eventos</span>
                    </a>
                    <div id="collapseTwo" class="collapse nav_intem" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="py-2 collapse-inner rounded menu">
                            <a class="collapse-item" href="<?php echo URLROOT;?>/Eventos/todos">Todos</a>
                            <a class="collapse-item" href="<?php echo URLROOT;?>/Eventos/anucio">Anucio</a>
                            <a class="collapse-item" href="<?php echo URLROOT;?>/Eventos/show">Eventos</a>
                            <a class="collapse-item" href="<?php echo URLROOT;?>/Eventos/noticia">Noticias</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" data-toggle="collapse" data-target="#colapseComp" aria-expanded="true" aria-controls="colapseComp">
                        <i class="fa fa-toolbox"></i>
                        <span>Componentes</span>
                    </a>
                    <div id="colapseComp" class="collapse nav_intem" aria-labelledby="headingcomp" data-parent="#accordionSidebar">
                        <div class="py-2 collapse-inner rounded menu">
                            <a class="collapse-item" href="<?php echo URLROOT;?>/Eventos/calendario">Calendario</a>
                            <a class="collapse-item" href="<?php echo URLROOT;?>/Eventos/galeria">Galeria</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Informacoes Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>
                            Informacoes
                        </span>
                    </a>

                    <div id="collapseUtilities" class="collapse nav_intem" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="py-2 collapse-inner rounded menu">

                            <a class="collapse-item" href="#">
                                Sobre o Sistema
                            </a>
                            <a class="collapse-item" href="#">
                                Quem Somos
                            </a>
                            <a class="collapse-item" href="#">
                                Metas
                            </a>
                        </div>
                    </div>
                </li>

                <!-- DIVISOR -->
                <hr class="sidebar-divider">

                <!--ADMIN COMPONENTES-->
                <div class="sidebar-heading">
                    Extra
                </div>

                <!-- Nav Item - Graficos -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>
                            Graficos
                        </span>
                    </a>
                </li>

                <!-- Nav Item - TABELAS -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT?>/Eventos/tabelas">
                        <i class="fas fa-fw fa-table"></i>
                        <span>
                            Tabelas
                        </span>
                    </a>
                </li>

                <!-- Divisor -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar ICON TOGGLER (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0 sidebar-menu-Toggle" id="sidebarToggle"></button>
                </div>
            </ul>

            <!-- FIM DO SIDEBAR -->


            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- MENU top-->
                <div id="content">

                    <!-- NAVBAT TOP -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars menu-bar-toggler"></i>
                        </button>

                        <!-- Navbar top pesquisar -->
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post" action="<?php echo URLROOT;?>/Eventos/busca">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small pesquisar" placeholder="Pesquisar..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-1 btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Navbar Top -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Pesquisar Dropdown -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small pesquisar" placeholder="Pesquisar..." aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-1 btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>


                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - Usuario informacao -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="color: white !important;"><?php echo $_SESSION['nome'] ;?> </span>
                                    <img class="img-profile rounded-circle" src="<?php echo URLROOT?>/public/admin/img/phone.png">
                                </a>

                                <!-- Dropdown - Usuario informacao -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="<?php echo URLROOT; ?>/paginas/perfil">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 icon-usuario"></i>
                                        Perfil
                                    </a>
                                    <a class="dropdown-item" href="<?php echo URLROOT; ?>/paginas/sobre">
                                        <i class="fas fa-info fa-sm fa-fw mr-2 icon-usuario"></i>
                                        Sobre
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 icon-usuario"></i>
                                        Sair
                                    </a>
                                </div>
                            </li>
                        </ul>
                    <?php endif ;?>
                </nav>

                <!--CONTEUDO DO SITE ADMIN-->
                <div class="container-fluid mt-2">




