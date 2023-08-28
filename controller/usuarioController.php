<?php
require '../model/conexion.php';

class UsuarioController{

    public $db;
    public function __construct()
    {
        $this->db= new Conexion();
    }

    public function getAllUser(){
        $usuarios = $this->db->getUser();
        return $usuarios;
    }

    public function getOneUser($id){
        $user = $this->db->getUserById($id);
        require '../view/showOneUser.php';
        return $user;
    }
}
