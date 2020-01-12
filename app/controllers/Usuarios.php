<?php


class Usuarios extends Controller {

    public function __construct(){
        $this->usuarioModel = $this->model('Usuario');
    }

    /**
     * Registrar
     */
    public function registro(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Processa o formulario
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $dados =[
                'nome' => trim($_POST['nome']),
                'apelido' => trim($_POST['apelido']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirma_password' => trim($_POST['confirma_password']),

                'nome_erro' => '',
                'apelido_erro' => '',
                'email_erro' => '',
                'password_erro' => '',
                'confirma_password_erro' => ''
            ];

            /**
             * VALIDACACO
             */
            //validar nome
            if (empty($dados['nome'])){
                $dados['nome_erro'] = 'Por favor insira seu nome';
            }

            //apelido
            if (empty($dados['apelido'])){
                $dados['apelido_erro'] = 'Por favor insira seu apelido';
            }

            //email
            if (empty($dados['email'])){
                $dados['email_erro'] = 'Por favor insira seu email';
            }
            else{
                //checa se o email e valido
                if ($this->usuarioModel->econtraUsuarioPorEmail($dados['email'])){
                    $dados['email_erro'] = 'Email ja em uso';
                }
            }

            //password
            if (empty($dados['password'])){
                $dados['password_erro'] = 'Por favor insira a sua senha';
            }
            elseif(strlen($dados['password']) < 8){
                //checa o tamanho do password
                    $dados['password_erro'] = 'A sua senha tem que 8 caracteres no minimo';
            }

            //confirmar o password
            if (empty($dados['confirma_password'])){
                $dados['confirma_password_erro'] = 'Por favor confirma a sua senha';
            }
            else{
                //verificar os passwords sao mesmos
                if ($dados['confirma_password'] != $dados['password']){
                    $dados['confirma_password_erro'] = 'A senha nao corresponde';
                }
            }

            //verificar se erros nao estao vazio
            if (empty($dados['nome_erro']) &&
                empty($dados['apelido_erro']) &&
                empty($dados['email_erro']) &&
                empty($dados['password_erro']) &&
                empty($dados['confirma_password_erro'])){

                $dados['password'] = password_hash($dados['password'], PASSWORD_DEFAULT);

                if ($this->usuarioModel->registro($dados)){
                    flash('register_success', 'Registrado com sucesso');
                    redirect('Usuarios/login');
                }
            }
            else {
                $this->view('usuario/registro', $dados);
            }
        }
        //o erros sao passados a parir desse array
        else{
            $dados =[
                'nome' => '',
                'apelido' => '',
                'email' => '',
                'password' => '',
                'confirma_password' => '',

                'nome_erro' => '',
                'apelido_erro' => '',
                'email_erro' => '',
                'password_erro' =>'',
                'confirma_password_erro' => ''
            ];
            //le a view
            $this->view('usuario/registro', $dados);
        }
    }
    //login
    public function login(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            //processa o formulario
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $dados = [
                'email' => trim($_POST ['email']),
                'password' => trim($_POST['password']),

                'email_erro' => '',
                'password_erro' => '',
            ];

            //validar email
            if(empty($dados['email'])){
                $dados['email_erro'] = 'Por favor insira o email';
            }

            else{

                if($this->usuarioModel->econtraUsuarioPorEmail($dados['email'])){
                    //user found
                }

                else{
                    $dados['email_erro'] = 'Usuario nao econtrado';
                }
            }

            //validar password
            if (empty($dados['password'])){
                $dados['password_erro'] = 'Por favor insira su senha';
            }
            elseif (strlen($dados['password']) < 8){
                $dados['password_erro'] = 'Password tem que ter 8 caracteres no minimo';
            }

            //garante que o erro esteja vazio
            if (empty($dados['email_erro']) && (empty($dados['password_erro']))){
                $loggedInUsuario = $this->usuarioModel->login($dados['email'], $dados['password']);
                if ($loggedInUsuario){
                    //cria sessao
                    $this->criarUsuarioSessao($loggedInUsuario);
                }
                else{
                    $dados['password_erro'] = 'Sua senha esta incorecta';
                    $this->view('usuario/login', $dados);
                }
            }
            else{
                $this->view('usuario/login', $dados);
            }
        }
        else{
            $dados =[
                'email' => '',
                'password' => '',
                'email_erro' => '',
                'password_erro' => ''
            ];
            $this->view('usuario/login', $dados);
        }
    }

    //configuracao da variavel da sessao dos usuarios
    public function criarUsuarioSessao($usuario){
        $_SESSION['usuario_id'] = $usuario->id;
        $_SESSION['nome'] = $usuario->nome;
        $_SESSION['email'] = $usuario->email;
        redirect('Eventos/index');
    }

    //logout e destroy sessao
    public function logout(){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        session_destroy();
        redirect('paginas/index');
    }

    /**
     *AQUI AINDA ESTOU A CRIAR UMA PAGINA PARA O ADMINISTRADOR DO SISTEMA
     *
     *
     * ************ADMINISTRADOR**************************
     *
     *
     *
     *
     */

    public function registroAdm(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Processa o formulario
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $dados =[
                'nome' => trim($_POST['nome']),
                'apelido' => trim($_POST['apelido']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirma_password' => trim($_POST['confirma_password']),

                'nome_erro' => '',
                'apelido_erro' => '',
                'email_erro' => '',
                'password_erro' => '',
                'confirma_password_erro' => ''
            ];

            /**
             * VALIDACACO
             */
            //validar nome
            if (empty($dados['nome'])){
                $dados['nome_erro'] = 'Por favor insira seu nome';
            }

            //apelido
            if (empty($dados['apelido'])){
                $dados['apelido_erro'] = 'Por favor insira seu apelido';
            }

            //email
            if (empty($dados['email'])){
                $dados['email_erro'] = 'Por favor insira seu email';
            }
            else{
                //checa se o email e valido
                if ($this->usuarioModel->econtraAdmPorEmail($dados['email'])){
                    $dados['email_erro'] = 'Email ja em uso';
                }
            }

            //password
            if (empty($dados['password'])){
                $dados['password_erro'] = 'Por favor insira a sua senha';
            }
            elseif(strlen($dados['password']) < 8){
                //checa o tamanho do password
                $dados['password_erro'] = 'A sua senha tem que 8 caracteres no minimo';
            }

            //confirmar o password
            if (empty($dados['confirma_password'])){
                $dados['confirma_password_erro'] = 'Por favor confirma a sua senha';
            }
            else{
                //verificar os passwords sao mesmos
                if ($dados['confirma_password'] != $dados['password']){
                    $dados['confirma_password_erro'] = 'A senha nao corresponde';
                }
            }

            //verificar se erros nao estao vazio
            if (empty($dados['nome_erro']) &&
                empty($dados['apelido_erro']) &&
                empty($dados['email_erro']) &&
                empty($dados['password_erro']) &&
                empty($dados['confirma_password_erro'])){

                $dados['password'] = password_hash($dados['password'], PASSWORD_DEFAULT);

                if ($this->usuarioModel->registroAdm($dados)){
                    flash('register_success', 'Registrado com sucesso');
                    redirect('admin/index');
                }
            }
            else {
                $this->view('admin/index', $dados);
            }
        }
        //o erros sao passados a parir desse array
        else{
            $dados =[
                'nome' => '',
                'apelido' => '',
                'email' => '',
                'password' => '',
                'confirma_password' => '',

                'nome_erro' => '',
                'apelido_erro' => '',
                'email_erro' => '',
                'password_erro' =>'',
                'confirma_password_erro' => ''
            ];
            //le a view
            $this->view('admin/index', $dados);
        }
    }

    //login
    public function loginAdm(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $dadoAdm = [
                'email' => trim($_POST['nome']),
                'password' => trim($_POST['password']),

                'email_erro' => '',
                'password_erro' => ''
            ];
            if (empty($dados['email'])) {
                $dados['email_erro'] = 'Por favor insira o email';
            } else {

                if ($this->usuarioModel->econtraAdmPorEmail($dados['email'])) {
                    //user found
                } else {
                    $dados['email_erro'] = 'Usuario nao econtrado';
                }
            }
            //validar password
            if (empty($dados['password'])) {
                $dados['password_erro'] = 'Por favor insira sua senha';
            }
            elseif (strlen($dados['password']) < 8) {
                $dados['password_erro'] = 'Password tem que ter 8 caracteres no minimo';
            }
            //garante que o erro esteja vazio
            if (empty($dados['email_erro']) && (empty($dados['password_erro']))){
                $loggedInUsuario = $this->usuarioModel->loginAdm($dados['email'], $dados['password']);
                if ($loggedInUsuario){
                    //cria sessao
                    $this->criarUsuarioSessao($loggedInUsuario);
                }
                else{
                    $dados['password_erro'] = 'Sua senha esta incorecta';
                    $this->view('admin/index', $dados);
                }
            }
            else{
                $this->view('admin/index', $dados);
            }
        }
        else{
            $dados =[
                'email' => '',
                'password' => '',
                'email_erro' => '',
                'password_erro' => ''
            ];
            $this->view('admin/index', $dados);
        }

    }
}