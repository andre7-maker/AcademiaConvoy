<?php

require 'models/Clase.php';

class ClaseController
{

    private $model;

    public function __construct()
    {
        try{
            $this->model = new Usuario;

        }catch(PDOExeption $e) {
            die($e->getMessage());
        }
    }

    public function index()
    {
        require 'views/layout.php';
        $clases = $this->model->getAll();
        require 'views/clases/lista.php';
    }

    public function nuevoEmpleado()
    {
        require 'views/layout.php';
        $usuarios = $this->model->getByIdRol1();
        require 'views/usuario/nuevo.php';
    }
    public function nuevoDeportista()
    {

        require 'views/layout.php';
        $usuarios = $this->model->getByIdRol2();
        require 'views/usuario/nuevoDeportista.php';
    }
    
    public function guardarEmpleado()
    {
        $asd = $this->model->guardarEmpleado($_REQUEST);
        header('Location: ?controller=usuarios');
        var_dump($asd);
    } 
    public function guardarDeportista()
    {
        $usuario = [

            'nombre'           => $_REQUEST['nombre'],
            'apellido'         => $_REQUEST['apellido'],
            'fecha_nacimiento' => $_REQUEST['fecha_nacimiento'],
            'telefono'         => $_REQUEST['telefono'],
            'correo'           => $_REQUEST['correo'],
            'nit'              => $_REQUEST['nit'],
            'password'         => $_REQUEST['password']
        ];

        $this->model->guardarDeportista($usuario);

        $id_usuario = $this->model->getUltimoId();

        $matricula = [

            'fecha_ingreso'    => $_REQUEST['fecha_ingreso'],
            'pago_matricula'   => $_REQUEST['pago_matricula'],
            'IdUsuario'        => $id_usuario[0]->id
        ];

        $this->matriculas->guardar($matricula);

        header('Location: ?controller=usuarios');
        
    }
    public function edit()
    {
        if(isset($_REQUEST['id'])){
            $id=$_REQUEST['id'];

            $data=$this->model->getById($id);
            require 'views/layout.php';
            require 'views/usuario/editar.php';
        }else{
            echo "Error, no se realizo.";
        }
    }
    public function actualizarEmpleado()
    {
        if(isset($_POST)){
            $this->model->editarEmpleado($_POST);
            header('Location: ?controller=usuarios');
        }else{
            echo "Error, no se realizo";
        }
    }
    public function configurarEstado()
    {
        $usuario = $this->model->getById($_REQUEST['Id']);
        $data = [];

        if($usuario[0]->Id_Estado == 1) { 
            $data = [
                'Id' => $usuario[0]->Id,
                'Id_Estado' => 2
            ];
        } elseif($usuario[0]->Id_Estado == 2) {
            $data = [
                'Id' => $usuario[0]->Id,
                'Id_Estado' => 1
            ];
        }

        $this->model->editarEstado($data);
        header('Location: ?controller=usuarios');

    }
    public function eliminar()
    {
        $this->model->EliminarUsuario($_REQUEST);
        header('Location: ?controller=usuarios');
    }
    
}
