<?php
    require APPROOT . '/views/inc/header.php';
?>
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-sm-10">
                    <h3><i class="fa fa-angle-double-right mb-3"></i>
                        Galeria
                    </h3>

                </div>
            </div>
        </section>
    </section>
    <hr style="margin-top: -2.4%">

    <?php

        $host = 'localhost';
        $user= 'root';
        $pass =  '';
        $dbname =  'chimoeventos';
        $con = mysqli_connect($host,$user,$pass,$dbname);
        if (isset($_POST['add'])){
            $filename = $_FILES['file']['name'];
            $target_dir = 'imagem';

            if ($filename != ''){
                $target_file = $target_dir.basename($_FILES['file']['name']);
                //extensao do ficheiros
                $extension =    strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                //validar extensao do ficheiro
                $extension_arr = array("jpg", "jpeg", "png", "gif");
                //checa se a extensao existe
                if (in_array($extension, $extension_arr)){
                    //se existe o ficheiro, deve converter para base64
                    $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
                    $image = "data::image/".$extension.";base64,".$image_base64;
                    //guardar ficheiros na pasta imagem.
                    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
                        //insere na tabela galeria
                        $quey = "INSERT INTO geleria (name, imagem) VALUES('".$filename."','".$image."')";
                        mysqli_query($con,$quey);
                    }
                }
            }
        }
    ?>
    <?php
    $host = 'localhost';
    $user= 'root';
    $pass =  '';
    $dbname =  'chimoeventos';
    $con = mysqli_connect($host,$user,$pass,$dbname);

    $image_sql = "SELECT * FROM galeria ORDER BY id DESC";
    $result = mysqli_query($con,$image_sql);

    $row = mysqli_fetch_array($result);
    $filename = $row['name'];
    $image = $row['imagem'];

    ?>

    <div class="form-panel">
        <form class="form-horizontal style-form mt-3" method="POST" enctype="multipart/form-data" action="" style="padding: 1rem">

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-12">
                        <input type="file" name="file" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" name="add" class="btn btn-outline-success btn-block pull-left" value="Adicionar">
                    </div>
                </div>
            </div>
        </form>
    </div>



    <div class="tz-gallery">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <a class="lightbox" href="<? $image?>">
                    <img src="<?php $image?>" alt="Park">
                </a>
            </div>
        </div>
    </div>





    <hr style="margin-top: 5%; margin-bottom: 1%" >
    <div class="col-md-12 d-flex justify-content-center mb-5">
        <p type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">Videos</p>
    </div>

    <!-- VIDEOS--
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                    <div class="modal-content">

                        <--Body--
                        <div class="modal-body mb-0 p-0">
                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                        allowfullscreen></iframe>
                            </div>
                        </div>

                        <!-Footer--
                        <div class="modal-footer justify-content-center">
                            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">
                                Fechar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <a>
                <img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video"
                    data-toggle="modal" data-target="#modal1">
            </a>
        </div>
    </div>-->

<?php
    require APPROOT . '/views/inc/footer.php';
?>
<!---GALERIA-->
