<?php
class TreatmentModel {
    private $patientId;
    private $doctorId;
    private $medicationId;
    private $startDate;
    private $endDate;
    private $result;
  
    public function __construct($patientId, $doctorId, $medicationId, $startDate, $endDate, $result) {
      $this->patientId = $patientId;
      $this->doctorId = $doctorId;

      $this->medicationId = $medicationId;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
      $this->result = $result;
    }
  
    public function getPatientId() {
      return $this->patientId;
    }
  
    public function getDoctorId() {
      return $this->doctorId;
    }
  
    public function getMedicationId() {
      return $this->medicationId;
    }
  
    public function getStartDate() {
      return $this->startDate;
    }
  
    public function getEndDate() {
      return $this->endDate;
    }
  
    public function getResult() {
      return $this->result;
    }
  
    public function setPatientId($patientId) {
      $this->patientId = $patientId;
    }
  
    public function setDoctorId($doctorId) {
      $this->doctorId = $doctorId;
    }
  
    public function setMedicationId($medicationId) {
      $this->medicationId = $medicationId;
    }
  
    public function setStartDate($startDate) {
      $this->startDate = $startDate;
    }
  
    public function setEndDate($endDate) {
      $this->endDate = $endDate;
    }
  
    public function setResult($result) {
      $this->result = $result;
    }
    public static function getTreatmentById($id){
      $data = [];
        $sql = "select * from dbo.Treatment where patient_id ='".$id."';";
        $db = new Database();
        $result = $db->query($sql);
        foreach($result as $row){
         $treatment = new TreatmentModel($row['patient_id'], $row['doctor_id'], $row['medication_id'], $row['start_date'], $row['end_date'],$row['result']);
        $data[] = $treatment;
        }
        return $data;
    }
  }
  