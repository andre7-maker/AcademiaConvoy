<?php

class Login 
{
    private $pdo; 
    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function validarUsuario($data)
    {
        try{
            $strSql = "SELECT * FROM usuario WHERE  correo = '{$data['correo']}'  AND password = '{$data['password']}' ";

            $query = $this->pdo->select($strSql);

            if(isset($query[0]->Id)) {
                $_SESSION['usuario'] = $query[0];
                return true;
            } else
                return 'Error al Iniciar Sesión. Verifique sus Credenciales';
                
        }catch (PDOException $e) {
            return $e->getMessage();
                }
    }
}