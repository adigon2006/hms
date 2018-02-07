<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('system_setting');?></h1>
									<span class="mainDescription"><?php echo get_phrase('manage_system_setting');?> </span>
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
            <div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
								
									<div class="tabbable">
										<ul id="myTab1" class="nav nav-tabs">
                                        
											<li class="active">
												<a href="#myTab1_example2" data-toggle="tab">
									<i class="fa fa-bars"></i> <?php echo get_phrase('system_setting');?>
												</a>
											</li>
										
										</ul>
										<div class="tab-content">
                                        
					

                                            

                                        	<div class="tab-pane fade in active" id="myTab1_example2">
								<!-- start: DYNAMIC TABLE -->
					  <?php      foreach($settings as $row):
                        ?>	
                        <div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-9">
									 <?php echo form_open('admin/system_settings/'.$row['type'].'/do_update/' , array('role' =>'form'));?>
								
									<div class="form-group form-inline">
                  
                        
                                   
													<label class="col-sm-2 control-label">
														<?php echo get_phrase($row['type']);?>
													</label>
                                                    <div class="col-sm-7">
													<input type="text" autocomplete="off" class="form-control underline" name="description" required="required" value="<?php echo $row['description'];?>"><button type="submit" class="btn btn-primary"><?php echo get_phrase('update_profile');?></button>
                                                </div>
												</div>
                                    
                                    
                                                
                                     <?php echo form_close();?>
								</div>
							</div>
						</div>
                        
                          
	<?php endforeach; ?>
						<!-- end: DYNAMIC TABLE -->
											</div>
										
										</div>
									</div>
								
								</div>
							</div>
						</div>
                        
                        <!-- end of tabs -->
                        
                 
                