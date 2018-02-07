<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require '../includes/Mydbhandler.php';
$dbhandle = new Mydbhandler();
$messageid = $_POST['reply'];

echo $dbhandle->getAvaluebyID('user_from_type', 'message_id', $messageid, 'message');



?>
