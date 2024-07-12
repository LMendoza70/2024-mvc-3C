<?php
    //incluimos el modelo para poder instancialrlo dentro del controlaxor 
    include_once("app/model/alumnoModel.php");
    class alumnoController{
        //creamos un atributo para referenciar al modelo del alumno
        private $alumno;

        public function index(){
            //instanciamos el modelo de alumno
            $this->alumno= new alumnoModel();
            //obtenemos la informacion a trabajar dentro de la vista 
            $datos = $this->alumno->getAll();
            //definimos la vista a mostrar dentro de la plantilla
            $vista= "app/view/admin/alumnos/alumnosIndexView.php";
            //incluimos la plantilla
            include_once("app/view/admin/plantillaview.php"); 
        }

        public function callInsertForm(){
            $vista="app/view/admin/alumnos/InsertFormView.php";
            include_once("app/view/admin/plantillaView.php");
        }
        
        public function insert(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(!isset($_POST['nombre'],$_POST['apellido'],$_POST['edad'],$_POST['correo'],$_POST['fecha'])){
                    header("location:http://localhost/php-3c");
                }
                $data=array(
                    'nombre'=>$_POST['nombre'],
                    'apellido'=>$_POST['apellido'],
                    'edad'=>$_POST['edad'],
                    'correo'=>$_POST['correo'],
                    'fecha'=>$_POST['fecha']
                );
                $alumno= new alumnoModel();
                $resultado=$alumno->insert($data);
                if($resultado){
                    header("location:http://localhost/php-3c/?C=alumnoController&M=index");
                }else{
                    header("location:http://localhost/php-3c");
                }
            }
        }

        public function callEdditForm(){
            if($_SERVER['REQUEST_METHOD']=='GET'){
                $id=$_GET['id'];
                $this->alumno=new alumnoModel();
                $data = $this->alumno->getById($id);
                $vista="app/view/admin/alumnos/edditForm.php";
                include_once("app/view/admin/plantillaView.php");
            }
        }

        public function eddit(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $dato=array(
                    'id'=>$_POST['id'],
                    'nombre'=>$_POST['nombre'],
                    'apellido'=>$_POST['apellido'],
                    'edad'=>$_POST['edad'],
                    'correo'=>$_POST['correo'],
                    'fecha'=>$_POST['fecha'],
                );
                $this->alumno= new alumnoModel();
                $respuesta=$this->alumno->eddit($dato);
                if($respuesta){
                    header("location:http://localhost/php-3c/?C=alumnoController&M=index");
                }else{
                    header("location:http://localhost/php-3c");
                }

            }
        }

        public function delete(){
            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                $id=$_GET['id'];
                $this->alumno=new alumnoModel();
                $respuesta=$this->alumno->delete($id);
                if($respuesta){
                    header("location:http://localhost/php-3c/?C=alumnoController&M=index");
                }else{
                    header("location:http://localhost/php-3c");
                }
            }
        }

    }

?>
