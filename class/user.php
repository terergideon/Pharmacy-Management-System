<?php
require_once ("../Database/database.php");
require_once ("../interface/iUser.php");
class User extends Database implements iUser {
    public function user_login($username, $password){
        $sql = "select * 
        from user 
        where user_account  = ?
        and user_pass =?";
         return $this->getRows($sql, [$$username, $password]);
       
    }//end of login _user
}//end of calss user 
$user =new User();
//end of file user.php
//location regis/ class/ user.php