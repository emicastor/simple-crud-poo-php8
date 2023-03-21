<?php
include './Cliente.php';
if (isset($_GET['correo'])) {
    $registroABorrar = (isset($_GET['correo'])) ? $_GET['correo'] : "";
    $cliente = Cliente::getByEmail($registroABorrar);
    $cliente->delete();
    header('Location: index.php');
}