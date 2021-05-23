<?php
   class UsuarioController{
     public function crear(){
       require_once 'views/usuarios/crear.php';
     }

     public function guardar(){
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $user->setNombre($_POST['txNombre']);
       $user->setApellido($_POST['txApellido']);
       $user->setEmail($_POST['txEmail']);
       $guardar = $user->Create();
     }

     public function mostrarTodos(){
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $resultUser = $user->MostrarTodos('usuarios');
       require_once 'views/usuarios/mostrar.php';
     }

     public function buscar(){
       $id 		= 	$_REQUEST['id'];   
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $resultUser = $user->Buscar('usuarios',$id);  
       require_once 'views/usuarios/modificar.php';
     }

     public function borrar(){
       $id 		= 	$_REQUEST['id'];   
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $resultUser = $user->Borrar('usuarios',$id);  
     }

     public function modificar(){
       $id 		= 	$_REQUEST['id'];
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $user->setNombre($_POST['txNombre']);
       $user->setApellido($_POST['txApellido']);
       $user->setEmail($_POST['txEmail']);
       $actualizar = $user->Modificar($id);
     }

     public function prueba(){
        $id 		= 	$_REQUEST['id'];   
        $nombre 		= 	$_REQUEST['nombre'];   
        require_once 'views/usuarios/modificar.php';
     }
   }
?>