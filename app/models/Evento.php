<?php

class Evento{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getEventos(){
        $this->db->query('SELECT *,
                            eventos.id as eventosId,
                            usuario.id as usuarioId,
                            eventos.data_criacao as eventoCriacao,
                            usuario.data_criacao as usuarioCriacao,
                            eventos.img1 as eventoImg,
                            eventos.img2 as eventoImg2
                            FROM eventos
                            INNER JOIN usuario
                            ON eventos.usuario_id = usuario.id
                            ORDER BY eventos.data_criacao DESC');
        $resultado = $this->db->resultaSet();
        return $resultado;
    }
    public function getEventos2(){
        $this->db->query('SELECT *,
                            eventos.id as eventosId,
                            usuario.id as usuarioId,
                            eventos.data_criacao as eventoCriacao,
                            usuario.data_criacao as usuarioCriacao,
                            eventos.img1 as eventoImg,
                            eventos.img2 as eventoImg2
                            FROM eventos
                            INNER JOIN usuario
                            ON eventos.usuario_id = usuario.id
                            ORDER BY eventos.data_criacao DESC LIMIT 6');
        $resultado = $this->db->resultaSet();
        return $resultado;
    }
    /**
     * public function getImagem(){
        $this->db->query('SELECT * FROM galeria');
        $resultado = $this->db->resultaSet();
        return $resultado;
    }*/

    //ADD EVENTO
    public function addEvento($dados){
        $this->db->query('INSERT INTO eventos(usuario_id, titulo, cat, data,img1, img2,corpo)VALUES (:usuario_id,:titulo, :cat, :data,:img1, :img2,:corpo)');
        $this->db->bind(':usuario_id', $dados['usuario_id']);
        $this->db->bind(':titulo', $dados['titulo']);
        $this->db->bind(':cat', $dados['cat']);
        $this->db->bind(':data', $dados['data']);
        $this->db->bind(':img1', $dados['img1']);
        $this->db->bind(':img2', $dados['img2']);
        $this->db->bind(':corpo', $dados['corpo']);
        if ($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    //PEGA EVENTO PELO ID
    public function pegaEventoId($id){
        $this->db->query('SELECT * FROM eventos WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->unico();
        return $row;
    }

    //ACTUALIZAR EVENTOS
    public function updateEvento($dados){
        $this->db->query('UPDATE eventos SET titulo = :titulo,  cat =:cat, data =:data, img1=:img1, img2=:img2,corpo = :corpo WHERE id = :id');
        $this->db->bind(':id', $dados['id']);
        $this->db->bind(':titulo', $dados['titulo']);
        $this->db->bind(':corpo', $dados['corpo']);
        $this->db->bind(':cat', $dados['cat']);
        $this->db->bind(':data', $dados['data']);
        $this->db->bind(':img1', $dados['img1']);
        $this->db->bind(':img2', $dados['img2']);
        $this->db->bind(':corpo', $dados['corpo']);

        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    //APAGAR EVENTOS
    public function apagaEvento($id){
        $this->db->query('DELETE FROM eventos WHERE id = :id');
        $this->db->bind(':id', $id);
        if ($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}