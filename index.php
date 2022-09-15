<?php
    // importer les fichiers
    require_once('config/config.php');
    require_once('lib/core.php');
    require_once('lib/checkSession.php');
    check_session();

    // verifier le module et l'action
    $module = isset($_REQUEST['module'])?safe($_REQUEST['module']):$config['default_module'];
    $action = isset($_REQUEST['action'])?safe($_REQUEST['action']):$config['default_action'];

    // trouver la fonction par le controller ($module)
    $controller_file = 'controllers/'.ucfirst($module).'Controller.php';
    if(!file_exists($controller_file)) {
        trigger_error('Invalid Controller');
        exit;
    }
    require_once($controller_file);

    // ecrire la fonction
    $function = strtolower($module).'_controller_'.$action;
    if(!function_exists($function)) {
        trigger_error('Invalid Controller Action');
        exit;
    }

    // appeler la fonction, envoyer les données
    call_user_func($function, $_REQUEST);
?>

