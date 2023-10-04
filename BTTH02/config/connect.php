<?php
   $localhost = "localhost";
   $username = "root"; 
   $password = "";
   $dbname = "btth01_cse485_ex02";
   global $conn;
   try{
       $conn = new PDO("mysql:host=$localhost;dbname=$dbname", $username, $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException $e){
       echo "Connection failed because: ". $e->getMessage();
   }
    