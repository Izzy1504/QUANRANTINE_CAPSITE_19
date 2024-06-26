<?php 
class PatientSymptomModel {
    private $symptomId;
    private $patientId;
    private $description;
    private $onsetDate;
    private $terminationDate;
  
    public function __construct($symptomId, $patientId, $description, $onsetDate, $terminationDate) {
      $this->symptomId = $symptomId;
      $this->patientId = $patientId;
      $this->description = $description;
      $this->onsetDate = $onsetDate;
      $this->terminationDate = $terminationDate;
    }
  
    public function getSymptomId() {
      return $this->symptomId;
    }
  
    public function getPatientId() {
      return $this->patientId;
    }
  
    public function getDescription() {
      return $this->description;
    }
  
    public function getOnsetDate() {
      return $this->onsetDate;
    }
  
    public function getTerminationDate() {
      return $this->terminationDate;
    }
  
    public function setSymptomId($symptomId) {
      $this->symptomId = $symptomId;
    }
  
    public function setPatientId($patientId) {
      $this->patientId = $patientId;
    }
  
    public function setDescription($description) {
      $this->description = $description;
    }
  
    public function setOnsetDate($onsetDate) {
      $this->onsetDate = $onsetDate;
    }
  
    public function setTerminationDate($terminationDate) {
      $this->terminationDate = $terminationDate;
    }

    public static function getPatientSymptomById($id){
      $data = [];
      $sql = "select * from dbo.PatientSymptom where patient_id ='".$id."';";
      $db = new Database();
      $result = $db->query($sql);
      foreach($result as $row){
        $symptom = new PatientSymptomModel($row['symptom_id'], $row['patient_id'], $row['describe'],$row['OnsetDate'],$row['TerminationDate']);
      
        $data[] = $symptom;
     }
     return $data;
    }
    public function create(PatientSymptomModel $symptom){
      $data = [
       "symptom_id"=>$symptom->getSymptomId(),
       "patient_id"=>$symptom->getPatientId(),
       "describe"=>$symptom->getDescription(),
       "OnsetDate"=>$symptom->getOnsetDate(),
       "TerminationDate"=>$symptom->getTerminationDate(),
      ];
      $db = new Database();
      $db->create("dbo.PatientSymptom", $data);
    }
}