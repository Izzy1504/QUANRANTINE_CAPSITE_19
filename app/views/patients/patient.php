<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Builder</title>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/soft-ui-dashboard.min.css?v=1.0.2">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="/CSDL2/app/views/assets/css/theme.css">
    <link rel="stylesheet" href="/CSDL2/app/views/assets/css/loopple/loopple.css">
    <link rel="stylesheet" href="/CSDL2/app/views/patients/patient.css">
    <script src="app/views/patients/pagination.js"></script>
</head>

<body class="mainpage">
     <!-- đọc đoạn nav bar bên phải  -->
     <?php include "app/views/division/nav.php"; ?>
<!-- ============================================================================== -->
    <div class="main-content" id="panel">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 mt-3 shadow-none border-radius-xl" id="navbarTop">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Patient
                    </h6>
                </nav>
               <!-- Đây là đoạn code dành cho searh đã được link  -->
               <?php include "app/views/division/mod.php"; ?>
            </div>
        </nav>
        <div class="container-fluid pt-3">
            <div class="card mb-4">
                <div class="card-header pb-0 flex-col" >
                <h6>Patient Table </h6> 
                <?php include "app/views/patients/pagination.php"?>
                <a class="more-info-button butt" href="/CSDL2/form">Add </a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table_patient align-items-center mb-0">
                            <thead>
                                <tr>
                                <th class="th_patient">UN</th>
                                <th class="th_patient">Full Name</th>
                                <th class="th_patient">Phone</th>
                                <th class="th_patient">Gender</th>
                                <th class="th_patient">Address</th>
                                <th class="th_patient">Hospitalized Date</th>
                                <th class="th_patient">Discharge Date</th>
                                <th class="th_patient">More Information</th>
                                <th class="th_patient">Test Results</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php include 'app/views/patients/patient_table.php'; ?>
                            <tr></tr>
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