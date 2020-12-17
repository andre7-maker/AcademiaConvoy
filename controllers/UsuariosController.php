<?php
//christian
require 'models/Empleado.php';
require 'models/Matricula.php';
require 'models/Clase.php';

class UsuariosController
{

    private $model;
    private $matricula;
    private $clase;

    public function __construct()
    {
        try{
            $this->model = new Usuario;
            $this->matriculas = new Matricula;
            $this->clase = new Clase;

        }catch(PDOExeption $e) {
            die($e->getMessage());
        }
    }
//////jose
    public function verEmpleado()
    {
        require 'views/layout.php';
        $usuarios = $this->model->getByIdRol1();
        require 'views/usuario/lista.php';
    }
    public function verDeportista()
    {
        require 'views/layout.php';
        $usuarios = $this->model->getByIdRol2();
        require 'views/usuario/listaDeportista.php';
    }

    public function nuevoEmpleado()
    {
        require 'views/layout.php';
        $usuarios = $this->model->getByIdRol1();
        require 'views/usuario/nuevo.php';
    }
    ///andre
    public function nuevoDeportista()
    {

        require 'views/layout.php';
        $usuarios = $this->model->getByIdRol2();
        $clases = $this->clase->getAll();
        require 'views/usuario/nuevoDeportista.php';
    }
    
    public function guardarEmpleado()
    {
        $asd = $this->model->guardarEmpleado($_REQUEST);
        header('Location: ?controller=usuarios&method=verEmpleado');
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

        echo $id_usuario[0]->id;

        $matricula = [
            'fecha_ingreso'    => $_REQUEST['fecha_ingreso'],
            'pago_matricula'   => $_REQUEST['pago_matricula'],
            'Id_Usuario'       => $id_usuario[0]->id,
            'Id_Clase'         => $_REQUEST['Id_Clase']
        ];

        $Id = $_REQUEST['Id_Clase'];
        echo $Id;

        $this->matriculas->guardar($matricula);

        header('Location:?controller=usuarios&method=verDeportista');
        
    }
////christian
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
            header('Location: ?controller=usuarios&method=verEmpleado');
        }else{
            echo "Error, no se realizo";
        }
    }
    public function actualizarDeportista()
    {
        if(isset($_POST)){
            $this->model->editarEmpleado($_POST);
            header('Location: ?controller=usuarios&method=verDeportista');
        }else{
            echo "Error, no se realizo";
        }
    }

////andre, jose, christian
    public function configurarEstadoE()
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
        header('Location: ?controller=usuarios&method=verEmpleado');

    }
    public function configurarEstadoD()
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
        header('Location: ?controller=usuarios&method=verDeportista');

    }

    public function eliminar()
    {
        $this->model->EliminarUsuario($_REQUEST);
        header('Location: ?controller=usuarios&method=verEmpleado');
    }
    
}
