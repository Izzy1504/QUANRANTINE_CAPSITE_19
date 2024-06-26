
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
        <link rel="stylesheet" href="../assets/css/loopple/loopple.css">
        <link rel="stylesheet" href="../Form/form.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
        
        
        
      
    </head>
    
    <body class="g-sidenav-show" >
    <?php include "../nav.php"; ?>
        <div class="main-content" id="panel">
            <form action="">
                <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 mt-3 shadow-none border-radius-xl" id="navbarTop">
                    <div class="container-fluid py-1 px-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Form</li>
                            </ol>
                            <h6 class="font-weight-bolder mb-0">Form</h6>
                        </nav>
                        <?php include "../mod.php"; ?>
                    </div>
                </nav>
                <div class="container-fluid pt-3">
                    <div class="row removable mb-4">
                        <div class="col-12  mb-4">
                            <div class="card h-100">
                                <div class="card-header pb-0 p-3">
                                    <h6 class="mb-0">Thêm bệnh nhân COVID-19</h6>
                                </div>
                                <div class="card-body p-3">
                                
                                    <div style=" border: 0.5px dashed #BFBFBF; margin-top: 15px; margin-bottom: 15px;"></div>
        
        
                                    <ul class="list-group">
                                        <p>Vui lòng cung cấp thông tin chính xác để nhận kết quả xét nghiệm và giảm thiểu thời gian làm thủ tục tại nơi lấy mẫu</p>
                                        <div class="list-group-item border-0 px-0 ">
                                            <div class="form-check form-switch ps-0 col-xl-4" style="width: 50%;">
                                              <label for="dienthoai">Số di động</label>
                                              <input name="dienthoai" value="" type="text" class="form-control" id="dienthoai" placeholder="Số di động">
                                            </div>
        
                                            <div class="form-check form-switch ps-0 col-xl-4" style="width: 50%;">
                                                <label for="hovaten">Họ và tên</label>
                                                <input name="hovaten" value="" type="text" class="form-control" id="hovaten" placeholder="Họ và tên">
                                            </div>
        
                                        </div>
        
                                        <div class="list-group-item border-0 px-0 " style="width: 50%;">
                                            <div class="form-check form-switch ps-0 pb-3">
                                                <label for="ngaysinh">Ngày sinh</label>
                                                <input name="ngaysinh" value="" type="date" class="form-control" id="ngaysinh" placeholder="dd/mm/yyyy">
                                            </div>
        
                                            <div class="form-check form-switch ps-0">
                                                <label for="quoctich">Quốc tịch</label>
                                                <select name="quoctich" class="form-control" id="quoctich" placeholder="Quốc tịch" >
                                                    <option value="">Chọn Quốc tịch</option>
                                                </select>
                                            </div>
                                            
                                            <script>
                                                var selectElement = document.getElementById('quoctich');
                                            
                                                fetch('https://restcountries.com/v3.1/all')
                                                    .then(response => response.json())
                                                    .then(countries => {
                                                           // Sắp xếp danh sách theo tên quốc gia (tùy chỉnh theo nhu cầu của bạn)
                                                                 countries.sort((a, b) => a.name.common.localeCompare(b.name.common));
                                                        countries.forEach(country => {
                                                            var option = document.createElement('option');
                                                            option.value = country.cca2;
                                                            option.text = country.name.common;
                                                            selectElement.appendChild(option);
                                                        });
                                                    });
                                            </script>
                                            
                                        <div class="form-check form-switch ps-0 " >
                                          <label for="quoctich">Giới Tính</label>
                                            <div class="list-group-item border-0 px-0 ">
                                              <div class="form-check form-switch ps-0 mb-3">
                                                  <input name="gioitinh" class="form-check-input ms-auto" type="radio" id="Nam" value="gioitinh" >
                                                  <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="Nam">Nam</label>
                                              </div>
                                    
                                              <div class="form-check form-switch ps-0 pb-3">
                                                  <input name="gioitinh" class="form-check-input ms-auto" type="radio" id="Nữ" value="gioitinh" >
                                                  <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="Nữ">Nữ</label>
                                              </div>
                                            </div>
                                        </div>
        
                                        <div class="list-group-item border-0 px-0 ">     
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3" style="width: 800px;">
                                                <label for="diachi">Số nhà,Tên đường</label>
                                                <input name="diachi" value="" type="text" class="form-control" id="diachi" placeholder="Địa chỉ">
                                            </div>
                                            
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3" style="width: 800px;">
                                                <label for="TP">Thành Phố</label>
                                                <input name="TP" value="" type="text" class="form-control" id="TP" placeholder="Thành Phố">
                                            </div>
          
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3" style="width: 800px;">
                                                <label for="Q/H">Quận/Huyện</label>
                                                <input name="Q/H" value="" type="text" class="form-control" id="Q/H" placeholder="Quận/Huyện">
                                            </div>
        
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3" style="width: 800px;">
                                                <label for="P/X">Phường/Xã</label>
                                                <input name="P/X" value="" type="text" class="form-control" id="P/X" placeholder="Phường/Xã">
                                            </div>
        
                                            <div class="form-check form-switch ps-0 col-xl-4 pb-3" style="width: 800px;">
                                                <label for="cmnd">Số CMND/CCCD/PASSPORT</label>
                                                <input name="cmnd" value="" type="text" class="form-control" id="cmnd" placeholder="Số CMND/CCCD/PASSPORT">
                                            </div>
                                            <div class="form-check form-switch ps-0">
                                                <label for="quoctich">Tòa</label>
                                                <select name="building" class="form-control" id="building" placeholder="Building" >
                                                    <option value="">Chọn Tòa nhà</option>
                                                    <option value="1">Tòa A</option>
                                                    <option value="2">Tòa B</option>
                                                    <option value="3">Tòa C</option>
                                                    <option value="4">Tòa D</option>
                                                    <option value="5">Tòa E</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-check form-switch ps-0">
                                                <label for="floor">Lầu</label>
                                                <select name="floor" class="form-control" id="floor" placeholder="Floor" >
                                                    <option value="">Chọn Lầu</option>
                                                    <option value="1">Lầu 1</option>
                                                    <option value="2">Lầu 2</option>
                                                    <option value="3">Lầu 3</option>
                                                    <option value="4">Lầu 4</option>
                                                    <option value="5">Lầu 5</option>
                                                    <option value="6">Lầu 6</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-check form-switch ps-0">
                                                <label for="room">Phòng</label>
                                                <select name="room " class="form-control" id="room" placeholder="Room" >
                                                    <option value="">Chọn Phòng</option>
                                                    <option value="1">Phòng 1</option>
                                                    <option value="2">Phòng 2</option>
                                                    <option value="3">Phòng 3</option>
                                                    <option value="4">Phòng 4</option>
                                                    <option value="5">Phòng 5</option>
                                                    <option value="6">Phòng 6</option>
                                                    <option value="7">Phòng 7</option>
                                                    <option value="8">Phòng 8</option>
                                                    <option value="9">Phòng 9</option>
                                                    <option value="10">Phòng 10</option>
                                                </select>
                                            </div>

                                            <div class="form-check form-switch ps-0 pb-3" style="width: 800px;">
                                                <label for="ngaynhapvien">Ngày nhập viện</label>
                                                <input name="ngaynhapvien" value="" type="date" class="form-control" id="ngaynhapvien" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        
                                        <div class="table pb-4" >
                                            <table>
                                                <tr>
                                                <th style="width: 600px;">Triệu chứng</th>
                                                    <th>Chi tiết</th>
                                                    <th>Có</th>
                                                    <th>Không</th>
                                                </tr>
                                                <tr>
                                                    <td>Sốt</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Ho khô</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Khó thở</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>''
                                                    <td class = "text-wrap">Mệt mỏi</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td class = "text-wrap">Đau cơ xương</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td class = "text-wrap">Mất vị giác hoặc mất khứu giác</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td class = "text-wrap">Sổ mũi hoặc tiêu chảy</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td class = "text-wrap">Viêm họng</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td class = "text-wrap">Các triệu chứng khác</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                
                                            </table>
                                            
                                        </div>

                                        <div class="table pb-3" >
                                            <table>
                                                <tr>
                                                <th style="width: 600px;">Bệnh nền</th>
                                                    <th>Chi tiết</th>
                                                    <th>Có</th>
                                                    <th>Không</th>
                                                </tr>
                                                <tr>
                                                    <td>HIV/AIDS</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Bệnh tim mạch</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Béo Phì</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>''
                                                    <td class = "text-wrap">Bệnh phổi tắc nghẽn mạn tính và các bệnh phổi khác như tăng áp phổi, giãn phế quản, bệnh phổi nghề nghiệp… và cả bệnh phổi sau lao </td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td class = "text-wrap">Ghép tạng hoặc cấy ghép tế bào gốc tạo máu</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td class = "text-wrap">Ung thư (đặc biệt là các khối u ác tính về huyết học, ung thư phổi và bệnh ung thư di căn khác)</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td class = "text-wrap">Bệnh thận mạn tính ở tất cả các giai đoạn đặc biệt là trường hợp phải lọc máu định kỳ</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td class = "text-wrap">Bệnh gan</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td class = "text-wrap" >Bệnh lý mạch máu não</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td class = "text-wrap">Đang điều trị bằng thuốc corticosteroid hoặc các thuốc ức chế miễn dịch khác</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td class = "text-wrap">Hen phế quản dù đang được kiểm soát tốt vẫn có khả năng vào cơn nếu mắc viêm nhiễm ở phổi</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                </tr>
                                                <tr>
                                                    <td class = "text-wrap">Các loại bệnh nền khác</td>
                                                    <td><input type="text" name="" id="" placeholder="Miêu tả chi tiết"></td>
                                                    <td><input type="radio" name="mark" id=""></td>
                                                    <td><input type="radio" name="mark" id=""></td>
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
                                        
                                                
                                                
                                            </div>  
                                        </div>
                                        
                                            </div>  
                                        </div
                                    </ul>
                                </div>
                            </div>    
                        </div>
                    </div>
            </form>
            
            </footer>
        <!-- <script>
          function mySelectHandler(name){
            var mySelect = $('select[name=' + name)
            console.log("object "+ mySelect.toSource());
          }
        </script> -->
    
        <script src="/Form/form.js"></script>

        
    </body>
</html>
