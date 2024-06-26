






<?php
require_once 'app/models/PatientModel.php'; 

$search_query = isset($_GET['search']) ? $_GET['search'] : '';
$options = isset($_GET['options']) ? $_GET['options'] : '';
function encodeID($id) {
    return base64_encode($id);
}

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



for ($i = $offset; $i < min($offset + $records_per_page, count($data)); $i++) {
    $patient = $data[$i];
    {
            ?>
            <tr>
                <td class="unique_number td_patient"><?php echo $patient->getUniqueNumber()?></td>
                <td class="full-name td_patient"><?php echo $patient->getLastName()." ".$patient->getFirstName()?></td>
                <td class="phone td_patient"><?php echo $patient->getPhone()?></td>
                <td class="gender td_patient"><?php echo $patient->getGender()?></td>
                <td class="address td_patient"><?php echo $patient->getAddress()?></td>
                <td class="adm td_patient">
                    <?php echo $patient->getDateAdmit() !== null ? $patient->getDateAdmit()->format('m/d/Y') : ""; ?>
                </td>
                <td class="discharge-date td_patient">
                    <?php echo $patient->getDateDischarge() !== null ? $patient->getDateDischarge()->format('m/d/Y') : ""; ?>
                </td>
                <td><a class="more-info-button td_patient" href="/CSDL2/patient/detail/?id=<?php echo encodeID($patient->getUniqueNumber()); ?>">More Info</a></td>
               
                <td><a class="test-button td_patient" href="/CSDL2/patient/test/?id=<?php echo encodeID($patient->getUniqueNumber()); ?>">Test results</a></td>
            </tr>
            <?php
        }
    }


echo '</table>'; // Kết thúc bảng dữ liệu

// Hiển thị nút phân trang
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

