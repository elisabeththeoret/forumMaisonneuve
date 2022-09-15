<?php
    // lister les articles par utilisateur
    function user_controller_index() {
        require(MODEL_DIR.'/forum.php');
        $data = forum_model_listbyuser();
        render(VIEW_DIR.'/user/index.php', $data);
    }

    // creer un nouvel utilisateur
    function user_controller_create() {
        render(VIEW_DIR.'/user/create.php');
    }

    // ajouter un nouvel utilisateur
    function user_controller_insert($request) {
        require(MODEL_DIR.'/user.php');
        user_model_insert($request);
        user_model_authentificate($request);
    }

    // se connecter
    function user_controller_login($request) {
        require(MODEL_DIR.'/user.php');
        $data = user_model_login($request);
        render(VIEW_DIR.'/user/login.php', $data);
    }

    // authentifier, verifier la connexion
    function user_controller_authentificate($request){
        require(MODEL_DIR.'/user.php');
        user_model_authentificate($request);
    }

    // se deconnecter
    function user_controller_logout() {
        require(MODEL_DIR.'/user.php');
        user_model_logout();
        header("Location: ?module=user&action=login&msg=logout");
    }
?>

