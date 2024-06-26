<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Form_assign</title>
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/soft-ui-dashboard.min.css?v=1.0.2"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Expanded:wght@500&family=Lexend&family=Noto+Sans:wght@500&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">    <link rel="stylesheet" href="../assets/css/theme.css">
        <link rel="stylesheet" href="/CSDL2/app/views/assets/css/loopple/loopple.css">
        <link rel="stylesheet" href="/CSDL2/app/views/Form/form.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="module" src="/CSDL2/app/views/Form/form.js"></script>

    </head>
    
    <body class="g-sidenav-show" >
    <?php include "app/views/division/nav.php"; ?>
        <div class="main-content" id="panel">
            <form action="/CSDL2/add">
                <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 mt-3 shadow-none border-radius-xl" id="navbarTop">
                    <div class="container-fluid py-1 px-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Form</li>
                            </ol>
                            <h6 class="font-weight-bolder mb-0">Form</h6>
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
                                    <h6 class="mb-0" style="text-align: center;">Thêm bệnh nhân COVID-19</h6>
                                </div>
                                <div class="card-body p-3" >
                                
                                    <div style=" border: 0.5px dashed #BFBFBF; margin-top: 15px; margin-bottom: 15px;"></div>
        
        
                                    <ul class="list-group">
                                        <p style="text-align: center;">Vui lòng cung cấp thông tin chính xác để nhận kết quả xét nghiệm và giảm thiểu thời gian làm thủ tục tại nơi lấy mẫu</p>
                                        
                                        <div class="title p-2">Thông Tin Bệnh Nhân</div>

                                        <div class="list-group-item border-0 px-0">
                                            
                                            <div class="form-check form-switch ps-0 col-xl-4 me-5" >
                                                <label for="hovaten">Họ</label>
                                                <input name="lname" value="" type="text" class="form-control" id="hovaten" placeholder="Last name">
                                            </div>

                                            <div class="form-check form-switch ps-0 col-xl-4 me-5" >
                                                <label for="hovaten">Tên</label>
                                                <input name="fname" value="" type="text" class="form-control" id="hovaten" placeholder="First name">
                                            </div>
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3">
                                                <label for="cmnd">Số CMND/CCCD/PASSPORT</label>
                                                <input name="id" value="" type="text" class="form-control" id="cmnd" placeholder="Số CMND/CCCD/PASSPORT">
                                            </div>
                                        </div>
                                        <div class="list-group-item border-0 px-0">   
                                            <div class="form-check form-switch ps-0 col-xl-4 me-5">
                                              <label for="dienthoai">Số di động</label>
                                              <input name="phone" value="" type="text" class="form-control" id="dienthoai" placeholder="Số di động">
                                            </div>

                                            <div class="form-check form-switch ps-0 pb-3 col-xl-4 me-5">
                                                <label for="ngaysinh">Ngày sinh</label>
                                                <input name="birthday" value="" type="date" class="form-control" id="ngaysinh" placeholder="dd/mm/yyyy">
                                            </div>
                                            
                                        </div>
                                        <div class="form-check form-switch ps-0 " >
                                            <label for="quoctich">Giới Tính</label>
                                                <div class="border-0 px-0 ">
                                                    <div class="form-check form-switch ps-0 mb-3">
                                                           <input name="gender" class="form-check-input ms-auto" type="radio" id="Nam" value="Male" >
                                                           <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="Nam">Nam</label>
                                                    </div>
                                            
                                                    <div class="form-check form-switch ps-0 pb-3">
                                                        <input name="gender" class="form-check-input ms-auto" type="radio" id="Nữ" value="Female" >
                                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="Nữ">Nữ</label>
                                                    </div>
                                                </div>
                                        </div>
                                        
                                        <div class="title p-2">Thông Tin Liên Lạc</div>

                                        <div class="list-group-item border-0 px-0 ">
                                            

                                            
                                        </div>

                                        <div class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3 me-5">
                                               <label for="TP">Thành Phố</label>
                                                <select  id='province' class="form-control" onchange="document.getElementById('text_content1').value=this.options[this.selectedIndex].text">
                                                    <option value="">Thành Phố</option>
                                                </select>
                                                
                                            <input type="hidden" name="city" id="text_content1" value="" />
                                                
                                            </div>
            
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3 me-5">
                                                <label for="Q/H">Quận/Huyện</label>
                                                <select name ="district" id='district' class="form-control" onchange="document.getElementById('text_content2').value=this.options[this.selectedIndex].text">
                                                    <option value="">Quận/Huyện</option>
                                                </select>
                                                <input type="hidden" name="district" id="text_content2" value="" />

                                            </div>
            
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3 me-5">
                                                <label for="P/X">Phường/Xã</label>
                                                <select name ="ward" id='ward' class="form-control" onchange="document.getElementById('text_content3').value=this.options[this.selectedIndex].text">
                                                    <option value="">Phường/Xã</option>
                                                </select>
                                                <input type="hidden" name="ward" id="text_content3" value="" />
                                            </div>
                                        </div>
                                        <div class="list-group-item border-0 px-0">
                                        <div class="form-check form-switch ps-0 col-xl-4 pb-3 me-5">
                                                <label for="diachi">Số nhà, Tên đường</label>
                                                <input name="address" value="" type="text" class="form-control" id="diachi" placeholder="Địa chỉ" style ='width:335%'>
                                            </div>
                                            </div>
                                        <div class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3 me-5">
                                                <label for="">Tòa nhà</label>
                                                
                                                <select name ="building" id='buiding' class="form-control" >
                                                    <?php 
                                                    foreach($data['building'] as $item => $building){
                                                        ?>
                                                            <option value="<?php echo $building->getId()?>"><?php echo $building->getName()?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3 me-5">
                                                <label for="">Lầu</label>
                                                <select name ="floor" id='floor' class="form-control" >
                                                <?php 
                                                    foreach($data['floor'] as $item => $floor){
                                                        ?>
                                                            <option value="<?php echo $floor->getId()?>"><?php echo $floor->getName()?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3 me-5">
                                                <label for="">Phòng</label>
                                                <select name ="room" id='room' class="form-control" >
                                                <?php 
                                                    foreach($data['room'] as $item => $room){
                                                        ?>
                                                            <option value="<?php echo $room->getId()?>"><?php echo $room->getName()?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="list-group-item border-0 px-0">
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3 me-5">
                                                <label for="">Nhân viên</label>
                                                <select name ="staff_id" id='nurse' class="form-control" >
                                                <?php 
                                                    foreach($data['staff'] as $item => $nurse){
                                                        ?>
                                                            <option value="<?php echo $nurse->getUniqueNumber()?>"><?php echo $nurse->getUniqueNumber()?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3 me-5">
                                                <label for="">Y tá chăm sóc</label>
                                                <select name ="nurse_id" id='nurse' class="form-control" >
                                                <?php 
                                                    foreach($data['nurse'] as $item => $nurse){
                                                        ?>
                                                            <option value="<?php echo $nurse->getUniqueNumber()?>"><?php echo $nurse->getLname()." ".$nurse->getFname()?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                
                                        <div class="title p-2">Triệu Chứng</div>
                                        <div class="table pb-4" style="margin: 0 auto;">
                                            <table>
                                                <tr>
                                                <th style="width: 600px;">Triệu chứng</th>     
                                                    <th class="column-2">Có</th>
                                                    <th class="column-4">Chi tiết</th>
                                                    <th class="column-5">Thời gian mắc bệnh</th>
                                                    <th class="column-5">Thời gian hết bệnh</th>
                                                </tr>
                                                <?php 
                                                    foreach($data['symptom'] as $index => $symptom){
                                                        ?>
                                                        <tr>
                                                        <td class = "text-wrap"><?php echo $symptom->getName()?></td>
                                                        <td ><input type="checkbox" name="symptom[]" value='<?php echo $symptom->getId()?>'></td>
                                                        <td ><input class="form-control" type="text" name="Sdescription<?php echo $symptom->getId()?>" placeholder="Miêu tả chi tiết"></td>
                                                        <td ><input name="OnsetDate<?php echo $symptom->getId()?>" value="" type="date" class="form-control" id="s_date" placeholder="dd/mm/yyyy"></td>
                                                        <td ><input name="TerminationDate<?php echo $symptom->getId()?>" value="" type="date" class="form-control" id="e_date" placeholder="dd/mm/yyyy"></td>
                                                        </tr>       
                                                        <?php
                                                    }                                                   
                                                    ?>
                                                       <tr>
                                                       <td ><input name="diff1" type="input" class="form-control"  placeholder="khac"></td>
                                                        <td ><input type="checkbox" name="Sdiff" value=''></td>
                                                        <td ><input class="form-control" type="text" name="Sdescription" placeholder="Miêu tả chi tiết"></td>
                                                        <td ><input name="OnsetDate" value="" type="date" class="form-control" id="s_date" placeholder="dd/mm/yyyy"></td>
                                                        <td ><input name="TerminationDate" value="" type="date" class="form-control" id="e_date" placeholder="dd/mm/yyyy"></td>
                                                        </tr>        
                                                </tr>
                                            </table>
                                            
                                        </div>
                                        <div class="title p-2 ">Bệnh Nền</div>
                                        <div class="table pb-3" >
                                            <table style="width:100%;">
                                                <tr>
                                                    <th>Bệnh nền</th>
                                                    <th class="column-2">Có</th>
                                                    <th class="column-4" id="benhnendetail">Chi tiết</th>
                                                    
                                                </tr>                                                
                                                    <?php 
                                                    foreach($data['comorbidity'] as $index => $comorbidity){
                                                        ?>
                                                        <tr>
                                                        <td class="text-wrap"><?php echo $comorbidity->getName() ?></td>
                                                        <td><input type="checkbox" name="comorbidity[]" value = '<?php echo $comorbidity->getId() ?>'></td>
                                                        <td><input class="form-control" type="text" name="Cdescription<?php echo $comorbidity->getId()?>" placeholder="Miêu tả chi tiết"></td>
                                                        </tr>        
                                                        <?php
                                                    }                                                   
                                                    ?>
                                                     <tr>
                                                     <td ><input name="diff2" type="input" class="form-control"  placeholder="khac"></td>
                                                        <td><input type="checkbox" name="Cdiff" value = ''></td>
                                                        <td><input class="form-control" type="text" name="Cdescription" placeholder="Miêu tả chi tiết"></td>
                                                        </tr> 
                                            </table>
                                        </div>
        
                                        <div style="border: 0.5px solid #BFBFBF;"></div>

                                        <div class="list-group-item border-0 px-0 ">                                         
                                            <div>
                                                <button onclick="add()" id="submit" type="submit" style="
                                                    background-color: #102E9E; 
                                                    text-align: center; 
                                                    padding: 6px 12px 6px 12px;
                                                    border: 1px solid #BFBFBF;
                                                    border-radius: 4px;
                                                    color: aliceblue;">
                                                    ĐĂNG KÝ
                                                </button> 
                                        
                                                <a id="downloadLink" style="display: none;"></a>
                                                <button onclick="exportToPDF()" style="background-color: #28a5a7; border: none; padding: 6px 12px; border-radius: 4px; margin-left: 10px;">
                                                    <i class="exportButton"></i> Xuất PDF
                                                </button>
                                            </div>  
                                        </div>
                                        
                                    
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
