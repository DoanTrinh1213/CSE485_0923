<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="./img/Group 57116.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="dashbroard.css">
</head>
<body>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-3 bg-white">
                <div class="mt-3"><img src="./img/Group 57116.png" alt=""></div>
                    <nav class="navbar navbar-expand-md navbar-light  font-weight-bold">
                        <ul class="navbar-nav flex-column">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                    <i class="bi bi-person icon-left-part"></i> Users
                                    <span class="badge light badge-sm badge-primary ms-2 mb-0">Modules</span>
        
                                </a>
                                       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="user.php">Users</a>
                                                <a class="dropdown-item" href="#">Group</a>
                                                <a class="dropdown-item" href="#">Permisions</a>
                                            </ul> 
                            </li>

                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-box-seam icon-left-part"></i> CMS
                                    <span class="badge light badge-sm badge-primary ms-2 mb-0">Modules</span>
                                </a>
                              
                                   <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="#">Page</a>
                                        <a class="dropdown-item" href="#">Blog</a>
                                        <a class="dropdown-item" href="#">Comment</a>
                                    </ul> 
                            </li>

                            <li class="nav-item  dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-gear icon-left-part icon-left-part"></i> Config
                                    <span class="badge light badge-sm badge-primary ms-2 mb-0">Modules</span>
                                </a>
                              
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="#">Site</a>
                                    <a class="dropdown-item" href="#">Reading</a>
                                     <a class="dropdown-item" href="#">Comment</a>
                                </ul> 
                            </li>
                            
                            <li class="nav-item  ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-grid icon-left-part fa-5x"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-book icon-left-part"></i> Courses
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-people icon-left-part"></i> Instructor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-info-circle icon-left-part"></i> Apps</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-pie-chart icon-left-part"></i> Charts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-star icon-left-part"></i> Bootstrap</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-heart icon-left-part"></i> Plugins</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-gear-wide icon-left-part"></i> Widget</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-file-earmark-check icon-left-part"></i> Forms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-file-earmark-spreadsheet icon-left-part"></i> Table</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-file-earmark-break icon-left-part"></i> Pages</a>
                            </li>
                       </ul>

                    </nav>
                    <span class="text-made">Made with <i class="bi bi-heart-fill"></i> by DexignZone</span>

            </div>
            <div class="col-md-8">
                <div class="row mt-3 Header">
                    <div class="col-md-9">
                        <div class=" header_left d-flex  align-items-center">
                            <i class="bi bi-list fs-2 fw-bold"></i>
                            <span class="fs-2 fw-bold ms-2">Dashboard</span>
                        </div>
                    </div>
                    <div class="col-md-3 input-group">
                        <a class="input-group-text box-search bg-white" role="button"><i class="bi bi-search"></i></a>
                        <input type="text" class="form-control" placeholder="Search here..." aria-label="Search" aria-describedby="addon-wrapping">
                    </div>
                </div>
                <div class="maincontent mt-4 mx-2">
                    <div class="row">
                        <div class="col-xl">
                            <img  style="height:100% ; width:100%"src="./img/jion.png" alt="">
                        </div>
                        <div class="col-xl">
                            <img  style="height:100% ; width:100%" src="./img/activity.png" alt="">
                        </div>
                    </div>
                    <div class="row mt-4">
                        
                            <div class="col-xl">  <img  style="height:110% ; width:100%"src="./img/1500.png" alt=""></div>
                            <div class="col-xl"> <img  style="height:110% ; width:100%"src="./img/1112.png" alt=""></div>
                            <div class="col-xl"> <img  style="height:110% ; width:100%"src="./img/903.png" alt=""></div>
                       
                    </div>
                    <div class=" mt-4">
                        <div><img  style="height:100% ; width:100%"src="./img/score.png" alt=""></div>
                    </div>
            
                </div>
            </div>
           
            <div class="col-md-1 bg-white ">
                <div class="btn-distance px-4">
                <button  class="btn mt-5 "> <i class="bi bi-gear-fill"></i></button>
                <button  class="btn mt-5"> <i class="bi bi-envelope-fill"></i></button>
                <button  class="btn mt-5"> <i class="bi bi-bell-fill"></i></button>

                </div>
            </div>
        </div>
    </div>
</body>
</html>