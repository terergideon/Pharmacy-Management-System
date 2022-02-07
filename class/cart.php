<?php
require_once("../Database/database.php");
require_once("../interface/iCart.php");

class Cart extends Database implements iCart {

    public function add_toCart ($item_id, $qty, $stock_id, $user_id, $uniqid){
        $sql = "insert into cart (item_id, qty-id,cart_stock_id,user_id,cart_uniqueid) values(?,?,?,?,?);";

        return $this->insertRow($sql ,[$item_id, $qty,$stock_id, $user_id, $uniqid]);

    } //end of the add-to cart
   

    public function all_cartDatas($user_id){

        $sql = "select * 
        from cart c 
        inner join item i  
        ON c.item_id  =i.item_id where user_id =? order by cart_id asc";
        return $this -> getRows($sql, [$user_id]);

    }//end of all_cartDatas

    public function delCart($cart_id){

        $sql = "delete from cart where cart_id =?";
        return $this->deleteRow($sql ,[$cart_id]);

}// end of del cart

public function dellAllCart (){
    $sql = "delete from cart where cart_id =?";
        return $this->deleteRow($sql);
}

public function AllCart(){
    $sql = "select * 
    from cart c 
    inner join item i  
    ON c.item_id  =i.item_id inner join stock s
    on s.item_id = i.item_id 
    INNER JOIN item_type it 
    on it.item_type_id = i.item_type_id" ;
    return $this -> getRows($sql);

} //end of all cart

} //end of class cart
$cart = new Cart();
//end file of cart.php
// location regis/clas/Cart.php
