<?php

class RespiratoryRateTestModel {
    private $id;
    private $patientId;
    private $date;
    private $respiratoryRate;

    public function __construct($id, $patientId, $date, $respiratoryRate) {
        $this->id = $id;
        $this->patientId = $patientId;
        $this->date = $date;
        $this->respiratoryRate = $respiratoryRate;
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

    public function getRespiratoryRate() {
        return $this->respiratoryRate;
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

    public function setRespiratoryRate($respiratoryRate) {
        $this->respiratoryRate = $respiratoryRate;
    }
    public static function getRRById($id){
        $data = [];
        $sql = "select * from dbo.RespiratoryRateTest where patient_id ='".$id."';";
        $db = new Database();
        $result = $db->query($sql);
        foreach($result as $row){
          $RR = new RespiratoryRateTestModel($row['id'], $row['patient_id'], $row['date'],$row['respiratory_rate']);
            $data[] = $RR;
        }
        return $data;
    }
}

