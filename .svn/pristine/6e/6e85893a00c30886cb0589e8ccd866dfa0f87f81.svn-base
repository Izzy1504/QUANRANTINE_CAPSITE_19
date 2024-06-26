<?php 
include "app/controllers/Account.php";
// session_start();

class Home extends Controller{

    public $model;
    private $account;
    public function __construct(){
       
         
        $this->account = new Account();
        
       $this->model('PatientModel');
       $this->model('WarningModel');
       $this->model('RoomModel');



       
      
    }
    public function index(){
      
       $data =[];
       $data['p'] = PatientModel::CountRows();
       $data['pd'] = PatientModel::PD();
       $data['pw']= WarningModel::PW();
       $data['warning'] = WarningModel::getAllWarning();
       // Kiểm tra đăng nhập khi hàm index được gọi
       if (!$this->account->isLoggedIn()) {
        // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
        header("Location: ./account");
        exit();
    }
        $this->render("home/index", $data);
    

    }
   
}