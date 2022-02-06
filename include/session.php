<?php

// setting the session to ensure no one gets to system without loggin in

if(session_status() == PHP_SESSION_NONE)
{
    session_start();//start session if not start
}
if(!isset($_SESSION['logged_id'])){
    die('Acess is Denied!');
}

// end isset
