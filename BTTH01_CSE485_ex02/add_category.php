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
    <link rel="stylesheet" href="index.css">
    <title>Thêm mới thể loại</title>
</head>
<body>
    <?php  require_once './config/connect.php'?>
    <?php 
        if(isset($_POST['add'])){
            $ten_tloai = $_POST['ten_tloai'];
             $sql = "INSERT INTO theloai(ten_tloai) values ( '' ,'$ten_tloai') ";
             $query = mysqli_query($conn, $sql);
             header('location: category.php');
        }

    ?> 
    <div class="container-fulid">
        <div class="row pl-3">
            <?php  include "./add/navbar.php"?>
        
        </div>
        <div class="row mt-5 px-5">
            <form method="POST">
                <div class="mt3"> <center><b> THÊM MỚI THỂ LOẠI</b></center></div>
                <div class="input-group mt-5 px-3">
                        <span class="input-group-text" id="basic-addon1">Tên thể loại</span>
                        <input name="ten_tloai" type="text" class="form-control" placeholder="" >
                </div>
                
                <div class="mt-3 d-flex justify-content-end" >
                    <button  name ="add"  type="submit"  class="btn btn-success "  style="margin-right:10px;">Thêm</button>
                    <a name ="back" href="./category.php" type="button" class="btn btn-warning " >Quay lại</a>
                </div>
            </form>
           

        </div>

        <div class="row mt-5">
        <hr  class="mt-5 "style="color: black; font-weight: bold;">
         <center style="color:black; font-weight:bold">TLU'S MUSIC GARDEN</center>
        </div>
     </div>
    </div>
</body>
</html>