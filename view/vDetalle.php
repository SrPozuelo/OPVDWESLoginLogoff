<header class="cabecera-principal">
    <div class="contenido-cabecera">
        <div class="identidad">
            <a href="../index.html" style="text-decoration:none;">
                <div class="logo-iniciales">ÓS</div>
            </a>
            <h1>Óscar Pozuelo Villamandos</h1>
        </div>
        <div class="curso-badge" style="background-color: #777BB4; color: white;">
            Login Logoff
        </div>
        <form action="" method="post" id="FormularioSesion">
            <button name="Volver" id="Sesion"><span>VOLVER</span></button>
        </form>
    </div>
</header>
<main id="contenedor">  
    <h2 id="titulo">DETALLES:</h2>
    <?php
        echo('<h4>Contenido de la variable $_SESSION:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($_SESSION)){
                    foreach($_SESSION AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_SESSION['.$sVariable.']</td>');
                            echo('<td>');
                                foreach($sResultado AS $sVar => $sResul){
                                    if($sVar=='FechaHoraUltimaConexionAnterior' OR $sVar=='FechaHoraUltimaConexion'){
                                        $oFecha=new DateTime($sResul);
                                        echo($sVar.' => '.$oFecha->format("d-m-Y H:i:s").'<br>');
                                    }
                                    else{
                                        echo($sVar.' => '.$sResul.'<br>');
                                    }
                                }
                            echo('</td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_SESSION está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
    <?php
        echo('<h4>Contenido de la variable $_COOKIE:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($_COOKIE)){
                    foreach($_COOKIE AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_COOKIE['.$sVariable.']</td>');
                            echo('<td>'.$sResultado.'</td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_COOKIE está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
    <?php
        echo('<h4>Contenido de la variable $_SERVER:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($_SERVER)){
                    foreach($_SERVER AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_SERVER['.$sVariable.']</td>');
                            echo('<td>'.$sResultado.'</td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_SERVER está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
    <?php
        echo('<h4>Contenido de la variable $_REQUEST:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($_REQUEST)){
                    foreach($_REQUEST AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_REQUEST['.$sVariable.']</td>');
                            echo('<td>'.$sResultado.'</td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_REQUEST está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
    <?php
        echo('<h4>Contenido de la variable $_GET:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($_GET)){
                    foreach($_GET AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_GET['.$sVariable.']</td>');
                            echo('<td>'.$sResultado.'</td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_GET está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
    <?php
        echo('<h4>Contenido de la variable $_POST:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($_POST)){
                    foreach($_POST AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_POST['.$sVariable.']</td>');
                            echo('<td>'.$sResultado.'</td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_POST está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
    <?php
        echo('<h4>Contenido de la variable $_FILES:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($_FILES)){
                    foreach($_FILES AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_FILES['.$sVariable.']</td>');
                            echo('<td>'.$sResultado.'</td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_FILES está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
    <?php
        echo('<h4>Contenido de la variable $_ENV:</h4>');
    ?>
    <table class="TablaPHP">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($_ENV)){
                    foreach($_ENV AS $sVariable => $sResultado){
                        echo("<tr>");
                            echo('<td>$_ENV['.$sVariable.']</td>');
                            echo('<td>'.$sResultado.'</td>');
                        echo("</tr>");
                    }
                }
                else{
                    echo('<tr><td class="centrado" colspan="2">La variable $_ENV está vacía.</td></tr>');
                }
            ?>
        </tbody>
    </table>
</main>