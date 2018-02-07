<!-- sidebar -->
			<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">
					<nav>
						<!-- start: SEARCH FORM -->
						<div class="search-form">
							<a class="s-open" href="#">
								<i class="ti-search"></i>
							</a>
							<form class="navbar-form" role="search">
								<a class="s-remove" href="#" target=".navbar-form">
									<i class="ti-close"></i>
								</a>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search...">
									<button class="btn search-button" type="submit">
										<i class="ti-search"></i>
									</button>
								</div>
							</form>
						</div>
						<!-- end: SEARCH FORM -->
						<!-- start: MAIN NAVIGATION MENU -->
						<div class="navbar-title">
							<span>Main Navigation</span>
						</div>
						<ul class="main-navigation-menu">
							<li class="<?php if($page_name == 'dashboard')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?admin/dashboard">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-home"></i>
										</div>
										<div class="item-inner">
											<span class="title"> <?php echo get_phrase('dashboard');?> </span>
										</div>
									</div>
								</a>
							</li>
                           
							<li class="<?php if($page_name == 'patient_landing')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?doctor/patient_landing">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('patient');?></span>
										</div>
									</div>
								</a>
								
							</li>
                            			<li class="<?php if($page_name == 'manage_appointment')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?doctor/manage_appointment">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-calendar-o"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('manage_appointment');?></span>
										</div>
									</div>
								</a>
								
							</li>
                            	<li class="<?php if($page_name == 'manage_prescription')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?doctor/manage_prescription">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-stethoscope"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('manage_prescription');?></span>
										</div>
									</div>
								</a>
								
							</li>
                                                        <li class="<?php if($page_name == 'manage_in_patient')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?doctor/manage_in_patient">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-bed"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('manage_in_patient');?></span>
										</div>
									</div>
								</a>
								
							</li>
                            <li class="<?php if($page_name == 'manage_risk_assessment' 	|| 
										$page_name == 'manage_vital_assessment' )echo 'active open';?>">
								<a class="accordion-toggle" href="#view_hospital_submenu">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-server"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('patient_assessment');?></span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu <?php if(	$page_name == 'manage_risk_assessment' 	|| 
										$page_name == 'manage_vital_assessment' );?>" >
									<!--<li class="<?php if($page_name == 'manage_risk_assessment')echo 'custom-active';?>" >
										<a href="<?php echo base_url();?>index.php?doctor/manage_risk_assessment">
											<span class="title"><i class="fa fa-exchange"></i> <?php echo get_phrase('risk_assessment');?> </span>
										</a>
									</li>-->
									<li class="<?php if($page_name == 'manage_vital_assessment')echo 'custom-active';?>">
										<a href="<?php echo base_url();?>index.php?doctor/manage_vital_assessment">
											<span class="title"><i class="fa fa-heartbeat"></i> <?php echo get_phrase('vital_assessment');?> </span>
										</a>
									</li>
							</ul>
                            </li>
                            <li class="<?php if($page_name == 'manage_email')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?doctor/manage_email">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-envelope"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('email');?></span>
										</div>
									</div>
								</a>
								
							</li>
                            <li class="<?php if($page_name == 'manage_bed_allotment')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?doctor/manage_bed_allotment">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-bed"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('bed_allotment');?></span>
										</div>
									</div>
								</a>
								
							</li>
                              <li class="<?php if($page_name == 'view_blood_bank')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?doctor/view_blood_bank">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-tint"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('view_blood_bank');?></span>
										</div>
									</div>
								</a>
								
							</li>
                              <li class="<?php if($page_name == 'manage_report')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?doctor/manage_report">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-hospital-o"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('manage_report');?></span>
										</div>
									</div>
								</a>
								
							</li>
                             
							
							<li class="<?php if($page_name == 'manage_profile')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?doctor/manage_profile">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-lock"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('profile');?></span>
										</div>
									</div>
								</a>
							</li>
                            	<li>
								<a href="<?php echo base_url();?>index.php?login/logout">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-power-off"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Log out</span>
										</div>
									</div>
								</a>
							</li>
						</ul>
						<!-- end: MAIN NAVIGATION MENU -->
						<!-- start: CORE FEATURES -->
						<div class="navbar-title" align="center">
							<span>Need Help</span>
						</div>
						
						<!-- end: CORE FEATURES -->
						<!-- start: DOCUMENTATION BUTTON -->
						<div class="wrapper">
							<a href="documentation.html" class="button-o">
								<i class="ti-help"></i>
								<span>Documentation</span>
							</a>
						</div>
						<!-- end: DOCUMENTATION BUTTON -->
					</nav>
				</div>
			</div>
			<!-- / sidebar -->