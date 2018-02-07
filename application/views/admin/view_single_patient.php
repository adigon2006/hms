<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('view_single');?></h1>
									<span class="mainDescription"><?php echo get_phrase('single_patient_details')?> </span>
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
                                                <?php
 foreach($patientdetails as $patientdetail): ?>
                                                            
                                                            <div class="tabbable">
										<ul id="myTab1" class="nav nav-tabs">
											<li class="active">
												<a href="#myTab1_example1" data-toggle="tab">
												Client Information
												</a>
											</li>
											<li>
												<a href="#myTab1_example2" data-toggle="tab">
													Next of Kin Information
												</a>
											</li>
											<li>
												<a href="#myTab1_example3" data-toggle="tab">
													Insurance information
												</a>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane fade in active" id="myTab1_example1">
											<table class="table table-striped table-bordered table-hover table-full-width">
                                                               <tr>
                                                                   <td>Patient Name</td>
                                                               <td><?=$patientdetail['title'].' '.$patientdetail['name']; ?></td>    
                                                               </tr> 
                                                                 <tr>
                                                                   <td>Client Number</td>
                                                               <td><?=$patientdetail['client_number']; ?></td>    
                                                               </tr> 
                                                               <tr>
                                                                <td>Gender</td>
                                                               <td><?=$patientdetail['sex']; ?></td>    
                                                               </tr> 
                                                               
                                                                <tr>
                                                                <td>Religion</td>
                                                               <td><?=$patientdetail['religion']; ?></td>    
                                                               </tr> 
                                                               
                                                                <tr>
                                                                <td>Phone</td>
                                                               <td><?=$patientdetail['phone']; ?></td>    
                                                               </tr> 
                                                               <tr>
                                                                <td>Date of Birth</td>
                                                               <td><?=$patientdetail['birth_date']; ?></td>    
                                                               </tr> 
                                                                <tr>
                                                                <td>Home Address</td>
                                                               <td><?=$patientdetail['address']; ?></td>    
                                                               </tr>
                                                               
                                                                <tr>
                                                                <td>Office Address</td>
                                                               <td><?=$patientdetail['office_address']; ?></td>    
                                                               </tr>
                                                               
                                                               <tr>
                                                                <td>Office Address</td>
                                                               <td><?=$patientdetail['office_address']; ?></td>    
                                                               </tr>
                                                               <tr>
                                                                <td>Email</td>
                                                               <td><?=$patientdetail['email']; ?></td>    
                                                               </tr>
                                                               <tr>
                                                                <td>Blood Group</td>
                                                               <td><?=$patientdetail['blood_group']; ?></td>    
                                                               </tr>
                                                            </table>	
											</div>
											<div class="tab-pane fade" id="myTab1_example2">
												<table class="table table-striped table-bordered table-hover table-full-width">
                                                        <tr>
                                                                <td>Name of Next of Kin</td>
                                                               <td><?=$patientdetail['nok_name']; ?></td>    
                                                               </tr>
                                                                 <tr>
                                                                <td>Relationship</td>
                                                               <td><?=$patientdetail['relationship']; ?></td>    
                                                               </tr>
                                                               <tr>
                                                                <td>Phone No</td>
                                                               <td><?=$patientdetail['nok_phone_no']; ?></td>    
                                                               </tr>
                                                                <tr>
                                                                <td>Next of Kin Email</td>
                                                               <td><?=$patientdetail['nok_email']; ?></td>    
                                                               </tr>
                                                                <tr>
                                                                <td>Next of Kin Address</td>
                                                               <td><?=$patientdetail['nok_home_address']; ?></td>    
                                                               </tr>
                                                                                                    
                                                                                                </table>
											</div>
											<div class="tab-pane fade" id="myTab1_example3">
											<table class="table table-striped table-bordered table-hover table-full-width">
                                                                                      <tr>
                                                                <td>Name of Insurance</td>
                                                               <td><?=$patientdetail['name_of_insurance']; ?></td>    
                                                               </tr>       
                                                                          <tr>
                                                                <td>Policy Holder Name</td>
                                                               <td><?=$patientdetail['policy_holder_name']; ?></td>    
                                                               </tr>   
                                                                             <tr>
                                                                <td>Policy Holder Date of Birth</td>
                                                               <td><?=$patientdetail['holder_dob']; ?></td>    
                                                               </tr>    
                                                                      <tr>
                                                                <td>Name of insurance</td>
                                                               <td><?=$patientdetail['name_of_insurance']; ?></td>    
                                                               </tr>  
                                                               
                                                                      <tr>
                                                                <td>Insurance Number</td>
                                                               <td><?=$patientdetail['insurance_number']; ?></td>    
                                                               </tr>  
                                                                                        </table>
											</div>
										</div>
									</div>
                                                            
                                                            
                                                            <?php endforeach; ?>
							</div>
                           
						</div>
					
                        
                        
   
 

     
 