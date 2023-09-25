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

    public function updateUser($userData) {
        // Asegúrate de que el arreglo tenga las claves necesarias
        if (isset($userData['id'], $userData['nombre'], $userData['email'], $userData['contraseña'])) {
            // Utiliza marcadores de posición en la consulta SQL
            $query = $this->con->prepare("UPDATE usuarios SET nombre = ?, email = ?, contraseña = ? WHERE id = ?");
            
            // Extrae los valores del arreglo
            $userId = $userData['id'];
            $nombre = $userData['nombre'];
            $email = $userData['email'];
            $contraseña = $userData['contraseña'];
            
            // Ejecuta la consulta con los valores extraídos del arreglo
            $query->bind_param("sssi", $nombre, $email, $contraseña, $userId);
            $query->execute();
            
            // Verifica si la actualización fue exitosa
            if ($query->affected_rows > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false; // Datos insuficientes en el arreglo
        }
    }

}