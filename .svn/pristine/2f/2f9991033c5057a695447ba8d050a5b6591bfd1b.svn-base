<?php
include "app/models/AccountModel.php";
// // Thêm vào đầu file để bắt đầu session
// session_start();

// // Kiểm tra yêu cầu logout
// if (isset($_GET['function']) && $_GET['function'] == 'logout') {
//     // Gọi hàm logout nếu có yêu cầu
//     $account = new Account();
//     $account->logout();
// }

class Account extends Controller {
    
    private $accountModel;

    public function index() {
        // Hiển thị biểu mẫu đăng nhập
        include 'app/views/account/login.php';
       
    }

    public function __construct() {
        // Không khởi tạo AccountModel ở đây
    }

    public function login() {
        // Xử lý đăng nhập
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $phone = htmlspecialchars($_POST['phone']);
            $password = htmlspecialchars($_POST['password']);
            $role = 'admin';

            try {
                $this->accountModel = new AccountModel($phone, $password, $role);
                $loggedIn = $this->accountModel->login();

                if ($loggedIn) {
                    $_SESSION['phone'] = $phone;
                    $_SESSION['password'] = $password;

                   
                    // Redirect to the correct page after successful login
                    header("Location: ../");
                    exit();
                } else {
                    // Display an error message using JavaScript
                    echo "<script>alert('Invalid phone number or password.'); window.location.href='/CSDL2/account';</script>";
                }
            } catch (Exception $e) {
                echo "Error during login: " . $e->getMessage();
                echo "Trace: " . $e->getTraceAsString();
            }
        } else {
            // If the form is not submitted, redirect to the login page
            header("Location: /account/index");
        }
    }
    public function logout() {
        // Hủy bỏ session
        session_unset();
        session_destroy();
    
        // Redirect đến trang đăng nhập sau khi đăng xuất
        header("Location: ./account");
        exit();
    }
   
    public function isLoggedIn() {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        return isset($_SESSION['phone']) && isset($_SESSION['password']);
    }
}
?>
