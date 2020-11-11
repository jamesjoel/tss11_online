<?php

// $_SESSION = array();
session_start();// this function is allow to use for use(CRUD) session.
// this function is a mendetory function for use/insert/delete session.

// print_r($_SESSION);

$_SESSION['a']="red";
$_SESSION['name']="nitin";
$_SESSION['age']=25;
$_SESSION['city']="indore";


print_r($_SESSION);
// $arr['a']='red';

?>