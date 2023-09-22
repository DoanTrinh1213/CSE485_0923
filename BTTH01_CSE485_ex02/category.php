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
    <title>SThể loại-Vùng quản trị</title>
</head>
<body>
    <div class="container-fulid">
        <div class="row pl-3">
            <?php  include"./add/navbar.php"?>
        
        </div>
        <div class="row mt-5 px-5">
                <div><button type="button"  class="btn btn-success " >Thêm mới</button></div>
                <div class="mt-3">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên thể loại</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td></td>
                                <td>
                                    <a href="edit_category.php"><i class="bi bi-pencil-square"></i>Sửa</a>
                                </td>
                                <td>
                                    <a href=""><i class="bi bi-trash3"></i>Xóa</a>
                                </td>
                            </tr>
                </tbody>
                    </table>
                </div>
        </div>
        

        <div class="row mt-5">
        <hr  class="mt-5 "style="color: black; font-weight: bold;">
         <center style="color:black; font-weight:bold">TLU'S MUSIC GARDEN</center>
        </div>
     </div>
    
</body>
</html>