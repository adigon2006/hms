<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('manage_bed');?></h1>
									<span class="mainDescription"><?php echo get_phrase('view_bed_status');?> </span>
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
									<i class="fa fa-bars"></i> <?php echo get_phrase('view_bed_status');?>
												</a>
											</li>
										
										</ul>
										<div class="tab-content">
                                        
					

                                            

                                        	<div class="tab-pane fade in active" id="myTab1_example2">
								<!-- start: DYNAMIC TABLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
										<thead>
								<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('bed_id');?></div></th>
                    		<th><div><?php echo get_phrase('bed_type');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('allotment_time');?></div></th>
                    		<th><div><?php echo get_phrase('discharge_time');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                   <?php $count = 1;foreach($bed_allotments as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
							<td><?php echo $row['bed_id'];?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('bed' , 		$row['bed_id'] , 'type');?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient' , 	$row['patient_id'] , 'name');?></td>
							<td><?php if($row['allotment_timestamp'] == ""){echo $row['allotment_timestamp'];}elseif($row['allotment_timestamp'] != ""){ echo $row['allotment_timestamp']." ".$row['allotment_time'];}?></td>
							<td><?php if($row['discharge_timestamp'] == ""){echo $row['discharge_timestamp'];}elseif($row['discharge_timestamp'] != ""){ echo $row['discharge_timestamp']." ".$row['allotment_time'];}?></td>
                        </tr>
                        <?php endforeach;?>
										</tbody>
                                        
									</table>
								</div>
							</div>
						</div>
						<!-- end: DYNAMIC TABLE -->
											</div>
										
										</div>
									</div>
								
								</div>
							</div>
						</div>
                        
                        <!-- end of tabs -->
                        
                 