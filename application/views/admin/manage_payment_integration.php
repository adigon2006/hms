<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('profile');?></h1>
									<span class="mainDescription"><?php echo get_phrase('manage_profile');?> </span>
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
          
                        
                        <!-- end of tabs -->
                        
                 
                   <div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
								
									<div class="tabbable">
										<ul id="myTab1" class="nav nav-tabs">
                                        
											<li class="active">
												<a href="#myTab1_example2" data-toggle="tab">
									<i class="fa fa-lock"></i> <?php echo get_phrase('Paystack');?>
												</a>
											</li>
										
										</ul>
										<div class="tab-content">
                                        
					
<?php
                                                                  
                                                  $status =  $this->session->userdata('metoast');
                                                  
                                               if( $status == 'edited')
                                                  {
                                                    echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('Payment Integration Updated').'</textarea>
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
                                            

                                        	<div class="tab-pane fade in active" id="myTab1_example2">
								<!-- start: DYNAMIC TABLE -->
			
                        <div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
						<?php echo form_open('admin/manage_payment_integration/paystack/update/1' , array('role' =>'form'));?>
                                                                    <?php foreach($integrationdetails as $integrationdetail): ?>
						  <div class="form-group">
								<label class="control-label">
														<?php echo get_phrase('demo_secret_key');?> <span class="symbol required"></span>
													</label>
													<input type="text"value="<?=$integrationdetail['secret_key_test'] ?>" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('demo_secret_key');?>" name="demosk" required="required" >
												</div>
                                                
                                                  <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('demo_public_key');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" value="<?=$integrationdetail['public_key_test'] ?>" class="form-control underline"  placeholder="<?php echo get_phrase('demo_public_key');?>" name="demopk" required="required" >
												</div>
                                                
                                                  <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('live_secret_key');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" value="<?=$integrationdetail['live_secret_key'] ?>" class="form-control underline"  placeholder="<?php echo get_phrase('live_secret_key');?>" name="livesk" required="required" >
												</div>
                                                
                                                                              <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('live_public_key');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" value="<?=$integrationdetail['live_public_key'] ?>" class="form-control underline"  placeholder="<?php echo get_phrase('live_public_key');?>" name="livepk" required="required" >
												</div>
                                                                    
                                                                      <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('Status');?> <span class="symbol required"></span>
													</label>
										<select name="status" class="js-example-basic-single js-states form-control" style="width:100%;">
                                    	<option value="1" <?php if($integrationdetail['status'] == 1){echo 'selected';} ?> ><?php echo get_phrase('Demo');?></option>
                                    	<option value="2" <?php if($integrationdetail['status'] == 2){echo 'selected';} ?> ><?php echo get_phrase('Live');?></option>
                                        
                                        
                                        </select>
												</div>
                                                
                                                 <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('update_details');?></button>
                                                </div>
                                                                    <?php endforeach; ?>
                                                
                                                 <?php echo form_close();?>
								</div>
							</div>
						</div>
                      
						<!-- end: DYNAMIC TABLE -->
											</div>
										
										</div>
									</div>
								
								</div>
							</div>
						</div>
                        
                        <!-- end of tabs -->
                        