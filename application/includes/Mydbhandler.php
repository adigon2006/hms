<?php
// main function class handler
class Mydbhandler
{	
private $connect;   
 
private function __contruct()
{	    
//date_default_timezone_set("America/Denver");
require_once ('dbconnect.php');    
$dbconnect = new Dbconnect();
$this->connect = $dbconnect->connect();
return $this->connect;
}

public function getMenuByIDbyValue($value)
{
 global $themenu;   
 if($value == 1)
 {
     $stmt = $this->__contruct()->prepare('select admin_id, name from admin');
     $stmt->execute();
     $stmt->bind_result($adminid,$name);
     $stmt->store_result();
     $numrows = $stmt->num_rows();
     if($numrows > 0)
     {
        $themenu = '<option value="0">Select All</option>' ;
     }
     for($i=0; $i<$numrows;$i++)
     {
      $stmt->fetch();
     
      $themenu .= '<option value="'.$adminid.'">'.$name.'</option>';   
     }
 }
 else if($value == 2)
 {
     $stmt = $this->__contruct()->prepare('select doctor_id, name from doctor');
     $stmt->execute();
     $stmt->bind_result($adminid,$name);
     $stmt->store_result();
     $numrows = $stmt->num_rows();
     if($numrows > 0)
     {
        $themenu = '<option value="0">Select All</option>' ;
     }
     for($i=0; $i<$numrows;$i++)
     {
      $stmt->fetch();
     
      $themenu .= '<option value="'.$adminid.'">'.$name.'</option>';   
     }
 }
 else if($value == 3)
 {
     $stmt = $this->__contruct()->prepare('select customercare_id, name from customercare');
     $stmt->execute();
     $stmt->bind_result($adminid,$name);
     $stmt->store_result();
     $numrows = $stmt->num_rows();
     if($numrows > 0)
     {
        $themenu = '<option value="0">Select All</option>' ;
     }
     for($i=0; $i<$numrows;$i++)
     {
      $stmt->fetch();
     
      $themenu .= '<option value="'.$adminid.'">'.$name.'</option>';   
     }
 }
  else if($value == 4)
 {
     $stmt = $this->__contruct()->prepare('select accountant_id, name from accountant');
     $stmt->execute();
     $stmt->bind_result($adminid,$name);
     $stmt->store_result();
     $numrows = $stmt->num_rows();
     if($numrows > 0)
     {
        $themenu = '<option value="0">Select All</option>' ;
     }
     for($i=0; $i<$numrows;$i++)
     {
      $stmt->fetch();
     
      $themenu .= '<option value="'.$adminid.'">'.$name.'</option>';   
     }
 }
   else if($value == 5)
 {
     $stmt = $this->__contruct()->prepare('select pharmacist_id, name from pharmacist');
     $stmt->execute();
     $stmt->bind_result($adminid,$name);
     $stmt->store_result();
     $numrows = $stmt->num_rows();
     if($numrows > 0)
     {
        $themenu = '<option value="0">Select All</option>' ;
     }
     for($i=0; $i<$numrows;$i++)
     {
      $stmt->fetch();
     
      $themenu .= '<option value="'.$adminid.'">'.$name.'</option>';   
     }
 }
   else if($value == 6)
 {
     $stmt = $this->__contruct()->prepare('select  laboratorist_id,name from  laboratorist');
     $stmt->execute();
     $stmt->bind_result($adminid,$name);
     $stmt->store_result();
     $numrows = $stmt->num_rows();
     if($numrows > 0)
     {
        $themenu = '<option value="0">Select All</option>' ;
     }
     for($i=0; $i<$numrows;$i++)
     {
      $stmt->fetch();
     
      $themenu .= '<option value="'.$adminid.'">'.$name.'</option>';   
     }
 }
 else if($value == 7)
 {
     $stmt = $this->__contruct()->prepare('select nurse_id, name from nurse');
     $stmt->execute();
     $stmt->bind_result($adminid,$name);
     $stmt->store_result();
     $numrows = $stmt->num_rows();
     if($numrows > 0)
     {
        $themenu = '<option value="0">Select All</option>' ;
     }
     for($i=0; $i<$numrows;$i++)
     {
      $stmt->fetch();
     
      $themenu .= '<option value="'.$adminid.'">'.$name.'</option>';   
     }
 }
 
  else if($value == 8)
 {
     $stmt = $this->__contruct()->prepare('select patient_id, name from patient');
     $stmt->execute();
     $stmt->bind_result($adminid,$name);
     $stmt->store_result();
     $numrows = $stmt->num_rows();
     if($numrows > 0)
     {
        $themenu = '<option value="0">Select All</option>' ;
     }
     for($i=0; $i<$numrows;$i++)
     {
      $stmt->fetch();
     
      $themenu .= '<option value="'.$adminid.'">'.$name.'</option>';   
     }
 }
 
 
 return $themenu;
}

public function sendBulkEmail($subject,$messagecontent,$receivergroup,$receiverid,$sendergroup,$senderid)
{
 $conversationid = $this->create_conversation($receivergroup, $receiverid, $sendergroup, $senderid);
 return $this->send_mail_as_needed($subject,$messagecontent,$receivergroup, $receiverid, $sendergroup, $senderid, $conversationid);    
}

private function send_mail_as_needed($subject,$messagecontent,$receivergroup, $receiverid, $sendergroup, $senderid, $conversationid)
{
    global $sent;
            
 if($receiverid == 0)
 {
  // send to bulk user
  
  $sent = $this->send_bulk_email($subject,$messagecontent,$receivergroup, $receiverid, $sendergroup, $senderid, $conversationid)  ; 
 }
 else if($receiverid != 0)
 {
  // send to single user
  $sent = $this->send_single_mail($subject,$messagecontent,$receivergroup, $receiverid, $sendergroup, $senderid, $conversationid) ;
 }
 
 return $sent;
}

private function send_bulk_email($subject,$messagecontent,$receivergroup, $receiverid, $sendergroup, $senderid, $conversationid)
{
 // admin  
    global $sent;
 if($receivergroup == 1)
 {
  $stmt = $this->__contruct()->prepare ('select admin_id from admin');
  $stmt->execute();
  $stmt->bind_result($id);
  $stmt->store_result();
  $numrows = $stmt->num_rows();
  for($i=0;$i<$numrows;$i++)
  {
   $stmt->fetch();  
  $sent = $this->send_single_mail($subject,$messagecontent,$receivergroup, $id, $sendergroup, $senderid, $conversationid);
  }
  echo $sent;
 }
 //doctor
 else if($receivergroup == 2)
 {
  $stmt = $this->__contruct()->prepare ('select doctor_id from doctor');
  $stmt->execute();
  $stmt->bind_result($id);
  $stmt->store_result();
  $numrows = $stmt->num_rows();
  for($i=0;$i<$numrows;$i++)
  {
   $stmt->fetch();  
  $sent =  $this->send_single_mail($subject,$messagecontent,$receivergroup,$id, $sendergroup, $senderid, $conversationid);
  }
  echo $sent;
 }
  //customer care
 else if($receivergroup == 3)
 {
  $stmt = $this->__contruct()->prepare ('select customercare_id from customercare');
  $stmt->execute();
  $stmt->bind_result($id);
  $stmt->store_result();
  $numrows = $stmt->num_rows();
  for($i=0;$i<$numrows;$i++)
  {
   $stmt->fetch();  
   $sent = $this->send_single_mail($subject,$messagecontent,$receivergroup, $id, $sendergroup, $senderid, $conversationid);
  }
  echo $sent;
 }
  //accountant
 else if($receivergroup == 4)
 {
     //global $sent;
     $stmt = $this->__contruct()->prepare ('select accountant_id from accountant');
  $stmt->execute();
  $stmt->bind_result($id);
  $stmt->store_result();
  $numrows = $stmt->num_rows();
  for($i=0;$i<$numrows;$i++)
  {
   $stmt->fetch();  
  $sent =  $this->send_single_mail($subject,$messagecontent,$receivergroup, $id, $sendergroup, $senderid, $conversationid);
  }
  echo $sent;
 }
   //pharmacist
 else if($receivergroup == 5)
 {
  $stmt = $this->__contruct()->prepare ('select pharmacist_id from pharmacist');
  $stmt->execute();
  $stmt->bind_result($id);
  $stmt->store_result();
  $numrows = $stmt->num_rows();
  for($i=0;$i<$numrows;$i++)
  {
   $stmt->fetch();  
   $sent = $this->send_single_mail($subject,$messagecontent,$receivergroup, $id, $sendergroup, $senderid, $conversationid);
  }
  echo $sent;
 }
   //laboratorist
 else if($receivergroup == 6)
 {
  $stmt = $this->__contruct()->prepare ('select laboratorist_id from laboratorist');
  $stmt->execute();
  $stmt->bind_result($id);
  $stmt->store_result();
  $numrows = $stmt->num_rows();
  for($i=0;$i<$numrows;$i++)
  {
  
   $stmt->fetch();  
  $sent =  $this->send_single_mail($subject,$messagecontent,$receivergroup, $id, $sendergroup, $senderid, $conversationid);
  }
  echo $sent;
 }
    //nurse 
 else if($receivergroup == 7)
 {
  $stmt = $this->__contruct()->prepare ('select nurse_id from nurse');
  $stmt->execute();
  $stmt->bind_result($id);
  $stmt->store_result();
  $numrows = $stmt->num_rows();
  for($i=0;$i<$numrows;$i++)
  {
   $stmt->fetch();  
   $sent = $this->send_single_mail($subject,$messagecontent,$receivergroup, $id, $sendergroup, $senderid, $conversationid);
  }
  echo $sent;
 }
 
 else if($receivergroup == 8)
 {
  $stmt = $this->__contruct()->prepare ('select patient_id from patient');
  $stmt->execute();
  $stmt->bind_result($id);
  $stmt->store_result();
  $numrows = $stmt->num_rows();
  for($i=0;$i<$numrows;$i++)
  {
   $stmt->fetch();  
   $sent = $this->send_single_mail($subject,$messagecontent,$receivergroup, $id, $sendergroup, $senderid, $conversationid);
  }
  echo $sent;
 }
}
private function send_single_mail($subject,$messagecontent,$receivergroup, $receiverid, $sendergroup, $senderid, $conversationid)
{
    global $sent;
    $status = 2;
    $timestamp = date('M,j Y h:i A');
  $stmt = $this->__contruct()->prepare('insert into message (user_from_type,user_from_id,user_to_type,user_to_id,conversation_id,status,timestamp,subject,message) values (?,?,?,?,?,?,?,?,?)'); 
  $stmt->bind_param('sssssssss', $sendergroup, $senderid,$receivergroup, $receiverid, $conversationid,$status,$timestamp,$subject,$messagecontent);
  $stmt->execute();
  $affected = $stmt->affected_rows;
  if($affected == 1)
  {
   $this->addToSent($subject,$messagecontent,$receivergroup, $receiverid, $sendergroup, $senderid, $conversationid); 
    $sent = 'sent';  
  }

  return $sent;
  }

private function create_conversation($receivergroup,$receiverid,$sendergroup,$senderid)
{
 global $conversationid;
  $stmt = $this->__contruct()->prepare('insert into conversation (receiver_id,receiver_group,sender_id,sender_group) values (?,?,?,?)');  
   $stmt->bind_param('ssss',$receiverid,$receivergroup,$sendergroup,$senderid); 
   $stmt->execute();
   $affected = $stmt->affected_rows;
//$planid = $stmt->
if($affected == 1)
{
$conversationid = $stmt->insert_id;
}
   
 return $conversationid;   
}

private function addToSent($subject,$messagecontent,$receivergroup, $receiverid, $sendergroup, $senderid, $conversationid)
{
     //$status = 2;
 $timestamp = date('M,j Y h:i A');
  $stmt = $this->__contruct()->prepare('insert into message_sent (user_from_type,user_from_id,user_to_type,user_to_id,conversation_id,timestamp,subject,message) values (?,?,?,?,?,?,?,?)'); 
  $stmt->bind_param('ssssssss', $sendergroup, $senderid,$receivergroup, $receiverid, $conversationid,$timestamp,$subject,$messagecontent);
  $stmt->execute();   
}


    public function getAvaluebyID($fieldselect,$fieldname,$fieldvalue,$tablename)
 {
  global $bindresult;     
  $stmt = $this->__contruct()->prepare('select '.$fieldselect.' from '.$tablename.' where '.$fieldname.'=? limit 1');
  $stmt->bind_param('s',$fieldvalue);
  $stmt->execute();
  $stmt->bind_result($bindresult);
  $stmt->store_result();
  $numrows = $stmt->num_rows();
  if($numrows == 1)
  {
   $stmt->fetch();
   $bindresult = $bindresult;
  }
  return $bindresult;
 } 
    
}
?>
