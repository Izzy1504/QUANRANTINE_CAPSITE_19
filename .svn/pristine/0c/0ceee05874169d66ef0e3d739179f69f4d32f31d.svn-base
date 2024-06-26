<?php

class WarningModel {
    private $id;
    private $patientId;
    private $date;
    private $reason;
    private $status;

    public function __construct($id, $patientId, $date, $reason, $status) {
        $this->id = $id;
        $this->patientId = $patientId;
        $this->date = $date;
        $this->reason = $reason;
        $this->status = $status;
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

    public function getReason() {
        return $this->reason;
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

    public function setReason($reason) {
        $this->reason = $reason;
    }
    public function getStatus(){
        return $this->status;
    }
    public static function getWarningById($id){
        $data = [];
        $sql = "select * from dbo.Warning where patient_id ='".$id."';";
        $db = new Database();
        $result = $db->query($sql);
        foreach($result as $row){
          $Warning = new WarningModel($row['id'], $row['patient_id'], $row['date'],$row['reason'], $row['status']);
        $data[] = $Warning;
        }
        return $data;
    }
    public static function PW(){
        $sql = "SELECT COUNT(*) AS num_rows FROM dbo.Warning where status = 0";
            $db = new Database();
            $results = $db->query($sql);
            return $results[0]['num_rows'];
      }

      public static function getAllWarning(){
        $data = [];
        $sql = "select * from dbo.Warning;";
        $db = new Database();
        $result = $db->query($sql);
        foreach($result as $row){
          $Warning = new WarningModel($row['id'], $row['patient_id'], $row['date'],$row['reason'],$row['status']);
        $data[] = $Warning;
        }
        return $data;
    }
}
