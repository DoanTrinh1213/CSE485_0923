<?php 
        include '../config/connect.php';
        $sql="SELECT * FROM theloai";
        $stmt = $conn->prepare($sql);
        $stmt ->execute();
        $result = $stmt ->fetchAll();  

    ?>