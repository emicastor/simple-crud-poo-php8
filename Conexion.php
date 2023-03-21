<?php
class Conexion
{
    public $con;
    private $servidor = 'localhost';
    private $bd = 'php-poo';
    private $usuario = 'root';
    private $password = '#Emiliano.32' ;

    public function conectar()
    {
        return $this->con = new PDO("mysql:host=$this->servidor;dbname=$this->bd;charset=UTF8",$this->usuario,$this->password);
    }
}