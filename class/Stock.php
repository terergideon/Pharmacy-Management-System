<?php 
require_once("../Database/database.php");
require_once("../interface/iStock.php");
class Stock extends Database implements iStock{

    public function all_stockList (){
        $sql = "select * 
        from stock i
         inner join item i 
         on s.item_id =i.item_id
         inner join item_type it
         on i.item_type_id  = it.item_type_id
         where s.stock_qty ! =?
         order by s.stock_added asc ";
         return $this->getRows($sql[0]);

    }//end of all _stocklist
    public function get_stockList($stock_id){
        $sql = "select * 
        from stock i
         inner join item i 
         on s.item_id =i.item_id
         where s.stock_id =?";
         return $this->getRows($sql[$stock_id]); 
    } //end of  get stock_list

    public function del_stockList($stock_id)
    {
        $sql = "delete 
        from stock 
        where stock_id = ?";
         return $this->deleteRow($sql[$stock_id]); 

    } //end of del stocklist

    public function add_stock($item_id, $qty , $xDate,$manu , $purc){
        $sql =  "insert into stock (item_id, stock_qty ,stock_expiry, stock_manufactered,srock_purchased ) values(?,?,?,?,?)";
        return $this->insertRow($sql, [$item_id,$qty, $xDate, $manu , $purc]);

    }//end of add stock
    public function all_stockGroup (){
        $sql = "select s.stock_id,i.item_id, i.item_name, i.item_price,SUM(stock_qty)  as qty 
            from stock s
            inner join item i  
            on s.item_id =i.item_id
            group by s.item_id
            order by i.item_name ASC";
            return $this->getRows($sql);

    }//end of all stock group
    public function update_stockQty(){
        $sql = "update stock
        set stock_qty=?
        where stock_id=?";
        return $this->updateRow($sql, [$stock_qty, $stock_id]);

    }//end of update stockQty
    public function get_stockQty($stock_id){

        $sql = "select *
        from stock 
        where stock_id =?";
        return $this->getRows($sql[$stock_id]);
    }//end of get stock
    public function add_fuck(
        $item_id, $qty, $xDate,$manu ,$purc) {
            $sql =  "insert into stock ( item_id , stock_qty, stock_expiry, stock_manufactured,stock_purchased) values (?,?,?,?,?,?);";
            return $this->insertRow($sql ,[$item_id,$qty, $xDate,$manu,$purc]);
    
        }//end of stock 
    }//end of class stock
$stock =new Stock();