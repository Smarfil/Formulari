<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    //Processar les dades

    // Definir el directorio en el que queremos guardar el archivo a subir
    $directorio = "/../home/marfils/html/M07/UF1/A3/uploadfile/";
    $directorioNombre = $directorio . basename($_FILES['fichero_usuario']['name']);
    $nombreArchivo = basename($_FILES['fichero_usuario']['name']);
    $uploadError = "";

    // Definir la ruta más nombre para la descarga del archivo subido
    $directorioDescarga = "uploadfile/" . $nombreArchivo;

    // Crear div
    echo "<div style=\"margin: 30px 10%;\">";

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

    // Upload file
    if(move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $directorioNombre)){ // Mover el archivo de directorio
    
        chmod($directorioNombre, 0777); // Dar permisos al archivo para que se pueda localizar y manipular
        echo "<br>El archivo <span style='font-weight:bold'>" . $nombreArchivo . "</span> se ha subido con éxito.<br>"; // Confirmación de la subida
        
        echo "¿Quieres descargarlo? <a href='".$directorioDescarga."'>Descargar o visualizar</a>"; // Link para descargar
    }else{
        echo "<br><font color=\"red\">Error: El archivo no se pudo subir.</font><br>";
    }

    echo "<br><br><input type='button' onclick='history.back()' name='back' value='Atrás'>";

    // Cerrar div
    echo "</div>";

} else {

    ?>
    
        <!-- Pintar el formulari -->

        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

            <title>Crear perfil</title>

            <style>
                .rojo{
                    color: red;
                }
            </style>

            </head>

            <body>

            <div style="margin: 30px 10%;">
                <h3>Perfil cinéfilo</h3>
                <span class="rojo">* Campo requerido</span><br><br>

                <form enctype="multipart/form-data" action="" method="post" id="myform" name="myform">

                    <span class="rojo">* </span><label>Nombre: </label><input type="text" value="" size="30" maxlength="100" name="nombre" id="" required /><br /><br />

                    <span class="rojo">* </span><label>Email: </label><input type="email" name="email" required /><br><br>

                    <span class="rojo">* </span><label>Sexo: </label>
                    <input type="radio" name="sexo" value="Masculino" required /> Masculino
                    <input type="radio" name="sexo" value="Femenino" /> Femenino<br /><br />

                    <label>Género de películas:</label><br><br>
                    <input type="checkbox" name="genero[]" value="Terror" /> Terror
                    <input type="checkbox" name="genero[]" value="Culto" /> Culto
                    <input type="checkbox" name="genero[]" value="Acción" /> Acción<br /><br />
                    <input type="checkbox" name="genero[]" value="Intriga" /> Intriga
                    <input type="checkbox" name="genero[]" value="Comedia" /> Comedia
                    <input type="checkbox" name="genero[]" value="Aventura" /> Aventura<br /><br />
                    <input type="checkbox" name="genero[]" value="Animación" /> Animación
                    <input type="checkbox" name="genero[]" value="Drama" /> Drama
                    <input type="checkbox" name="genero[]" value="Romance" /> Romance<br /><br />

                    <span class="rojo">* </span><label>¿Vas al cine a menudo? </label>
                    <select name="cine" id="" required>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        <option value="De vez en cuando">De vez en cuando</option>
                    </select><br /><br />

                    <textarea name="comentario" id="" rows="3" cols="30">
Escribe un comentario
                    </textarea> <br /><br />

                    <label>Subir archivo </label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                    <input name="fichero_usuario" type="file" /><br /><br />

                    <button id="mysubmit" type="submit">Aceptar</button><br /><br />

                </form>
            </div>

        </body>
        </html>

    <?
    
}

?>