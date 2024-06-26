<?php
class RoomModel {
    private $id;
    private $buildingId;
    private $floorId;
    private $name;
    private $used;
    private $Quantity;
    private $type;
  
    public function __construct($id,$buildingId,$floorId, $name, $used, $Quantity, $type) {
      $this->id = $id;
      $this->name = $name;
      $this->used = $used;
      $this->Quantity = $Quantity;
      $this->type = $type;
      $this->buildingId = $buildingId;
      $this->floorId = $floorId;
    }
  
    public function getId() {
      return $this->id;
    }
  
    public function getBuildingId() {
      return $this->buildingId;
    }
  
    public function getFloorId() {
      return $this->floorId;
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
  
    public function setFloorId($floorId) {
      $this->floorId = $floorId;
    }
  
    public function setName($name) {
      $this->name = $name;
    }
    public function getUsed(){
      return $this->used;
    }
    public function getQuantity(){
      return $this->Quantity;
    }
    public function getType(){
      return $this->type;
    }
    public static function getAllRoomAvailable(){
      $rooms = [];
      $sql = "select * from dbo.RoomDetail where used < Quantity ;";
      $db = new Database();
      $result = $db->query($sql);
      foreach($result as $row){
       $room = new RoomModel($row['Room_ID'], $row['Building_ID'], $row['Floor_ID'], $row['Name'], $row['Used'], $row['Quantity'], $row['Type']);
       $rooms[] = $room;
      }
      return $rooms;
    }

    public static function getAllRoom(){
      $rooms = [];
      $sql = "select * from dbo.RoomDetail;";
      $db = new Database();
      $result = $db->query($sql);
      foreach($result as $row){
       $room = new RoomModel($row['Room_ID'], $row['Building_ID'], $row['Floor_ID'], $row['Name'], $row['Used'], $row['Quantity'], $row['Type']);
       $rooms[] = $room;
      }
      return $rooms;
    }
    public static function getNameById($id){
      $sql = "SELECT name as fullName FROM dbo.Room where id='".$id."'";
          $db = new Database();
          $results = $db->query($sql);
          return $results[0]['fullName'];
    }
    public static function getRoomById($id){
      // $rooms = [];
      $sql = "select * from dbo.RoomDetail where Room_id =".$id;
      $db = new Database();
      $result = $db->query($sql);
      foreach($result as $row){
       $room = new RoomModel($row['Room_ID'], $row['Building_ID'], $row['Floor_ID'], $row['Name'], $row['Used'], $row['Quantity'], $row['Type']);
      //  $rooms[] = $room;
      }
      return $room;
    }
  }
  
  