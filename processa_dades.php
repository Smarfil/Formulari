<?php
     
    // Text
    if(empty($_REQUEST['nombre'])){
        return false;
    }else if(!preg_match("/^[a-zA-Z]*$/",$_REQUEST['nombre'])){
        echo "<font color='red'>Solo se permiten letras, mayúsculas y minúsculas</font><br>";
    }else{
        echo "<span style='font-weight:bold'>Nombre: </span>".$_REQUEST['nombre']."<br>";
    }

    // Email
    if(empty($_REQUEST['email'])){
        return false;
    }else if(!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
        echo "<br><font color='red'>Formato de email inválido.</font><br>";
    }else{
        echo "<br><span style='font-weight:bold'>Email: </span>".$_REQUEST['email']."<br>";
    }

    // Radio
    if(isset($_REQUEST['sexo'])){
        echo "<br><span style='font-weight:bold'>Sexo: </span>".$_REQUEST['sexo']."<br>";
    }

    // Checkbox
    if(isset($_REQUEST['genero'])){

        $separador = "";

        echo "<br><span style='font-weight:bold'>Género/s preferidos: </span>";

        foreach ($_REQUEST['genero'] as $checkbox) {
            
            echo $separador . $checkbox;
            $separador = ", ";
        }

        echo "<br>";

    }

    // Select
    if(!empty($_REQUEST['cine'])){
        echo "<br><span style='font-weight:bold'>Voy al cine a menudo: </span>".$_REQUEST['cine']."<br>";
    }

    // Text Area
    if(!empty($_REQUEST['comentario'])){
        echo "<br><span style='font-weight:bold'>Comentario: </span>".$_REQUEST['comentario']."<br>";
    }

?>