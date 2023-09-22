<?php
    $servername = "localhost";
    $username="root";
    $password="";
    $database="BTTH01_CSE485_ex02";
      #mysqli_set_charset($conn,'UTF8');

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        echo ("ket noi that bai");

    }else(" Ket noi Thanhcong");

    /*if(isset($_GET['delete'])){
        $msv= $_GET['delete'];
        $conn -> query("DELETE FROM sinhvien1 WHERE Msv=$msv");
        header("Location: quanly.php");
    }*/
?>