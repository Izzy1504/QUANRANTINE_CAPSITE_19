<?php
class FloorModel {
    private $id;
    private $buildingId;
    private $name;
  
    public function __construct($id, $buildingId, $name) {
      $this->id = $id;
      $this->buildingId = $buildingId;
      $this->name = $name;
    }
  
    public function getId() {
      return $this->id;
    }
  
    public function getBuildingId() {
      return $this->buildingId;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function setId($id) {
      $this->id = $id;
    }
  
    public function setBuildingId($buildingId) {
      $this->buildingId = $buildingId;
    }
  
    public function setName($name) {
      $this->name = $name;
    }
    public static function getAllFloor(){
      $floors = [];
      $sql = "select * from dbo.Floor;";
      $db = new Database();
      $result = $db->query($sql);
      foreach($result as $row){
       $floor = new FloorModel($row['id'], $row['building_id'], $row['name']);
       $floors[] = $floor;
      }
      return $floors;
    }
    public static function getNameById($id){
      $sql = "SELECT name as fullName FROM dbo.Floor where id='".$id."'";
          $db = new Database();
          $results = $db->query($sql);
          return $results[0]['fullName'];
    }
  }
  