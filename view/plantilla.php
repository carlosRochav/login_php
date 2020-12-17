<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- ESTILO ->-->
   <style>


body{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    background: #EEDBD7;
}
       
.list{    
    list-style: none;
    margin:0;
    padding:0;
    background: #776966;
    border-radius: 10px;
    overflow: auto;
   
}

.list li{     
    float: left;
}

.list li a{
    display: block;
    padding: 15px 20px;
    text-decoration: none;
    color:white;
    font-size: 20px;
}
.list li a:hover{
   background: white;
   color:#776966;
}


    </style>
    <!--ESTILO-->
    <title>Login</title>
    <nav class="inicio">
        <ul class="list">
            <li><a href="index.php?pagina=inicio">Inicio</a></li>
            <li><a href="index.php?pagina=registro">Registrarse</a></li>
            <li><a href="index.php?pagina=ingreso">Ingresar</a></li>
            <li><a href="index.php?pagina=table">Tabla</a></li>
            <li><a href="index.php?pagina=salir">Salir</a></li>
            <li><a href="index.php?pagina=sorpresa">Sorpresa</a></li>
            <li><a href="index.php?pagina=bot">botchat</a></li>
        </ul>
    </nav>

    <?php

        if(isset($_GET['pagina'])){

            if($_GET['pagina']=="inicio" || 
            $_GET['pagina']=="registro" 
            || $_GET['pagina']=="ingreso"
            || $_GET['pagina']=="salir"
            || $_GET['pagina']=="sorpresa"
            || $_GET['pagina']=="table"
            || $_GET['pagina']=="bot")
                
            include "paginas/".$_GET["pagina"].".php";
        }
        else
            echo"No paso la vadilacion";
    ?>
    
</head>
<body>
    
</body>
</html>