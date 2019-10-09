<?php

if(file_exists("/../home/marfils/html/M07/UF1/A3/uploadfile/algo.txt")){ // Comprobar que el archivo existe
    header("Content-disposition: attachment; filename='algo.txt'"); // Nombre con el que se descargará el archivo
    header("Content-type: application/txt"); // Indicar tipo de archivo
    readfile("/../home/marfils/html/M07/UF1/A3/uploadfile/algo.txt"); // Localizar el archivo y descargarlo
}else{
    die('Error: El archivo algo.txt no se ha encontrado.');
} 

?>