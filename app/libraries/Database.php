<?php
  /**
   * PDO Database Class
   * Conexao com a database
   * Criacao de prepared statements
   * Bind values
   * Retorna rows e resultados
   */
  class Database {
      private $host = DB_HOST;
      private $user = DB_USER;
      private $pass = DB_PASS;
      private $dbnome = DB_NAME;

      private $dbhelper;
      private $statemet;
      private $error;

      public function __construct(){
          // coloca DSN
          $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbnome;
          $opcao = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
          );

          // Criar instanica PDO
          try{
              $this->dbhelper = new PDO($dsn, $this->user, $this->pass, $opcao);
          }
          catch(PDOException $erro){
              $this->error = $erro->getMessage();
              echo $this->error;
          }
      }

      // Prepara o statment
      public function query($sql){
          $this->statemet = $this->dbhelper->prepare($sql);
      }

      // Bind values
      public function bind($param, $value, $tipo = null){
          if(is_null($tipo)){
              switch(true){
                  case is_int($value):
                      $tipo = PDO::PARAM_INT;
                  break;

                  case is_bool($value):
                      $tipo = PDO::PARAM_BOOL;
                  break;

                  case is_null($value):
                      $tipo = PDO::PARAM_NULL;
                  break;

                  default:
                      $tipo = PDO::PARAM_STR;
              }
          }
         $this->statemet->bindValue($param, $value, $tipo);
      }

      // Executa o statement
      public function execute(){
          return $this->statemet->execute();
      }

      // leva o resultado e coloca como array of objects
      public function resultaSet(){
          $this->execute();
          return $this->statemet->fetchAll(PDO::FETCH_OBJ);
      }

      //pega registros unicos como objectos
      public function unico(){
          $this->execute();
          return $this->statemet->fetch(PDO::FETCH_OBJ);
      }

      public function rowCount(){
          return $this->statemet->rowCount();
      }
  }