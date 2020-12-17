<?php

class Matricula
{
    private $Id; 
    private $IdUsuario;
    private $fecha_ingreso;
    private $pago_matricula;
    private $Id_Clase;
    private $Id_Estado;

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
            $strSql = "SELECT m.*, e.nombre as estado, u.nombre as nombre,u.nit as nit, c.tipo_clase as tipo_clase, c.edad_clase as edad_clase, c.grado as grado FROM matriculas m 
            INNER JOIN estado e on m.Id_Estado = e.id 
            INNER JOIN usuario u on m.Id_Usuario = u.id
            INNER JOIN clase c on m.Id_Clase=c.id ";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function guardar($data)
    {
        try{
           $data['Id_Estado'] = 1;
           $this->pdo->insert('matriculas', $data);

        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }
     public function guardarDeportista($data)
    {
        try{
           $data['Id_Estado'] = 1;
           $data['Id_Rol'] = 2;
           $this->pdo->insert('matriculas', $data);

        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function editarEmpleado($data)
    {
        try{
            $strWhere = 'Id=' . $data ['Id'];
           $this->pdo->update('matriculas', $data, $strWhere);
           return true; 

        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }
     public function getById($Id)
    {
        try{
            $strSql="SELECT * FROM matriculas WHERE Id=:Id";
            $array=['Id'=>$Id];
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
            $this->pdo->update('matriculas',$data,$strWhere);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function EliminarUsuario($data)
    {
        try{
            $strWhere='Id='.$data['Id'];
            $this->pdo->delete('matriculas',$strWhere);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getUltimoId()
        {
            try {
                $strSql= "SELECT MAX(id) as id FROM matriculas ";
                $query= $this->pdo->select($strSql);
                return $query;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }


}