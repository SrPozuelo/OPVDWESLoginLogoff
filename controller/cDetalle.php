<?php
    /**
    * @author: Óscar Pozuelo
    * @since: 30/04/2026
    * @description: Controlador de Detalle.
    */
    // Se comprueba si el botón "volver" ha sido pulsado.
    if(isset($_REQUEST['Volver'])){
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='inicioPrivado';
        header('Location: indexLoginLogoff.php');
        exit;
    }
    ob_start();            //Se abre el buffer.
    phpinfo();             //Se ejecuta la función y se guarda en memoria
    $pInfo=ob_get_clean(); //Se obtiene el contenido y se limpia el buffer
    $avDetalle=[
        'Session' => $_SESSION,
        'Cookie'  => $_COOKIE,
        'Server'  => $_SERVER,
        'Request' => $_REQUEST,
        'Get'     => $_GET,
        'Post'    => $_POST,
        'Files'   => $_FILES,
        'Env'     => $_ENV,
        'phpInfo' => $pInfo
    ];
    require_once $View['layout'];
?>