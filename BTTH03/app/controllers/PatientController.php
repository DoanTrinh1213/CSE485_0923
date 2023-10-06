<?php 
require_once APP_ROOT .'/app/services/PatientServices.php';
class PatientController{

    public function index(){
        $patients = PatientServices::getAllPatient();
         include APP_ROOT.'/app/Views/Patient/index.php';
    }
    public function add(){
        
        include APP_ROOT.'/app/Views/Patient/add.php';
     }
    public function store(){
        if (isset($_POST['patientName']) && isset($_POST['date'])&& isset($_POST['symptom']) && isset($_POST['idDoctor'])) {
            $patientName = $_POST['patientName'];
            $date = $_POST['date'];
            $symptom= $_POST['symptom'];
            $idDoctor = $_POST['idDoctor'];
            PatientServices::addPatient($patientName, $date,$symptom, $idDoctor);
            
            header("Location: " . DOMAIN . "/public/indexPatient.php");
        }
    }

    public function delete()
    {
        if (isset($_POST['id'])) {
            $idPatient = $_POST['id'];
            PatientServices::delete($idPatient);
            header('Location:' . DOMAIN . "/public/indexPatient.php");
        }
    }


    public function EditPatient(){
        $idPatient = $_GET['idPatient']; 
        $patient = new patientServices() ;
        $patients= $patient->GetPatientByIdPatient($idPatient);
        include APP_ROOT.'/app/views/Patient/edit.php';
    }

    public function UpdatePatient()
    {
        if (isset($_POST['idPatient']) && isset($_POST['patientName']) && isset($_POST['date'])&& isset($_POST['symptom']) && isset($_POST['idDoctor'])) { //trong form HTML. Nếu bạn có một form HTML với một trường input có tên là id
            $idPatient = $_POST['idPatient'];
            $patientName= $_POST['patientName'];
           
            $date = $_POST['date'];
            $symptom= $_POST['symptom'];
            $idDoctor = $_POST['idDoctor'];
           
    
            DoctorServices::editDoctor($idPatient,$patientName, $date,$symptom, $idDoctor);
            header('Location:' . DOMAIN . "/public/indexPatient.php");
        }
        else {
            echo "thieu du lieu";
        }
    }

    


    
    
}