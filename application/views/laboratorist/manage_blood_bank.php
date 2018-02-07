<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('MANAGE_BLOOD_BANK');?></h1>
									<!--<span class="mainDescription"><?php echo get_phrase('overview and statistics')?> </span>-->
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
                                        <?php if(isset($edit_profile)):?>
											<li class="active">
												<a href="#myTab1_example1" data-toggle="tab">
										<i class="fa fa-wrench"></i> <?php echo get_phrase('edit_blood_bank');?>
												</a>
											</li>
                                              <?php endif;?>
											<li class="<?php if(!isset($edit_profile))echo 'active';?>">
												<a href="#myTab1_example2" data-toggle="tab">
									<i class="fa fa-bars"></i> <?php echo get_phrase('blood_bank_list');?>
												</a>
											</li>
<!--											<li>
												<a href="#myTab1_example3" data-toggle="tab">
											<i class="fa fa-plus"></i> <?php echo get_phrase('add_department');?>
												</a>
											</li>-->
										</ul>
										<div class="tab-content">
                                        
                                        <?php if(isset($edit_profile)):?>
					<div class="tab-pane fade in active" id="myTab1_example1"> 
                      <?php foreach($edit_profile as $row):?>
			<div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-6">
                                <div class="panel-body">
                             
										<?php echo form_open('laboratorist/manage_blood_bank/edit/do_update/'.$row['blood_group_id'] , array('role' =>'form'));?>
												<div class="form-group">
							<label class="control-label" for="exampleInputEmail1">
						<?php echo $row['blood_group'];?>
													</label>
				<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('Status'); ?>" name="status" value="<?php echo $row['status'];?>" required="required">
												</div>
												
                                                <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('edit_blood_bank');?></button>
                                                </div>
											<?php echo form_close();?> 
                                           
										</div>
                                </div>
                                </div>
                                </div>
                                 <?php endforeach;?>
								
									
											</div>
                                            <?php endif;?>
                                        
                          	<div class="tab-pane fade <?php if(!isset($edit_profile))echo 'in active';?>" id="myTab1_example2">
								<!-- start: DYNAMIC TABLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
										<thead>
											<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('blood_group');?></div></th>
                    		<th><div><?php echo get_phrase('status');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                                          <?php $count = 1;foreach($blood_bank as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
							<td><?php echo $row['blood_group'];?></td>
							<td><?php echo $row['status'];?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?laboratorist/manage_blood_bank/edit/<?php echo $row['blood_group_id'];?>"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('edit');?>" class="btn btn-primary">
                                		<i class="fa fa-wrench"></i>
                                </a>
        					</td>
                        </tr>
                        <?php endforeach;?>
										</tbody>
                                        
									</table>
								</div>
							</div>
						</div>
						<!-- end: DYNAMIC TABLE -->
											</div>
											<div class="tab-pane fade" id="myTab1_example3">
										<div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-6">
                                <div class="panel-body">
										<?php echo form_open('admin/manage_department/create' , array('role' =>'form','id'=>'form'));?>
												<div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('department_name');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('Enter_department'); ?>" name="name" required="required">
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('department_description');?>
													</label>
													<input type="text" name="description" autocomplete="off" class="form-control underline" id="exampleInputPassword1" placeholder="<?php echo get_phrase('Enter_description');?>">
												</div>
                                                <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('add_department');?></button>
                                                </div>
											<?php echo form_close();?> 
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
                        
                        <!-- end of tabs -->
                        
                  