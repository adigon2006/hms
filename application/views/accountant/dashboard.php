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
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-alt fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('invoice/payment');?></h2>
											<!--<p class="text-small">
												To add users, you need to be signed in as the super user.
											</p>-->
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?accountant/manage_invoice">
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
											<h2 class="StepTitle"><?php echo get_phrase('view_payment');?></h2>
																						<p class="cl-effect-1">
												<a href ="<?php echo base_url();?>index.php?accountant/view_payment">
													view more
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"><?php echo get_phrase('email');?></h2>
											
											<p class="links cl-effect-1">
												<a href="<?php echo base_url();?>index.php?accountant/manage_email">
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
  