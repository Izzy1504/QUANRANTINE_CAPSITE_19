<?php

class SymptomModel {
    private $id;
    private $name;
  
    public function __construct($id, $name) {
      $this->id = $id;
      $this->name = $name;
    }
  
    public function getId() {
      return $this->id;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function setId($id) {
      $this->id = $id;
    }
  
    public function setName($name) {
      $this->name = $name;
    }
    public static function getAllSymptom(){
      $data = [];
      $sql = "select * from dbo.Symptom;";
      $db = new Database();
      $result = $db->query($sql);
      foreach($result as $row){
        $sym = new SymptomModel($row['id'], $row['name']);
        $data[] = $sym;}
      return $data;
     }

     public function create(SymptomModel $symptom){
      $data = [
        "id"=>$symptom->getId(),
        "name"=>$symptom->getName(),
      ];
      $db = new Database();
      $db->create('dbo.Symptom', $data);
     }

     public static function countRows(){
      $db = new Database();
      return $db->countRows('dbo.Symptom');
     }
     public static function getNameById($id){
      $sql = "SELECT name as fullName FROM dbo.Symptom where id='".$id."'";
          $db = new Database();
          $results = $db->query($sql);
          return $results[0]['fullName'];
    }
  
  }
  