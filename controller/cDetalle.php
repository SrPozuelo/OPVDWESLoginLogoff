<?php
    // Se comprueba si el botón "volver" ha sido pulsado.
    if(isset($_REQUEST['Volver'])){
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='inicioPrivado';
        header('Location: indexLoginLogoff.php');
        exit;
    }
    ob_start();            //Se abre el buffer.
    phpinfo();             //Se ejecuta la función y se guarda en memoria
    $pInfo=o_get_clean();  //Se obtiene el contenido y se limpia el buffer
    $avDetalle=[
        'Session' => $_SESSION,
        'Cookie'  => $_COOKIE,
        'Server'  => $_SERVER,
        'phpInfo' => $pInfo
    ]
?>