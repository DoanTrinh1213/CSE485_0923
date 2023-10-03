<!--<?php 
    $err = [];
    if(empty($username)){
        $err['username'] = 'Ban chua nhap ten';
    }
    if(empty($email)){
        $err['email'] = 'Ban chua nhap email';
    }
    if(empty($password)){
        $err['password'] = 'Ban chua nhap mat khau';
    }
    if($password != $rPassword){
        $err['rPassword'] = 'Mat khau nhap lai khong dung';
    }
    var_dump($err);
    
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="../home.css">

    <title>register</title>
</head>
<body>

    <div class="container-fulid">
        
        <div class="row mt-3">
           <?php include '../add/header.php'?>
        </div>
        <hr  class="mt-5 "style="color: black; font-weight: bold;">
        <div class="row mt-5">
           <center>
            <div class="box">
                <form action="./processSignUp.php" method ="post" >
                    <h3 >Sign up </h3>
                    <hr class="mt-3">
                    <div class="input-group mb-3 px-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                        <input  name="username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        <!--<div class="has-error">
                            <?php echo (isset($err['username']))?$err['username']:'' ?> 
                        </div> -->
                    </div>
                    <div class="input-group mb-3 px-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                        <input  name="email" type="text" class="form-control" placeholder="email" aria-label="Email" aria-describedby="basic-addon1">
                        <!--<div class="has-error">
                            <?php echo (isset($err['email']))?$err['email']:'' ?> 
                        </div>-->
                    </div>
                    <div class="input-group mb-3 px-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                        <input  name="password" type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        <!--<div class="has-error">
                            <?php echo (isset($err['password']))?$err['password']:'' ?> 
                        </div> -->
                    </div>
                    <div class="input-group mb-3 px-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                        <input  name="rPassword" type="text" class="form-control" placeholder=" rPassword" aria-label="Password" aria-describedby="basic-addon1">
                        <!--<div class="has-error">
                            <?php echo (isset($err['rPassword']))?$err['rPpassword']:'' ?> 
                        </div>-->
                    </div>
                    
                    <div class="mt-3">
                    <button name="sbmSignUp" type="submit"  class="btn btn-warning" style="margin-left:260px ;">Register</button>
                    </div>
                </form>
                    
            </div>
           </center>
        </div>

       <div class="row mt-5">
        <hr  class="mt-5 "style="color: black; font-weight: bold;">
         <center style="color:black; font-weight:bold">TLU'S MUSIC GARDEN</center>
        </div> 
        


    </div>
</body>
</html>