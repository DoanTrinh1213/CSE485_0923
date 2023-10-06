<?php 
class Patient{
    private $idPatient, $patientName, $date ,$symptom, $idDoctor;
    public function __construct($idPatient, $patientName, $date ,$symptom, $idDoctor){
       
        $this->idPatient= $idPatient;
        $this->patientName= $patientName;
        $this->date= $date;
        $this->symptom= $symptom;
        $this->idDoctor = $idDoctor;


    }
    public function getIdPatient(){
        return $this->idPatient;
    }
    public function setIdPatientr($idPatient){
        $this->idPatient = $idPatient;
    }
    public function getPatientName(){
        return $this->patientName;
    }
    public function setPatientName($patientName){
        $this->patientName= $patientName;
    }
    public function getDate(){
        return $this->date;
    }
    public function setDate($date){
        $this->date= $date;
    }
    public function getSymptom(){
        return $this->symptom;
    }
    public function setSymptom($symptom){
        $this->symptom = $symptom;
    }
    public function getIdDoctor(){
        return $this->idDoctor;
    }
    public function setIdDoctor($idDoctor){
        $this->idDoctor = $idDoctor;
    }
}
?>