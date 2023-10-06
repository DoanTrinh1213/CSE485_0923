<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <title>DanhsachLop</title>

</head>
<body>
    <div class="container-build">
    <?php  include "header.php"?>
         <p class=" text-lg  text-center text-success mt-3"> DANH SACH BỆNH NHÂN </p>
        <div class="mt-5">
            <div>
                <a type="submit" href="?controller=patient&action=add" class="btn btn-success mb-3 fw-b">Thêm mới bệnh nhân</a>
            </div> 
            
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên bệnh nhân</th>
                            <th scope="col">Ngày khám</th>
                            <th scope="col">Triệu chứng</th>
                            <th scope="col">id Bác sĩ</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    
                    </thead>
                    <tbody>
                    <?php 
                        //   $doctors =[];
                        foreach($patients as $row){ 
                    ?> 
                    <tr>
                        <td scope="row"><?=  $row->getIdPatient();?></td>
                        <td><?=  $row->getPatientName();?></td>
                        <td><?=  $row->getDate();?></td>
                        <td><?=  $row->getSymptom();?></td>
                        <td><?=  $row->getIdDoctor();?></td>
                        <td><a href="<?php echo DOMAIN . '/public/indexPatient.php?controller=patient&action=EditPatient&idPatient= '.$row->getIdPatient()?>"><i class="bi bi-pencil-square text-black "></i></a></td>
                        <td>
                        <form action="<?php echo DOMAIN . '/public/indexPatient.php?controller=patient&action=delete '?>" method="post">
                                            <input hidden name="id" type="text" value="<?=  $row->getIdPatient() ?>"/>
                                            <button class="btn" onclick="return Del('<?=$row->getIdPatient() ?>')"><i class="bi bi-trash3"></i></button>
                                        </form>

                            

                </tr>
                <?php }?>

                    </tbody>
                </table>
        </div>
    </div>
    <script>
        function Del(id){
            return confirm("Bạn chắc chắn muốn xoá id: " + id + ""+ "?");
        }
    </script>
</body>
</html>