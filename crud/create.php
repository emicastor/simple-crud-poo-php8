<?php
if ($_POST) {
    $correo = (isset($_POST['correo'])) ? trim($_POST['correo']) : '';
    $nombre = (isset($_POST['nombre'])) ? trim($_POST['nombre']) : '';
    $edad = (isset($_POST['edad'])) ? trim($_POST['edad']) : '';

    include 'Cliente.php';
    $cliente = new Cliente();
    $cliente->correo = $correo;
    $cliente->nombre = $nombre;
    $cliente->edad = $edad;

    $cliente->create();
    header('Location: index.php');
}