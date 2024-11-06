<?php
include_once '../Models/Usuario.php';
$usuario = new Usuario();
session_start();

if ($_POST['funcion'] == 'login') {
    $email =  $_POST['email'];
    $pass =   $_POST['pass'];
    $usuario->logearse($email,  $pass);
    if ($usuario->objetos!=null) {
        # code...

        foreach ($usuario->objetos as $objeto) {
            $_SESSION['usuario'] = $objeto->idusuario;
            $_SESSION['rol'] = $objeto->idrol;
            $_SESSION['email'] = $objeto->correo;
            $_SESSION['pass'] = $objeto->contraseña;
            $_SESSION['avatar'] = $objeto->avatar;
        }
        echo 'logueado';
    }
}
