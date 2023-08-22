<?php
require 'MVCPHPBASIC/model/conexion.php';

class UsuarioController{

    private $db;
    public function __construct()
    {
        $this->db= new Conexion();
    }

    public function getAllUser(){
        $usuarios = $this->db->getUser();
    }
}
