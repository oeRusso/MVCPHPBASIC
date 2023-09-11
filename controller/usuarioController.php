<?php
require 'C:/xampp/htdocs/MVCPHPBASIC/model/conexion.php';

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
        $result = $this->db->getUserById($id);
        $user = mysqli_fetch_assoc($result); // Obtener la fila de resultados
        require '../view/showOneUser.php';
    }

    public function updateUserController($user){
        $result = $this->db->updateUser($user);
        return $user;
    }
}
