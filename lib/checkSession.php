<?php
    function check_session() {
        if(!isset($_SESSION)){
            session_start();
        }
        if(isset($_SESSION['fingerPrint']) && $_SESSION['fingerPrint'] == md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'])) {
            return;
        } else {
            $_SESSION = [];
        }
    }
?>

