<?php
  /*
   * Base Controller
   * Ler os models e as views
   */
  class Controller {
      // Le o model
      public function model($model){
          // Require o ficheiro o model
          require_once '../app/models/' . $model . '.php';
          // instancia o model
          return new $model();
      }
      // view
      public function view($view, $dados = []){
          // checa se a view existe
          if(file_exists('../app/views/' . $view . '.php')){
            require_once '../app/views/' . $view . '.php';
          } else {
            // se a view nao existe
            die('A pagina nao existe');
          }
      }
  }