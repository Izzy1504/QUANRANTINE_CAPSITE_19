<?php
class StaffModel {
    private $unique_number;
    private $id;
    private $phone;
    private $fname;
    private $lname;
    private $gender;
    private $birthday;
  
    public function __construct($unique_number, $id, $phone, $firstName, $lastName, $gender, $birthday) {
      $this->unique_number = $unique_number;
      $this->id = $id;
      $this->phone = $phone;
      $this->fname = $firstName;
      $this->lname = $lastName;
      $this->gender = $gender;
      $this->birthday = $birthday;
    }
    public function getUniqueNumber() {
      return $this->unique_number;
    }
  
    public function getId() {
      return $this->id;
    }
  
    public function getPhone() {
      return $this->phone;
    }
  
    public function getFname() {
      return $this->fname;
    }
  
    public function getLname() {
      return $this->lname;
    }
  
    public function getGender() {
      return $this->gender;
    }
  
    public function getBirthday() {
      return $this->birthday;
    }
  
    public function setUniqueNumber($uniqueNumber) {
      $this->unique_number = $uniqueNumber;
    }
  
    public function setId($id) {
      $this->id = $id;
    }
  
    public function setPhone($phone) {
      $this->phone = $phone;
    }
  
    public function setFirstName($firstName) {
      $this->fname = $firstName;
    }
  
    public function setLastName($lastName) {
      $this->lname = $lastName;
    }
  
    public function setGender($gender) {
      $this->gender = $gender;
    }
  
    public function setBirthday($birthday) {
      $this->birthday = $birthday;
    }
    public function create(StaffModel $staff){
      $data = [
        "uniqueNumber" => $staff->getUniqueNumber(),
        "id" => $staff->getId(),
        "phone"=>$staff->getPhone(),
        "fName"=>$staff->getFname(),
        "lName"=>$staff->getLname(),
        "gender"=>$staff->getGender(),
        "birthday"=>$staff->getBirthday(),
      ];
      $db = new Database();
      $db->create("dbo.Staff", $data);
    }
    public function update(StaffModel $staff, $condition){
      $data = [
        "unique_number" => $staff->getUniqueNumber(),
        "id" => $staff->getId(),
        "phone"=>$staff->getPhone(),
        "fName"=>$staff->getFname(),
        "lName"=>$staff->getLname(),
        "gender"=>$staff->getGender(),
        "birthday"=>$staff->getBirthday(),
      ];
      $db = new Database();
      $db->update("dbo.Staff", $data, $condition);
    }
    public static function delete($condition){
      $db = new Database();
      $db->delete("dbo.Staff",$condition);
    }
    public static function getStaffById($id){
      $sql = "select * from dbo.Staff where unique_number ='".$id."';";
      $db = new Database();
      $result = $db->query($sql);
      
      foreach($result as $row){
        $staff = new StaffModel($row["unique_number"], $row["id"], $row["phone"], $row["fname"], $row["lname"],$row["gender"], $row["birthday"]);
      }
      return $staff;
     
    }
    
    public static function getAllStaff(){
      $staffs = [];
      $sql = "select * from dbo.Staff;";
      $db = new Database();
      $result = $db->query($sql);
      foreach($result as $row){
        $staff = new StaffModel($row["unique_number"], $row["id"], $row["phone"], $row["fname"], $row["lname"],$row["gender"], $row["birthday"]);
        $staffs[] = $staff;
        
      }
      return $staffs;
    }
    public static function getNameById($id){
      $sql = "SELECT lname+ ' '+ fname as fullName FROM dbo.Staff where unique_number='".$id."'";
          $db = new Database();
          $results = $db->query($sql);
          return $results[0]['fullName'];
    }
  
  }
  