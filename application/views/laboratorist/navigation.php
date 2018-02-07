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
								<a href="<?php echo base_url();?>index.php?laboratorist/dashboard">
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
                           
							<li class="<?php if($page_name == 'manage_prescription')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?laboratorist/manage_prescription">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-stethoscope"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('add_diagnosis_report');?></span>
										</div>
									</div>
								</a>
								
							</li>
                            			<li class="<?php if($page_name == 'manage_blood_bank')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?laboratorist/manage_blood_bank">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-tint"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('manage_blood_bank');?></span>
										</div>
									</div>
								</a>
								
							</li>
                                                        <li class="<?php if($page_name == 'manage_blood_donor')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?laboratorist/manage_blood_donor">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('manage_blood_donor');?></span>
										</div>
									</div>
								</a>
								
							</li>
                          
                                                        <li class="<?php if($page_name == 'manage_email')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?laboratorist/manage_email">
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
                            
                            
<!--							<li class="<?php if($page_name == 'manage_calendar')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?laboratorist/manage_calendar">
									<div class="item-content">
										<div class="item-media">
											<i class="fa fa-calendar"></i>
										</div>
										<div class="item-inner">
											<span class="title"><?php echo get_phrase('manage_calendar');?></span>
										</div>
									</div>
								</a>
							</li>-->
                             
							
							<li class="<?php if($page_name == 'manage_profile')echo 'active open';?>">
								<a href="<?php echo base_url();?>index.php?laboratorist/manage_profile">
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