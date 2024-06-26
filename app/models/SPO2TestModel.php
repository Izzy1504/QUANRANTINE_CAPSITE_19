<?php

class SPO2TestModel {
    private $id;
    private $patientId;
    private $date;
    private $spo2Level;

    public function __construct($id, $patientId, $date, $spo2Level) {
        $this->id = $id;
        $this->patientId = $patientId;
        $this->date = $date;
        $this->spo2Level = $spo2Level;
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

    public function getSpo2Level() {
        return $this->spo2Level;
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

    public function setSpo2Level($spo2Level) {
        $this->spo2Level = $spo2Level;
    }
    public static function getSPO2ById($id){
        $data = [];
        $sql = "select * from dbo.SPO2Test where patient_id ='".$id."';";
      $db = new Database();
      $result = $db->query($sql);
      foreach($result as $row){
        $SPO2 = new SPO2TestModel($row['id'], $row['patient_id'], $row['date'],$row['spo2_level']);
        $data[] = $SPO2;
    }
      return $data;
    }
}