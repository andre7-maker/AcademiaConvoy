<?php
////andre
require 'models/Matricula.php';

class MatriculaController
{

    private $model;

    public function __construct()
    {
        try{
            $this->model = new Matricula;

        }catch(PDOExeption $e) {
            die($e->getMessage());
        }
    }

    public function index()
    {
        require 'views/layout.php';
        $matriculas = $this->model->getAll();
        require 'views/matricula/lista.php';
    }

    public function nuevo()
    {
        require 'views/layout.php';
        $usuarios = $this->model->guardar();
        require 'views/matricula/nuevo.php';
    }



//christian
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

        $Id_Usuario = $this->usuario->getUltimoId();

        echo $Id_Usuario[0]->Id;
        
        $matricula = [

            'fecha_ingreso'    => $_REQUEST['fecha_ingreso'],
            'pago_matricula'   => $_REQUEST['pago_matricula'],
            'Id_Usuario'        => $Id_Usuario[0]->id
        ];

        $this->matricula->guardar($matricula);

        header('Location: ?controller=matricula');
        
    }
///jose
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
//christian
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
        header('Location: ?controller=matricula');

    }
//andre
    public function eliminar()
    {
        $this->model->EliminarUsuario($_REQUEST);
        header('Location: ?controller=matricula');
    }
    
}
