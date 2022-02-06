<?php
require_once("../Database/database.php");
require_once("../interface/iExpired.php");

class Expired extends Database implements iExpired (){
    public function add_expired($name, $price , $qty, $expiredDate){

        $sql =  "insert into expired ( exp_itemName , exp_itemPrice, exp_itemQty, exp_expiredDate) values (?,?,?,?,?);";
        return $this->insertRow($sql ,[$name, $price,$qty, $expiredDate]);


    }//end of add-expired
    public function all_expired() {
        
        $sql = "select * 
        from expired";
        return $this->getRows($sql);
        
        
    }//end  of all  expired
//
}//end of class
$expired = new Expired();
//end of file expired.php
//location regis / class/ expired.php
