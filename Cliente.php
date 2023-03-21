<?php

include 'Conexion.php';

class Cliente extends Conexion
{
    public $correo;
    public $nombre;
    public $edad;

    // Create
    public function create()
    {
        $pdo = $this->conectar();
        $sql = "INSERT 
                INTO
                clientes 
                (correo, nombre, edad)
                VALUES
                (?, ?, ?)";

        // Se puede obviar el bindParam() y poner dentro del execute([]), dentro de los corchetes, las variables que van a reemplazar a los ? de la $sql. Y también se lo puede poner todo en una sola línea o separarlo.
        
        // 1 sola línea conocido como "método de encadenamiento". No hace falta guardar nada en una variable como si lo hacemos en 2 lineas con $stmt.         
        // $this->con->prepare($sql)->execute([$this->correo, $this->nombre, $this->edad]);
        
        // 2 líneas OPCION A ELEGIR!
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->correo, $this->nombre, $this->edad]);
    }

    // Read
    public static function all()
    {
        $conexion = new Conexion();
        $pdo = $conexion->conectar();

        $sql = "SELECT
                *
                FROM
                clientes
                ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $resp = $stmt->fetchAll(PDO::FETCH_CLASS, __CLASS__);
    }

    // Update
    public function update()
    {
        $pdo = $this->conectar();
        $sql = "UPDATE
                clientes
                SET
                nombre = ?,
                edad = ?
                WHERE
                correo = ?
                ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->nombre, $this->edad, $this->correo]);
    }
    // Delete
    public function delete()
    {
        $pdo = $this->conectar();
        
        $sql = "DELETE
                FROM
                clientes
                WHERE
                correo = ?
                ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->correo]);

    }

    // Obtener un cliente por su correo
    public static function getByEmail($correo)
    {   
        $conexion = new Conexion();
        $pdo = $conexion->conectar();
        $sql = "SELECT
                *
                FROM
                clientes
                WHERE
                correo = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$correo]);
        // Retorno un obj de la clase Cliente con todas las columnas de la tabla como sus propiedades.
        return $resp = $stmt->fetchObject(__CLASS__);  
    }
}
