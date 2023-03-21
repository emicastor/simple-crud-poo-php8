<?php
if (isset($_GET['correo'])) {
    $registroAEditar = (isset($_GET['correo'])) ? $_GET['correo'] : '';
    include './Cliente.php';
    $cliente = Cliente::getByEmail($registroAEditar);
}

if ($_POST) {
    $correo = (isset($_POST['correo'])) ? trim($_POST['correo']) : '';
    $nombre = (isset($_POST['nombre'])) ? trim($_POST['nombre']) : '';
    $edad = (isset($_POST['edad'])) ? trim($_POST['edad']) : '';
    $cliente->correo = $correo;
    $cliente->nombre = $nombre;
    $cliente->edad = $edad;
    $cliente->update();
    header('Location: index.php');
}