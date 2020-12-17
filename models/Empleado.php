<?php

class Usuario
{
    private $Id; 
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;
    private $nit;
    private $telefono;
    private $correo;
    private $contraseña;
    private $Id_Estado;
    private $Id_Rol;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    //getByIdRol empleado
    public function getByIdRol1()
    {
        try {
            $strSql = "SELECT u.* , s.nombre AS estado, r.nombre as rol FROM usuario u 
            INNER JOIN estado s ON u.Id_Estado = s.Id 
            INNER JOIN rol r on u.Id_Rol = r.Id WHERE Id_Rol = 1 ";

            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getByIdRol2()
    {
        try {
            $strSql = "SELECT u.* , s.nombre AS estado, r.nombre AS rol, m.Id_clase AS Id_Clase, c.tipo_clase AS tipo_clase, c.edad_clase 
            AS edad_clase, c.grado AS grado FROM usuario u 
            INNER JOIN estado s ON u.Id_Estado = s.Id 
            INNER JOIN matriculas m ON m.Id_Usuario
            INNER JOIN rol r on u.Id_Rol = r.Id 
            INNER JOIN clase c ON c.Id = m.Id_Clase
            WHERE u.Id_Rol = 2";

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
                $strSql= "SELECT MAX(Id) as id FROM usuario ";
                $query= $this->pdo->select($strSql);
                return $query;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }


}