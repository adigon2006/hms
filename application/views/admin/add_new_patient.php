<?php

function generateuniqueID()
{
$s = 'P';
$s .= substr(number_format(time() * rand(),0,'',''),0,6);
return $s;	
}

?>
<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('manage_patient');?></h1>
									<span class="mainDescription"><?php echo get_phrase('add_new_patient')?> </span>
								</div>
								<div class="col-sm-5">
									<!-- start: MINI STATS WITH SPARKLINE -->
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
							</div>
						</section>
						<!-- end: DASHBOARD TITLE -->
                        
                        <!-- start: FEATURED BOX LINKS -->
			
                          
                         
                            <!-- start: WIZARD DEMO -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									<h5 class="over-title margin-bottom-15">Create New <span class="text-bold">patient</span></h5>
									
									<!-- start: WIZARD FORM -->
									
                                                                            <?php echo form_open('admin/manage_patient/create/' , array('role' =>'form','id'=>'form','class'=>'smart-wizard'));?>
                                       
										<div id="wizard" class="swMain">
											<!-- start: WIZARD SEPS -->
											<ul>
												<li>
													<a href="#step-1">
														<div class="stepNumber">
															1
														</div>
														<span class="stepDesc"><small> Personal Information </small></span>
													</a>
												</li>
												<li>
													<a href="#step-2">
														<div class="stepNumber">
															2
														</div>
														<span class="stepDesc"> <small> Create an account </small></span>
													</a>
												</li>
												<li>
													<a href="#step-3">
														<div class="stepNumber">
															3
														</div>
														<span class="stepDesc"> <small> Insurance Information </small> </span>
													</a>
												</li>
												<li>
													<a href="#step-4">
														<div class="stepNumber">
															4
														</div>
														<span class="stepDesc"> <small> Complete Form</small> </span>
													</a>
												</li>
											</ul>
											<!-- end: WIZARD SEPS -->
											<!-- start: WIZARD STEP 1 -->
											<div id="step-1">
												<div class="row">
													<div class="col-md-5">
														<div class="padding-30">
															<h2 class="StepTitle"><i class="ti-face-smile fa-2x text-primary block margin-bottom-10"></i> Enter patient personal information</h2>
															
															<p class="text-small">
													                Fill in the personal details of patient
															</p>
														</div>
													</div>
													<div class="col-md-7">
														<fieldset>
															<legend>
																Personal Information
															</legend>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label>
																			Title <span class="symbol required"></span>
																		</label>
																		<select name="title" class="js-example-basic-single js-states form-control" style="width:100%;">
                                    	<option value="Mr"><?php echo get_phrase('Mr');?></option>
                                    	<option value="Mrs"><?php echo get_phrase('Mrs');?></option>
                                        <option value="Ms"><?php echo get_phrase('Ms');?></option>
                                        
                                        </select></div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label">
																			Name <span class="symbol required"></span>
																		</label>
																		<input type="text" autocomplete="off" class="form-control"  placeholder="<?php echo get_phrase('Name'); ?>" name="name" required="required">
					</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="block">
																			Gender
																		</label>
																		<div class="clip-radio radio-primary">
                                                                                                                                                    <input type="radio" id="wz-male" required="required" name="sex" value="male">
																			<label for="wz-male">
																				Male
																			</label>
																			<input type="radio" id="wz-female" name="sex" value="female">
																			<label for="wz-female">
																				Female
																			</label>
																			
																		</div>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label" >
														<?php echo get_phrase('religion');?> <span class="symbol required"></span>
													</label>
										<select name="religion" class="js-example-basic-single js-states form-control" style="width:100%;">
                                    	<option value="Christian"><?php echo get_phrase('Christian');?></option>
                                    	<option value="Muslim"><?php echo get_phrase('Muslim');?></option>
                                        <option value="Others"><?php echo get_phrase('Others');?></option>
                                        </select>
																	</div>
																</div>
                                                                                                                        </div>
                                                                                                                    <div class="row">
                                                                                                                            <div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label">
																			Phone No <span class="symbol required"></span>
																		</label>
																		<input type="text" autocomplete="off" class="form-control"  placeholder="<?php echo get_phrase('phone'); ?>" name="phone" required="required">
												
																</div>
															</div>
                                                                                                                            		<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label">
																			Birth Date <span class="symbol required"></span>
																		</label>
																		<input type="text" autocomplete="off" class="form-control format-datepicker"  placeholder="<?php echo get_phrase('birth_date'); ?>" name="birth_date" required="required">
											
																</div>
															</div>
                                                                                                                            
                                                                                                                            
                                                                                                                            
															</div>
															<p>
																<a href="javascript:void(0)" data-content="Other Contact Information" data-title="Contact" data-placement="top" data-toggle="popover">
																	Other information
																</a>
															</p>
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-6"><div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('home_address');?><span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('home_address');?>" name="address" required="required">
												</div></div>
                                                 <div class="col-md-6"><div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('office_address');?><span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('office_address');?>" name="address2" required="required">
												</div></div>
                                                                                                                        </div>
                                                                                                                          <div class="row">
                                                                                               <div class="col-md-6"><div class="form-group">
													<label class="control-label" >
										<?php echo get_phrase('age');?> <span class="symbol required"></span>
													</label>
													<input type="number" autocomplete="off" class="form-control"  placeholder="<?php echo get_phrase('age'); ?>" name="age" required="required">
												</div></div>
                                                 <div class="col-md-6"><div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('blood_group');?> <span class="symbol required"></span>
													</label>
					<select name="blood_group" class="js-example-basic-single js-states form-control" style="width:100%;">
                                    	<option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        </select>
												</div>    
                                                                                                                          </div></div>
                                                                                                                         <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('Patient_number');?> 
													</label>
													<input type="text" readonly="readonly" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('client_number'); ?>" name="clientno" value="<?=generateuniqueID(); ?>">
												</div>
                                                                                                                        
                                                                                                                        <p>
																<a href="javascript:void(0)" data-content="Next of Kin Information" data-title="Next of Kin" data-placement="top" data-toggle="popover">
																	Next of Kin information
																</a>
															</p>
                                                                                                                        <div class="row"><div class="col-md-6"><div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('name_of_next_of_kin');?>
													</label>
													<input type="text" name="nonok" autocomplete="off" class="form-control"  placeholder="<?php echo get_phrase('name_of_next_of_kin');?>">
												</div></div>
                                                 <div class="col-md-6"><div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('relationship');?>
													</label>
													<input type="text" name="relationship" autocomplete="off" class="form-control"  placeholder="<?php echo get_phrase('relationship');?>">
												</div></div>
                                                                                                                        </div>
                                                                                                                        <div class="row"><div class="col-md-6"><div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('phone_number');?>  <span class="symbol required"></span>
													</label>
		<input type="text" name="nokphoneno" autocomplete="off" class="form-control"  placeholder="<?php echo get_phrase('phone_number');?>" required="required">
												</div></div>
                                                  <div class="col-md-6"><div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('email');?> <span class="symbol required"></span>
													</label>
													<input type="email" autocomplete="off" class="form-control "  placeholder="<?php echo get_phrase('email'); ?>" name="nokemail" required="required">
												</div></div></div>
                                                   <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('home_address');?><span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control"  placeholder="<?php echo get_phrase('home_address');?>" name="nokhomeaddress" required="required">
												</div>
                                
                                                                                                                        
														</fieldset>
													
														<div class="form-group">
															<button class="btn btn-primary btn-o next-step btn-wide pull-right">
																Next <i class="fa fa-arrow-circle-right"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
											<!-- end: WIZARD STEP 1 -->
											<!-- start: WIZARD STEP 2 -->
											<div id="step-2">
												<div class="row">
													<div class="col-md-5">
														<div class="padding-30">
															<h2 class="StepTitle">Create an account <span class="text-large block">for the patient</span></h2>
															<p>
																Enter the email and password login credentials
															</p>
															
														</div>
													</div>
													<div class="col-md-7">
														<fieldset>
															<legend>
																Account Credential
															</legend>
															<div class="form-group">
																<label class="control-label">
																	Email <span class="symbol required"></span>
																</label>
																<input type="email" placeholder="Enter a valid E-mail" class="form-control" name="email">
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label">
																			Password <span class="symbol required"></span>
																		</label>
																		<input type="password" placeholder="Enter a Password" class="form-control" name="password" id="password"/>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label">
																			Repeat Password <span class="symbol required"></span>
																		</label>
																		<input type="password" placeholder="Repeat Password" class="form-control" name="password2"/>
																	</div>
																</div>
															</div>
														</fieldset>
														<div class="form-group">
															<button class="btn btn-primary btn-o back-step btn-wide pull-left">
																<i class="fa fa-circle-arrow-left"></i> Back
															</button>
															<button class="btn btn-primary btn-o next-step btn-wide pull-right">
																Next <i class="fa fa-arrow-circle-right"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
											<!-- end: WIZARD STEP 2 -->
											<!-- start: WIZARD STEP 3 -->
											<div id="step-3">
												<div class="row">
													<div class="col-md-5">
														<div class="padding-30">
															<h2 class="StepTitle">Insurance Information</h2>
															<p class="text-large">
															Enter your insurance policy information	
                                                                                                                        </p>
															
														</div>
													</div>
													<div class="col-md-7">
														<fieldset>
															<legend>
																Insurance Information
															</legend>
															
															
													
                                                                                                                    <div class="row"><div class="col-md-6"><div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('name_of_insurance');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control"  placeholder="<?php echo get_phrase('name_of_insurance'); ?>" name="noi" required="required">
												</div></div>
                                                <div class="col-md-6"><div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('insurance_number');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control"  placeholder="<?php echo get_phrase('insurance_number'); ?>" name="insurancenumber" required="required">
												</div></div></div>
                                                <div class="row"><div class="col-md-6"><div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('policy_holder\'s_name');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control"  placeholder="<?php echo get_phrase('policy_holder\'s_name'); ?>" name="phn" required="required">
												</div></div>
                                                  <div class="col-md-6"><div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('policy_holder\'s_date_of_birth');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control format-datepicker"  placeholder="<?php echo get_phrase('policy_holder\'s_date_of_birth'); ?>" name="phdob" required="required">
												</div></div></div>
                                
														</fieldset>
														<div class="form-group">
															<button class="btn btn-primary btn-o back-step btn-wide pull-left">
																<i class="fa fa-circle-arrow-left"></i> Back
															</button>
															<button class="btn btn-primary btn-o next-step btn-wide pull-right">
																Next <i class="fa fa-arrow-circle-right"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
											<!-- end: WIZARD STEP 3 -->
											<!-- start: WIZARD STEP 4 -->
											<div id="step-4">
												<div class="row">
													<div class="col-md-12">
														<div class="text-center">

															<p class="text-small">
															Click the submit to complete the patient registration form 	
                                                                                                                        </p>
                                                                                                                        <div class="form-group"> 
                                                                                                                       <a class="btn btn-primary btn-o go-first" href="javascript:void(0)">
																Back to first step
															</a> <button type="submit" class="btn btn-primary"><?php echo get_phrase('add_patient');?></button>
                                                                                                                         </div>
															
														</div>
													</div>
												</div>
											</div>
											<!-- end: WIZARD STEP 4 -->
										</div>
									</form>
									<!-- end: WIZARD FORM -->
								</div>
							</div>
						</div>
						<!-- start: WIZARD DEMO -->

  