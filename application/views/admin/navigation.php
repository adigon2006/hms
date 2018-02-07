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
								<a href="<?php echo base_url();?>index.php?admin/patient_landing">
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
                                                       
                            			<li class="<?php if($page_name == 'manage_user')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?admin/manage_user">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-plus-square"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('Users');?></span>
										</div>
									</div>
								</a>
								
							</li>
                                                        <li class="<?php if($page_name == 'manage_hospital')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?admin/manage_hospital">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-server"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('Manage Hospital');?></span>
										</div>
									</div>
								</a>
								
							</li>
                            	
<!--                          <li class="<?php if($page_name == 'view_appointment' 	|| 
										$page_name == 'view_payment' 		|| 
										$page_name == 'view_bed_status' 	|| 
										$page_name == 'view_blood_bank' 	|| 
										$page_name == 'view_medicine' 		|| 
										$page_name == 'view_report'  )echo 'active open';?>">
								<a class="accordion-toggle" href="#view_hospital_submenu">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-server"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('monitor_hospital');?></span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu <?php if(	$page_name == 'view_appointment' 	|| 
																		$page_name == 'view_payment' 		|| 
																		$page_name == 'view_bed_status' 	|| 
																		$page_name == 'view_blood_bank' 	|| 
																		$page_name == 'view_medicine' 		|| 
																		$page_name == 'view_report'  );?>" >
									<li class="<?php if($page_name == 'view_appointment')echo 'custom-active';?>" >
										<a href="<?php echo base_url();?>index.php?admin/view_appointment">
											<span class="title"><i class="fa fa-exchange"></i> <?php echo get_phrase('view_appointment');?> </span>
										</a>
									</li>
									<li class="<?php if($page_name == 'view_payment')echo 'custom-active';?>">
										<a href="<?php echo base_url();?>index.php?admin/view_payment">
											<span class="title"><i class="fa fa-money"></i> <?php echo get_phrase('view_payment');?> </span>
										</a>
									</li>
									<li class="<?php if($page_name == 'view_bed_status')echo 'custom-active';?>">
										<a href="<?php echo base_url();?>index.php?admin/view_bed_status">
											<i class="fa fa-bed"></i><span class="title"> <?php echo get_phrase('view_bed_status');?> </span>
										</a>
									</li>
                                    <li class="<?php if($page_name == 'view_blood_bank')echo 'custom-active';?>">
										<a href="<?php echo base_url();?>index.php?admin/view_blood_bank">
											<i class="fa fa-tint"></i><span class="title"> <?php echo get_phrase('view_blood_bank');?> </span>
										</a>
									</li>
                                     <li class="<?php if($page_name == 'view_medicine')echo 'custom-active';?>">
										<a href="<?php echo base_url();?>index.php?admin/view_medicine">
											<i class="fa fa-medkit"></i><span class="title"> <?php echo get_phrase('view_medicine');?></span>
										</a>
									</li>
									<li class="<?php if($page_name == 'view_report' && $report_type	==	'operation')echo 'custom-active';?>">
										<a href="<?php echo base_url();?>index.php?admin/view_report/operation">
											<i class="fa fa-bars"></i><span class="title"> <?php echo get_phrase('view_operation');?> </span>
										</a>
									</li>
                                    <li class="<?php if($page_name == 'view_report' && $report_type	==	'birth')echo 'custom-active';?>">
										<a href="<?php echo base_url();?>index.php?admin/view_report/birth">
											<i class="fa fa-child"></i><span class="title"><?php echo get_phrase('view_birth_report');?></span>
										</a>
									</li>
                                     <li class="<?php if($page_name == 'view_report' && $report_type	==	'death')echo 'custom-active';?>">
										<a href="<?php echo base_url();?>index.php?admin/view_report/death">
											<i class="fa fa-user-times"></i><span class="title">  <?php echo get_phrase('view_death_report');?> </span>
										</a>
									</li>
								</ul>-->
