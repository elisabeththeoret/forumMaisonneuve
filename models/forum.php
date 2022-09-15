<?php
    // lister les articles
    function forum_model_list() {
        require(CONNEX_DIR);
        $sql = "SELECT forumTitre, forumArticle, forumDate, username FROM forum INNER JOIN user ON userId = forumUserId ORDER BY forumDate DESC";
        $result = mysqli_query($con, $sql);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($con);
        return $result;
    }

    // lister les articles par utilisateur
    function forum_model_listbyuser() {
        require(CONNEX_DIR);
        $sql = "SELECT * FROM forum WHERE forumUserId = ".$_SESSION["id"];
        $result = mysqli_query($con, $sql);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($con);
        return $result;
    }

    // ajouter un nouvel article
    function forum_model_insert($request) {
        require(CONNEX_DIR);
        foreach($request as $key => $value){
            $$key = mysqli_real_escape_string($con, $value);
        }
        $sql = "INSERT INTO forum (forumTitre, forumArticle, forumDate, forumUserId) VALUES ('$forumTitre', '$forumArticle', '$forumDate', '$forumUserId')";
        mysqli_query($con, $sql);
        mysqli_close($con);
    }

    // modifier un article
    function forum_model_edit($request) {
        require(CONNEX_DIR);
        foreach($request as $key => $value){
            $$key = mysqli_real_escape_string($con, $value);
        }
        $sql = "SELECT * FROM forum WHERE forumId = '$id'";
        $result = mysqli_query($con, $sql);
        $result = mysqli_fetch_assoc($result);
        mysqli_close($con);
        return $result;
    }

    // mettre a jour un article
    function forum_model_update($request) {
        require(CONNEX_DIR);
        foreach($request as $key => $value){
            $$key = mysqli_real_escape_string($con, $value);
        }
        $sql = "UPDATE forum SET forumTitre = '$forumTitre', forumArticle = '$forumArticle' WHERE forumId = '$forumId'";
        mysqli_query($con, $sql);
        mysqli_close($con);
    }

    // supprimer un article
    function forum_model_delete($request) {
        require(CONNEX_DIR);
        foreach($request as $key => $value) {
            $$key = mysqli_real_escape_string($con, $value);
        }
        $sql = "DELETE FROM forum WHERE forumId = '$forumId'";
        mysqli_query($con, $sql);
        mysqli_close($con);
    }
?>

