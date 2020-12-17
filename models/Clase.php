<?php

class Clase
{
    private $Id; 
    private $tipo_clase;
    private $edad_clase;
    private $grado;
    private $Id_Usuario;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    //getByIdRol empleado
    public function getAll()
    {
        try {
            $strSql = "SELECT * FROM clase";

            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
     public function getByIdRol2()
    {
        try {
            $strSql = "SELECT u.* , s.nombre AS estado, r.nombre as rol FROM usuario u 
            INNER JOIN estado s ON u.Id_Estado = s.Id 
            INNER JOIN rol r on u.Id_Rol = r.Id  WHERE Id_Rol = 2 ";

            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function guardarEmpleado($data)
    {
        try{
           $data['Id_Estado'] = 1;
           $data['Id_Rol'] = 1;
           $this->pdo->insert('usuario', $data);

        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }
     public function guardarDeportista($data)
    {
        try{
           $data['Id_Estado'] = 1;
           $data['Id_Rol'] = 2;
           $this->pdo->insert('usuario', $data);

        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function editarEmpleado($data)
    {
        try{
            $strWhere = 'Id=' . $data ['Id'];
           $this->pdo->update('usuario', $data, $strWhere);
           return true; 

        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }
     public function getById($id)
    {
        try{
            $strSql="SELECT * FROM usuario WHERE id=:id";
            $array=['id'=>$id];
            $query=$this->pdo->select($strSql,$array);
            return $query;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function editarEstado($data)
    {
        try{
            $strWhere='Id='.$data['Id'];
            $this->pdo->update('usuario',$data,$strWhere);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function EliminarUsuario($data)
    {
        try{
            $strWhere='Id='.$data['Id'];
            $this->pdo->delete('usuario',$strWhere);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getUltimoId()
        {
            try {
                $strSql= "SELECT MAX(id) as id FROM usuario ";
                $query= $this->pdo->select($strSql);
                return $query;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }


}