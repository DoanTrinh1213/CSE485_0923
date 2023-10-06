<?php 
require_once APP_ROOT .'/app/services/DoctorServices.php';
class DoctorController{

    public function index(){
        $doctors  = DoctorServices::getAllDoctor();
         include APP_ROOT.'/app/Views/Doctor/index.php';
    }
    public function add(){
        
        include APP_ROOT.'/app/Views/Doctor/add.php';
     }
    public function store(){
        if (isset($_POST['doctorName']) && isset($_POST['specialist'])) {
        
            $doctorName= $_POST['doctorName'];
            $specialist = $_POST['specialist'];
            DoctorServices::addDoctor($doctorName, $specialist);
            
            header("Location: " . DOMAIN . "/public/index.php");
        }
    }

    public function delete()
    {
        if (isset($_POST['id'])) {
            $idDoctor = $_POST['id'];
            DoctorServices::delete($idDoctor);
            header('Location:' . DOMAIN . "/public/index.php");
        }
    }


    public function EditDoctor(){
        $idDoctor = $_GET['idDoctor']; 
        $doctors = new DoctorServices() ;
        $doctors= $doctors->GetDoctorByIdDoctor($idDoctor);
        include APP_ROOT.'/app/views/Doctor/edit.php';
    }

    public function UpdateDoctor()
    {
        if (isset($_POST['idDoctor']) && isset($_POST['doctorName']) && isset($_POST['specialist'])) { //trong form HTML. Nếu bạn có một form HTML với một trường input có tên là id
            $idDoctor = $_POST['idDoctor'];
            $doctorName= $_POST['doctorName'];
            $specialist = $_POST['specialist'];
    
            DoctorServices::editDoctor($idDoctor,$doctorName ,$specialist);
            header('Location:' . DOMAIN . "/public/index.php");
        }
        else {
            echo "thieu du lieu";
        }
    }

    


    
    
}