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
    <title>Thêm mới</title>
</head>
<body>
  
   
    <div class="container-fulid">
        <?php  include "header.php"?>
        <div class="row mt-5 px-5">
            <form method="POST" action="<?php echo DOMAIN . '/public/index.php?controller=doctor&action=editDoctor '?>">
                <div class="mt-3 text-uppercase text-success my-3 "> <center><b> CHỈNH SỬA DANH SÁCH BÁC SĨ</b></center></div>
                <div class="input-group mt-5 px-3">
                        <span class="input-group-text" id="basic-addon1">id Bác sĩ</span>
                        <input name="idDoctor" id="idDoctor" type="text" value ="<?=$row->getIdDoctor()?>" class="form-control" readonly >
                </div>

                <div class="input-group mt-5 px-3">
                        <span class="input-group-text" id="basic-addon1">Tên bác sĩ</span>
                        <input name="doctorName"  id = "doctorName"type="text"  value ="<?=$row->getDoctorName()?>" class="form-control">
                </div>
                <div class="input-group mt-5 px-3">
                        <span class="input-group-text" id="basic-addon1">Tên Phòng Khám</span>
                        <input name="specialist"  id = "specialist"type="text"  value ="<?=$row->getSpecialist()?>" class="form-control">
                </div>
                
                <div class="mt-3 d-flex justify-content-end" >
                    <button  name ="edit"  type="sbmClass"  class="btn btn-success "  style="margin-right:10px;">Sửa</button>
                    <a name ="back" href="<?php echo DOMAIN."/public"?>" type="button" class="btn btn-warning " >Quay lại</a>
                </div>
            </form>
           

        </div>

        
     </div>
    
</body>
</html>