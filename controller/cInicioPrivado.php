<?php
    if(empty($_SESSION['usuarioOPVDWESLoginLogoff'])){
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='inicioPublico';
        header('Location: indexLoginLogoff.php');
        exit;
    }
    //Se comprueba si el botón "detalles" ha sido pulsado.
    if(isset($_REQUEST['Detalles'])){
        //Código que se ejecuta si el botón "Detalles" fue pulsado.
        $_SESSION['PaginaAnterior']=$_SESSION['PaginaEnCurso'];
        $_SESSION['PaginaEnCurso']='detalles';
        header('Location: indexLoginLogoff.php');
        exit;
    }
    //Se comprueba si el botón "Cerrar sesion" ha sido pulsado.
    if(isset($_REQUEST['cerrarSesion'])) {
         //Código que se ejecuta si el botón "Cerrar sesion" fue pulsado.
        $_SESSION['PaginaAnterior']=$_SESSION['paginaEnCurso'];
        $_SESSION['PaginaEnCurso']='inicioPublico';
        header('Location: indexLoginLogoff.php');
        exit;
    }
    //Se crea un array con los datos del usuario para pasarlos a la vista
    $avInicioPrivado = [
        'DescUsuario'                     => $_SESSION['usuarioOPVDWESLoginLogoff']->getDescUsuario(),
        'NumAccesos'                      => $_SESSION['usuarioOPVDWESLoginLogoff']->getNumAccesos(),
        'FechaHoraUltimaConexionAnterior' => $_SESSION['usuarioOPVDWESLoginLogoff']->getFechaHoraUltimaConexionAnterior(),
        'Inicial'                         => $_SESSION['usuarioOPVDWESLoginLogoff']->getInicial(),
        //Se determina el idioma (si no hubiera cookie, que sea 'es')
        'idioma'                          => $_COOKIE['Idioma'] ?? 'es'
    ];
    require_once $View['layout'];
?>