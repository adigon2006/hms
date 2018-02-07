<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require '../includes/Mydbhandler.php';
$dbhandle = new Mydbhandler();
$messageid = $_POST['reply'];
$message = $dbhandle->getAvaluebyID('message', 'message_id', $messageid, 'message_sent');
echo 'Message<br/>'.$message;
?>
