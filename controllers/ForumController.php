<?php
    // lister tous les articles
    function forum_controller_index() {
        check_session();
        require(MODEL_DIR.'/forum.php');
        $data = forum_model_list();
        render(VIEW_DIR.'/forum/index.php', $data);
    }

    // ecrire un nouvel article
    function forum_controller_create() {
        check_session();
        render(VIEW_DIR.'/forum/create.php');
    }

    // inserer un nouvel article
    function forum_controller_insert($request) {
        check_session();
        require(MODEL_DIR.'/forum.php');
        $data = forum_model_insert($request);
        header("Location: ?module=user&action=index");
    }

    // modifier un article
    function forum_controller_edit($request) {
        check_session();
        require(MODEL_DIR.'/forum.php');
        $data = forum_model_edit($request);
        render(VIEW_DIR.'/forum/edit.php', $data);
    }

    // mettre a jour un article
    function forum_controller_update($request) {
        require(MODEL_DIR.'/forum.php');
        $data = forum_model_update($request);
        header("Location: ?module=user&action=index");
    }

    // supprimer un article
    function forum_controller_delete($request) {
        check_session();
        require(MODEL_DIR.'/forum.php');
        $data = forum_model_delete($request);
        header("Location: ?module=user&action=index");
    }
?>

