

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
        
        <div class="row mt-5 px-5">
            <form method="POST" action="<?php echo DOMAIN . '/public/indexPatient.php?controller=patient&action=editPatient '?>">
                <div class="mt-3 text-uppercase text-success my-3 "> <center><b> CHỈNH SỬA DANH SÁCH BỆNH NHÂN</b></center></div>
                <div class="input-group mt-5 px-3">
                        <span class="input-group-text" id="basic-addon1">id Bệnh nhân</span>
                        <input name="idPatient" id="idPatient" type="text" value ="<?=$row->getIdPatient()?>" class="form-control" readonly >
                </div>

                <div class="input-group mt-5 px-3">
                        <span class="input-group-text" id="basic-addon1">Tên bệnh nhân</span>
                        <input name="patientName"  id = "patientName"type="text"  value ="<?=$row->getPatientName()?>" class="form-control">
                </div>
                <div class="input-group mt-5 px-3">
                        <span class="input-group-text" id="basic-addon1">Ngày khám</span>
                        <input name="date"  id = "date"type="text"  value ="<?=$row->getDate()?>" class="form-control">
                </div>
                <div class="input-group mt-5 px-3">
                        <span class="input-group-text" id="basic-addon1">Triệu chứng</span>
                        <input name="symptom"  id = "symptom"type="text"  value ="<?=$row->getSymtom()?>" class="form-control">
                </div>
                <div class="input-group mt-5 px-3">
                        <span class="input-group-text" id="basic-addon1">id Bác sĩ</span>
                        <input name="idDoctor"  id = "idDoctor"type="text"  value ="<?=$row->getIdDoctor()?>" class="form-control">
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