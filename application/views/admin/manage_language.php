<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('language');?></h1>
									<span class="mainDescription"><?php echo get_phrase('manage_language');?> </span>
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
												<a href="#myTab1_example1" data-toggle="tab">
										<i class="fa fa-bars"></i> <?php echo get_phrase('phrase_list');?>
												</a>
											</li>
											<li >
												<a href="#myTab1_example2" data-toggle="tab">
									<i class="fa fa-plus"></i> <?php echo get_phrase('add_phrase');?>
												</a>
											</li>
										<li>
												<a href="#myTab1_example3" data-toggle="tab">
											<i class="fa fa-plus"></i> <?php echo get_phrase('add_language');?>
												</a>
											</li>
										</ul>
										<div class="tab-content">
                                        
					               	<div class="tab-pane fade in active" id="myTab1_example1">
                                     <div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-6">
                                <div class="panel-body">
                                    
                                    
                                   <table cellpadding="0" cellspacing="0" border="0" class="table table-normal">
                	<thead>
                    	<tr>
                        	<th><?php echo get_phrase('language');?></th>
                        	<th><?php echo get_phrase('option');?></th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php
								$fields = $this->db->list_fields('language');
								foreach($fields as $field)
								{
									 if($field == 'phrase_id' || $field == 'phrase')continue;
									?>
                    	<tr>
                        	<td><?php echo ucwords($field);?></td>
                        	<td>
                            	<a href="<?php echo base_url();?>index.php?admin/manage_language/edit_phrase/<?php echo $field;?>"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('edit_phrase');?>" class="btn btn-primary">
                                		<i class="fa fa-wrench"></i>
                                </a>
                            	<a href="<?php echo base_url();?>index.php?admin/manage_language/delete_language/<?php echo $field;?>"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('delete_language');?>" class="btn btn-danger" onclick="return confirm('Delete Language ?');">
                                		<i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

                                    
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>

                                            

                                        	<div class="tab-pane fade in" id="myTab1_example2">
								<!-- start: DYNAMIC TABLE -->
					  	
                        <div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-6">
                                <div class="panel-body">
										<?php echo form_open('admin/manage_language/add_phrase/' , array('role' =>'form','id'=>'form'));?>
                                
                                
                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('phrase');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('phrase'); ?>" name="phrase" required="required">
												</div>
                                
                                    <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('add_phrase');?></button>
                                                </div>
											<?php echo form_close();?> 
								</div>
                                </div>
							</div>
						</div>
                        
                          
	
						<!-- end: DYNAMIC TABLE -->
											</div>
                                            
                                            <div class="tab-pane fade " id="myTab1_example3">
			
            <div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-6">
                                <div class="panel-body">
                              	<?php echo form_open('admin/manage_language/add_language/' , array('role' =>'form','id'=>'form'));?>
                                
                                
                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('language');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('language'); ?>" name="language" required="required">
												</div>
                                
                                    <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('add_language');?></button>
                                                </div>
											<?php echo form_close();?> 
                                
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                
                                <!-- -->
                                
										
										</div>
									</div>
								
								</div>
							</div>
						</div>
                        
                        <!-- end of tabs -->
                        
                 
                