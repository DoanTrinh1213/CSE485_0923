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
    <link rel="stylesheet" href="home.css">

    <title>Login</title>
</head>
<body>
    <div class="container-fulid">
        
        <div class="row mt-3">
           <?php include'./add/header.php'?>
        </div>
        <hr  class="mt-5 "style="color: black; font-weight: bold;">
        <div class="row mt-5">
           <center>
            <div class="box">
                <h3 >Sign In </h3>
                <hr class="mt-3">
                <div class="input-group mb-3 px-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3 px-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                    <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                </div>
                <div class="mb-3  " style="margin-right:200px ;">
                    <input class="form-check-input" type="checkbox" > <span>Remember  Me</span>
                </div>
                <div class="mt-3">
                <button type="button" class="btn btn-warning" style="margin-left:260px ;">Login</button>
                </div>
                <hr class="mt-5">
                   
                    <p style="display: inline;" > Don't have an account? </p> 
                    <span style="color:yellow; margin-left:10px;"> Sign up</span> 
                    <p style="color:yellow"> Forgot your password?</p>
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