<?php
    // lister les utilisateurs
    function user_model_list() {
        require(CONNEX_DIR);
        $sql = "SELECT * FROM user";
        $result = mysqli_query($con, $sql);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($con);
        return $result;
    }

    // creer un nouvel utilisateur
    function user_model_insert($request) {
        require(CONNEX_DIR);
        foreach($request as $key => $value){
            $$key = mysqli_real_escape_string($con, $value);
        }
        $password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO user (name, username, password, birthday) VALUES ('$name', '$username', '$password', '$birthday')";
        mysqli_query($con, $sql);
        mysqli_close($con);
    }

    // se connecter
    function user_model_login($request) {
        $message = null;
        if(isset($request['msg'])) {
            $msg = $request['msg'];
            if($msg == "errusername") {
                $message = "Vérifiez le nom d'utilisateur";
            } else if($msg == "errpassword") {
                $message = "Vérifiez le mot de passe";
            } else if($msg == "logout") {
                $message = "Déconnexion.";
            } else {
                $message = null;
            }
        }
        return $message;
    }

    // verifier l'authentification
    function user_model_authentificate($request) {
        session_start();
        require(CONNEX_DIR);
        foreach($request as $key => $value) {
            $$key = mysqli_real_escape_string($con, $value);
        }
        $sql = "SELECT * FROM user WHERE username = '$username';";
        $result = mysqli_query($con, $sql);

        $count = mysqli_num_rows($result);
        if($count == 1) {
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $dbpassword = $user['password'];

            if(password_verify($password, $dbpassword)) {
                $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);
                $_SESSION['id'] = $user['userId'];
                $_SESSION['nom'] = $user['name'];
                $_SESSION['username'] = $user['username'];
                header("Location: ?module=forum&action=index");
            } else {
                header("Location: ?module=user&action=login&msg=errpassword");
            }
        } else {
            header("Location: ?module=user&action=login&msg=errusername");
        }
        mysqli_close($con);
    }

    // se deconnecter
    function user_model_logout() {
        session_start();
        session_destroy();
        return $_SESSION;
    }
?>

