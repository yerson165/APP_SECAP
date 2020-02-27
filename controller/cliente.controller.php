<?php
require_once 'model/cliente.php';

class clienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new cliente();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cliente/cliente.php';
       
    }
    
    public function Crud(){
        $cliente = new cliente();
        
        if(isset($_REQUEST['id'])){
            $cliente = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/cliente/cliente-editar.php';
        
    }
    
    public function Guardar(){
        $cliente = new cliente();
        
        $cliente->id = $_REQUEST['id'];
        $cliente->numero = $_REQUEST['numero'];
        $cliente->carpeta = $_REQUEST['carpeta'];
        $cliente->anio = $_REQUEST['anio'];
        $cliente->estado = $_REQUEST['estado'];  
     
      

        $cliente->id > 0 
            ? $this->model->Actualizar($cliente)
            : $this->model->Registrar($cliente);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}