<?php 
class Doctor{
    private $idDoctor, $doctorName,$specialist;
    public function __construct($idDoctor, $doctorName,$specialist ){
        $this->idDoctor = $idDoctor;
        $this->doctorName= $doctorName;
        $this->specialist= $specialist;
    }
    public function getIdDoctor(){
        return $this->idDoctor;
    }
    public function setIdDoctor($idDoctor){
        $this->idDoctor = $idDoctor;
    }
    public function getDoctorName(){
        return $this->doctorName;
    }
    public function setDoctorName($doctorName){
        $this->doctorName= $doctorName;
    }
    public function getSpecialist(){
        return $this->specialist;
    }
    public function setSpecialist($specialist){
        $this->specialist = $specialist;
    }
}
?>