<?php
///jose
require 'models/Mensualidad.php';
require 'models/Empleado.php';

class MensualidadController
{

    private $model;
    private $usuario;

    public function __construct()
    {
        try{
            $this->model = new Mensualidad;
            $this->usuario = new Usuario;

        }catch(PDOExeption $e) {
            die($e->getMessage());
        }
    }

    public function index()
    {
        require 'views/layout.php';
        $mensualidades = $this->model->getAll();
        require 'views/mensualidad/lista.php';
    }
//andre
    public function nuevoMensualidad()
    {
        require 'views/layout.php';
        $usuarios = $this->usuario->getByIdRol2();
        $estados = $this->model->getEstado();
        require 'views/mensualidad/nuevo.php';
    }
    
    public function nuevoDeportista()
    {

        require 'views/layout.php';
        $usuarios = $this->model->getByIdRol2();
        require 'views/usuario/nuevoDeportista.php';
    }
    
    public function guardar()
    {
        $asd = $this->model->guardar($_REQUEST);
        header('Location: ?controller=mensualidad');
        var_dump($asd);
    } 
//christian
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

        $id_usuario = $this->usuario->getUltimoId();

        $matricula = [
            'fecha_ingreso'    => $_REQUEST['fecha_ingreso'],
            'pago_matricula'   => $_REQUEST['pago_matricula'],
            'IdUsuario'        => $id_usuario[0]->id
        ];

        $this->

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
//andre
    public function actualizarEmpleado()
    {
        if(isset($_POST)){
            $this->model->editarEmpleado($_POST);
            header('Location: ?controller=usuarios');
        }else{
            echo "Error, no se realizo";
        }
    }
///christian
    public function configurarEstadoM()
    {
        $mensualidad = $this->model->getById($_REQUEST['Id']);
        $data = [];
        var_dump($mensualidad);
        echo $mensualidad[0]->Id;
        if($mensualidad[0]->Id_Estado == 4) { 
            $data = [
                'Id' => $mensualidad[0]->Id,
                'Id_Estado' => 3
            ];
        } elseif($mensualidad[0]->Id_Estado == 3) {
            $data = [
                'Id' => $mensualidad[0]->Id,
                'Id_Estado' => 4
            ];
        }

        $this->model->editarMensualidad($data);
        header('Location: ?controller=mensualidad');

    }
//jose
    public function mostrarFactura()
    {
        if(isset($_REQUEST['Id']));
        $Id = $_REQUEST['Id'];

        $data=$this->model->getById($Id);
        require 'Reporte/index.php';
    }

    public function eliminar()
    {
        $this->model->EliminarUsuario($_REQUEST);
        header('Location: ?controller=usuarios');
    }
    
}
