<?php
require_once("../Database/database.php");
require_once("../interface/iItem.php");
class Item extends Database implements iItem{
public function all_items(){
    $sql = "select * 
    from item i
     inner join item_type it  
     on i.item_type_id =it.item_type_id
     order by i.item_name asc ";
     return $this->getRows($sql);
   
}//end of all_items
public function get_item ($item_id){
    $sql = "select * 
    from item 
    where item_id  = ?";
     return $this->getRows($sql, [$item_id]);
   


}//end of edit item
public function add_item($name, $iPrice, $type_id , $code, $brand, $grams){
    $sql =  "insert into item ( item_name , item_price, item_type_id, item_id, item_brand , item_grams) values (?,?,?,?,?,?);";
        return $this->insertRow($sql ,[$iName, $iPrice,$type_id, $code, $brand, $grams]);

}//end of add items
public function edit_items( $item_id, $iName, $iPrice , $type_id , $code, $brand, $grams){
    $sql =  "update item 
    set( item_price = ?  ,set( item_price = ?  , item_type_id = ?, item_code = ?,item_brand = ?),item_grams = ?) 
    where item_id = ?";
    return $this->updateRow($sql ,[$iName, $iPrice,$type_id, $code, $brand, $grams,$item_id]);

}//end of edit items

}
$item = new Item();
//end of file item.php
//location htdocs/ regis/ class/ item.php