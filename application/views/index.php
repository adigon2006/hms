
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <head>
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
        <link rel="shortcut icon" href="images/logo.ico" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<?php include 'otherincludes.php';?>
        <title><?php echo $page_title;?> | <?php echo $system_title;?></title>
    </head>
    
    
<body>
<div id="app">
  
    <?php include $this->session->userdata('login_type').'/navigation.php';?>
   
   <div class="app-content">
      <?php include 'header.php';?> 
       
    <!--<div class="main-content">
		<?php// include 'page_info.php';?>
        <div class="container-fluid padded">-->
        <div class="main-content" >
        <div class="wrap-content container" id="container">            
		
		<?php include $this->session->userdata('login_type').'/'.$page_name.'.php';?>
        
        </div>
        </div>        
	
    </div>
 
	<?php  include 'otherfooter.php';?>
    	
    </div>	
	<?php include 'othermainjs.php' ?>
		
		
    <!--</div>-->
<?php if($page_name == 'dashboard')
{
echo'<script src="'.base_url().'template/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="'.base_url().'template/vendor/jquery.sparkline/jquery.sparkline.min.js"></script>
        <script src="'. base_url().'template/vendor/Chart.js/Chart.min.js"></script>
        <script src="'. base_url().'template/assets/js/main.js"></script>
		<script src="'. base_url().'template/assets/js/index.js"></script>
        <script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
				FormElements.init();
				//FormValidator.init();
			});
		</script>';
}
 if($page_name == 'view_prescription' || $page_name == 'visit_details' || $page_name == 'manage_department' || $page_name == 'manage_in_patient' || $page_name == 'manage_blood_donor' || $page_name == 'manage_blood_bank' || $page_name == 'manage_invoice' || $page_name == 'patient_landing' || $page_name == 'manage_doctor' || $page_name == 'manage_customer_care' || $page_name == 'manage_patient' ||$page_name == 'manage_nurse' || $page_name == 'manage_pharmacist' || $page_name == 'manage_laboratorist' || $page_name == 'manage_accountant' || $page_name == 'view_appointment' || $page_name == 'view_payment' || $page_name == 'view_bed_status' || $page_name == 'view_blood_bank'|| $page_name == 'view_medicine'|| $page_name == 'view_report' || $page_name == 'manage_profile' || $page_name=='system_settings' || $page_name=='system_settings' || $page_name=='manage_noticeboard' || $page_name=='manage_language'|| $page_name=='backup_restore' || $page_name== 'manage_appointment' || $page_name== 'manage_prescription' || $page_name== 'manage_bed_allotment' || $page_name== 'manage_report'|| $page_name== 'manage_vital_assessment' || $page_name== 'manage_risk_assessment'|| $page_name== 'manage_user'|| $page_name== 'manage_hospital' || $page_name== 'manage_payment_integration' || $page_name == 'manage_bed'|| $page_name == 'manage_medicine_category' || $page_name == 'manage_medicine'  )
{
echo
'<script src="'. base_url().'template/vendor/select2/select2.min.js"></script>
		<script src="'. base_url().'template/vendor/DataTables/jquery.dataTables.min.js"></script>
		<script src="'. base_url().'template/vendor/ckeditor/ckeditor.js"></script>
		<script src="'. base_url().'template/vendor/ckeditor/adapters/jquery.js"></script>
		<script src="'. base_url().'template/assets/js/main.js"></script>
		<script src="'. base_url().'template/assets/js/form-elements.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="'. base_url().'template/assets/js/table-data.js"></script>
		<script src="'. base_url().'template/assets/js/table-data2.js"></script>
		<script src="'. base_url().'template/vendor/jquery-validation/jquery.validate.min.js"></script>
		 <script src="'. base_url().'template/assets/js/form-validation.js"></script>
                <script src="'. base_url().'template/vendor/sweetalert/sweet-alert.min.js"></script>
		<script src="'. base_url().'template/vendor/toastr/toastr.min.js"></script>
              <script src="'. base_url().'template/assets/js/ui-notifications.js"></script>
			
<script>
			jQuery(document).ready(function() {
				Main.init();
				TableData.init();
				//FormValidator.init();
				FormElements.init();
                                UINotifications.init();
			});
		</script>';	
}
if($page_name == 'add_new_patient')
{
  echo
'<script src="'. base_url().'template/vendor/select2/select2.min.js"></script>
		<script src="'. base_url().'template/vendor/DataTables/jquery.dataTables.min.js"></script>
		<script src="'. base_url().'template/vendor/ckeditor/ckeditor.js"></script>
		<script src="'. base_url().'template/vendor/ckeditor/adapters/jquery.js"></script>
		
		<script src="'. base_url().'template/assets/js/form-elements.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="'. base_url().'template/assets/js/table-data.js"></script>
		<script src="'. base_url().'template/assets/js/table-data2.js"></script>
		<script src="'. base_url().'template/vendor/jquery-validation/jquery.validate.min.js"></script>
                    <script src="'. base_url().'template/vendor/jquery-smart-wizard/jquery.smartWizard.js"></script>
		 <script src="'. base_url().'template/template/assets/js/form-validation.js"></script>
                   <script src="'. base_url().'template/assets/js/main.js"></script>
                     <script src="'. base_url().'template/assets/js/form-wizard.js"></script>
                              <script src="'. base_url().'template/vendor/sweetalert/sweet-alert.min.js"></script>
		<script src="'. base_url().'template/vendor/toastr/toastr.min.js"></script>
              <script src="'. base_url().'template/assets/js/ui-notifications.js"></script>
			<script>
			jQuery(document).ready(function() {
				Main.init();
				//TableData.init();
				//FormValidator.init();
				FormElements.init();
                                FormWizard.init();
                                UINotifications.init();
			});
		</script>';  
}
if( $page_name == 'view_single_patient' || $page_name == 'add_new_doctor' || $page_name == 'add_new_nurse' || $page_name == 'add_new_laboratorist'  || $page_name == 'add_new_accountant' || $page_name == 'add_new_customercare' || $page_name == 'add_new_pharmacist')
{
  echo
'<script src="'. base_url().'template/vendor/select2/select2.min.js"></script>
		<script src="'. base_url().'template/vendor/DataTables/jquery.dataTables.min.js"></script>
		<script src="'. base_url().'template/vendor/ckeditor/ckeditor.js"></script>
		<script src="'. base_url().'template/vendor/ckeditor/adapters/jquery.js"></script>
		
		<script src="'. base_url().'template/assets/js/form-elements.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="'. base_url().'template/assets/js/table-data.js"></script>
		<script src="'. base_url().'template/assets/js/table-data2.js"></script>
		<script src="'. base_url().'template/vendor/jquery-validation/jquery.validate.min.js"></script>
                    <script src="'. base_url().'template/vendor/jquery-smart-wizard/jquery.smartWizard.js"></script>
		 <script src="'. base_url().'template/template/assets/js/form-validation.js"></script>
                     <script src="'. base_url().'template/vendor/bootstrap-fileinput/jasny-bootstrap.js"></script>
                   <script src="'. base_url().'template/assets/js/main.js"></script>
                    <script src="'. base_url().'template/assets/js/form-wizard.js"></script>
                             <script src="'. base_url().'template/vendor/sweetalert/sweet-alert.min.js"></script>
		<script src="'. base_url().'template/vendor/toastr/toastr.min.js"></script>
              <script src="'. base_url().'template/assets/js/ui-notifications.js"></script>
			<script>
			jQuery(document).ready(function() {
				Main.init();
				TableData.init();
				//FormValidator.init();
				FormElements.init();
                                FormWizard.init();
                                UINotifications.init();
			});
		</script>';  
}
if( $page_name == 'view_patient_profile' )	
	{
  echo
'<script src="'. base_url().'template/vendor/select2/select2.min.js"></script>
		<script src="'. base_url().'template/vendor/DataTables/jquery.dataTables.min.js"></script>
		<script src="'. base_url().'template/vendor/ckeditor/ckeditor.js"></script>
		<script src="'. base_url().'template/vendor/ckeditor/adapters/jquery.js"></script>
		
		<script src="'. base_url().'template/assets/js/form-elements.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="'. base_url().'template/assets/js/table-data.js"></script>
		<script src="'. base_url().'template/assets/js/table-data2.js"></script>
		<script src="'. base_url().'template/vendor/jquery-validation/jquery.validate.min.js"></script>
 <!--                   <script src="'. base_url().'template/vendor/jquery-smart-wizard/jquery.smartWizard.js"></script>
		 <script src="'. base_url().'template/template/assets/js/form-validation.js"></script> -->
                     <script src="'. base_url().'template/vendor/bootstrap-fileinput/jasny-bootstrap.js"></script>
                   <script src="'. base_url().'template/assets/js/main.js"></script>
                    <!-- <script src="'. base_url().'template/assets/js/form-wizard.js"></script> -->
                             <script src="'. base_url().'template/vendor/sweetalert/sweet-alert.min.js"></script>
		<script src="'. base_url().'template/vendor/toastr/toastr.min.js"></script>
          <!--    <script src="'. base_url().'template/assets/js/ui-notifications.js"></script> -->
			<script>
			jQuery(document).ready(function() {
				Main.init();
				TableData.init();
				//FormValidator.init();
				FormElements.init();
                                //FormWizard.init();
                               // UINotifications.init();
			});
		</script>';  
}
if($page_name == 'manage_calendar')
{
 echo'	<script src="'. base_url().'template/vendor/jquery/jquery.min.js"></script>
		<script src="'. base_url().'template/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="'. base_url().'template/vendor/modernizr/modernizr.js"></script>
		<script src="'. base_url().'template/vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="'. base_url().'template/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="'. base_url().'template/vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="'. base_url().'template/vendor/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="'. base_url().'template/assets/js/form-elements.js"></script>
		<script src="'. base_url().'template/vendor/moment/moment.min.js"></script>
		<script src="'. base_url().'template/vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="'. base_url().'template/vendor/fullcalendar/fullcalendar.min.js"></script>
		<script src="'. base_url().'template/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="'. base_url().'template/assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="'. base_url().'template/assets/js/pages-calendar.js"></script>
		<script>
			jQuery(document).ready(function() {
				
				
				Calendar.init();
                                Main.init();
                                FormElements.init();
			});
		</script>';   
}
if($page_name == 'manage_email' )
{
    echo
'<script src="'. base_url().'template/vendor/select2/select2.min.js"></script>
		<script src="'. base_url().'template/vendor/DataTables/jquery.dataTables.min.js"></script>
		<script src="'. base_url().'template/vendor/ckeditor/ckeditor.js"></script>
		<script src="'. base_url().'template/vendor/ckeditor/adapters/jquery.js"></script>
		
		<script src="'. base_url().'template/assets/js/form-elements.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="'. base_url().'template/assets/js/table-data.js"></script>
		<script src="'. base_url().'template/assets/js/table-data2.js"></script>
		<script src="'. base_url().'template/vendor/jquery-validation/jquery.validate.min.js"></script>
                    <script src="'. base_url().'template/vendor/jquery-smart-wizard/jquery.smartWizard.js"></script>
		
                   <script src="'. base_url().'template/assets/js/main.js"></script>
                     <script src="'. base_url().'template/assets/js/form-wizard.js"></script>
                        <script src="'. base_url().'template/assets/js/pages-messages.js"></script>
                            <script src="'. base_url().'template/assets/js/form-text-editor.js"></script>
                                <script>
$(document).ready(function(){

// all reply
$(".forwardto").each(function(index,element){
$(".forwardto:eq("+index+")").click(function(e){
e.preventDefault();

theurl2 = $(".forwardto:eq("+index+")").attr("href");
url3 = window.location+theurl2;
captured2 = /message=([^&]+)/.exec(url3)[1]; // Value is in [1] ("384" in our case)
forward = captured2 ? captured2 : "myDefaultValue";

$.post("application/snippets/getforwardsubject.php",{"reply":forward},function(data3){
$("#subject3").val(data3)
});

$.post("application/snippets/getforwardmessage.php",{"reply":forward},function(data4){
$("#message-content3").val(data4);
});

$("#forwardmodal").modal("toggle");

//alert(forward);

});

});




$("#send-message").click(function(e){
e.preventDefault();
$("#display-msg").hide();
receivergroup = $("#receiver-group").val();
receiverid = $("#receiver-id").val();
senderid = $("#sender-id").val();
sendergroup = $("#sender-group").val();
subject = $("#subject").val();
messagecontent = $("#message-content").val(); 

if(receivergroup == "")
{
$("#display-msg").show();
realmsg = "Select Receiver Group"  ;
$("#display-msg").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(receiverid == "")
{
$("#display-msg").show();
realmsg = "Select Receiver";
$("#display-msg").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(subject == "")
{
$("#display-msg").show();
realmsg = "Enter Subject";
$("#display-msg").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(messagecontent == "")
{
$("#display-msg").show();
realmsg = "Enter Message";
$("#display-msg").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else
{
$.post("application/snippets/emailsender.php",{"subject":subject,"messagecontent":messagecontent,"receivergroup":receivergroup,"receiverid":receiverid,"sendergroup":sendergroup,"senderid":senderid},function(data){
$("#display-msg").show();
if(data == "sent")
{
realmsg = "Message Sent ";
$("#display-msg").html("<div class=\'alert alert-success\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
$("#subject").val("");
$("#message-content").val(""); 
}
});

}

});




// reply message
$("#send-message2").click(function(e){
e.preventDefault();
$("#display-msg2").hide();
receivergroup = $("#receiver-group2").val();
receiverid = $("#receiver-id2").val();
senderid = $("#sender-id2").val();
sendergroup = $("#sender-group2").val();
subject = $("#subject2").val();
messagecontent = $("#message-content2").val(); 

if(receivergroup == "")
{
$("#display-msg2").show();
realmsg = "Select Receiver Group"  ;
$("#display-msg2").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(receiverid == "")
{
$("#display-msg2").show();
realmsg = "Select Receiver";
$("#display-msg2").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(subject == "")
{
$("#display-msg2").show();
realmsg = "Enter Subject";
$("#display-msg2").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(messagecontent == "")
{
$("#display-msg2").show();
realmsg = "Enter Message";
$("#display-msg2").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else
{
$.post("application/snippets/emailsender.php",{"subject":subject,"messagecontent":messagecontent,"receivergroup":receivergroup,"receiverid":receiverid,"sendergroup":sendergroup,"senderid":senderid},function(data){
$("#display-msg2").show();
if(data == "sent")
{
realmsg = "Message Sent ";
$("#display-msg2").html("<div class=\'alert alert-success\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");

$("#subject2").val("");
$("#message-content2").val(""); 
}
});

}

});



// forward message
$("#send-message3").click(function(e){
e.preventDefault();
$("#display-msg3").hide();
receivergroup = $("#receiver-group3").val();
receiverid = $("#receiver-id3").val();
senderid = $("#sender-id3").val();
sendergroup = $("#sender-group3").val();
subject = $("#subject3").val();
messagecontent = $("#message-content3").val(); 

if(receivergroup == "")
{
$("#display-msg3").show();
realmsg = "Select Receiver Group"  ;
$("#display-msg3").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(receiverid == "")
{
$("#display-msg3").show();
realmsg = "Select Receiver";
$("#display-msg3").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(subject == "")
{
$("#display-msg3").show();
realmsg = "Enter Subject";
$("#display-msg3").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(messagecontent == "")
{
$("#display-msg3").show();
realmsg = "Enter Message";
$("#display-msg3").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else
{
$.post("application/snippets/emailsender.php",{"subject":subject,"messagecontent":messagecontent,"receivergroup":receivergroup,"receiverid":receiverid,"sendergroup":sendergroup,"senderid":senderid},function(data){
$("#display-msg3").show();
if(data == "sent")
{
realmsg = "Message Sent ";
$("#display-msg3").html("<div class=\'alert alert-success\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");

$("#subject3").val("");
$("#message-content3").val(""); 
}
});

}

});


//var data2 = [{ id: 0, text: \'enhancement\' },{ id: 1, text: \'bug\' },{ id: 2, text: \'duplicate\' }, { id: 3, text: \'invalid\' },{ id: 4, text: \'wontfix\' }];
//$("#receiver-id").select2({data: data2});

$("#receiver-group").change(function(e)
{
receivergroupid = $("#receiver-group").val();
$.post("application/snippets/getreceivermenu.php",{"groupid":receivergroupid},function(data){
//data2 = [{id:"Foo",text:"Foo"},{id:"Bar",text:"Bar"}];
//$("#receiver-id").select2("data",data2,true);
$("#receiver-id").empty().html(data);
//$("#receiver-id").select2();
});

});


$("#receiver-group2").change(function(e)
{
receivergroupid = $("#receiver-group2").val();
$.post("application/snippets/getreceivermenu.php",{"groupid":receivergroupid},function(data){
//data2 = [{id:"Foo",text:"Foo"},{id:"Bar",text:"Bar"}];
//$("#receiver-id").select2("data",data2,true);
$("#receiver-id2").empty().html(data);
});

});

$("#receiver-group3").change(function(e)
{
receivergroupid = $("#receiver-group3").val();
$.post("application/snippets/getreceivermenu.php",{"groupid":receivergroupid},function(data){
//data2 = [{id:"Foo",text:"Foo"},{id:"Bar",text:"Bar"}];
//$("#receiver-id").select2("data",data2,true);
$("#receiver-id3").empty().html(data);
});

});

// reply for all

$(".reply").each(function(index,element)
{
$(".reply:eq("+index+")").click(function(e){
e.preventDefault();
theurl = $(".reply:eq("+index+")").attr("href");
url2 = window.location+theurl;
captured = /to=([^&]+)/.exec(url2)[1]; // Value is in [1] ("384" in our case)
reply = captured ? captured : "myDefaultValue";

$.post("application/snippets/getreplygroup.php",{"reply":reply},function(data){
if(data == "1")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option selected value=\"1\">Admin</option><option value=\"2\">Doctor</option><option value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "2")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option selected value=\"2\">Doctor</option><option value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "3")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option selected value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "4")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option selected value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "5")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option  value=\"4\">Accountant</option><option selected value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "6")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option  value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option selected value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "7")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option  value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option  value=\"6\">Laboratorist,eo</option><option selected value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "8")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option selected value=\"8\">Patient</option>");

}
$.post("application/snippets/getreplyid.php",{"reply":reply},function(data2){
$("#receiver-id2").empty().html(data2);
});

$.post("application/snippets/getreplysubject.php",{"reply":reply},function(data3){
$("#subject2").val(data3)
});

$.post("application/snippets/getreplymessage.php",{"reply":reply},function(data4){
$("#message-content2").val(data4);
});



//$("#receiver-group2").empty().html("<option value=\"3\">"+data+"</option>");
$("#replymodal").modal("toggle");

})


//alert(reply);

});

});


// end of reply for all

$("#reply").click(function(e){
e.preventDefault();
theurl = $("#reply").attr("href");
url2 = window.location+theurl;
captured = /to=([^&]+)/.exec(url2)[1]; // Value is in [1] ("384" in our case)
reply = captured ? captured : "myDefaultValue";

$.post("application/snippets/getreplygroup.php",{"reply":reply},function(data){
if(data == "1")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option selected value=\"1\">Admin</option><option value=\"2\">Doctor</option><option value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "2")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option selected value=\"2\">Doctor</option><option value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "3")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option selected value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "4")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option selected value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "5")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option  value=\"4\">Accountant</option><option selected value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "6")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option  value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option selected value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "7")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option  value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option  value=\"6\">Laboratorist,eo</option><option selected value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "8")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option selected value=\"8\">Patient</option>");

}
$.post("application/snippets/getreplyid.php",{"reply":reply},function(data2){
$("#receiver-id2").empty().html(data2);
});

$.post("application/snippets/getreplysubject.php",{"reply":reply},function(data3){
$("#subject2").val(data3)
});

$.post("application/snippets/getreplymessage.php",{"reply":reply},function(data4){
$("#message-content2").val(data4);
});



//$("#receiver-group2").empty().html("<option value=\"3\">"+data+"</option>");
$("#replymodal").modal("toggle");

})


//alert(reply);

});


$("#forwardto").click(function(e){
e.preventDefault();

theurl2 = $("#forwardto").attr("href");
url3 = window.location+theurl2;
captured2 = /message=([^&]+)/.exec(url3)[1]; // Value is in [1] ("384" in our case)
forward = captured2 ? captured2 : "myDefaultValue";

$.post("application/snippets/getforwardsubject.php",{"reply":forward},function(data3){
$("#subject3").val(data3)
});

$.post("application/snippets/getforwardmessage.php",{"reply":forward},function(data4){
$("#message-content3").val(data4);
});

$("#forwardmodal").modal("toggle");

//alert(forward);

});




});
</script>
			<script>
			jQuery(document).ready(function() {
				Main.init();
				TextEditor.init();
                                Messages.init();
                                 FormElements.init();
                                FormWizard.init();
				
			});
		</script>';
                
    
}

if( $page_name == 'manage_email_sent')
{
    echo
'<script src="'. base_url().'template/vendor/select2/select2.min.js"></script>
		<script src="'. base_url().'template/vendor/DataTables/jquery.dataTables.min.js"></script>
		<script src="'. base_url().'template/vendor/ckeditor/ckeditor.js"></script>
		<script src="'. base_url().'template/vendor/ckeditor/adapters/jquery.js"></script>
		
		<script src="'. base_url().'template/assets/js/form-elements.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="'. base_url().'template/assets/js/table-data.js"></script>
		<script src="'. base_url().'template/assets/js/table-data2.js"></script>
		<script src="'. base_url().'template/vendor/jquery-validation/jquery.validate.min.js"></script>
                    <script src="'. base_url().'template/vendor/jquery-smart-wizard/jquery.smartWizard.js"></script>
		
                   <script src="'. base_url().'template/assets/js/main.js"></script>
                     <script src="'. base_url().'template/assets/js/form-wizard.js"></script>
                        <script src="'. base_url().'template/assets/js/pages-messages.js"></script>
                            <script src="'. base_url().'template/assets/js/form-text-editor.js"></script>
                                <script src="'. base_url().'template/vendor/sweetalert/sweet-alert.min.js"></script>
		<script src="'. base_url().'template/vendor/toastr/toastr.min.js"></script>
              <script src="'. base_url().'template/assets/js/ui-notifications.js"></script>
                                <script>
$(document).ready(function(){

// all reply
$(".forwardto").each(function(index,element){
$(".forwardto:eq("+index+")").click(function(e){
e.preventDefault();

theurl2 = $(".forwardto:eq("+index+")").attr("href");
url3 = window.location+theurl2;
captured2 = /message=([^&]+)/.exec(url3)[1]; // Value is in [1] ("384" in our case)
forward = captured2 ? captured2 : "myDefaultValue";

$.post("application/snippets/getforwardsubject2.php",{"reply":forward},function(data3){
$("#subject3").val(data3)
});

$.post("application/snippets/getforwardmessage2.php",{"reply":forward},function(data4){
$("#message-content3").val(data4);
});

$("#forwardmodal").modal("toggle");

//alert(forward);

});

});




$("#send-message").click(function(e){
e.preventDefault();
$("#display-msg").hide();
receivergroup = $("#receiver-group").val();
receiverid = $("#receiver-id").val();
senderid = $("#sender-id").val();
sendergroup = $("#sender-group").val();
subject = $("#subject").val();
messagecontent = $("#message-content").val(); 

if(receivergroup == "")
{
$("#display-msg").show();
realmsg = "Select Receiver Group"  ;
$("#display-msg").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(receiverid == "")
{
$("#display-msg").show();
realmsg = "Select Receiver";
$("#display-msg").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(subject == "")
{
$("#display-msg").show();
realmsg = "Enter Subject";
$("#display-msg").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(messagecontent == "")
{
$("#display-msg").show();
realmsg = "Enter Message";
$("#display-msg").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else
{
$.post("application/snippets/emailsender.php",{"subject":subject,"messagecontent":messagecontent,"receivergroup":receivergroup,"receiverid":receiverid,"sendergroup":sendergroup,"senderid":senderid},function(data){
$("#display-msg").show();
if(data == "sent")
{
realmsg = "Message Sent ";
$("#display-msg").html("<div class=\'alert alert-success\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
$("#subject").val("");
$("#message-content").val(""); 
}
});

}

});




// reply message
$("#send-message2").click(function(e){
e.preventDefault();
$("#display-msg2").hide();
receivergroup = $("#receiver-group2").val();
receiverid = $("#receiver-id2").val();
senderid = $("#sender-id2").val();
sendergroup = $("#sender-group2").val();
subject = $("#subject2").val();
messagecontent = $("#message-content2").val(); 

if(receivergroup == "")
{
$("#display-msg2").show();
realmsg = "Select Receiver Group"  ;
$("#display-msg2").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(receiverid == "")
{
$("#display-msg2").show();
realmsg = "Select Receiver";
$("#display-msg2").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(subject == "")
{
$("#display-msg2").show();
realmsg = "Enter Subject";
$("#display-msg2").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(messagecontent == "")
{
$("#display-msg2").show();
realmsg = "Enter Message";
$("#display-msg2").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else
{
$.post("application/snippets/emailsender.php",{"subject":subject,"messagecontent":messagecontent,"receivergroup":receivergroup,"receiverid":receiverid,"sendergroup":sendergroup,"senderid":senderid},function(data){
$("#display-msg2").show();
if(data == "sent")
{
realmsg = "Message Sent ";
$("#display-msg2").html("<div class=\'alert alert-success\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");

$("#subject2").val("");
$("#message-content2").val(""); 
}
});

}

});



// forward message
$("#send-message3").click(function(e){
e.preventDefault();
$("#display-msg3").hide();
receivergroup = $("#receiver-group3").val();
receiverid = $("#receiver-id3").val();
senderid = $("#sender-id3").val();
sendergroup = $("#sender-group3").val();
subject = $("#subject3").val();
messagecontent = $("#message-content3").val(); 

if(receivergroup == "")
{
$("#display-msg3").show();
realmsg = "Select Receiver Group"  ;
$("#display-msg3").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(receiverid == "")
{
$("#display-msg3").show();
realmsg = "Select Receiver";
$("#display-msg3").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(subject == "")
{
$("#display-msg3").show();
realmsg = "Enter Subject";
$("#display-msg3").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else if(messagecontent == "")
{
$("#display-msg3").show();
realmsg = "Enter Message";
$("#display-msg3").html("<div class=\'alert alert-danger\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");
}
else
{
$.post("application/snippets/emailsender.php",{"subject":subject,"messagecontent":messagecontent,"receivergroup":receivergroup,"receiverid":receiverid,"sendergroup":sendergroup,"senderid":senderid},function(data){
$("#display-msg3").show();
if(data == "sent")
{
realmsg = "Message Sent ";
$("#display-msg3").html("<div class=\'alert alert-success\'><button class=\"fa fa-close close\" data-dismiss=\"alert\"></button>"+realmsg+"</div>");

$("#subject3").val("");
$("#message-content3").val(""); 
}
});

}

});


//var data2 = [{ id: 0, text: \'enhancement\' },{ id: 1, text: \'bug\' },{ id: 2, text: \'duplicate\' }, { id: 3, text: \'invalid\' },{ id: 4, text: \'wontfix\' }];
//$("#receiver-id").select2({data: data2});

$("#receiver-group").change(function(e)
{
receivergroupid = $("#receiver-group").val();
$.post("application/snippets/getreceivermenu.php",{"groupid":receivergroupid},function(data){
//data2 = [{id:"Foo",text:"Foo"},{id:"Bar",text:"Bar"}];
//$("#receiver-id").select2("data",data2,true);
$("#receiver-id").empty().html(data);
});

});


$("#receiver-group2").change(function(e)
{
receivergroupid = $("#receiver-group2").val();
$.post("application/snippets/getreceivermenu.php",{"groupid":receivergroupid},function(data){
//data2 = [{id:"Foo",text:"Foo"},{id:"Bar",text:"Bar"}];
//$("#receiver-id").select2("data",data2,true);
$("#receiver-id2").empty().html(data);
});

});

$("#receiver-group3").change(function(e)
{
receivergroupid = $("#receiver-group3").val();
$.post("application/snippets/getreceivermenu.php",{"groupid":receivergroupid},function(data){
//data2 = [{id:"Foo",text:"Foo"},{id:"Bar",text:"Bar"}];
//$("#receiver-id").select2("data",data2,true);
$("#receiver-id3").empty().html(data);
});

});

// reply for all

$(".reply").each(function(index,element)
{
$(".reply:eq("+index+")").click(function(e){
e.preventDefault();
theurl = $(".reply:eq("+index+")").attr("href");
url2 = window.location+theurl;
captured = /to=([^&]+)/.exec(url2)[1]; // Value is in [1] ("384" in our case)
reply = captured ? captured : "myDefaultValue";

$.post("application/snippets/getreplygroup2.php",{"reply":reply},function(data){
if(data == "1")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option selected value=\"1\">Admin</option><option value=\"2\">Doctor</option><option value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "2")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option selected value=\"2\">Doctor</option><option value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "3")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option selected value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "4")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option selected value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "5")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option  value=\"4\">Accountant</option><option selected value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "6")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option  value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option selected value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "7")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option  value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option  value=\"6\">Laboratorist,eo</option><option selected value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "8")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option selected value=\"8\">Patient</option>");

}
$.post("application/snippets/getreplyid2.php",{"reply":reply},function(data2){
$("#receiver-id2").empty().html(data2);
});

$.post("application/snippets/getreplysubject2.php",{"reply":reply},function(data3){
$("#subject2").val(data3)
});

$.post("application/snippets/getreplymessage2.php",{"reply":reply},function(data4){
$("#message-content2").val(data4);
});



//$("#receiver-group2").empty().html("<option value=\"3\">"+data+"</option>");
$("#replymodal").modal("toggle");

})


//alert(reply);

});

});


// end of reply for all

$("#reply").click(function(e){
e.preventDefault();
theurl = $("#reply").attr("href");
url2 = window.location+theurl;
captured = /to=([^&]+)/.exec(url2)[1]; // Value is in [1] ("384" in our case)
reply = captured ? captured : "myDefaultValue";

$.post("application/snippets/getreplygroup2.php",{"reply":reply},function(data){
if(data == "1")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option selected value=\"1\">Admin</option><option value=\"2\">Doctor</option><option value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "2")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option selected value=\"2\">Doctor</option><option value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "3")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option selected value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "4")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option selected value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "5")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option  value=\"4\">Accountant</option><option selected value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "6")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option  value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option selected value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "7")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option  value=\"3\">Customer Care</option><option  value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option  value=\"6\">Laboratorist,eo</option><option selected value=\"7\">Nurse</option><option value=\"8\">Patient</option>");
}
else if(data == "8")
{
$("#receiver-group2").empty().html("<option value=\"\">Select Receiver Group</option><option value=\"1\">Admin</option><option value=\"2\">Doctor</option><option value=\"3\">Customer Care</option><option value=\"4\">Accountant</option><option value=\"5\">Pharmacist</option><option value=\"6\">Laboratorist,eo</option><option value=\"7\">Nurse</option><option selected value=\"8\">Patient</option>");

}
$.post("application/snippets/getreplyid2.php",{"reply":reply},function(data2){
$("#receiver-id2").empty().html(data2);
});

$.post("application/snippets/getreplysubject2.php",{"reply":reply},function(data3){
$("#subject2").val(data3)
});

$.post("application/snippets/getreplymessage2.php",{"reply":reply},function(data4){
$("#message-content2").val(data4);
});



//$("#receiver-group2").empty().html("<option value=\"3\">"+data+"</option>");
$("#replymodal").modal("toggle");

})


//alert(reply);

});


$("#forwardto").click(function(e){
e.preventDefault();

theurl2 = $("#forwardto").attr("href");
url3 = window.location+theurl2;
captured2 = /message=([^&]+)/.exec(url3)[1]; // Value is in [1] ("384" in our case)
forward = captured2 ? captured2 : "myDefaultValue";

$.post("application/snippets/getforwardsubject2.php",{"reply":forward},function(data3){
$("#subject3").val(data3)
});

$.post("application/snippets/getforwardmessage2.php",{"reply":forward},function(data4){
$("#message-content3").val(data4);
});

$("#forwardmodal").modal("toggle");

//alert(forward);

});




});
</script>
			<script>
			jQuery(document).ready(function() {
				Main.init();
				TextEditor.init();
                                Messages.init();
                                 FormElements.init();
                                FormWizard.init();
				   UINotifications.init();
			});
		</script>';
                
    
}
		
?>
</body>
</html>