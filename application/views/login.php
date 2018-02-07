<!DOCTYPE html>
<html lang="en">
	<head>
		
		<!-- start: META -->
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
        <link rel="stylesheet" href="js/vegas.css" />
		<!-- end: META -->
		<!-- start: GOOGLE FONTS -->
		
		<!-- end: CLIP-TWO CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
        
        <?php include 'loginincludes.php';?>
        <title><?php echo get_phrase('login');?> | <?php echo $system_title;?></title>
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login">
		<!-- start: LOGIN -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30" align="center"  >
					<img  src="<?php echo base_url();?>uploads/logos.png" style="width:130px; height:80px;opacity:0.9;" />
				</div>
				<!-- start: LOGIN BOX -->
				<div class="box-login">
                                   
                                    <?php
                                      $status =  $this->session->userdata('metoast');
                                      
                                       if( $status =="failed")
                                                  {
                                                    echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('login_failed').'</textarea>
                                                               <div id="toastTypeGroup" class="form-group">
                                                                     <input type="radio" checked value="error" name="toasts" id="typeerror"></div>
                                                                    <div id="positionGroup" class="form-group">
                                                                  <input type="radio" checked value="toast-top-full-width" name="positions" id="typetfw">
								</div>
                                                                <input type="text" value="swing" class="form-control input-small" placeholder="swing, linear" id="showEasing">
								<input type="text" value="linear" class="form-control input-small" placeholder="swing, linear" id="hideEasing">
								<input type="text" value="fadeIn" class="form-control input-small" placeholder="show, fadeIn, slideDown" id="showMethod">
								<input type="text" value="fadeOut" class="form-control input-small" placeholder="hide, fadeOut, slideUp" id="hideMethod">
								<input type="text" value="1000" class="form-control input-small" placeholder="ms" id="showDuration">
								<input type="text" value="10000" class="form-control input-small" placeholder="ms" id="hideDuration">
								<input type="text" value="5000" class="form-control input-small" placeholder="ms" id="timeOut">
								<input type="text" value="3000" class="form-control input-small" placeholder="ms" id="extendedTimeOut">
                                                                    </div>';     
                                                  }
                                                   $this->session->unset_userdata('metoast');
                                                                      ?>
					<?php echo form_open('login' , array('class' => 'separate-sections'));?>
						<fieldset>
							<legend>
								Sign in to your account
							</legend>
							<p>
								Please enter your Email and password to log in.
							</p>
                            <div class="form-group">
								<span class="input-icon">
									<select class="cs-select cs-skin-elastic"  name="login_type">
															
												<option value="" disabled selected><?php echo get_phrase('account_type');?></option>
                                        <option value="admin"><?php echo get_phrase('Admin');?></option>
                                       <option value="doctor"><?php echo get_phrase('Doctor');?></option>
                                      <!--   <option value="patient"><?php echo get_phrase('Patient');?></option>-->
                                        <option value="customercare"><?php echo get_phrase('customer care');?></option>
                                        <option value="nurse"><?php echo get_phrase('Nurse');?></option>
                                        <option value="pharmacist"><?php echo get_phrase('Pharmacist');?></option>
                                        <option value="laboratorist"><?php echo get_phrase('Laboratorist');?></option>
                                        <option value="accountant"><?php echo get_phrase('Accountant');?></option>
														</select>
									<i class="fa fa-envelope"></i> </span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="email" placeholder="Username">
									<i class="fa fa-envelope"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password">
									<i class="fa fa-lock"></i>
									<!--<a class="forgot" href="login_forgot.html">
										I forgot my password
									</a>--> </span>
							</div>
							<div class="form-actions">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="remember" value="1">
									<label for="remember">
										Keep me signed in
									</label>
								</div>
								<button type="submit" class="btn btn-primary pull-right">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							<!--<div class="new-account">
								Don't have an account yet?
								<a href="login_registration.html">
									Create an account
								</a>
							</div>-->
						</fieldset>
					 <?php echo form_close();?>
					<!-- start: COPYRIGHT -->
					<?php include 'loginfooter.php' ?>
					<!-- end: COPYRIGHT -->

				</div>
				<!-- end: LOGIN BOX -->
			</div>
		</div>
		<!-- end: LOGIN -->
		<?php include 'mainjs.php' ?>
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?php echo base_url();?>template/vendor/jquery-validation/jquery.validate.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="<?php echo base_url();?>template/assets/js/login.js"></script>
                <script src="<?php echo base_url();?>template/vendor/sweetalert/sweet-alert.min.js"></script>
		<script src="<?php echo base_url();?>template/vendor/toastr/toastr.min.js"></script>
                    	<script src="<?php echo base_url();?>template/assets/js/ui-notifications.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
				FormElements.init();
                                  UINotifications.init();
			});
		</script>
        
        <script src="js/vegas.js"></script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
	<!-- end: BODY -->
</html>