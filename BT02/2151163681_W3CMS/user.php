<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="shortcut icon" href="./img/Group 57116.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-2 bg-white left-part">
                <div class="mt-3"><img style="height:70px; width:200px" src="./img/Group 57116.png" alt=""></div>
                    <nav class="navbar navbar-expand-md navbar-light font-weight-bold">
                        <ul class="navbar-nav flex-column">

                            <li class="subnav dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                    <i class="bi bi-person icon-left-part"></i> Users
                                    <span class="badge light badge-sm badge-primary ms-2 mb-0">Modules</span>
        
                                </a>
                                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="#">User</a>
                                                <a class="dropdown-item" href="#">Group</a>
                                                <a class="dropdown-item" href="#">Permisions</a>
                                            </ul> 

                            <li class="subnav  dropdown">
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

                            <li class="subnav  dropdown ">
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
                            
                            <li class="subnav  ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-grid icon-left-part fa-5x"></i> Dashboard
                                </a>
                            </li>
                            <li class="subnav  ">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-book icon-left-part"></i> Courses
                                </a>
                            </li>
                            <li class="subnav ">
                            <a class="nav-link" href="#"><i class="bi bi-people icon-left-part"></i> Instructor</a>
                        </li><li class="subnav">
                            <a class="nav-link" href="#"><i class="bi bi-info-circle icon-left-part"></i> Apps</a>
                        </li><li class="subnav">
                            <a class="nav-link" href="#"><i class="bi bi-pie-chart icon-left-part"></i> Charts</a>
                        </li><li class="subnav">
                            <a class="nav-link" href="#"><i class="bi bi-star icon-left-part"></i> Bootstrap</a>
                        </li><li class="subnav">
                            <a class="nav-link" href="#"><i class="bi bi-heart icon-left-part"></i> Plugins</a>
                        </li><li class="subnav">
                            <a class="nav-link" href="#"><i class="bi bi-gear-wide icon-left-part"></i> Widget</a>
                        </li><li class="subnav">
                            <a class="nav-link" href="#"><i class="bi bi-file-earmark-check icon-left-part"></i> Forms</a>
                        </li><li class="subnav">
                            <a class="nav-link" href="#"><i class="bi bi-file-earmark-spreadsheet icon-left-part"></i> Table</a>
                        </li><li class="subnav">
                            <a class="nav-link" href="#"><i class="bi bi-file-earmark-break icon-left-part"></i> Pages</a>
                       </ul>

                    </nav>
                    <span class="text-made">Made with <i class="bi bi-heart-fill"></i> by DexignZone</span>



            </div>

            <div class="col-md-9">
                <div class="row mt-3 Header">
                        <div class="col-md-9">
                            <div class=" header_left d-flex  align-items-center">
                                <i class="bi bi-list fs-2 fw-bold"></i>
                                <span class="fs-2 fw-bold ms-2">User</span>
                            </div>
                        </div>
                        <div class="col-md-3 input-group">
                            <input type="text" class="form-control" placeholder="Search here..." aria-label="Search" >
                        </div>
                </div>
                <!-- filter -->
                <div class="main_filter mt-4 bg-white">
                    <div class=" mt-1 d-flex justify-content-between" >
                            <a class=" pl-4 bg-white  " style="color: #ff6a59; font-weight:bold; font-size:30px">Filter</a>
                            <a ><i style="color: #ff6a59; font-size:27px" class=" pr-4 bi bi-arrow-up-circle-fill"></i></a>
                    </div>
                    <div class="mt-3">
                        <div class="row">
                             <div class=" col-md-9 d-flex align-items-center ">
                                <div class="">
                                    <input class="filter_input me-4 px-4 py-2" type="email" placeholder="Email">
                                    <input class="filter_input me-4 px-4 py-2" type="number" placeholder="Mobile">
                                    <select class="filter_input me-4 px-4 py-2" name="" id="">
                                                    <option value="sel">Select Group</option>
                                                    <option value="adm">Admin</option>
                                                    <option value="mgr">Manager</option>
                                                    <option value="cus">Customer</option>
                                    </select>
                                </div>
                                
                            </div> 
                            <div class="col-md-3">
                                 <div class=" d-flex align-items-center justify-content-between">
                                            <button class="btn_filter "><i class="bi bi-search"></i>Filter</button>
                                            <button class="btn_clear">Clear</button>
                                </div>
                            </div>
                        </div>
                        <!-- -->
                        <div class="mt-3 main_users  justify-content-between ">
                            <div class="row">
                                
                                    <div class="col-md-9">
                                        
                                            <span class="btn_left">Users</span>
                                      
                                    </div>

                                    <div class="col-md-3">
                                    <button class="btn_del btndel_hover users_delete">Delete</button>
                                            <a href="#" class="btn_add  users_add text-uppercase ms-1">
                                                <span class="mx-3">Add user</span>
                                                <i class="bi bi-plus"></i>
                                            </a>
                                    
                                        
                                    </div>
                            
                            </div><button></button>
                            <div class="mt-3 users__content">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="padding-left:16px;"><input class="users__check" type="checkbox" name="" id=""></th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Groups</th>
                                            <th>Mobile</th>
                                            <th>Date Of Birth</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                          </tr>
                                    </thead>
                                    <tbody class="tbody">
                                        <tr>
                                            <td><input class="users__check" type="checkbox" name="" id=""></td>
                                            <td>abc</td>
                                            <td>abc@gmail.com</td>
                                            <td>Male</td>
                                            <td>Doctor</td>
                                            <td>2627297</td>
                                            <td>27/02/2002</td>
                                            <td><i class="status__icon bi bi-circle-fill"></i></td>
                                            <td>
                                                <a href="#"><i class="ac__shield bi bi-shield-shaded me-1 p-1"></i></a>
                                                <a href="#"><i class="ac__pen bi bi-pencil-fill me-1 p-1"></i></a>
                                                <a href="#"><i class="ac__trash bi bi-trash-fill me-1 p-1"></i></a>
                                            </td>
                                        </tr>
                                       
                                        <tr>
                                            <td><input class="users__check" type="checkbox" name="" id=""></td>
                                            <td>abc</td>
                                            <td>abc@gmail.com</td>
                                            <td>Male</td>
                                            <td>Doctor</td>
                                            <td>2627297</td>
                                            <td>27/02/2002</td>
                                            <td><i class="status__icon bi bi-circle-fill"></i></td>
                                            <td>
                                                <a href="#"><i class="ac__shield bi bi-shield-shaded me-1 p-1"></i></a>
                                                <a href="#"><i class="ac__pen bi bi-pencil-fill me-1 p-1"></i></a>
                                                <a href="#"><i class="ac__trash bi bi-trash-fill me-1 p-1"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="users__check" type="checkbox" name="" id=""></td>
                                            <td>abc</td>
                                            <td>abc@gmail.com</td>
                                            <td>Male</td>
                                            <td>Doctor</td>
                                            <td>2627297</td>
                                            <td>27/02/2002</td>
                                            <td><i class="status__icon bi bi-circle-fill"></i></td>
                                            <td>
                                                <a href="#"><i class="ac__shield bi bi-shield-shaded me-1 p-1"></i></a>
                                                <a href="#"><i class="ac__pen bi bi-pencil-fill me-1 p-1"></i></a>
                                                <a href="#"><i class="ac__trash bi bi-trash-fill me-1 p-1"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                  </table>  
                            </div>
                            <div class="users__footer mt-4">
                                <div class="row">
                                    <div class="col-md-9">
                                        <span class="nav__footer">Page 1 of 4.</span>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="users__footer-right">
                                            <ul class="users__footer-page d-flex list-unstyled">
                                                <li><a class="text-decoration-none" href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                                                <li><a class="text-decoration-none" href="#">1</a></li>
                                                <li><a class="text-decoration-none" href="#">2</a></li>
                                                <li><a class="text-decoration-none" href="#">3</a></li>
                                                <li><a class="text-decoration-none" href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                                            
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                </div>

            </div>
            <div class="col-md-1  h-100 nav_right bg-white ">
                <div class=" btn_distance mt-5 ">
                    <button  class="btn_set " > <i class="bi bi-gear-fill"></i></button>
                    <button  class="btn_set mt-5"> <i class="bi bi-envelope-fill"></i></button>
                    <button  class="btn_set mt-5"> <i class="bi bi-bell-fill"></i></button>

                </div>
            </div>
        </div>
    </div>
</body>
</html>