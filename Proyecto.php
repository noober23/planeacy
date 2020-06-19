<?php
class Proyecto{
    private $proyecto;
    
    function verProyectos(){
        $sql="SELECT * FROM proyecto";
        $query=0;

    }


}

 $sql1= "SELECT idProyecto.proyecto, idTarea.tarea FROM proyecto Pr INNER JOIN tareas Ta ";