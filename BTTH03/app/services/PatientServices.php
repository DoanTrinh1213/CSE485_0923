<?php
require_once APP_ROOT . "/app/models/Patient.php";
require_once APP_ROOT . "/app/libs/DBConnection.php";
class PatientServices
{
    public static function getAllPatient()
    {
        try {
            $sql = new DBConnection();
            $conn = $sql->getConnection();
    
            if ($conn != null) {
              $query = "SELECT * FROM patient";
              $stmt = $conn->query($query);
          
              if ($stmt) {
                  $patients = [];
                  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      //
                      $patient = new patient($row['idPatient'], $row['patientName'], $row['date'],$row['symptom'], $row['idDoctor']);
                      $patients[] = $patient;
                  }
                  return $patients;
              } else {
                
                  return null;
              }
            }
        } catch (PDOException $e) {
            $e->getMessage();
            }
    }

    public static function addPatient($patientName, $date,$symptom, $idDoctor)
    {
      $sql = new DBConnection();
      $conn = $sql->getConnection();
      $sql = "INSERT INTO patient(patientName, date,symptom, idDoctor) VALUES (?,?,?,?)";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$patientName, $date, $symptom, $idDoctor]);
    }
    public static function delete($idPatient)
    {
        $pdo = new DBConnection();
        $conn = $pdo->getConnection();
        $sql = "DELETE from patient WHERE idPatient = ?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$idPatient]);
    }


    public function getPatientByIdPatient($idPatient)
    {
      $patients = $this->getAllPatient();
      foreach ($patients as $row) :
        if ($row->getIdPatient() == $idPatient)
          return $row;
      endforeach;
    }

    
    public static function editPatient($idPatient, $patientName, $date ,$symptom, $idDoctor)
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "UPDATE patient SET idPatient=? patientName=? date=? symptom=? idDoctor=? WHERE idPatient=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$idPatient, $patientName, $date ,$symptom, $idDoctor]);
    }


    

}