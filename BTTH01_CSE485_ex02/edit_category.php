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
    <title>Sửa thông tin thể loại</title>
</head>
<body>
    <div class="container-fulid">
        <div class="row pl-3">
            <?php  include"./add/navbar.php"?>
        
        </div>
        <div class="row mt-5 px-5">
            <div class="mt3"> <center><b> SỬA THÔNG TIN THỂ LOẠI</b></center></div>
            <div class="input-group mt-5 px-3">
                    <span class="input-group-text" id="basic-addon1">Mã thể loại</span>
                    <input name="idtheloai" type="text" class="form-control" placeholder="1" >
            </div>
            <div class="input-group mt-3 px-3">
                    <span class="input-group-text" id="basic-addon1">Tên thể loại</span>
                    <input  name="nametheloai "type="text" class="form-control" placeholder="Nhạc trữ tình" >
            </div>
            <div class="mt-3 d-flex justify-content-end" >
                <button type="button"  class="btn btn-success "  style="margin-right:10px;">Lưu  lại</button>
                <button type="button" class="btn btn-warning " >Quay lại</button>
            </div>
            

        </div>

        <div class="row mt-5">
        <hr  class="mt-5 "style="color: black; font-weight: bold;">
         <center style="color:black; font-weight:bold">TLU'S MUSIC GARDEN</center>
        </div>
     </div>
    </div>
</body>
</html>