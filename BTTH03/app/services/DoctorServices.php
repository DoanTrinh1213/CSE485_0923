<?php
require_once APP_ROOT . "/app/models/Doctor.php";
require_once APP_ROOT . "/app/libs/DBConnection.php";
class DoctorServices
{
    public static function getAllDoctor()
    {
        try {
            $sql = new DBConnection();
            $conn = $sql->getConnection();
    
            if ($conn != null) {
              $query = "SELECT * FROM doctor";
              $stmt = $conn->query($query);
          
              if ($stmt) {
                  $doctors = [];
                  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      //
                      $doctor = new doctor($row['idDoctor'], $row['doctorName'], $row['specialist']);
                      $doctors[] = $doctor;
                  }
                  return $doctors;
              } else {
                
                  return null;
              }
            }
        } catch (PDOException $e) {
            $e->getMessage();
            }
    }

    public static function addDoctor( $doctorName, $specialist)
    {
      $sql = new DBConnection();
      $conn = $sql->getConnection();
      $sql = "INSERT INTO doctor(doctorName, specialist) VALUES (?,?)";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$doctorName,$specialist]);
    }
    public static function delete($idDoctor)
    {
        $pdo = new DBConnection();
        $conn = $pdo->getConnection();
        $sql = "DELETE from doctor WHERE idDoctor = ?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$idDoctor]);
    }


    public function getDoctorByIdDoctor($idDoctor)
    {
      $doctors = $this->getAllDoctor();
      foreach ($doctors as $row) :
        if ($row->getIdDoctor() == $idDoctor)
          return $row;
      endforeach;
    }

    
    public static function editDoctor($idDoctor,$doctorName, $specialist)
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "UPDATE class SET doctorName=? specialist=? WHERE idDoctor=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$idDoctor,$doctorName, $specialist]);
    }


    

}