<?php require_once "../config/connect.php";
  if(isset($_POST['add'])){
    $ma_tloai = $_POST['ma_tloai'];
    $ten_tloai = $_POST['ten_tloai'];
  }
  
    $sql_check ="SELECT * FROM theloai WHERE ma_tloai='$ma_tloai' OR ten_tloai='$ten_tloai'";
    $stmt= $conn->prepare($sql_check);
    $stmt->execute();
    if($stmt->rowCount()>0){
      header("location: add_category.php?error=exited");
      }
      else{
          $sql_insert = "INSERT INTO theloai VALUES ( '$ma_tloai','$ten_tloai')";
          $stmt = $conn->prepare($sql_insert);
          $stmt->execute();
          header("location:category.php?success=added");}
  
  
?>
