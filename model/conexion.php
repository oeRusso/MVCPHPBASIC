<?php

class Conexion{
    private  $con;

    public function __construct(){
        $this->con = new mysqli('localhost','root','','mvcphpbasic');
    }
    
    public function getUser(){
        $query = $this->con->query("SELECT * FROM usuarios");

        $retorno = [];

        $i = 0;

        while ($fila = $query->fetch_assoc()) {
           $retorno[$i]= $fila;
           $i++;
        }

        return $retorno;

    }

    public function getUserById($id){
        $query = $this->con->query("SELECT * FROM usuarios where id = $id");
        return $query;
    }

}