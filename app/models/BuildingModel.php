<?php
class BuildingModel {
    private $id;
    private $name;
    private $address;
 
  
    public function __construct($id, $name, $address) {
      $this->id = $id;
      $this->name = $name;
      $this->address = $address;
    }

    public function getId() {
      return $this->id;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function getAddress() {
      return $this->address;
    }
  

    public function setId($id) {
      $this->id = $id;
    }
  
    public function setName($name) {
      $this->name = $name;
    }
  
    public function setAddress($address) {
      $this->address = $address;
    }
  

    public function create(BuildingModel $building) {
      $data= [
        "id"=>$building->getId(),
        "name"=> $building->getName(),
        "address"=> $building->getAddress(),
      ];
      
      $db = new Database();
      $db->create("dbo.Building", $data);
    }
    public function update(BuildingModel $building, $condition){
      $data= [
        "id"=>$building->getId(),
        "name"=> $building->getName(),
        "address"=> $building->getAddress(),
      ];
      $db = new Database();
      $db->update("dbo.Building", $data, $condition);
    }
    public function delete($condition){
      $db = new Database();
      $db->delete("dbo.Building", $condition);
    }
    public static function getAllBuilding(){
      $buildings = [];
      $sql = "select * from dbo.Building;";
      $db = new Database();
      $result = $db->query($sql);
      foreach($result as $row){
       $building = new BuildingModel($row['id'], $row['name'], $row['address']);
       $buildings[] = $building;
      }
      return $buildings;
    }
    public function getBuildingById($id){
      $sql = "select * from dbo.Building where id ='".$id."';";
      $db = new Database();
      $result = $db->query($sql);
      foreach($result as $row){
        $building = new BuildingModel($row['id'], $row['name'], $row['address']);
       }
      return $building;
    }
    public static function getNameById($id){
      $sql = "SELECT name as fullName FROM dbo.Building where id='".$id."'";
          $db = new Database();
          $results = $db->query($sql);
          return $results[0]['fullName'];
    }
  }

  