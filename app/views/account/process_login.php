<?php
if(isset($_POST['password']) && $_POST['password'] === 'password') {
    // Mật khẩu đúng, chuyển hướng đến trang index.php
    header('Location: index.html');
    exit();
} else {
    // Mật khẩu sai, có thể hiển thị thông báo lỗi ở đây
    echo "Mật khẩu sai, vui lòng thử lại.";
}
?>
