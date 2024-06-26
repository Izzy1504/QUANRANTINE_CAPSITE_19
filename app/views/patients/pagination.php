<?php
require_once 'app/models/PatientModel.php'; 

$search_query = isset($_GET['search']) ? $_GET['search'] : '';
$options = isset($_GET['options']) ? $_GET['options'] : '';


// Khởi tạo mảng $data mặc định
$data = [];

// Kiểm tra nếu có thông tin tìm kiếm
if (!empty($search_query) && !empty($options)) {
    $data = PatientModel::search($search_query, $options);
} else {
    $data = PatientModel::getAllPatient();
}

$records_per_page = 20; // Đổi thành 20
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$total_pages = ceil(count($data) / $records_per_page);

// Tính toán offset
$offset = ($current_page - 1) * $records_per_page;

echo '<ul class="pagination">';
if ($current_page > 1) {
    echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page - 1) . '&search=' . $search_query . '&options=' . $options . '">Prev</a></li>';
}

$visible_page_links = 7; // Số trang hiển thị tối đa
$half_visible = floor($visible_page_links / 2);
$start = max(1, $current_page - $half_visible);
$end = min($total_pages, $start + $visible_page_links - 1);

for ($i = $start; $i <= $end; $i++) {
    echo '<li class="page-item' . ($i == $current_page ? ' active' : '') . '"><a class="page-link" href="?page=' . $i . '&search=' . $search_query . '&options=' . $options . '">' . $i . '</a></li>';
}

if ($current_page < $total_pages) {
    echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page + 1) . '&search=' . $search_query . '&options=' . $options . '">Next</a></li>';
}
echo '</ul>';

?>
