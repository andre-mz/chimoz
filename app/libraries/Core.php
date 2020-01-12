<?php
  /*
   * App Core Class
   * Criar URL e ler o core controller
   * URL FORMAT - /controller/method/params
   */
  class Core {
        protected $currentController = 'Pagina';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
            $url = $this->getUrl();

            // procura no controller pelo primeiro valor da url
            if(file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
                //Se existe, colcoar como controller
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            }

            // Require o controller
            require_once '../app/controllers/'. $this->currentController . '.php';

            // Instancia o controller class
            $this->currentController = new $this->currentController;

            // Checa a segunda parte do url
            if(isset($url[1])){
                // Checa se o method existe no controller
                if(method_exists($this->currentController, $url[1])){
                  $this->currentMethod = $url[1];
                  unset($url[1]);
                }
            }

            // Get params
            $this->params = $url ? array_values($url) : [];
            // Chama o callback com array do params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }

        public function getUrl(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
        }
  }
