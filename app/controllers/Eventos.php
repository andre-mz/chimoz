<?php

class Eventos extends Controller {

    public function __construct(){
        if (!estaLogado()){
            redirect('usuario/login ');
        }
        //instancia as classes do model
        $this->postModel = $this->model('Evento');
        $this->userModel = $this->model('Usuario');
    }

    public function index(){
        $eventos = $this->postModel->getEventos2();
        $dados= [
            'eventos' => $eventos
        ];
        $this->view('eventos/index', $dados);
    }


    /**ADICIONAR EVENTOS*/
    public function adicionar(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $dados = [
                'titulo' => trim($_POST['titulo']),
                'cat' => trim($_POST['cat']),
                'data' => trim($_POST['data']),
                'img1' => trim($_POST['img1']),
                'img2' => trim($_POST['img2']),
                'corpo' => trim($_POST['corpo']),
                'usuario_id' => $_SESSION['usuario_id'],

                'titulo_erro' => '',
                'cat_erro' =>'',
                'data_erro' => '',
                'img1_erro' => '',
                'img2_erro' => '',
                'corpo_erro' => '',

            ];

            if(empty($dados['titulo'])){
                $dados['titulo_erro'] = 'Insira o titulo';
            }
            if(empty($dados['corpo'])){
                $dados['corpo_erro'] = 'Insira o conteudo';
            }elseif(strlen($dados['corpo']) < 400){
                //checa o tamanho do password
                $dados['corpo_erro'] = 'O Conteudo do texto e muito curto, 400 palavras no minimo';
            }
            if(empty($dados['cat'])){
                $dados['cat_erro'] = 'Seleciona uma categoria';
            }
            if(empty($dados['data'])){
                $dados['data_erro'] = 'Insira a data do evento';
            }
            if(empty($dados['img1'])){
                $dados['img1_erro'] = 'Insira a imagem do evento';
            }
            if(empty($dados['img2'])){
                $dados['img2_erro'] ='Insira a segunda imagem do evento';
            }

            if(empty($dados['titulo_erro']) && empty($dados['corpo_erro']) && empty($dados['cat_erro']) &&
                empty($dados['data_erro']) && empty($dados['img1_erro']) && empty($dados['img2_erro'])){
                if($this->postModel->addEvento($dados)){
                    flash('post_message', 'Adicionado com sucesso');
                    redirect('eventos');
                }else{
                    die('Algo deu Errado');
                }
                //le a view com error
            }else{
                $this->view('eventos/adicionar', $dados);
            }
        }else{
            $dados = [
                'titulo' => trim($_POST['titulo']),
                'cat' => trim($_POST['cat']),
                'data' => trim($_POST['data']),
                'img1' => trim($_POST['img1']),
                'img2' => trim($_POST['img2']),
                'corpo' => trim($_POST['corpo'])
            ];
            $this->view('eventos/adicionar', $dados);
        }
    }

    /**
     * Visualzar evento
     */
    public function visualizar($id){
        $evento = $this->postModel->pegaEventoId($id);
        $usuario = $this->userModel->pegaUsuarioId($evento->usuario_id);

        $dados = [
            'evento' => $evento,
            'usuario' => $usuario
        ];
        $this->view('eventos/visualizar', $dados);
    }


    public function editar($id){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $dados = [
                'id' => $id,

                'titulo' => trim($_POST['titulo']),
                'cat' => trim($_POST['cat']),
                'data' => trim($_POST['data']),
                'img1' => trim($_POST['img1']),
                'img2' => trim($_POST['img2']),
                'corpo' => trim($_POST['corpo']),
                'usuario_id' => $_SESSION['usuario_id'],

                'titulo_erro' => '',
                'cat_erro' =>'',
                'data_erro' => '',
                'img1_erro' => '',
                'img2_erro' => '',
                'corpo_erro' => '',
            ];

            //validar titulo
            if(empty($dados['titulo'])){
                $dados['titulo_erro'] = 'Insira o titulo';
            }
            //validar conteudo
            if(empty($dados['corpo'])){
                $dados['corpo_erro'] = 'Insira o conteudo';
            }elseif(strlen($dados['corpo']) < 400){
                //checa o tamanho do password
                $dados['corpo_erro'] = 'O Conteudo do texto e muito curto, 400 palavras no minimo';
            }
            if(empty($dados['cat'])){
                $dados['cat_erro'] = 'Seleciona uma categoria';
            }
            if(empty($dados['data'])){
                $dados['data_erro'] = 'Insira a data do evento';
            }
            if(empty($dados['img1'])){
                $dados['img1_erro'] = 'Insira a imagem do evento';
            }
            if(empty($dados['img2'])){
                $dados['img2_erro'] ='Insira a segunda imagem do evento';
            }

            //validatr erro
            if(empty($dados['titulo_erro']) && empty($dados['corpo_erro']) && empty($dados['cat_erro']) &&
                empty($dados['data_erro']) && empty($dados['img1_erro']) && empty($dados['img2_erro'])){
                if($this->postModel->updateEvento($dados)){
                    flash('post_message', 'Actualizado');
                    redirect('eventos');
                }else{
                    die('Algo deu Errado');
                }

                //ler vista do erro
            }else{
                $this->view('eventos/actualizar', $dados);
            }
        }
        else{
            //checa o usuario e chama o method a partir do modal
            $evento = $this->postModel->pegaEventoId($id);
            if($evento->usuario_id != $_SESSION['usuario_id']){
                redirect('eventos');
            }
            $dados = [
                'id' => $id,
                'titulo' => $evento->titulo,
                'corpo' => $evento->corpo
            ];

            $this->view('eventos/actualizar', $dados);
        }
    }

    //delete eventos
    public function apagar($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //chaca o usuario
            $evento = $this->postModel->pegaEventoId($id);
            if($evento->usuario_id != $_SESSION['usuario_id']){
                redirect('eventos');
            }

            //chama o method delete do model
            if($this->postModel->apagaEvento($id)){
                flash('post_message', 'Evento Removido');
                redirect('eventos');
            }else{
                die('Algo deu Errado');
            }
        }else{
            redirect('eventos');
        }
    }

    /**
     * LINKS DE ENDERECAMENTO
     */
    public function todos(){
        $eventos = $this->postModel->getEventos();
        $dados= [
            'eventos' => $eventos
        ];
        $this->view('eventos/todos', $dados);
    }

    //anucio
    public function anucio(){
        $anucio = $this->postModel->getEventos();
        $dados= [
            'eventos' => $anucio
        ];
        $this->view('eventos/anucio', $dados);
    }
    //show/festas
    public function show(){
        $eventos = $this->postModel->getEventos();
        $dados= [
            'eventos' => $eventos
        ];
        $this->view('eventos/show', $dados);
    }
    //noticia
    public function noticia(){
        $eventos = $this->postModel->getEventos();
        $dados= [
            'eventos' => $eventos
        ];
        $this->view('eventos/noticia', $dados);
    }
    //calendario
    public function calendario(){
        $eventos = $this->postModel->getEventos();
        $dados= [
            'eventos' => $eventos
        ];
        $this->view('eventos/calendario', $dados);
    }
    //tabelas
    public function tabelas(){
        $eventos = $this->postModel->getEventos();
        $dados =[
            'eventos' => $eventos
        ];
        $this->view('eventos/tabelas', $dados);
    }
    //galeria
    public function galeria(){
        $eventos = $this->postModel->getEventos();
        $dados =[
            'eventos' => $eventos
        ];
        $this->view('eventos/galeria', $dados);
    }
}