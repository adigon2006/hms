<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */
require '../includes/Mydbhandler.php';
$dbhandle = new Mydbhandler();
$groupid = $_POST['groupid'];
$msg = $dbhandle->getMenuByIDbyValue($groupid);
echo $msg;
?>
