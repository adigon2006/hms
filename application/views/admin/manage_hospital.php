<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('manage_hospital');?></h1>
									<span class="mainDescription"><?php echo get_phrase('manage_all_hospital')?> </span>
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
								<div class="col-sm-3">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-tint fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('blood_bank');?></h2>
											
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/view_blood_bank">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-medkit fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('medicine');?></h2>
																						<p class="cl-effect-1">
												<a href ="<?php echo base_url();?>index.php?admin/view_medicine">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-bars fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('operation');?></h2>
											
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/view_report/operation">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
                                <div class="col-sm-3">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-child fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('birth_report');?></h2>
											
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/view_report/birth">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col-sm-3">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-user-times fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('death_report');?></h2>
											
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/view_report/death">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-bed fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('bed_allotment');?></h2>
																						<p class="cl-effect-1">
												<a href ="<?php echo base_url();?>index.php?admin/view_bed_status">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-money fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('payment');?></h2>
											
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/view_payment">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
                                <div class="col-sm-3">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-exchange fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('appointment');?></h2>
											
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/view_appointment">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col-sm-3">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-globe fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('language');?></h2>
											
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/manage_language">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-download fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('backup');?></h2>
																						<p class="cl-effect-1">
												<a href ="<?php echo base_url();?>index.php?admin/backup_restore">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-lock fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('profile');?></h2>
											
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/manage_profile">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
                                <div class="col-sm-3">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-sitemap fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('department');?></h2>
											
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?admin/manage_department">
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
  