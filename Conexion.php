<?php
class Conexion
{
    public $con;
    private $servidor = 'localhost';
    private $bd = 'simple-crud-poo-php8';
    private $usuario = 'root';
    private $password = '' ;

    public function conectar()
    {
        return $this->con = new PDO("mysql:host=$this->servidor;dbname=$this->bd;charset=UTF8",$this->usuario,$this->password);
    }
}
