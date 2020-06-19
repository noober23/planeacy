<?php

// subir archivo
if( empty($_FILES['archivo']['name']) == false )
    {
         if (is_uploaded_file($_FILES['archivo']['tmp_name']))
        {
             if( move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']) == false )
                echo "No se ha podido el mover el archivo.";
            else
                echo "Archivo [".$_FILES['archivo']['name']."] subido y movido al directorio actual.";
        }
        else
        {
           echo "Posible ataque al subir el archivo [".$_FILES['archivo']['nombre_tmp']."]";
        }
    }
    else
    {
        echo "No se seleccionó ningún archivo.";
    }
?>
