<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('patient_landing');?></h1>
									<span class="mainDescription"><?php echo get_phrase('manage_patient')?> </span>
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
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
                                                            <div class="col-md-12 col-lg-offset-3 col-lg-6 text-center">
                                                            <h1 class="mainTitle text-center"><?php echo get_phrase('SEARCH_FOR_PATIENT');?></h1>
                                                            <span class="mainDescription text-center"><?php echo get_phrase('search for patient name/patient Number if existing')?> </span>
                                                             <?php echo form_open('doctor/view_single_patient/view/' , array('role' =>'form','class'=>'form-inline'));?>  
                                                              
                                                                    <div class="form-group"> 
                                                                        
                                                                <select name="patient_id" class="js-example-basic-single js-states form-control" style="width:100%;">
                                                                <option>Search for patient by name/patient Number</option>
                                                                <?php 
										$this->db->order_by('account_opening_timestamp' , 'asc');
										$patients	=	$this->db->get('patient')->result_array();
										foreach($patients as $row):
										?>
                                        	<option value="<?php echo $row['patient_id'];?>"><?php echo $row['name'].' ('.$row['client_number'].'}';?></option>
                                        <?php
										endforeach;
										?>
                                        </select> </div> <div class="form-group"> 
                                                            <button type="submit" class="btn btn-primary form-control"><?php echo get_phrase('search for patient');?></button>
                                                                </div> 
                                                            </form>
                                                             <h1 class="mainTitle text-center"><?php echo get_phrase('OR');?></h1>
                                                             <div class="form-group"><div class="col-md-6 col-lg-6"><a style="color:#ffffff;" href="<?php echo base_url();?>index.php?doctor/add_new_patient"><button type="submit" class="btn btn-primary form-control"><?php echo get_phrase('add_new_patient');?></button></a>
                                                             </div>
                                                                 <div class="col-md-6 col-lg-6"><a style="color:#ffffff;" href="<?php echo base_url();?>index.php?doctor/manage_patient"><button type="submit" class="btn btn-primary form-control"><?php echo get_phrase('view_all_patient');?></button></a>
                                                              </div>
                                                             </div>
                                                            </div>
							</div>
                           
						</div>
					
                        
                        
   
  