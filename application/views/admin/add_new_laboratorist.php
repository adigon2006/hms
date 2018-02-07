<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('LABORATORIST');?></h1>
									<span class="mainDescription"><?php echo get_phrase('add_new_laboratorist')?> </span>
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
                        
                         <?php
                                                                  
                                                  $status =  $this->session->userdata('metoast');
                                           if( $status == 'inuse')
                                                  {
                                                    echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('Email Already In Use').'</textarea>
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
                                               <div class="container-fluid container-fullw bg-white">
												<?php echo form_open('admin/manage_laboratorist/create/' , array('role' =>'form','id'=>'form'));?>
											<fieldset>
														<legend>
															Account Info
														</legend>
														<div class="row">
															<div class="col-md-6">
																
																<div class="form-group">
																	<label class="control-label">
																		<?php echo get_phrase('name'); ?><span class="symbol required"></span>
																	</label>
																	<input type="text" placeholder="<?php echo get_phrase('name'); ?>" class="form-control" value="<?php echo $this->session->userdata('name'); ?>" name="name" required="required">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Email Address <span class="symbol required"></span>
																	</label>
																	<input type="email" placeholder="peter@example.com" class="form-control" value="<?php echo $this->session->userdata('email'); ?>" name="email" required="required">
																</div>
                                                                                                                            <div class="form-group">
																	<label class="control-label">
																		Password <span class="symbol required"></span>
																	</label>
																	<input type="password" placeholder="password" class="form-control" name="password" id="password" required="required">
																</div>
                                                                                                                          
																
																
															</div>
															<div class="col-md-6">
																<div class="form-group">
																		<label>
																			Gender<span class="symbol required"></span>
																		</label>
													<select name="sex" class="js-example-basic-single js-states form-control" style="width:100%;">
                                    	<option <?php if($this->session->userdata('sex') == 'Male'){echo 'selected';} ?> value="Male"><?php echo get_phrase('Male');?></option>
                                    	<option <?php if($this->session->userdata('sex') == 'Female'){echo 'selected';} ?> value="Female"><?php echo get_phrase('Female');?></option>
                                      
                                        
                                        </select></div>
											  <div class="form-group">
																	<label class="control-label">
																		Phone <span class="symbol required"></span>
																	</label>
																	<input type="text" value="<?php echo $this->session->userdata('phone'); ?>"  placeholder="Phone" class="form-control" id="password_again" name="phone" required="required">
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Address <span class="symbol required"></span>
																	</label>
																	<input value="<?php echo $this->session->userdata('address'); ?>" type="text" placeholder="Address" class="form-control" id="address" name="address" required="required">
																</div>
                                                                                                        
<!--																<div class="form-group">
																	<label>
																		Image Upload
																	</label>
																	<div class="fileinput fileinput-new" data-provides="fileinput">
                                                                                                                                            <div class="fileinput-new thumbnail"><img src="<?php echo base_url(); ?>template/assets/images/default-user.png" alt="">
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
																</div>-->
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
																		<input name="twitter" value="<?php echo $this->session->userdata('twitter'); ?>" class="form-control" type="text" placeholder="username">
																		<i class="fa fa-twitter"></i> </span>
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Facebook
																	</label>
																	<span class="input-icon">
																		<input name="facebook" class="form-control" value="<?php echo $this->session->userdata('facebook'); ?>" type="text" placeholder="facebook URL">
																		<i class="fa fa-facebook"></i> </span>
																</div>
																
															</div>
															<div class="col-md-6">
																
																<div class="form-group">
																	<label class="control-label">
																		Linkedin
																	</label>
																	<span class="input-icon">
																		<input name="linkedin" class="form-control" value="<?php echo $this->session->userdata('linkedin'); ?>" type="text" placeholder="Linked In">
																		<i class="fa fa-linkedin"></i> </span>
																</div>
																<div class="form-group">
																	<label class="control-label">
																		Skype
																	</label>
																	<span class="input-icon">
																		<input name="skype" class="form-control" value="<?php echo $this->session->userdata('skype'); ?>" type="text" placeholder="username">
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
																By clicking Add, you are adding a new user.
															</p>
														</div>
														<div class="col-md-4">
															<button class="btn btn-primary pull-right" type="submit">
																Add Laboratorist <i class="fa fa-plus"></i>
															</button>
														</div>
													</div>
                                                    <?php
                                                   $this->session->unset_userdata('email');
                                                    $this->session->unset_userdata('name');
                                                    $this->session->unset_userdata('phone');
                                                    $this->session->unset_userdata('address');
                                                    $this->session->unset_userdata('sex');
                                                    $this->session->unset_userdata('twitter');
                                                    $this->session->unset_userdata('facebook');
                                                    $this->session->unset_userdata('linkedin');
                                                    $this->session->unset_userdata('skype');
                                                   ?>
												</form>
											
                                                </div>