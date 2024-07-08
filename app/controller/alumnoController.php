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
        
        /*public function insert(){
            if($_SERVER['REQUEST_METOD']=='POST'){
                $nombre=$_POST['nombre'];
                //...
                $this->alumno=new alumnoModel();
                $respuesta=$this->alumno->insert();

            }
        }*/

    }

?>
