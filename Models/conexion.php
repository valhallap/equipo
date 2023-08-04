<?php
class conexion{

    public $con;

    public function __construct()
    {
        $this->con = new mysqli('localhost', 'root', '', 'biblioteca');
    }


    public function getLibros(){
        $query = $this->con->query("SELECT * FROM libros where estatus = 1");

        $data = [];
        $i = 0;
        while($fila = $query->fetch_assoc())
        {
            $data[$i] = $fila;
            $i++;
        }

        return $data;
    }
}