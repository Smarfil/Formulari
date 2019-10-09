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
<form action="processa_dades.php" method="post" id="myform" name="myform">

    <span class="rojo">* </span><label>Nombre: </label><input type="text" value="" size="30" maxlength="100" name="nombre" id="" required /><br /><br />

    <span class="rojo">* </span><label>Email: </label><input type="email" name="email" required /><br><br>

    <span class="rojo">* </span><label>Sexo: </label>
    <input type="radio" name="sexo" value="1" required /> Masculino
    <input type="radio" name="sexo" value="2" /> Femenino<br /><br />

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

    <button id="mysubmit" type="submit">Aceptar</button><br /><br />

</form>
</div>

</body>
</html>