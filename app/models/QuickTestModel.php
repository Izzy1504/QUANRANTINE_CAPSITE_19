<?php 
class QuickTestModel {
    private $id;
    private $patientId;
    private $date;
    private $result;
    private $ctValue;
  
    public function __construct($id, $patientId, $date, $result, $ctValue) {
      $this->id = $id;
      $this->patientId = $patientId;
      $this->date = $date;
      $this->result = $result;
      $this->ctValue = $ctValue;
    }
  
    public function getId() {
      return $this->id;
    }
  
    public function getPatientId() {
      return $this->patientId;
    }
  
    public function getDate() {
      return $this->date;
    }
  
    public function getResult() {
      return $this->result;
    }
  
    public function getCtValue() {
      return $this->ctValue;
    }
  
    public function setId($id) {
      $this->id = $id;
    }
  
    public function setPatientId($patientId) {
      $this->patientId = $patientId;
    }
  
    public function setDate($date) {
      $this->date = $date;
    }
  
    public function setResult($result) {
      $this->result = $result;
    }
  
    public function setCtValue($ctValue) {
      $this->ctValue = $ctValue;
    }
    public static function getQuickById($id){
      $data = [];
      $sql = "select * from dbo.QuickTest where patient_id ='".$id."';";
      $db = new Database();
      $result = $db->query($sql);
      foreach($result as $row){
        $Quick = new QuickTestModel($row['id'], $row['patient_id'], $row['date'],$row['result'],$row['ct_value']);
        $data[] = $Quick;
    }
    return $data;
  }
}
  