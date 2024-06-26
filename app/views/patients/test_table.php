<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Builder</title>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/soft-ui-dashboard.min.css?v=1.0.2">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="/csdl2/app/views/assets/css/theme.css">
    <link rel="stylesheet" href="/csdl2/app/views/assets/css/loopple/loopple.css">
    <link rel="stylesheet" href="/csdl2/app/views/patients/patient.css">
    <script src="app/views/patients/pagination.js"></script>
</head>

<body class="mainpage">
     <!-- đọc đoạn nav bar bên phải  -->
     <?php

use LDAP\Result;

 include "app/views/division/nav.php"; ?>
<!-- ============================================================================== -->
    <div class="main-content" id="panel">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 mt-3 shadow-none border-radius-xl" id="navbarTop">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Test Table
                    </h6>
                </nav>
               <!-- Đây là đoạn code dành cho searh đã được link  -->
               <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0 login_logo">
                            <i class="fa fa-user-tie me-sm-1" aria-hidden="true"></i>
                            <span class="d-sm-inline d-none">Admin</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="./login/login.php" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="" class="nav-link text-body p-0">
                            <i class="fa fa-sign-out" id= "logoutLink"
                                aria-hidden="true"></i>
                        </a>
                

                </ul>
    <script>
                    document.getElementById("logoutLink").addEventListener("click", function (event) {
                        event.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết

                        // Sử dụng AJAX để gọi hàm logout từ máy chủ
                        var xhr = new XMLHttpRequest();
                        var url = "./account/logout"; // Thêm tham số function với giá trị logout
                        xhr.open("GET", url, true);
                        xhr.onreadystatechange = function () {
                            if (xhr.readyState == 4) {
                                console.log(xhr.status);
                                console.log(xhr.responseText);

                                if (xhr.status == 200) {
                                    // Chuyển hướng đến trang đăng nhập sau khi đăng xuất thành công
                                    window.location.href = "./account";
                                }
                            }
                        };
                        xhr.send();
                    });


    </script>
            </div>
        </nav>
        <div class="container-fluid pt-3">
            <div class="card mb-4">
                <div class="card-header pb-0 flex-col" >
                <!-- <h6>Test Table </h6> -->
                    
                    

                </div>
               
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table_patient align-items-center mb-0">
                            <thead>
                                <tr>
                                <th class="th_patient">Type test</th>
                                <th class="th_patient">Date</th>
                                <th class="th_patient">Result</th>
                                <th class="th_patient">CT Value</th>
                                <th class="th_patient">SPO2 Level</th>
                                <th class="th_patient">RR</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($data['PCR'] as $index => $PCR){
                                    ?>
                                <tr>
                                <td class="patient-id td_patient">PCR</td>

                                <td class="td_patient"><?php echo $PCR->getDate()->format('m/d/Y')?></td>
                                <td class="result"><?php echo $PCR->getResult()?></td>
                                <td class="td_patient"><?php echo $PCR->getCtValue()?></td>
                                <td class="spo2 td_patient"></td>
                                <td class="td_patient"></td>
                                </tr>

                                <?php
                                }
                                ?>
                                 <?php
                                foreach($data['QUICK'] as $index => $PCR){
                                    ?>
                                <tr>
                                <td class="patient-id td_patient">Quick</td>

                                <td class="td_patient"><?php echo $PCR->getDate()->format('m/d/Y')?></td>
                                <td class="result"><?php echo $PCR->getResult()?></td>
                                <td class="td_patient"><?php echo $PCR->getCtValue()?></td>
                                <td class="spo2 td_patient"></td>
                                <td class="td_patient"></td>
                                </tr>

                                <?php
                                }
                                ?>
                                 <?php
                                foreach($data['SPO2'] as $index => $PCR){
                                    ?>
                                <tr>
                                <td class="patient-id td_patient">SPO2</td>

                                <td class="td_patient"><?php echo $PCR->getDate()->format('m/d/Y')?></td>
                                <td class="result"></td>
                                <td class="td_patient"></td>
                                <td class="spo2 td_patient"><?php echo $PCR->getSpo2Level()?></td>
                                <td class="td_patient"></td>
                                </tr>

                                <?php
                                }
                                ?>
                                  <?php
                                foreach($data['RR'] as $index => $PCR){
                                    ?>
                                <tr>
                                <td class="patient-id td_patient">RR</td>

                                <td class="td_patient"><?php echo $PCR->getDate()->format('m/d/Y')?></td>
                                <td class="result"></td>
                                <td class="td_patient"></td>
                                <td class="spo2 td_patient"></td>
                                <td class="td_patient"><?php echo $PCR->getRespiratoryRate()?></td>
                                </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          


        </div>


        <!-- Footer -->
    </div>
    <footer class="footer pt-3 pb-4">
        
    </footer>
    
    <script src="../assets/js/loopple/loopple.js"></script>
    
</body>