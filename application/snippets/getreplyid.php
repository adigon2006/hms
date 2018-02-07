<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require '../includes/Mydbhandler.php';
$dbhandle = new Mydbhandler();
global $menu;
$messageid = $_POST['reply'];
$grouptype = $dbhandle->getAvaluebyID('user_from_type', 'message_id', $messageid, 'message');
$id = $dbhandle->getAvaluebyID('user_from_id', 'message_id', $messageid, 'message');
//$name = $dbhandle->getAvaluebyID('user_from_id', 'message_id', $messageid, 'message');
if($grouptype == "1")
{
 $name = $dbhandle->getAvaluebyID('name', 'admin_id', $id, 'admin');
 $menu = '<option value='.$id.'>'.$name.'</option>';  
}
if($grouptype == "2")
{
 $name = $dbhandle->getAvaluebyID('name', 'doctor_id', $id, 'doctor');
 $menu = '<option value='.$id.'>'.$name.'</option>';  
}
if($grouptype == "3")
{
 $name = $dbhandle->getAvaluebyID('name', 'customercare_id', $id, 'customercare');
 $menu = '<option value='.$id.'>'.$name.'</option>';  
}
if($grouptype == "4")
{
 $name = $dbhandle->getAvaluebyID('name', 'accountant_id', $id, 'accountant');
 $menu = '<option value='.$id.'>'.$name.'</option>';  
}
if($grouptype == "5")
{
 $name = $dbhandle->getAvaluebyID('name', 'pharmacist_id', $id, 'pharmacist');
 $menu = '<option value='.$id.'>'.$name.'</option>';  
}
if($grouptype == "6")
{
 $name = $dbhandle->getAvaluebyID('name', 'laboratorist_id', $id, 'laboratorist');
 $menu = '<option value='.$id.'>'.$name.'</option>';  
}
if($grouptype == "7")
{
 $name = $dbhandle->getAvaluebyID('name', 'nurse_id', $id, 'nurse');
 $menu = '<option value='.$id.'>'.$name.'</option>';  
}
else if($grouptype == "8")
{
 $name = $dbhandle->getAvaluebyID('name', 'patient_id', $id, 'patient');
 $menu = '<option value='.$id.'>'.$name.'</option>';  
}

echo $menu;
?>
