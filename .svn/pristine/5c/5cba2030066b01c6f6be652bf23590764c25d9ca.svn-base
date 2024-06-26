<?php
include "app/controllers/Account.php";
class Room extends Controller{
    private $account;
    public $model;
    public function __construct(){
        $this->account = new Account();
       $this->model('RoomModel');
    }
    public function index(){
        $data =[];
        $data['room'] = RoomModel::getAllRoom();
        if(!$this->account->isLoggedIn())
        {
            header("Location: ./account");
        exit();
        }
        $this->render("room/room", $data);
    }
}