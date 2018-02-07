<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('DASHBOARD');?></h1>
									<span class="mainDescription"><?php echo get_phrase('overview and statistics')?> </span>
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
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-user fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('Manage Patient');?></h2>
																						<p class="cl-effect-1">
												<a href ="<?php echo base_url();?>index.php?admin/patient_landing">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-user-md fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('Manage Users');?></h2>
											<!--<p class="text-small">
												To add users, you need to be signed in as the super user.
											</p>-->
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/manage_user">
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
											<h2 class="StepTitle"><?php echo get_phrase('Manage Reports');?></h2>
											
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/view_report">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
                                                            
                                                           
                             
							</div>
                           
                             
                            
                          
                         
                            
						</div>
						<!-- end: FEATURED BOX LINKS -->
                       	<div class="container-fluid container-fullw padding-bottom-10">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-md-7 col-lg-8">
											<div class="panel panel-white no-radius" id="visits">
												<div class="panel-heading border-light">
													<h4 class="panel-title"> Visits </h4>
													<ul class="panel-heading-tabs border-light">
														<li>
															<div class="pull-right">
																<div class="btn-group">
																	<a class="padding-10" data-toggle="dropdown" aria-expanded="false">
																		<i class="ti-more-alt "></i>
																	</a>
																	<ul class="dropdown-menu dropdown-light" role="menu">
																		<li>
																			<a href="#">
																				Action
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				Another action
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				Something else here
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</li>
														<li>
															<div class="rate">
																<i class="fa fa-caret-up text-primary"></i><span class="value">15</span><span class="percentage">%</span>
															</div>
														</li>
														<li class="panel-tools">
															<a data-original-title="Refresh" data-toggle="tooltip" data-placement="top" class="btn btn-transparent btn-sm panel-refresh" href="#"><i class="ti-reload"></i></a>
														</li>
													</ul>
												</div>
												<div collapse="visits" class="panel-wrapper">
													<div class="panel-body">
														<div class="height-350">
															<canvas id="chart1" class="full-width" width="644" height="350" style="width: 644px; height: 350px;"></canvas>
															<div class="margin-top-20">
																<div class="inline pull-left">
																	<div id="chart1Legend" class="chart-legend"><ul class="tc-chart-js-legend"><li><span style="background-color:rgba(220,220,220,1)"></span>My First dataset</li><li><span style="background-color:rgba(151,187,205,1)"></span>My Second dataset</li></ul></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-5 col-lg-4">
											<div class="panel panel-white no-radius">
												<div class="panel-heading border-light">
													<h4 class="panel-title"> Acquisition </h4>
												</div>
												<div class="panel-body">
													<h3 class="inline-block no-margin">26</h3> visitors on-line
													<div class="progress progress-xs no-radius">
														<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
															<span class="sr-only"> 40% Complete</span>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-4">
															<h4 class="no-margin">15</h4>
															<div class="progress progress-xs no-radius no-margin">
																<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
																	<span class="sr-only"> 80% Complete</span>
																</div>
															</div>
															Direct
														</div>
														<div class="col-sm-4">
															<h4 class="no-margin">7</h4>
															<div class="progress progress-xs no-radius no-margin">
																<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
																	<span class="sr-only"> 60% Complete</span>
																</div>
															</div>
															Sites
														</div>
														<div class="col-sm-4">
															<h4 class="no-margin">4</h4>
															<div class="progress progress-xs no-radius no-margin">
																<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
																	<span class="sr-only"> 40% Complete</span>
																</div>
															</div>
															Search
														</div>
													</div>
													<div class="row margin-top-30">
														<div class="col-xs-4 text-center">
															<div class="rate">
																<i class="fa fa-caret-up text-green"></i><span class="value">26</span><span class="percentage">%</span>
															</div>
															Mac OS X
														</div>
														<div class="col-xs-4 text-center">
															<div class="rate">
																<i class="fa fa-caret-up text-green"></i><span class="value">62</span><span class="percentage">%</span>
															</div>
															Windows
														</div>
														<div class="col-xs-4 text-center">
															<div class="rate">
																<i class="fa fa-caret-down text-red"></i><span class="value">12</span><span class="percentage">%</span>
															</div>
															Other OS
														</div>
													</div>
													<div class="margin-top-10">
														<div class="height-180">
															<canvas id="chart2" class="full-width" width="291" height="180" style="width: 291px; height: 180px;"></canvas>
															<div class="inline pull-left legend-xs">
																<div id="chart2Legend" class="chart-legend"><ul class="tc-chart-js-legend"><li><span style="background-color:rgba(220,220,220,0.5)"></span>My First dataset</li><li><span style="background-color:rgba(151,187,205,0.5)"></span>My Second dataset</li></ul></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
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
                        
                        
                        <script>
  $(document).ready(function() {

    // page is now ready, initialize the calendar...

    $("#schedule_calendar").fullCalendar({
            header: {
                left: "prev,next",
                center: "title",
                right: "month,agendaWeek,agendaDay"
            },
            editable: 0,
            droppable: 0,
            events: [
					<?php 
					
                    $notices	=	$this->db->get('noticeboard')->result_array();
                    foreach($notices as $row):
                    ?>
					{
						title: "<?php echo $row['notice_title'];?>",
						start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),
						end:	new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>)  
            		},
					<?php
					endforeach;
					?>
					]
        })

});
  </script>
  