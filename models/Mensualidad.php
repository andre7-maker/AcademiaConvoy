<?php

class Mensualidad
{
    private $Id; 
    private $costo_mensual;
    private $incremento;
    private $fecha_pago_mensual;
    private $Id_Usuario;
    private $Id_Estado;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    //getByIdRol mensualidad
    public function getAll()
    {
        try {
            $strSql = "SELECT m.* ,e.nombre as estado, u.nombre AS usuario, u.nit AS nit FROM mensualidad m
            INNER JOIN usuario u ON u.Id = m.Id_Usuario
            INNER JOIN estado e ON m.Id_Estado = e.Id";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function guardar($data)
    {
        try{
           $this->pdo->insert('mensualidad', $data);

        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function editarMensualidad($data)
    {
        try{
            $strWhere = 'Id=' . $data ['Id'];
           $this->pdo->update('mensualidad', $data, $strWhere);
           return true; 

        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getEstado()
    {
        try {
            $strSql = "SELECT * FROM estado WHERE Id_TipoEstado = 2";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
        try{
            $strSql="SELECT m.* , u.nombre as usuario , e.nombre as estado FROM mensualidad m 
            INNER JOIN usuario u ON u.Id = m.Id_Usuario 
            INNER JOIN estado e ON e.Id = m.Id_Estado
            WHERE m.id=:id";
            $array=['id'=>$id];
            $query=$this->pdo->select($strSql,$array);
            return $query;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    



}