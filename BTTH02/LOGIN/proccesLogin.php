<?php
require_once"../config/connect.php";    
if(isset($_POST['sbmLogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Truy van thong tin:
    try{
        //Buoc 1: Ket noi DBServer
       
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM users WHERE username='$username' OR email = '$username'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();
        //Buoc 3: Lay ra thong tin bao gom MAT KHAU BAM
        if($stmt->rowCount() > 0){
            $user = $stmt->fetch();
            //Lay ra mat khau
            $pass_hash = $user[3]; 
            if(password_verify($password, $pass_hash)){
                //CAP THE (authentication - Not: authorization)
                session_start();
                $_SESSION['isLogin'] = $username;  
                header("Location: home.php?success"); 
            }else{
                header("Location: login.php?error=not-matched-password");
            }
        }else{
            header("Location: login.php?error=not-existed");
        }


    }catch(PDOException $e){
        echo $e->getMessage();
    }
}