<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Builder</title>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/soft-ui-dashboard.min.css?v=1.0.2">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="../assets/css/theme.css">
    <link rel="stylesheet" href="../assets/css/loopple/loopple.css">
</head>

<body class="mainpage">
     <!-- đọc đoạn nav bar bên phải  -->
     <?php include "../nav.php"; ?>
<!-- ============================================================================== -->
    <div class="main-content" id="panel">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 mt-3 shadow-none border-radius-xl" id="navbarTop">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Information</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Information</h6>
                </nav>
                <?php include "../mod.php";?>
            </div>
        </nav>
        <div class="container-fluid pt-3">

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row removable">
                <div class="col-lg-12">
                    <!-- Thông tin bệnh nhân Johnson -->
                    <div class="patient-info">
                        <label for="name">Tên:</label>
                        <input type="text" id="name" class="form-control" value="Johnson" placeholder="Tên" readonly>
                        <label for="age">Tuổi:</label>
                        <input type="text" id="age" class="form-control" value="45" placeholder="Tuổi" readonly>
                        <label for="dob">Sinh ngày:</label>
                        <input type="text" id="dob" class="form-control" value="12/03/1934" placeholder="Sinh ngày" readonly>
                        <label for="address">Địa chỉ:</label>
                        <input type="text" id="address" class="form-control" value="273 Đ. An Dương Vương, Phường 3, Quận 5, Thành phố Hồ Chí Minh" placeholder="Địa chỉ" readonly>
                        <label for="address">Quốc tịch:</label>
                        <input type="text" id="address" class="form-control" value="Việt Nam" placeholder="Quốc tịch" readonly>
                        <label for="symptoms">Triệu chứng:</label>
                        <input type="text" id="symptoms" class="form-control" value="ho, sốt, khó thở" placeholder="Triệu chứng" readonly>
                        <label for="symptoms">Ngày nhập viện:</label>
                        <input type="text" id="symptoms" class="form-control" value="2023-10-11" placeholder="Ngày nhập viện" readonly>
                        <label for="symptoms">Building:</label>
                        <input type="text" id="symptoms" class="form-control" value="Building A" placeholder="Building" readonly>
                        <label for="symptoms">Floor:</label>
                        <input type="text" id="symptoms" class="form-control" value="Floor 2" placeholder="Floor" readonly>
                        <label for="symptoms">Room:</label>
                        <input type="text" id="symptoms" class="form-control" value="Room 1" placeholder="Room" readonly>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="patient-info">
                        <!-- Danh sách các bệnh viện đã đi khám -->
                        <h6>Các bệnh viện đã đi khám:</h6>
                        <table class="table custom-table" >
                            <thead>
                                <tr>
                                    <th>Bệnh viện</th>
                                    <th>Năm đã đi</th>
                                    <th>Ngày cụ thể</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bệnh viện A</td>
                                    <td>2021</td>
                                    <td>16/04</td>
                                </tr>
                                <tr>
                                    <td>Bệnh viện B</td>
                                    <td>2022</td>
                                    <td>16/04</td>
                                </tr>
                                <tr>
                                    <td>Bệnh viện D</td>
                                    <td>2023</td>
                                    <td>16/04</td>
                                </tr>
                                <tr>
                                    <td>Bệnh viện E</td>
                                    <td>2023</td>
                                    <td>16/04</td>
                                </tr>
                                <tr>
                                    <td>Bệnh viện F</td>
                                    <td>2023</td>
                                    <td>16/04</td>
                                </tr>
                                <tr>
                                    <td>Bệnh viện G</td>
                                    <td>2023</td>
                                    <td>16/04</td>
                                </tr>
                                <tr>
                                    <td>Bệnh viện H</td>
                                    <td>2023</td>
                                    <td>16/04</td>
                                </tr>
                                <tr>
                                    <td>....</td>
                                    <td>....</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                </div>
            
            
            <div class="row mt-4 removable">
                <div class="col-lg-12">
                    <div class="card mb-4 h-100 custom-card">
                        <div class="card-header pb-0">
                            <h6>Bệnh án</h6>
                            <p class="text-sm">
                                <!-- <i class="fa fa-arrow-up text-success" aria-hidden="true"></i> -->
                                <span class="font-weight-bold"></span>
                            </p>
                        </div>
                        <div class="card-body p-3">
                            <!-- Đây là nơi để bạn thêm thông tin bệnh án trong bảng -->
                            <table class="table table-bordered custom-table">
                                <thead>
                                    <tr>
                                        <th>Bệnh</th>
                                        <th>Chuẩn đoán</th>
                                        <th>Kết quả Test</th> 
                                        <th>Ngày giờ</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cảm lạnh</td>
                                        <td>Ghi chú về chuẩn đoán</td>
                                        <td>Dương tính</td>
                                        <td>2023-10-11 08:00 AM</td>
                                    </tr>
                                    <tr>
                                        <td>Viêm họng</td>
                                        <td>Ghi chú về chuẩn đoán</td>
                                        <td>Dương tính</td>
                                        <td>2023-10-12 02:30 PM</td>
                                    </tr>
                                    <tr>
                                        <td>Viêm họng</td>
                                        <td>Ghi chú về chuẩn đoán</td>
                                        <td>Dương tính</td>
                                        <td>2023-10-12 02:30 PM</td>
                                    </tr> 

                                    <tr>
                                        <td>Viêm họng</td>
                                        <td>Ghi chú về chuẩn đoán</td>
                                        <td>Dương tính</td>
                                        <td>2023-10-12 02:30 PM</td>
                                    </tr>
                                    <tr>
                                        <td>...</td>
                                       
                                    </tr>
                                    <!-- Thêm các dòng dữ liệu bệnh án khác tại đây -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <style>
                

                .patient-info {
                    margin-bottom: 20px;
                    border: 1px solid #ccc;
                    padding: 10px;
                }
                .custom-card {
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 15px;
}

.custom-table {
    width: 100%;
}

.custom-table th, .custom-table td {
    border: 1px solid #e0e0e0;
    padding: 8px;
    text-align: left;
}

 
            </style>
            
        </div>
        </style>
            <a id="downloadLink" style="display: none;"></a>
            <button onclick="exportToPDF()" style="background-color: #28a5a7; border: none; padding: 6px 12px; border-radius: 4px; margin-left: 50px;">
                    <i class="exportButton"></i> Xuất PDF
            </button>
            <style>
                body, html {
                height: 150%; /* Đảm bảo rằng body và html có chiều cao 100% của trang */
}
            </style>
      
    </div>
    <div> 


</div>



   
</body>

    