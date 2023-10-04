<?php 
    require_once "../config/connect.php";
    $sql = "SELECT * FROM theloai";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $theloai = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="../home.css">
    <title>Thể loại-Vùng quản trị</title>
</head>
<body>
    <?php 
       include "./processCategory.php";
    ?>
   
    <div class="container-fluid">
        <div class="row pl-3">
            <?php  include "../add/navbar.php"?>
        </div>
        <div class="row mt-5 px-5">
            <div>
                <a type="submit" href="./add_category.php" class="btn btn-success">Thêm mới</a>
            </div>
            <div class="mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Ma the loai</th>
                            <th scope="col">Tên thể loại</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $row){ ?>
                        <tr>
                            <td> <?= $row[0] ?></td>
                            <td> <?= $row[1] ?></td>
                            <td>
                                <a href="edit_category.php?ma_tloai=<?=$row[0] ?>"><i class="bi bi-pencil-square"></i></a>
                            </td>
                            <td>
                                <a  onclick="return Del('<?php echo $row[0];?>,<?php echo $row[1];?>')"  href="./processDelete.php?ma_tloai=<?=$row[0]; ?>&ten_tloai=<?=$row[0];?>" ><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal -->
       <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thông báo</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Bạn chắc chắn muốn xóa <?=$row[1];?>
                    </div>
                    <div class="modal-footer">
                        <a href="processDelete.php?ma_tloai=<?= $row[0] ?>" class="btn btn-danger">Xóa</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="row mt-5">
            <hr class="mt-5" style="color: black; font-weight: bold;">
            <center style="color:black; font-weight:bold">TLU'S MUSIC GARDEN</center>
        </div>
    </div>
    <script>
        function Del(id,name){
            return confirm("Bạn chắc chắn muốn xoá id: " + id + " " + name + "?");
        }
    </script>

</body>
</html>