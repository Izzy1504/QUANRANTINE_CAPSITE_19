<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Detail Patient</title>
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/soft-ui-dashboard.min.css?v=1.0.2"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Expanded:wght@500&family=Lexend&family=Noto+Sans:wght@500&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">    <link rel="stylesheet" href="../assets/css/theme.css">
        <link rel="stylesheet" href="/CSDL2/app/views/assets/css/loopple/loopple.css">
        <link rel="stylesheet" href="/CSDL2/app/views/Form/form.css">
        <link rel="stylesheet" href="/CSDL2/app/views/patients/detail.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="module" src="/CSDL2/app/views/Form/form.js"></script>
</head>
<style>
    @media print {
        .no-print {
            display: none;
        }
    }
</style>
    <body class="g-sidenav-show" >
    <?php include "app/views/division/nav.php"; ?>
        <div class="main-content" id="panel">
            <form action="">
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 mt-3 shadow-none border-radius-xl no-print " id="navbarTop" >
                    <div class="container-fluid py-1 px-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Detail</li>
                            </ol>
                            <h6 class="font-weight-bolder mb-0">Detail</h6>
                        </nav>
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
                <div class="container-fluid pt-3" >
                    <div class="row removable mb-4" >
                        <div class="col-12  mb-4" >
                            <div class="card h-100" style="width: 100%;">
                            
                                <div class="card-header pb-0 p-3">
                                    <h6 class="mb-0">Thông tin bệnh nhân</h6>
                                </div>

                                <div class="card-body p-3" >
                                
                                    <div style=" border: 0.5px dashed #BFBFBF; margin-top: 15px; margin-bottom: 15px;"></div>
                                        
        
                                        <ul class="list-group">
                                            <div class="title p-2">Thông Tin Cá Nhân</div>
    
                                            <div class="list-group-item border-0 px-0">
                                                
                                                <div class="form-check form-switch ps-0 col-xl-4 me-5" >
                                                    <label for="hovaten">Họ và Tên</label>
                                                    <p class="form-control" name="hovaten" id="hovaten"><?php echo $data['patient']->getLastName()." ".$data['patient']->getFirstName() ?></p>
                                                </div>

                                                <div class="form-check form-switch ps-0 col-xl-4 me-5">
                                                    <label for="dienthoai">Số di động</label>
                                                    <p name="dienthoai"  class="form-control" id="dienthoai"><?php echo $data['patient']->getPhone()?></p>
                                                </div>

                                                <div class="form-check form-switch ps-0 col-xl-4 pb-3">
                                                    <label for="cmnd">Số CMND/CCCD/PASSPORT</label>
                                                    <p name="cmnd" class="form-control" id="cmnd"><?php echo $data['patient']->getId()?></p>
                                                </div>
                                            </div>
                                            <div class="list-group-item border-0 px-0">   
                                                <div class="form-check form-switch ps-0 pb-3 col-xl-4 me-5">
                                                    <label for="ngaysinh">Ngày sinh</label>
                                                    <p name="ngaysinh" type="date" class="form-control" id="ngaysinh"><?php echo $data['patient']->getBirthday()->format('m/d/Y')?></p>
                                                </div>
                                                <div class="form-check form-switch ps-0 pb-3 col-xl-4 me-5">
                                                    <label for="ngaysinh">Giới tính</label>
                                                    <p name="ngaysinh" type="date" class="form-control" id="ngaysinh"><?php echo $data['patient']->getGender()?></p>
                                                </div>
                                            </div>
                                       
                                        
                                        

                                        <div class="list-group-item border-0 px-0 ">
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3 me-5">
                                                <label for="diachi">Địa chỉ</label>
                                                <p name="diachi" class="form-control1" id="diachi" style='width:345%'><?php echo $data['patient']->getAddress().", ".$data['patient']->getWard().", ".$data['patient']->getDistrict().", ".$data['patient']->getCity()?></p>
                                            </div>

                                            
                                        </div>

                                        <div class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3 me-5">
                                                <label for="">Nhân viên tiếp nhận</label>
                                                <p type="text" class="form-control" name="" id=""><?php 
                                                 require_once'app/models/StaffModel.php'; 
                                                 echo $data['patient']->getStaffId()!==null ? StaffModel::getNameById($data['patient']->getStaffId()):"";?>
                                                 
                                                 </p>
                                            </div>
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3 me-5">
                                                <label for="">Y tá chăm sóc</label>
                                                <p type="text" class="form-control" name="" id=""><?php 
                                                 require_once'app/models/NurseModel.php';
                                                 echo $data['patient']->getNurseId() !== null ?NurseModel::getNameById($data['patient']->getNurseId()):'';?></p>
                                            </div>
                                        </div>
                                        
                                        <div style=" border: 0.5px dashed #BFBFBF; margin-top: 15px; margin-bottom: 15px;"></div>
                                        <div class="title p-2">Hồ Sơ Bệnh Án</div>
                    <!-- benh nen -->
                    <div style="margin-top: 30px; margin-bottom: 50px;">
                    <strong>Underlying Disease</strong>
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                <th>Comorbidity</th>
                                <th>Describe</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($data['comorbidity'] as $index => $comorbidity){
                                    ?>
                                        <tr>
                                <td><?php require_once 'app/models/ComorbidityModel.php';echo ComorbidityModel::getNameById($comorbidity->getComorbidityId())?></td>
                                <td><?php echo $comorbidity->getDescription()?></td>
                                </tr>
                                    <?php
                                }
                                ?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
            
                    <!-- trieu chung -->
                    <div style="margin-bottom: 50px;">
                    <strong>Symptom</strong>
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                <th>Symptom</th>
                                <th>Describe</th>
                                <th>Ngày mắc bệnh</th>
                                <th>Ngày hết bệnh</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                foreach($data['symptom'] as $index => $symptom){
                                    ?>
                                        <tr>
                                <td><?php require_once 'app/models/SymptomModel.php';echo SymptomModel::getNameById($symptom->getSymptomId())?></td>
                                <td><?php echo $symptom->getDescription()?></td>
                                <td><?php echo $symptom->getOnsetDate()->format('m/d/Y')?></td>
                                <td><?php 
                                if($symptom->getTerminationDate() != null){
                                    echo $symptom->getTerminationDate()->format('m/d/Y');
                                }
                                    ?></td>
                                </tr>
                                    <?php
                                }
                                ?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
               

                    <!-- Testing table -->
                    <div style="margin-bottom: 50px;">
                    <strong>Testing Table</strong>
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                <th>Test type</th>
                                <th>Date</th>
                                <th>Result</th>
                                <th>CT Value</th>
                                <th>SPO2 Level</th>
                                <th>RR</th>
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
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                    </div>

                    <!-- warning table -->
                    <div style="margin-bottom: 50px;">
                                <strong>Warning Table</strong>
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                            
                                            <th>Date</th>
                                            <th>Reason</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            foreach($data['warning'] as $index => $warning){
                                                ?>
                                                <tr>
                                                
                                                <td><?php echo $warning->getdate()->format('m/d/Y') ?></td>
                                                <td><?php echo $warning->getReason()?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                           
                                           
                                            <tr></tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                
                            <!-- Treatment -->
                            <div style="margin-bottom: 50px;">
                            <strong>Treatment Table</strong>
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                         
                                            <th>Doctor</th>
                                            
                                            <th>Medication</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Result</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            foreach($data['treatment'] as $index=> $treatment){
                                                ?>
                                                     <tr>
                                            
                                            <td><?php 
                                            require_once'app/models/DoctorModel.php';
                                            echo DoctorModel::getNameById($treatment->getDoctorID()) ?></td>
                                         
                                            <td><?php 
                                             require_once'app/models/MedicationModel.php';
                                             echo MedicationModel::getNameById($treatment->getMedicationID()) ?></td>
                                            <td><?php echo $treatment->getStartDate()->format('m/d/Y') ?></td>
                                            <td><?php 
                                            if($treatment->getEndDate() != null){
                                                echo $treatment->getEndDate()->format('m/d/Y');
                                            }
                                             ?></td>
                                            <td class="result"><?php echo $treatment->getResult() ?></td>
                                            </tr>
                                                <?php
                                            }
                                            
                                            ?>
                                            <tr>
                                            <tr></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                <!-- Patient LH -->
                                <div style="margin-bottom: 50px;">
                                <strong>Patient History Location</strong>
                                                <div class="table-responsive p-0">
                                                        <table class="table align-items-center mb-0">
                                                            <thead>
                                                                <tr>
                                                               
                                                                <th>Room</th>
                                                                <th>Date Admited</th>
                                                                <th>Date Discharge</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php 
                                                            foreach($data['phl'] as $item => $phl){
                                                                ?>
                                                                 <tr>
                                                                
                                                                <td><?php require_once 'app/models/RoomModel.php';echo RoomModel::getNameById($phl->getRoomId()) ?></td> 
                                                                <td><?php echo $phl->getDateAdmitted()->format('m/d/Y')?></td> 
                                                                <td><?php
                                                                if( $phl->getDateDischarged()!=null){
                                                                    echo $phl->getDateDischarged()->format('m/d/Y');
                                                                }
                                                               ?></td>  
                                                                </tr>
                                                                <?php
                                                            }
                                                            ?>
                                                                <tr></tr>
                                                            </tbody>
                                                        </table>
                                                </div>
                                </div>

                                <div class="list-group-item border-0 px-0 no-print">
                                                            <a id="downloadLink" style="display: none;"></a>
                                                            <button onclick="exportToPDF()" style="background-color: #28a5a7; border: none; padding: 6px 12px; border-radius: 4px; margin-left: 10px;">
                                                 <i class="exportButton"></i> Xuất PDF
                                                </button>
                                                </div>
                                        
                                        
                               
                              
                            </div>
                            
                            
                            
                        </div>
                    </div>
            </form>
            <script>
            function exportToPDF() {
                // Display the pop-up modal
                var modal = confirm("Do you want to export to PDF?");

                // Check user's choice
                if (modal) {
                    // User clicked Confirm, execute the function to print to PDF
                    print();
                   
                    window.onfocus = function(){
                        alert('hello')
                    } 
                } else {
                    // User clicked Cancel, do nothing or add cancellation logic here
                }
            }



        </script>
    
                                    </ul>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
            </form>

        <!-- <script>
          function mySelectHandler(name){
            var mySelect = $('select[name=' + name)
            console.log("object "+ mySelect.toSource());
          }
        </script> -->
    

        
    </body>
</html>