<!--							</li>
                              <li class="<?php if($page_name == 'manage_accountant')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?admin/manage_accountant">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-money"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('accountant');?></span>
										</div>
									</div>
								</a>
								
							</li>-->
                                                         <li class="<?php if ($page_name == 'view_report'  )echo 'active open';?>">
								<a class="accordion-toggle" href="#view_hospital_submenu">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-edit"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('report');?></span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
                                                             <ul class="sub-menu <?php if($page_name == 'view_report');?>">
								<li class="<?php if($page_name == 'view_report' && $report_type	==	'operation')echo 'custom-active';?>">
										<a href="<?php echo base_url();?>index.php?admin/view_report/operation">
											<i class="fa fa-bars"></i><span class="title"> <?php echo get_phrase('view_operation');?> </span>
										</a>
									</li>
                                    <li class="<?php if($page_name == 'view_report' && $report_type	==	'birth')echo 'custom-active';?>">
										<a href="<?php echo base_url();?>index.php?admin/view_report/birth">
											<i class="fa fa-child"></i> <span class="title"><?php echo get_phrase('view_birth_report');?></span>
										</a>
									</li>
                                     <li class="<?php if($page_name == 'view_report' && $report_type	==	'death')echo 'custom-active';?>">
										<a href="<?php echo base_url();?>index.php?admin/view_report/death">
											<i class="fa fa-user-times"></i><span class="title">  <?php echo get_phrase('view_death_report');?> </span>
										</a>
									</li>
								</ul>
							</li>
						 <li class="<?php if($page_name == 'manage_email')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?admin/manage_email">
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
                                                        <li class="<?php if($page_name == 'manage_calendar')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?admin/manage_calendar">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-calendar"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('calendar');?></span>
										</div>
									</div>
								</a>
								
							</li>
							<li class="<?php if(	$page_name == 'manage_email_template' 	|| 
										$page_name == 'manage_noticeboard' 		||
										$page_name == 'system_settings' 		|| 
										$page_name == 'manage_language' 		|| 
										$page_name == 'backup_restore' )echo 'active open';?>">
								<a class="accordion-toggle" href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-wrench"></i>
										</div>
										<div class="item-inner">
											<span class="title"> <?php echo get_phrase('settings');?> </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
                             <!--   <li>
										<a href="<?php echo base_url();?>index.php?admin/manage_email_template">
											<i class="fa fa-columns"></i><span class="title"><?php echo get_phrase('manage_email_template');?></span>
										</a>
									</li>-->
									<li class="<?php if($page_name == 'manage_noticeboard')echo 'custom-active';?>">
										<a href="<?php echo base_url();?>index.php?admin/manage_noticeboard">
											<i class="fa fa-columns"></i> <span class="title"><?php echo get_phrase('manage_noticeboard');?></span>
										</a>
									</li>
									<li class="<?php if($page_name == 'system_settings')echo 'custom-active';?>">
										<a href="<?php echo base_url();?>index.php?admin/system_settings">
											<i class="fa fa-cogs"></i> <span class="title"><?php echo get_phrase('system_settings');?></span>
										</a>
									</li>
									<li class="<?php if($page_name == 'manage_language')echo 'custom-active';?>">
										<a href="<?php echo base_url();?>index.php?admin/manage_language">
											<i class="fa fa-globe"></i> <span class="title"><?php echo get_phrase('manage_language');?></span>
										</a>
									</li>
									<li class="<?php if($page_name == 'backup_restore')echo 'custom-active';?>">
										<a href="<?php echo base_url();?>index.php?admin/backup_restore">
											<i class="fa fa-download"></i> <span class="title"><?php echo get_phrase('backup_restore');?></span>
										</a>
									</li>
									
								</ul>
							</li>
                                                        <li class="<?php if($page_name == 'manage_payment_integration')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?admin/manage_payment_integration">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-money"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('payment_integration');?></span>
										</div>
									</div>
								</a>
							</li>
							<li class="<?php if($page_name == 'manage_profile')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?admin/manage_profile">
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