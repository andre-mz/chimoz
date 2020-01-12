<?php
  class Pagina extends Controller{
      public function __construct(){
      }

      public function index(){
          if(estaLogado()){
              redirect('eventos');
          }
          $dados = [];
          $this->view('paginas/index', $dados);
      }

      public function indexAdmn(){
          if (estaLogadoAdm()){
              redirect('');
          }$dados = [];
          $this->view('paginas/index', $dados);
      }
  }