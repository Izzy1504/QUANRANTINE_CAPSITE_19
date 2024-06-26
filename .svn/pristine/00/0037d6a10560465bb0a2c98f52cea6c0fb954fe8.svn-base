<?php
function generateDynamicLink($currentPath, $basePath, $pageName) {
    // Kiểm tra xem trang hiện tại có nằm trong thư mục "Pages" hay không
   if (strpos($currentPath, '/Pages/') === false) {
        $pageName = 'Pages/' . $pageName;
    }
    
    return $basePath . '/' . $pageName . '.php';
    }



// Lấy đường dẫn tương đối của trang hiện tại
$currentPath = $_SERVER['REQUEST_URI'];

// Loại bỏ tên trang hiện tại để có đường dẫn cơ sở
$basePath = (dirname($currentPath));

$roomLink = generateDynamicLink($currentPath, $basePath, 'room');
$patientLink = generateDynamicLink($currentPath, $basePath, 'patient');
$detailLink = generateDynamicLink($currentPath, $basePath,'detail');
$test_tableLink = generateDynamicLink($currentPath, $basePath,'test_table');
$loginLink = generateDynamicLink($currentPath, $basePath, 'login');
$indexLink = generateDynamicLink($currentPath, $basePath, 'index');
$inforLink = generateDynamicLink($currentPath, $basePath, 'infor');

?>