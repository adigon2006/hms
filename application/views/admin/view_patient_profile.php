
<!-- start: USER PROFILE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-md-12">
                                                                </div>
                                                                    <h1 class="mainTitle"><?php echo get_phrase('VIEW PATIENT PROFILE  ');?></h1>
                                                                    
                                                                    <div class="col-sm-5"> </div>
                                                                    <!-- start: MINI STATS WITH SPARKLINE -->
                                                                        
                                                                        <?php
                                                                  
                                                  $status =  $this->session->userdata('metoast');
                                                  
                                                  if($status == 'updated')
                                                  {
                                                 echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('Profile Updated Succesfully').'</textarea>
                                                               <div id="toastTypeGroup" class="form-group">
                                                                     <input type="radio" checked value="success" name="toasts" id="typesuccess"></div>
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
                                                  
                                                    else if($status == 'updatepass')
                                                  {
                                                 echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('Password Updated Succesfully').'</textarea>
                                                               <div id="toastTypeGroup" class="form-group">
                                                                     <input type="radio" checked value="success" name="toasts" id="typesuccess"></div>
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
                                                  
                                                   else if( $status == 'mismatch')
                                                  {
                                                    echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('password_mismatch').'</textarea>
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
									<ul class="mini-stats pull-right">
										<li>
											<div class="sparkline-1">
												<span ></span>
											</div>
											<div class="values">
												<strong class="text-dark"><?php echo $this->db->count_all_results('doctor');?></strong>
												<p class="text-small no-margin">
													<?php echo get_phrase('doctor');?>
												</p>
											</div>
										</li>
										<li>
											<div class="sparkline-2">
												<span ></span>
											</div>
											<div class="values">
												<strong class="text-dark"> <?php echo $this->db->count_all_results('patient');?></strong>
												<p class="text-small no-margin">
													<?php echo get_phrase('patient');?>
												</p>
											</div>
										</li>
										<li>
											<div class="sparkline-3">
												<span ></span>
											</div>
											<div class="values">
												<strong class="text-dark"><?php echo $this->db->count_all_results('nurse');?></strong>
												<p class="text-small no-margin">
												<?php echo get_phrase('nurse');?>
												</p>
											</div>
										</li>
									</ul>
									<!-- end: MINI STATS WITH SPARKLINE -->
                                                                        </div>
							
                                                                        
                         </section>
                                                                        <!-- end: DASHBOARD TITLE -->
                                                                        
                                                                        
                                                                        <div class="container-fluid container-fullw bg-white">
                                                                            
                                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                            
                                                                     <div class="tabbable">
										<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
											<li class="active">
												<a data-toggle="tab" href="#panel_overview">
													Overview
												</a>
											</li>
											<li>
												<a data-toggle="tab" href="#panel_edit_account">
													Edit Account
												</a>
											</li>
											<li>
												<a data-toggle="tab" href="#panel_projects">
													Patient History
												</a>
											</li>
										</ul>
									                 <?php
                                                                  
                                                  $status =  $this->session->userdata('metoast');
                                                  
                                                  if($status == 'createdappoinment')
                                                  {
                                                 echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('New_Appointment_created').'</textarea>
                                                               <div id="toastTypeGroup" class="form-group">
                                                                     <input type="radio" checked value="success" name="toasts" id="typesuccess"></div>
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
																		
										  <?php
 foreach($patientdetails as $patientdetail): ?>
										<div class="tab-content">
											<div id="panel_overview" class="tab-pane fade in active">
												<div class="row">
													<div class="col-sm-5 col-md-4">
														<div class="user-left">
															<div class="center">
																<h4><?=$patientdetail['title'].' '.$patientdetail['name'] ?></h4>
																<div class="fileinput fileinput-new" data-provides="fileinput">
																	<div class="user-image">
																		<div class="fileinput-new thumbnail"><img src="assets/images/avatar-1-xl.jpg" alt="">
																		</div>
																		<div class="fileinput-preview fileinput-exists thumbnail"></div>
																		<div class="user-image-buttons">
																			<span class="btn btn-azure btn-file btn-sm"><span class="fileinput-new"><i class="fa fa-pencil"></i></span><span class="fileinput-exists"><i class="fa fa-pencil"></i></span>
																				<input type="file">
																			</span>
																			<a href="#" class="btn fileinput-exists btn-red btn-sm" data-dismiss="fileinput">
																				<i class="fa fa-times"></i>
																			</a>
																		</div>
																	</div>
																</div>
																<hr>
																<!--<div class="social-icons block">
																	<ul>
																		<li data-placement="top" data-original-title="Twitter" class="social-twitter tooltips">
																			<a href="http://www.twitter.com" target="_blank">
																				Twitter
																			</a>
																		</li>
																		<li data-placement="top" data-original-title="Facebook" class="social-facebook tooltips">
																			<a href="http://facebook.com" target="_blank">
																				Facebook
																			</a>
																		</li>
																		<li data-placement="top" data-original-title="Google" class="social-google tooltips">
																			<a href="http://google.com" target="_blank">
																				Google+
																			</a>
																		</li>
																		<li data-placement="top" data-original-title="LinkedIn" class="social-linkedin tooltips">
																			<a href="http://linkedin.com" target="_blank">
																				LinkedIn
																			</a>
																		</li>
																		<li data-placement="top" data-original-title="Github" class="social-github tooltips">
																			<a href="#" target="_blank">
																				Github
																			</a>
																		</li>
																	</ul>
																</div>
																<hr>-->
															</div>
															<table class="table table-condensed">
																<thead>
																	<tr>
																		<th colspan="3">Contact Information</th>
																	</tr>
																</thead>
																<tbody>
																	
																	<tr>
																		<td>email:</td>
																		<td>
																		<a href="">
																			<?=$patientdetail['email'] ?>
																		</a></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>phone:</td>
																		<td><?=$patientdetail['phone'] ?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>skye</td>
																		<td>
																		<a href="">
																			peterclark82
																		</a></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																</tbody>
															</table>
															<table class="table">
																<thead>
																	<tr>
																		<th colspan="3">General information</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Client Number</td>
																		<td><?=$patientdetail['client_number'] ?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Sex</td>
																		<td><?=ucwords($patientdetail['sex']) ?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Blood Group</td>
																		<td><?=$patientdetail['blood_group'] ?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Religion</td>
																		<td>
																		<a href="#">
																			<?=$patientdetail['religion'] ?>
																		</a></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Status</td>
																		<td><span class="label label-sm label-info">Patient</span></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																</tbody>
															</table>
															<table class="table">
																<thead>
																	<tr>
																		<th colspan="3">Additional information</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Birth Date</td>
																		<td><?=$patientdetail['birth_date'] ?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Home Address</td>
																		<td><?=$patientdetail['address'] ?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																	<tr>
																		<td>Office Address</td>
																		<td><?=ucwords(strtolower($patientdetail['office_address'])) ?></td>
																		<td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="col-sm-7 col-md-8">
														<div class="row space20">
															<div class="col-sm-3">
																<button class="btn btn-icon margin-bottom-5 margin-bottom-5 btn-block">
																	<i class="ti-layers-alt block text-primary text-extra-large margin-bottom-10"></i>
																	Projects
																</button>
															</div>
															<div class="col-sm-3">
																<button class="btn btn-icon margin-bottom-5 btn-block">
																	<i class="ti-comments block text-primary text-extra-large margin-bottom-10"></i>
																	Messages <span class="badge badge-danger"> 23 </span>
																</button>
															</div>
															<div class="col-sm-3">
																<button class="btn btn-icon margin-bottom-5 btn-block">
																	<i class="ti-calendar block text-primary text-extra-large margin-bottom-10"></i>
																	Calendar
																</button>
															</div>
															<div class="col-sm-3">
																<button class="btn btn-icon margin-bottom-5 btn-block">
																	<i class="ti-flag block text-primary text-extra-large margin-bottom-10"></i>
																	Notifications
																</button>
															</div>
														</div>
														<div class="panel panel-white" id="activities">
															<div class="panel-heading border-light">
																<h4 class="panel-title text-primary">Appointment Details</h4>
																<paneltool class="panel-tools" tool-collapse="tool-collapse" tool-refresh="load1" tool-dismiss="tool-dismiss"></paneltool>
															</div>
															
															<?php
	function generateArrayforColor()
{
$s = substr(str_shuffle(str_repeat("0123",7)),0,1); 
return $s;	
}
																	
																	$colorarray[] = array("info","danger","warning","success");
	
	
	?>
															<div collapse="activities" ng-init="activities=false" class="panel-wrapper">
																<div class="panel-body">
																	<ul class="timeline-xs">
																	<?php foreach ($appointments as $appointment): ?>
																		<li class="timeline-item <?=$colorarray[generateArrayforColor()] ?>">
																			<div class="margin-left-15">
																				<div class="text-muted text-small">
																					<?php echo $appointment['appointment_timestamp'].' '.$appointment['appointment_time'] ?>
																				</div>
																				<p>
																				
																					Appointment with Doctor
																					<a class="text-info" href="">
																					<?=$this->crud_model->get_type_name_by_id('doctor',$appointment['doctor_id'],'name'); ?>
																					</a>
																					
																				</p>
																			</div>
																		</li>
																		<?php endforeach; ?>																	</ul>
																</div>
															</div>
														</div>
														<!--<div class="panel panel-white space20">
															<div class="panel-heading">
																<h4 class="panel-title">Recent Tweets</h4>
															</div>
															<div class="panel-body">
																<ul class="ltwt">
																	<li class="ltwt_tweet">
																		<p class="ltwt_tweet_text">
																			<a href="" class="text-info">
																				@Shakespeare
																			</a>
																			Some are born great, some achieve greatness, and some have greatness thrust upon them.
																		</p>
																		<span class="block text-light"><i class="fa fa-fw fa-clock-o"></i> 2 minuts ago</span>
																	</li>
																</ul>
															</div>
														</div> -->
													</div>
												</div>
											</div>
											<div id="panel_edit_account" class="tab-pane fade">
												<form action="#" role="form" id="form">
													<fieldset>
														<legend>
															Account Info
														</legend>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">
																		First Name
																	</label>
																	<input type="text" placeholder="Peter" class="form-control" id="firstname" name="firstname">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Last Name
																	</label>
																	<input type="text" placeholder="Clark" class="form-control" id="lastname" name="lastname">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Email Address
																	</label>
																	<input type="email" placeholder="peter@example.com" class="form-control" id="email" name="email">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Phone
																	</label>
																	<input type="email" placeholder="(641)-734-4763" class="form-control" id="phone" name="email">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Password
																	</label>
																	<input type="password" placeholder="password" class="form-control" name="password" id="password">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Confirm Password
																	</label>
																	<input type="password" placeholder="password" class="form-control" id="password_again" name="password_again">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">
																		Gender
																	</label>
																	<div class="clip-radio radio-primary">
																		<input type="radio" value="female" name="gender" id="us-female">
																		<label for="us-female">
																			Female
																		</label>
																		<input type="radio" value="male" name="gender" id="us-male" checked="">
																		<label for="us-male">
																			Male
																		</label>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-4">
																		<div class="form-group">
																			<label class="control-label">
																				Zip Code
																			</label>
																			<input class="form-control" placeholder="12345" type="text" name="zipcode" id="zipcode">
																		</div>
																	</div>
																	<div class="col-md-8">
																		<div class="form-group">
																			<label class="control-label">
																				City
																			</label>
																			<input class="form-control tooltips" placeholder="London (UK)" type="text" data-original-title="We'll display it when you write reviews" data-rel="tooltip" title="" data-placement="top" name="city" id="city">
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<label>
																		Image Upload
																	</label>
																	<div class="fileinput fileinput-new" data-provides="fileinput">
																		<div class="fileinput-new thumbnail"><img src="assets/images/avatar-1-xl.jpg" alt="">
																		</div>
																		<div class="fileinput-preview fileinput-exists thumbnail"></div>
																		<div class="user-edit-image-buttons">
																			<span class="btn btn-azure btn-file"><span class="fileinput-new"><i class="fa fa-picture"></i> Select image</span><span class="fileinput-exists"><i class="fa fa-picture"></i> Change</span>
																				<input type="file">
																			</span>
																			<a href="#" class="btn fileinput-exists btn-red" data-dismiss="fileinput">
																				<i class="fa fa-times"></i> Remove
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</fieldset>
													<fieldset>
														<legend>
															Additional Info
														</legend>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">
																		Twitter
																	</label>
																	<span class="input-icon">
																		<input class="form-control" type="text" placeholder="Text Field">
																		<i class="fa fa-twitter"></i> </span>
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Facebook
																	</label>
																	<span class="input-icon">
																		<input class="form-control" type="text" placeholder="Text Field">
																		<i class="fa fa-facebook"></i> </span>
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Google Plus
																	</label>
																	<span class="input-icon">
																		<input class="form-control" type="text" placeholder="Text Field">
																		<i class="fa fa-google-plus"></i> </span>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">
																		Github
																	</label>
																	<span class="input-icon">
																		<input class="form-control" type="text" placeholder="Text Field">
																		<i class="fa fa-github"></i> </span>
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Linkedin
																	</label>
																	<span class="input-icon">
																		<input class="form-control" type="text" placeholder="Text Field">
																		<i class="fa fa-linkedin"></i> </span>
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Skype
																	</label>
																	<span class="input-icon">
																		<input class="form-control" type="text" placeholder="Text Field">
																		<i class="fa fa-skype"></i> </span>
																</div>
															</div>
														</div>

													</fieldset>
													<div class="row">
														<div class="col-md-12">
															<div>
																Required Fields
																<hr>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-8">
															<p>
																By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
															</p>
														</div>
														<div class="col-md-4">
															<button class="btn btn-primary pull-right" type="submit">
																Update <i class="fa fa-arrow-circle-right"></i>
															</button>
														</div>
													</div>
												</form>
											</div>
											<div id="panel_projects" class="tab-pane fade">
											<div class="panel-group accordion" id="accordion">
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false">
													<i class="icon-arrow"></i> Appointment History
												</a></h5>
											</div>
											<div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<div><button data-toggle="modal" data-target="#appointmentModal" class="btn btn-primary">Add New Appointment</button></div>
													<br/>
													<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
										<thead>
												<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('time');?></div></th>
                    		<th><div><?php echo get_phrase('doctor');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                   <?php 
						$count = 1;
						foreach($patientappointments as $row):
							?>
							<tr>
								<td><?php echo $count++;?></td>
								<td><?php if($row['appointment_timestamp'] == ""){echo $row['appointment_timestamp'];}elseif($row['appointment_timestamp'] != ""){ echo $row['appointment_timestamp']." ".$row['appointment_time'];}?></td>
                                <td><?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?></td>
                                <td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							</tr>
							<?php 
						endforeach;
						?>
										</tbody>
                                        
									</table>
											<br/>	
										<div><button data-toggle="modal" data-target="#appointmentModal" class="btn btn-primary">Add New Appointment</button></div>			
															</div>
											</div>
										</div>
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false">
													<i class="icon-arrow"></i> Admittance History
												</a></h5>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
														
										<div><button data-toggle="modal" data-target="#admitModal" class="btn btn-primary">Admit Patient</button></div>
												<br/>
													<table class="table table-striped table-bordered table-hover table-full-width" id="sample_2">
										<thead>
								<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('bed_id');?></div></th>
                    		<th><div><?php echo get_phrase('bed_type');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('allotment_time');?></div></th>
                    		<th><div><?php echo get_phrase('discharge_time');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                   <?php $count = 1;foreach($bedallotments as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
							<td><?php echo $row['bed_id'];?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('bed' , 		$row['bed_id'] , 'type');?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient' , 	$row['patient_id'] , 'name');?></td>
							<td><?php if($row['allotment_timestamp'] == ""){echo $row['allotment_timestamp'];}elseif($row['allotment_timestamp'] != ""){ echo $row['allotment_timestamp']." ".$row['allotment_time'];}?></td>
							<td><?php if($row['discharge_timestamp'] == ""){echo $row['discharge_timestamp'];}elseif($row['discharge_timestamp'] != ""){ echo $row['discharge_timestamp']." ".$row['allotment_time'];}?></td>
                        </tr>
                        <?php endforeach;?>
										</tbody>
                                        
									</table>
													<br/>	
										<button data-toggle="modal" data-target="#admitModal" class="btn btn-primary">Admit Patient</button>
													</div>
											</div>
										</div>
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false">
													<i class="icon-arrow"></i> Operation History
												</a></h5>
											</div>
											<div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
												<div><button data-toggle="modal" data-target="#operationModal" class="btn btn-primary">Add New Operation History</button></div>
													<br/>
													<table class="table table-striped table-bordered table-hover table-full-width" id="sample_3">
										<thead>
								<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('patient (Patient Number)');?></div></th>
                    		<th><div><?php echo get_phrase('doctor');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                 <?php 
						$count = 1;
						foreach($operationreports as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php if($row['timestamp'] == ""){echo $row['timestamp'];}elseif($row['timestamp'] != ""){ echo $row['timestamp']." ".$row['realtime'];}?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name').' ('.$this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'client_number').')';?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?></td>
                        </tr>
                        <?php endforeach;?>
										</tbody>
                                        
									</table>
													<br/>
				<div><button data-toggle="modal" data-target="#operationModal" class="btn btn-primary">Add New Operation History</button></div>
													
															</div>
											</div>
										</div>
										
										<?php if($patientdetail['sex'] == "female"){ ?>
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false">
													<i class="icon-arrow"></i> Birth History
												</a></h5>
											</div>
											
											<div id="collapseFour" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">

				<div><button data-toggle="modal" data-target="#birthModal" class="btn btn-primary">Add New Birth History</button></div>
					<br/>								
										<table class="table table-striped table-bordered table-hover table-full-width" id="sample_4">
										<thead>
								<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('patient (Patient Number)');?></div></th>
                    		<th><div><?php echo get_phrase('doctor');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                 <?php 
						$count = 1;
						foreach($bithreports as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php if($row['timestamp'] == ""){echo $row['timestamp'];}elseif($row['timestamp'] != ""){ echo $row['timestamp']." ".$row['realtime'];}?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name').' ('.$this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'client_number').')';?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?></td>
                        </tr>
                        <?php endforeach;?>
										</tbody>
                                        
									</table>
									<br/>
				<div><button data-toggle="modal" data-target="#birthModal" class="btn btn-primary">Add New Birth History</button></div>
													
										</div>
											</div>
											
											
										</div>
										<?php } ?>
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false">
													<i class="icon-arrow"></i> Diagnosis History
												</a></h5>
											</div>
											
											<div id="collapseFive" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
                				<br/>
				<div><button data-toggle="modal" data-target="#diagnosisModal" class="btn btn-primary">Add New Diagnosis History</button></div>
				<br/>									
										                                                                                                
                                                                                       
													<table class="table table-striped table-bordered table-hover table-full-width" id="sample_5">
										<thead>
							<tr>
                    		
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('doctor');?></div></th>
                    		<th><div><?php echo get_phrase('case history'); ?></div></th>
                    		<th><div><?php echo get_phrase('description') ?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                              	<?php $count = 1;foreach($prescriptions as $row):?>
                        <tr>
                            
                            <td><?php echo date('d M,Y', $row['creation_timestamp']);?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?></td>
							<td><?php echo $row['case_history'] ?></td>
                       		<td><?php echo $row['description']; ?></td>
                        </tr>
                        <?php endforeach;?>
										</tbody>
                                        
									</table>
             				<br/>
			<div><button data-toggle="modal" data-target="#diagnosisModal" class="btn btn-primary">Add New Diagnosis History</button></div>
													
			<br/>										</div>
											</div>
											
											
										</div>
										
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false">
													<i class="icon-arrow"></i> Laboratory Test History
												</a></h5>
											</div>
											
											<div id="collapseSix" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
									
															</div>
											</div>
											
											
										</div>
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false">
													<i class="icon-arrow"></i> Prescription History
												</a></h5>
											</div>
											
											<div id="collapseSeven" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
																<table class="table table-striped table-bordered table-hover table-full-width" id="sample_7">
										<thead>
							<tr>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('doctor');?></div></th>
                    		<th><div><?php echo get_phrase('medication_from_doctor'); ?></div></th>
                    		<th><div><?php echo get_phrase('medication_from_pharmacist') ?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                              	<?php $count = 1;foreach($prescriptions as $row):?>
                        <tr>
                            
                            <td><?php echo date('d M,Y', $row['creation_timestamp']);?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?></td>
							<td><?php echo $row['medication'] ?></td>
                       		<td><?php echo $row['medication_from_pharmacist']; ?></td>
                        </tr>
                        <?php endforeach;?>
										</tbody>
                                        
									</table>	
															
												</div>
											</div>
											
											
										</div>
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false">
													<i class="icon-arrow"></i> Payment History
												</a></h5>
											</div>
											
											<div id="collapseEight" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													
													<table class="table table-striped table-bordered table-hover table-responsive" id="sample_7">
										<thead>
							<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('Date');?></div></th>
                    		<th><div><?php echo get_phrase('amount');?></div></th>
                    		<th><div><?php echo get_phrase('payment_type');?></div></th>
                    		<th><div><?php echo get_phrase('transaction_id');?></div></th>
                    		<th><div><?php echo get_phrase('invoice_id');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('method');?></div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                 <?php 
						$count = 1;
						foreach($payments as $row):
							?>
							<tr>
								<td><?php echo $count++;?></td>
								<td><?php echo date('Md,Y',$row['timestamp']);?></td>
								<td><?php echo $row['amount'];?></td>
								<td><?php echo $row['payment_type'];?></td>
								<td><?php echo $row['transaction_id'];?></td>
								<td><?php echo $row['invoice_id'];?></td>
                                <td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
								<td><?php echo $row['method'];?></td>
								<td><?php echo $row['description'];?></td>
							</tr>
							<?php 
						endforeach;
						?>
										</tbody>
                                        
									</table>
													</div>
											</div>
											
											
										</div>
									</div>
											</div>
										</div>
									</div>       
                                                                           <?php endforeach; ?>
                                                                            
																							</div>
																			</div>
																			</div>
									<!-- Modal Appointment -->
									<div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none; padding-right: 17px;">
										<div class="modal-backdrop fade in" style="height: 700px;"></div>
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
														<h4 class="modal-title" id="myModalLabel">Add New Appointment <i class="fa fa-calendar"></i></h4>
													</div>
													<div class="modal-body">
														
														
														
																<div class="row">
								<div class="col-md-12">
                                <div class="panel-body">
										<?php echo form_open('admin/add_patient_appointment/' , array('role' =>'form','id'=>'form'));?>
										 <div class="row"><div class="col-md-6">		<div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('Patient');?> <span class="symbol required"></span>
													</label>
                                      	<input type="text" readonly autocomplete="off" class="form-control underline" value=" <?php echo $this->crud_model->get_type_name_by_id('patient' ,$patient_id , 'name');?>"  required="required"/>
                                        <input type="hidden" name="patient_id" value="<?php echo $patient_id;?>"  />
                                
												</div>
                                                                                     </div>
                                                                                      <div class="col-md-6">
												
                                                  <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('doctor');?> <span class="symbol required"></span>
													</label>
										<select name="doctor_id" class="js-example-basic-single js-states form-control" style="width:100%;">
                                        	<?php 
										$this->db->order_by('doctor_id' , 'asc');
										$doctors	=	$this->db->get('doctor')->result_array();
										foreach($doctors as $row):
										?>
                                        	<option value="<?php echo $row['doctor_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
										endforeach;
										?>
                                        </select>
                                        </div>
                                                                                      </div>
                                                                                 </div>
                                        
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('date');?> <span class="symbol required"></span>
													</label>
										<div class="row">
                                        <div class="col-md-6"><input type="text" autocomplete="off" class="form-control underline format-datepicker"  placeholder="<?php echo get_phrase('date'); ?>" name="appointment_timestamp" required="required">
                                        </div>
                                        <div class="col-md-6">
                                          <input type="text" id="" name="appointment_time" class="timepicker-default form-control underline">
                                              
                                        </div>
												</div>
                                                </div>
                                                <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('add_appointment');?></button>
                                                </div>
											<?php echo form_close();?> 
										</div>
                                </div>
                                </div>
														
														
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
															Close
														</button>
<!--
														<button type="button" class="btn btn-primary">
															Save changes
														</button>
-->
													</div>
												</div>
											</div>
										</div>
<!--                                          end of modal appointment                                                                                            -->
                                                
                                                                                                                                      <!-- Modal Admittance Modal -->
									<div class="modal fade" id="admitModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none; padding-right: 17px;">
										<div class="modal-backdrop fade in" style="height: 700px;"></div>
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
														<h4 class="modal-title" id="myModalLabel">Admit Patient <i class="fa fa-bed"></i></h4>
													</div>
													<div class="modal-body">                                                                             
<!--                                                    start-->
                                                    
                                                    <div class="row">
								<div class="col-md-12">
                                <div class="panel-body">
										<?php echo form_open('nurse/manage_bed_allotment/create/' , array('role' =>'form','id'=>'form'));?>
										<div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('bed_number');?><span class="symbol required"></span>
													</label>
                                      <select name="bed_id" class="js-example-basic-single js-states form-control" style="width:100%;">
                                        <?php 
										$this->db->order_by('type' , 'asc');
										$beds	=	$this->db->get('bed')->result_array();
										foreach($beds as $row):
										?>
                                        	<option value="<?php echo $row['bed_id'];?>"><?php echo $row['bed_number'].' - '.$row['type'];?></option>
                                        <?php
										endforeach;
										?>
                                        </select>
												</div>
                                               
                                               
                                                    <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('patient (Patient_Number)');?> <span class="symbol required"></span>
													</label>
										<select name="patient_id" class="js-example-basic-single js-states form-control" style="width:100%;">
                                        	<?php 
										$this->db->order_by('account_opening_timestamp' , 'asc');
										$patients	=	$this->db->get('patient')->result_array();
										foreach($patients as $row):
										?>
                                        	<option value="<?php echo $row['patient_id'];?>"><?php echo $row['name'].' ('.$row['client_number'].')';?></option>
                                        <?php
										endforeach;
										?>
                                        </select>
                                        </div>
                                      
                          
                                        
											
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('allotment_time');?> <span class="symbol required"></span>
													</label>
													
                                                    <div class="row">
                                                    <div class="col-md-6"><input type="text" autocomplete="off" class="form-control underline format-datepicker"  placeholder="<?php echo get_phrase('allotment_time'); ?>" name="allotment_timestamp" required="required">
                                                    </div>
                                                    <div class="col-md-6">
                                                   <input type="text" id="" name="allotment_time" class="timepicker-default form-control underline">
                                                   </div>
                                                   </div>
												</div>
                                                
                                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('discharge_time');?> 
													</label>
													
                                                    <div class="row">
                                                    <div class="col-md-6"><input type="text" autocomplete="off" class="form-control underline format-datepicker"  placeholder="<?php echo get_phrase('discharge_time'); ?>" name="discharge_timestamp" >
                                                    </div>
                                                    <div class="col-md-6">
                                                   <input type="text"  name="discharge_time"  class="timepicker-default form-control underline">
                                                   </div>
                                                   </div>
												</div>
                                                
                                                <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('add_bed_allotment');?></button>
                                                </div>
											<?php echo form_close();?> 
										</div>
                                </div>
                                </div>
                                                    
                                                    
<!--                                                    end-->
                                                    </div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
															Close
														</button>
<!--
														<button type="button" class="btn btn-primary">
															Save changes
														</button>
-->
													</div>
												</div>
											</div>
										</div>                                                                           
                                                                                                                                       
                                 <div class="modal fade" id="operationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none; padding-right: 17px;">
										<div class="modal-backdrop fade in" style="height: 700px;"></div>
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
														<h4 class="modal-title" id="myModalLabel">Operation History <i class="fa fa-user-md"></i></h4>
													</div>
													<div class="modal-body">                                                                             
<!--                                                    start-->
                                                    
                                                  
                                                   <?php echo form_open('admin/add_operation_history/' , array('role' =>'form','id'=>'form'));?>
										
                               <div class="row"> <div class="col-md-12">    <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('type');?> <span class="symbol required"></span>
													</label>
										<select name="type" class="js-example-basic-single js-states form-control" style="width:100%;">
                                        <option value="operation"><?php echo get_phrase('operation');?></option>
<!--
                                    	<option value="birth"><?php echo get_phrase('birth');?></option>
                                    	<option value="death"><?php echo get_phrase('death');?></option>
                                    	<option value="other"><?php echo get_phrase('other');?></option>
-->
                                        </select>
                                        </div>
                                   </div>
                                        <div class="col-md-12">
                                                  <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('description');?> <span class="symbol required"></span>
													</label>
										<textarea class="ckeditor form-control" id="editor2" required placeholder="<?php echo get_phrase('description');?>" name="description" cols="10" rows="10">
                                     
                                        </textarea>
											
                                        </div>
                                        </div>
                                   </div>
                                        
                                          <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('date');?> <span class="symbol required"></span>
													</label>
										<div class="row">
                                        <div class="col-md-6"><input type="text" autocomplete="off" class="form-control underline format-datepicker"  placeholder="<?php echo get_phrase('date'); ?>" name="timestamp" required="required">
                                        </div>
                                        <div class="col-md-6">
                                          <input type="text" name="time" class="timepicker-default form-control underline">
                                              
                                        </div>
												</div>
                                                </div>
                                   <div class="row"> <div class="col-md-6">
                                                
                                                <div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('doctor');?> <span class="symbol required"></span>
													</label>
                                      	<select name="doctor_id" class="js-example-basic-single js-states form-control" style="width:100%;">
<!--                                        	<option value="">select</option>-->
										<?php 
										$doctors	=	$this->db->get('doctor')->result_array();
										foreach($doctors as $row):
										?>
                                        	<option value="<?php echo $row['doctor_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
										endforeach;
										?>
                                        </select>
                                      	
                                        
                                      
                                
												</div>
                                       </div>
                                      <div class="col-md-6">
												
                                                  <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('patient');?> <span class="symbol required"></span>
													</label>
										<input type="text" readonly autocomplete="off" class="form-control underline" value=" <?php echo $this->crud_model->get_type_name_by_id('patient' ,$patient_id , 'name');?>"  required="required"/>
                                        <input type="hidden" name="patient_id" value="<?php echo $patient_id;?>"  />
                                
                                        
                                        </div>
                                      </div>
                                   </div>
                                         <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('add_report');?></button>
                                                </div>
											<?php echo form_close();?> 
                               
                                                    
                                                    
<!--                                                    end-->
                                                    </div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
															Close
														</button>
<!--
														<button type="button" class="btn btn-primary">
															Save changes
														</button>
-->
													</div>
												</div>
											</div>
										</div> 
                                                                                                                                       
                                                                                                                                               
                                           <div class="modal fade" id="birthModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none; padding-right: 17px;">
										<div class="modal-backdrop fade in" style="height: 700px;"></div>
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
														<h4 class="modal-title" id="myModalLabel">Birth History <i class="fa fa-user-md"></i></h4>
													</div>
													<div class="modal-body">                                                                             
<!--                                                    start-->
                                                    
                                                  
                                                   <?php echo form_open('admin/add_birth_history/' , array('role' =>'form','id'=>'form'));?>
										
                               <div class="row"> <div class="col-md-12">    <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('type');?> <span class="symbol required"></span>
													</label>
										<select name="type" class="js-example-basic-single js-states form-control" style="width:100%;">
<!--                                        <option value="operation"><?php echo get_phrase('operation');?></option>-->
                                    	<option value="birth"><?php echo get_phrase('birth');?></option>
<!--
                                    	<option value="death"><?php echo get_phrase('death');?></option>
                                    	<option value="other"><?php echo get_phrase('other');?></option>
-->
                                        </select>
                                        </div>
                                   </div>
                                        <div class="col-md-12">
                                                  <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('description');?> <span class="symbol required"></span>
													</label>
										<textarea class="ckeditor form-control" id="editor2" required placeholder="<?php echo get_phrase('description');?>" name="description" cols="10" rows="10">
                                     
                                        </textarea>
											
                                        </div>
                                        </div>
                                   </div>
                                        
                                          <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('date');?> <span class="symbol required"></span>
													</label>
										<div class="row">
                                        <div class="col-md-6"><input type="text" autocomplete="off" class="form-control underline format-datepicker"  placeholder="<?php echo get_phrase('date'); ?>" name="timestamp" required="required">
                                        </div>
                                        <div class="col-md-6">
                                          <input type="text" name="time" class="timepicker-default form-control underline">
                                              
                                        </div>
												</div>
                                                </div>
                                   <div class="row"> <div class="col-md-6">
                                                
                                                <div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('doctor');?> <span class="symbol required"></span>
													</label>
                                      	<select name="doctor_id" class="js-example-basic-single js-states form-control" style="width:100%;">
<!--                                        	<option value="">select</option>-->
										<?php 
										$doctors	=	$this->db->get('doctor')->result_array();
										foreach($doctors as $row):
										?>
                                        	<option value="<?php echo $row['doctor_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
										endforeach;
										?>
                                        </select>
                                      	
                                        
                                      
                                
												</div>
                                       </div>
                                      <div class="col-md-6">
												
                                                  <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('patient');?> <span class="symbol required"></span>
													</label>
										<input type="text" readonly autocomplete="off" class="form-control underline" value=" <?php echo $this->crud_model->get_type_name_by_id('patient' ,$patient_id , 'name');?>"  required="required"/>
                                        <input type="hidden" name="patient_id" value="<?php echo $patient_id;?>"  />
                                
                                        
                                        </div>
                                      </div>
                                   </div>
                                         <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('add_birth_history');?></button>
                                                </div>
											<?php echo form_close();?> 
                               
                                                    
                                                    
<!--                                                    end-->
                                                    </div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
															Close
														</button>
<!--
														<button type="button" class="btn btn-primary">
															Save changes
														</button>
-->
													</div>
												</div>
											</div>
										</div>          
                                                                                                                                        </div>
                                                                                                                     
                                                                                                                                        
              <div class="modal fade" id="diagnosisModal"  style="display: none; padding-right: 17px;">
										<div class="modal-backdrop fade in" style="height: 700px;"></div>
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
														<h4 class="modal-title" id="myModalLabel">Diagnosis History <i class="fa fa-user-md"></i></h4>
													</div>
													<div class="modal-body"> 
                                                                                                           <?php echo form_open('admin/add_new_diagnosis/' , array('role' =>'form','id'=>'form'));?>
										<div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('doctor');?> <span class="symbol required"></span>
													</label>
                                      <select name="doctor_id" class="js-example-basic-single js-states form-control" style="width:100%;">
                                        	<?php 
										$doctors	=	$this->db->get('doctor')->result_array();
										foreach($doctors as $row):
										?>
                                        	<option value="<?php echo $row['doctor_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
										endforeach;
										?>
                                        </select>
												</div>
                                               
                                               
                                                    <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('patient');?> <span class="symbol required"></span>
													</label>
										<input type="text" readonly autocomplete="off" class="form-control underline" value=" <?php echo $this->crud_model->get_type_name_by_id('patient' ,$patient_id , 'name');?>"  required="required"/>
                                        <input type="hidden" name="patient_id" value="<?php echo $patient_id;?>"  />
                                
                                        </div>
                                      
                                                
                                                       <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('case_history');?> <span class="symbol required"></span>
													</label>
<textarea class="ckeditor form-control" id="editor2" required placeholder="<?php echo get_phrase('add_description');?>" name="case_history" cols="10" rows="10">
                                        
                                        </textarea>
											
                                        </div>
                                      
                                        
                                                      
                                       
                                       
                                                      
                                        
                                        
                                                       <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('description');?> <span class="symbol required"></span>
													</label>
										<textarea class="ckeditor form-control" id="editor2" required placeholder="<?php echo get_phrase('add_description');?>" name="description" cols="10" rows="10">
                                        
                                        </textarea>
											
                                        </div>
                                        
                                        
											
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('date');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline format-datepicker"  placeholder="<?php echo get_phrase('date'); ?>" name="creation_timestamp" required="required">
												</div>
                                                
                                                <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('add_diagnosis');?></button>
                                                </div>
											<?php echo form_close();?> 
                                                                                                            
                                                                                                            
                                                                                                            <div class="modal-footer">
														<button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
															Close
														</button>
<!--
														<button type="button" class="btn btn-primary">
															Save changes
														</button>
-->
													</div>
												</div>
											</div>
										</div>          
                                                                                        </div>
                                                                                                                                
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        
                    <div class="modal fade" id="prescriptionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none; padding-right: 17px;">
										<div class="modal-backdrop fade in" style="height: 700px;"></div>
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
														<h4 class="modal-title" id="myModalLabel">Birth History <i class="fa fa-user-md"></i></h4>
													</div>
													<div class="modal-body"> 
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            <div class="modal-footer">
														<button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
															Close
														</button>
<!--
														<button type="button" class="btn btn-primary">
															Save changes
														</button>
-->
													</div>
												</div>
											</div>
										</div>          
                                                                                                                                        </div>
    
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        
                                                                                                                                        <div class="modal fade" id="nextModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none; padding-right: 17px;">
										<div class="modal-backdrop fade in" style="height: 700px;"></div>
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
														<h4 class="modal-title" id="myModalLabel">Birth History <i class="fa fa-user-md"></i></h4>
													</div>
													<div class="modal-body"> 
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            <div class="modal-footer">
														<button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
															Close
														</button>
<!--
														<button type="button" class="btn btn-primary">
															Save changes
														</button>
-->
													</div>
												</div>
											</div>
										</div>          
                                                                                                                                        </div>
    
                                                                                                                                        
                                                                                                                                  
                                                                                                                                  
                                                                                                                                  
                                                                                                                                  </div>
                                                                        
                                                                                                                                    
                                                                                                                                    
                                                                                            <!-- end: USER PROFILE -->