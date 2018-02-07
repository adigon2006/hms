<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('MANAGE USERS');?></h1>
									<span class="mainDescription"><?php echo get_phrase('manage_all_users')?> </span>
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
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-user-md fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('doctor');?></h2>
											<!--<p class="text-small">
												To add users, you need to be signed in as the super user.
											</p>-->
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/manage_doctor">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-user fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('patient');?></h2>
																						<p class="cl-effect-1">
												<a href ="<?php echo base_url();?>index.php?admin/manage_patient">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-plus-square fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('nurse');?></h2>
											
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/manage_nurse">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
                               
                            <div class="row">
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-flask fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('laboratorist');?></h2>
											<!--<p class="text-small">
												To add users, you need to be signed in as the super user.
											</p>-->
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/manage_laboratorist">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-money fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('accountant');?></h2>
																						<p class="cl-effect-1">
												<a href ="<?php echo base_url();?>index.php?admin/manage_accountant">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
							 <div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-medkit fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('pharmacist');?></h2>
											
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/manage_pharmacist">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>	
                           
                                                            
                                                            <div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-plus-square fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('customer care');?></h2>
											
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/manage_customer_care">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>
                            
                          
                          
                         
                            
						</div>
						<!-- end: FEATURED BOX LINKS -->
                        	<!-- start: FIRST SECTION -->
						<div class="container-fluid container-fullw padding-bottom-10">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-md-6 col-lg-7">
											<div class="panel panel-white no-radius" id="visits">
						           
                </div>
            </div> 
										</div>
									</div>
								</div>
							</div>
						
						<!-- end: FIRST SECTION -->
                        
                        
                       