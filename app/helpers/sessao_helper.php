<?php
    session_start();
    function flash($nome ='', $message ='', $class = 'alert alert-success'){
        if (empty($nome)){
            if (!empty($message) && (empty($_SESSION[$nome]))){
                if (!empty($_SESSION[$nome])){
                    unset($_SESSION[$nome]);
                }
                if (!empty($_SESSION[$nome. '_class'])) {
                    unset($_SESSION[$nome]);
                }
                $_SESSION[$nome] = $message;
                $_SESSION[$nome . '_class'] = $class;
            }
            elseif(empty($message) && !empty($_SESSION[$nome])){
                $class = !empty($_SESSION[$nome. '_class']) ? $_SESSION[$nome. '_class'] : '';
                echo '<div class="'.$class .'" id="msg-flash">' . $_SESSION[$nome]. '</div>';
                unset($_SESSION[$nome]);
                unset($_SESSION[$nome . '_class']);
            }
        }
    }
    function estaLogado(){
        if(isset($_SESSION['usuario_id'])){
            return true;
        }else {
            return false;
        }
    }
    function estaLogadoAdm(){
        if(isset($_SESSION['adm_id'])){
            return true;
        }else {
            return false;
        }
    }
