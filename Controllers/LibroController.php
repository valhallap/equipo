<?php
    $con = new LibroController();

        if(isset($_GET['requestBook'])){

           if($_GET['requestBook'] == 'listBook'){
                $con->showProduct();
           }
           if($_GET['requestBook'] == 'insert'){
                $con->guardar();
            }
            if($_GET['requestBook'] == 'update'){
                $con->update();
            }
            if($_GET['requestBook'] == 'desactive'){
                $con->desactive();
                //echo "Probando ";
            }
            if($_GET['requestBook'] == 'active'){
                $con->active();
                //echo "Probando ";
            }
        }

       
        


//echo "conectando al controlador";
    class LibroController{

      
        private $model;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/mvc/Models/bookModel.php");
            $this->model = new bookModel();

            session_start();
			ob_start();
        }
        public function guardar(){
           
            $nameBook = $_POST['nameBook'];
            $volume = $_POST['volumen'];
            $etiqueta = $_POST['etiqueta'];
            $autor = $_POST['autor'];
            $status = $_POST['estatus'];


            //$id = $this->model->insertar($nombre);
          $res =   $this->model->insertar($nameBook, $volume, $etiqueta, $autor, $status);

          if($res){
            $con = new LibroController();
            //echo "la consulta se reealizo satisfactoriamente";
            $con->showProduct();
          }
            //return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");

           //echo $nombre;
            //header("Location:../index.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }

        public function showProduct(){
            //return ($this->model->showP() != false) ? $this->model->showP() : header("Location:index.php");
        
            $res = $this->model->showP();
            //eturn $res;
            $_SESSION['data'] = $res;

           header("Location:../views/listaLIbros.php");
        }

        public function desactive(){
            $id = $_POST['idLibro'];
           
            $res = $this->model->desactive($id);

            if($res){
                $con = new LibroController();
                //echo "la consulta se reealizo satisfactoriamente";
                $con->showProduct();
              }
        }

        public function active(){
            $id = $_POST['idLibro'];
           
            $res = $this->model->active($id);

            if($res){
                $con = new LibroController();
                //echo "la consulta se reealizo satisfactoriamente";
                $con->showProduct();
              }
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update(){
           
            $id = $_POST['idLibro'];
            $nameBook = $_POST['nameBook'];
            $volume = $_POST['volumen'];
            $etiqueta = $_POST['etiqueta'];
            $autor = $_POST['autor'];
            $status = $_POST['estatus'];

            $res = $this->model->update($id,$nameBook, $volume, $etiqueta, $autor, $status);

            if($res){
                $con = new LibroController();
                $con->showProduct();
            }

           
        }

        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>