<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require '../includes/Mydbhandler.php';
$dbhandle = new Mydbhandler();
$messageid = $_POST['reply'];
$subject = $dbhandle->getAvaluebyID('subject', 'message_id', $messageid, 'message');
echo 'RE: '.$subject;
?>
