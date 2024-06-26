<?php
include "app/controllers/Account.php";
class Form extends Controller{  

    public $model;
    private $account;  
    public function __construct()
    {
        $this->account = new Account();     
       $this->model('BuildingModel');
       $this->model('FloorModel');
       $this->model('RoomModel');
       $this->model('SymptomModel');
       $this->model('ComorbidityModel');
       $this->model('NurseModel');
       $this->model('StaffModel');
       $this->Model('PatientModel');
       $this->model('PatientHistoryLocationModel');
       $this->model("PatientSymptomModel");
       $this->model("PatientComorbidityModel");
       
    }

    public function index(){
        $data = [];
        $data['staff'] = StaffModel::getAllStaff();
        $data['nurse'] = NurseModel::getAllNurse();
        $data['building'] = BuildingModel::getAllBuilding();
        $data['floor'] = FloorModel::getAllFloor();
        $data['room'] = RoomModel::getAllRoomAvailable();
        // print_r($data['nurse'][0]->getUniqueNumber());
        $data['symptom'] = SymptomModel::getAllSymptom();
        $data['comorbidity'] = ComorbidityModel::getAllComorbidity();

        if (!$this->account->isLoggedIn()) {
            // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
            header("Location: ./account");
            exit();
        }
        $this->render("Form/form", $data);
    }
    public function add(){
        $uq = PatientModel::CountRows() + 1;
        $timestamp = time();
        $currentDate = gmdate('Y-m-d', $timestamp); 
        //patient
        $unique_number = 'PT'.$uq; //xu ly ma
        $id = $_REQUEST['id'];
        $phone = $_REQUEST['phone'];
        $fName = $_REQUEST['fname'];
        $lName = $_REQUEST['lname'];
        $gender = $_REQUEST['gender'];
        $birthday = $_REQUEST['birthday'];
        $address = $_REQUEST['address'];
        $ward = $_REQUEST['ward'];
        $district = $_REQUEST['district'];
        $city = $_REQUEST['city'];
        $dateAdmit = $currentDate;
        $dateDischarge = null;
        $nurse_id = $_REQUEST['nurse_id'];
        $staff_id = $_REQUEST['staff_id'];
        //echo $nurse_id;

        $patient = new PatientModel($unique_number, $id, $phone, $fName, $lName, $gender, $birthday, $address,$ward,$district,$city, $dateAdmit, $dateDischarge, $nurse_id, $staff_id);
        $patient->create($patient);
        // print_r($patient);

  
    
        // // PHL
        $room = $_REQUEST['room'];
        $phl = new PatientHistoryLocationModel($unique_number,$room,$currentDate,null);
        $phl->create($phl);


        //patient symptom
        if(isset($_REQUEST['symptom'])){
            $symptomId = $_REQUEST['symptom'];
            foreach($symptomId as $symptom){
                $sd = 'Sdescription'.$symptom;
                $od = 'OnsetDate'.$symptom;
                $td = 'TerminationDate'.$symptom;
                $description = $_REQUEST[$sd];
                $onsetDate = $_REQUEST[$od];
                $terminationDate = $_REQUEST[$td];
                $ps = new PatientSymptomModel($symptom, $unique_number,$description,$onsetDate,$terminationDate);
                $ps->create($ps);
            }
        }


        // // //patient comorbidity
        if(isset($_REQUEST['comorbidity'])){
            $ComorbidityId = $_REQUEST['comorbidity'];
            foreach($ComorbidityId as $comorbidity){
                $sd = 'Cdescription'.$comorbidity;
               
                $description = $_REQUEST[$sd];
                $pc = new PatientComorbidityModel( $unique_number,$comorbidity,$description);
                $pc->create($pc);
            }
        }
        
        if(isset($_REQUEST['Sdiff'])){
                $symptomId =SymptomModel::countRows()+1;
                $name = $_REQUEST['diff1'];
                $description = $_REQUEST['Sdescription'];
                $onsetDate = $_REQUEST['OnsetDate'];
                $terminationDate = $_REQUEST['TerminationDate'];
                $symptom = new SymptomModel($symptomId, $name);
                $ps = new PatientSymptomModel($symptomId, $unique_number,$description,$onsetDate,$terminationDate);
                $symptom->create($symptom);
                $ps->create($ps);
            
        }

        if(isset($_REQUEST['Cdiff'])){
            $ComorbidityId = ComorbidityModel::countRows()+1;
            $name = $_REQUEST['diff2'];
            $description = $_REQUEST['Cdescription'];
            $Comorbidity = new ComorbidityModel($ComorbidityId, $name);
            $pc = new PatientComorbidityModel($unique_number,$ComorbidityId,$description);
            $Comorbidity->create($Comorbidity);
            $pc->create($pc);
        
    }
        // echo '<pre>';
        // print_r($comorbidityId);
        // echo '</pre>';
      
        // echo $city; 
        // echo $district;
        // echo $ward;
        // echo $birthday;
        header("Location: /CSDL2/form");
}
}