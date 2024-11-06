<?php
include_once 'Conexion.php';
class Usuario
{
    var $objetos;
    var $acceso;
    public function __construct()
    {
        $db = new  Conexion();
        $this->acceso = $db->pdo;
    }
    function logearse($email, $pass)
    {
        $sql = "SELECT  * FROM usuarios JOIN rol ON usuarios.idRol= rol.idRol WHERE correo=:email  AND contraseña=:pass";


        $query =  $this->acceso->prepare($sql);
        $query->execute(array(':email'=>$email,':pass'=>$pass));

        $this->objetos = $query->fetchAll();
        return  $this->objetos;
    }
}
