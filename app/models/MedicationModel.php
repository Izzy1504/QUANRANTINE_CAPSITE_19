<?php
class MedicationModel {
    private $id;
    private $name;
    private $price;
    private $effect;
    private $expirationDate;
  
    public function __construct($id, $name, $price, $effect, $expirationDate) {
      $this->id = $id;
      $this->name = $name;
      $this->price = $price;
      $this->effect = $effect;
      $this->expirationDate = $expirationDate;
    }
  
    public function getId() {
      return $this->id;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function getPrice() {
      return $this->price;
    }
  
    public function getEffect() {
      return $this->effect;
    }
  
    public function getExpirationDate() {
      return $this->expirationDate;
    }
  
    public function setId($id) {
      $this->id = $id;
    }
  
    public function setName($name) {
      $this->name = $name;
    }
  
    public function setPrice($price) {
      $this->price = $price;
    }
  
    public function setEffect($effect) {
      $this->effect = $effect;
    }
  
    public function setExpirationDate($expirationDate) {
      $this->expirationDate = $expirationDate;
    }
    public static function getNameById($id){
      $sql = "SELECT name as fullName FROM dbo.Medication where id='".$id."'";
          $db = new Database();
          $results = $db->query($sql);
          return $results[0]['fullName'];
    }
  }
  