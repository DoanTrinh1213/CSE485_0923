<?php 
    require "../config/connect.php";
    session_start(); // bắt đầu phiên làm việc
    if(isset($_POST['sbmSignUp'])){ 
        $username = $_POST['username']; 
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql_check = "SELECT * FROM users WHERE username = '$username' OR email='$email'";
        $query_check = $conn->prepare($sql_check);
        $query_check->execute(); 

        if($query_check->rowCount()>0){
            header('location: signup.php?error=exist');
        }else{
            $pass_hash = password_hash($pass, PASSWORD_DEFAULT); // mã hóa mk để bảo mật 
            $sql_insert = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$pass_hash')";
            $query_insert = $conn->prepare($sql_insert);
            $query_insert->execute();
            header('location: login.php?success=added');
        }   
    }
?>