<?php

// process sending of email to various user
require '../includes/Mydbhandler.php';
$dbhandle = new Mydbhandler();
$senderid = $_POST['senderid'];
$sendergroup = $_POST['sendergroup'];
$receivergroup = $_POST['receivergroup'];
$receiverid = $_POST['receiverid'];
$subject = $_POST['subject'];
$messagecontent = $_POST['messagecontent'];
echo $dbhandle->sendBulkEmail($subject,$messagecontent,$receivergroup, $receiverid, $sendergroup, $senderid);
  
?>
