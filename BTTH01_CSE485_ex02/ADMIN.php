<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">-->


    <!-- text -->
    <link rel="stylesheet" href="./asset/bootstrap/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="index.css">
</head>

<body style="border: 1px solid blue;">
    <?php
        if(isset($_GET['page_layout_admin'])){ 
            switch ($_GET['page_layout_admin']){
                case 'admin':
                    require_once './admin/ADMIN.php';
                case 'category':
                    require_once './admin/category.php';
                    break; 
                case 'add_category':
                    require_once './admin/add_category.php';
                case 'edit_category':
                    require_once './admin/edit_category.php';
                    break; 
        
                default:
                    require_once './admin/ADMIN.php';
                    break;  
            }
        }else{
            require_once './admin/ADMIN.php';
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script> -->

</body>
</html>