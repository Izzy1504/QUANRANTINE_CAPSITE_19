<?php 
class PatientModel {
    private $uniqueNumber;
    private $id;
    private $phone;
    private $fname;
    private $lname;
    private $gender;
    private $birthday;
    private $address;
    private $dateAdmit;
    private $dateDischarge;
    private $nurse_id;
    private $staff_id;
    private $ward;
    private $district;
    private $city;
  
    public function __construct($uniqueNumber, $id, $phone, $firstName, $lastName, $gender, $birthday, $address, $ward, $district, $city, $dateAdmit, $dateDischarge, $nurse_id, $staff_id) {
      $this->uniqueNumber = $uniqueNumber;
      $this->id = $id;
      $this->phone = $phone;
      $this->fname = $firstName;
      $this->lname = $lastName;
      $this->gender = $gender;
      $this->birthday = $birthday;
      $this->address = $address;
      $this->dateAdmit = $dateAdmit;
      $this->dateDischarge = $dateDischarge;
      $this->nurse_id = $nurse_id;
      $this->staff_id = $staff_id;
      $this->ward = $ward;
      $this->district = $district;
      $this->city = $city;
    }


  
    public function getUniqueNumber() {
      return $this->uniqueNumber;
    }
  
    public function getId() {
      return $this->id;
    }
  
    public function getPhone() {
      return $this->phone;
    }
  
    public function getFirstName() {
      return $this->fname;
    }
  
    public function getLastName() {
      return $this->lname;
    }
  
    public function getGender() {
      return $this->gender;
    }
  
    public function getBirthday() {
      return $this->birthday;
    }
  
    public function getAddress() {
      return $this->address;
    }
  
    public function getDateAdmit() {
      return $this->dateAdmit;
    }
  
    public function getDateDischarge() {
      return $this->dateDischarge;
    }
  
    public function setUniqueNumber($uniqueNumber) {
      $this->uniqueNumber = $uniqueNumber;
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
  
    public function setAddress($address) {
      $this->address = $address;
    }
  
    public function setDateAdmit($dateAdmit) {
      $this->dateAdmit = $dateAdmit;
    }
  
    public function setDateDischarge($dateDischarge) {
      $this->dateDischarge = $dateDischarge;
    }
    public function getNurseId(){
      return $this->nurse_id;
    }
    public function getStaffId(){
      return $this->staff_id;
    }
    public function getWard(){
      return $this->ward;
    }
    public function getDistrict(){
      return $this->district;
    }
    public function getCity(){
      return $this->city;
    }

    public function create(PatientModel $patient){
      $data = [
        "unique_number" => $patient->getUniqueNumber(),
        "id" => $patient->getId(),
        "phone"=>$patient->getPhone(),
        "fName"=>$patient->getFirstName(),
        "lName"=>$patient->getLastName(),
        "gender"=>$patient->getGender(),
        "birthday"=>$patient->getBirthday(),
        "address"=>$patient->getAddress(),
        "ward"=>$patient->getWard(),
        "district"=>$patient->getDistrict(),
        "city"=>$patient->getCity(),
        "dateAdmit"=>$patient->getDateAdmit(),
        "dateDischarge"=>$patient->getDateDischarge(),
        "nurse_id"=>$patient->getNurseId(),
        "staff_id"=>$patient->getStaffId(),
      ];
      $db = new Database();
      $db->create("dbo.Patient", $data);
    }
    public function update(PatientModel $patient, $condition){
      $data = [
        "unique_number" => $patient->getUniqueNumber(),
        "id" => $patient->getId(),
        "phone"=>$patient->getPhone(),
        "fName"=>$patient->getFirstName(),
        "lName"=>$patient->getLastName(),
        "gender"=>$patient->getGender(),
        "birthday"=>$patient->getBirthday(),
        "address"=>$patient->getAddress(),
        "ward"=>$patient->getWard(),
        "district"=>$patient->getDistrict(),
        "city"=>$patient->getCity(),
        "dateAdmit"=>$patient->getDateAdmit(),
        "dateDischarge"=>$patient->getDateDischarge(),
        "staff_id"=>$patient->getStaffId(),
      ];
      $db = new Database();
      $db->update("dbo.Patient", $data, $condition);
    }
    public function delete($condition){
      $db = new Database();
      $db->delete("dbo.Patient",$condition);
    }
    public static function getPatientById($id){
      $sql = "select * from dbo.Patient where unique_number ='".$id."';";
      $db = new Database();
      $result = $db->query($sql);
      foreach($result as $row){
        $Patient = new PatientModel($row["unique_number"], $row["id"], $row["phone"], $row["fname"], $row["lname"],$row["gender"], $row["birthday"],$row['address'],$row['ward'],$row['district'],$row['city'],$row['dateAdmit'],$row['dateDischarge'], $row['nurse_id'], $row['staff_id']);
      }
      return $Patient;
    }
    public static function getAllPatient(){
      $Patients = [];
      $sql = "select * from dbo.Patient;";
      $db = new Database();
      $result = $db->query($sql);
      foreach($result as $row){
        $Patient = new PatientModel($row["unique_number"], $row["id"], $row["phone"], $row["fname"], $row["lname"],$row["gender"], $row["birthday"],$row['address'],$row['ward'],$row['district'],$row['city'],$row['dateAdmit'],$row['dateDischarge'], $row['nurse_id'], $row['staff_id']);
        $Patients[] = $Patient;
        
      }
      return $Patients;
    }
    public static function getAllPatientCount(){
      $sql = "SELECT COUNT(*) AS total FROM dbo.Patient;";
      $db = new Database();
      $result = $db->query($sql);
  
      if ($result && is_array($result)) {
          if (count($result) > 0) {
              $row = $result[0]; 
              $total_data = $row['total'];
  
              $results_per_page = 5; 
              $total_pages = ceil($total_data / $results_per_page);
  
              return $total_pages;
          } else {
              return 0; 
          }
      } else {
          return 0; 
      }
  }

  public static function CountRows(){

      $db = new Database();
      return $db->CountRows('dbo.Patient');

  }
  public static function PND(){
    $sql = "SELECT COUNT(*) AS num_rows FROM dbo.Patient where dateDischarge is null";
        $db = new Database();
        $results = $db->query($sql);
        return $results[0]['num_rows'];
  }

  public static function PD(){
    $sql = "SELECT COUNT(*) AS num_rows FROM dbo.Patient where dateDischarge is not null";
        $db = new Database();
        $results = $db->query($sql);
        return $results[0]['num_rows'];
  }
  public static function search($search, $option){
    $Patients = [];
    $query = "select * from dbo.patient where ". $option . " like N'%" . $search . "%';";
      $db = new Database();
      $result = $db->query($query);
      foreach($result as $row){
        $Patient = new PatientModel($row["unique_number"], $row["id"], $row["phone"], $row["fname"], $row["lname"],$row["gender"], $row["birthday"],$row['address'],$row['ward'],$row['district'],$row['city'],$row['dateAdmit'],$row['dateDischarge'], $row['nurse_id'], $row['staff_id']);
        $Patients[] = $Patient;
        
      }
      return $Patients;
  }
  public static function getNameById($id){
    $sql = "SELECT lname+ ' '+ fname as fullName FROM dbo.Patient where unique_number='".$id."'";
        $db = new Database();
        $results = $db->query($sql);
        return $results[0]['fullName'];
  }

  }
  