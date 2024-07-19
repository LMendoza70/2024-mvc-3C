<?php
include_once("app/model/usuarioModel.php");

class usuarioController{
    private $usuario;

    public function callLoginForm(){
        if(session_status()===PHP_SESSION_NONE){
            session_start();
        }
        $vista="app/view/admin/loginFormView.php";
        if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true)
            include_once("app/view/admin/plantillaView.php");
        else
            include_once("app/view/admin/plantilla2View.php");
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $user=$_POST['user'];
            $password=$_POST['password'];
            $this->usuario=new usuarioModel();
            $respuesta=$this->usuario->getCredentials($user,$password);
            if($respuesta){
                include_once("app/controller/alumnoController.php");
                $alumno=new alumnoController();
                if(session_status()===PHP_SESSION_NONE){
                    session_start();
                }
                $_SESSION['logedin']=true;
                $_SESSION['name']=$respuesta['nombre']. " " .$respuesta['apellido'];
                $alumno->index();
                /*$vista="app/view/admin/alumnos/alumnosIndexView.php";
                include_once("app/view/admin/plantillaView.php");*/
            }else{
                $vista="app/view/admin/errorView.php";
                include_once("app/view/admin/plantilla2View.php");
            }
        }
    }

    public function logedout(){
        if(session_status()===PHP_SESSION_NONE){
            session_start();
            $_SESSION['logedin']=false;
            //session_abort();
            //session_destroy();
            header("location:http://localhost/php-3c/");
        }

    }
}
?>