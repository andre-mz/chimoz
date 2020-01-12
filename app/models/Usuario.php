<?php
class Usuario{

    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    /**
     * Registrar um novo usuario
     */
    public function registro($dados){
        $this->db->query('INSERT INTO usuario(nome, apelido, email, password) VALUES(:nome, :apelido, :email, :password)');
        $this->db->bind(':nome', $dados['nome']);
        $this->db->bind(':apelido', $dados['apelido']);
        $this->db->bind(':email', $dados['email']);
        $this->db->bind(':password', $dados['password']);

        if ($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    /**
     * encontra o usuario pelo email
     */
    public function econtraUsuarioPorEmail($email){
        $this->db->query('SELECT * FROM usuario WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->unico();
        if ($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
    /**
     * Login
     */
    public function login($email, $password){
        $this->db->query('SELECT * FROM usuario where email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->unico();
        $hash_password = $row->password;

        if(password_verify($password, $hash_password)){
            return $row;
        }else{
            return false;
        }
    }
    /**
     * Pega usuarios pelo id
     */
    public function pegaUsuarioId($id){
        $this->db->query('SELECT * FROM usuario WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->unico();
        return $row;
    }
    /**
     *AQUI AINDA ESTOU A CRIAR UMA PAGINA PARA O ADMINISTRADOR DO SISTEMA
     *
     *
     *
     * ADMINISTRADOR
     *
     *
     *
     *
     */
    public function registroAdm($dados){
        $this->db->query('INSERT INTO admin(nome, apelido, email, password) VALUES(:nome, :apelido, :email, :password)');
        $this->db->bind(':nome', $dados['nome']);
        $this->db->bind(':apelido', $dados['apelido']);
        $this->db->bind(':email', $dados['email']);
        $this->db->bind(':password', $dados['password']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    /**
     * encontra o usuario pelo email
     */
    public function econtraAdmPorEmail($email){
        $this->db->query('SELECT * FROM admin WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->unico();
        if ($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
    /**
     * Login
     */
    public function loginAdm($email, $password){
        $this->db->query('SELECT * FROM admin where email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->unico();
        $hash_password = $row->password;

        if(password_verify($password, $hash_password)){
            return $row;
        }else{
            return false;
        }
    }
    /**
     * Pega usuarios pelo id
     */
    public function pegaAmdId($id){
        $this->db->query('SELECT * FROM admin WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->unico();
        return $row;
    }
}