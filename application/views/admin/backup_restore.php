<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('backup_&amp;_restore');?></h1>
									<span class="mainDescription"><?php echo get_phrase('backup_and_restore');?> </span>
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
										<i class="fa fa-database"></i> <?php echo get_phrase('backup');?>
												</a>
											</li>
											<li >
												<a href="#myTab1_example2" data-toggle="tab">
									<i class="fa fa-plus"></i> <?php echo get_phrase('restore');?>
												</a>
											</li>
										
										</ul>
										<div class="tab-content">
                                        
					               	<div class="tab-pane fade in active" id="myTab1_example1">
                                     <div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-6">
                                <div class="panel-body">
                                    
                                    
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-normal" >
                    <tbody>
                    	<?php 
						for($i = 1; $i<= 14; $i++):
						
							if($i	==	1)	$type	=	'doctor';
							else if($i	==	2)$type	=	'patient';
							else if($i	==	3)$type	=	'nurse';
							else if($i	==	4)$type	=	'pharmacist';
							else if($i	==	5)$type	=	'laboratorist';
							else if($i	==	6)$type	=	'accountant';
							else if($i	==	7)$type	=	'appointment';
							else if($i	==	8)$type	=	'payment';
							else if($i	==	9)$type	=	'blood_bank';
							else if($i	==	10)$type=	'medicine';
							else if($i	==	11)$type=	'report';
							else if($i	==	12)$type=	'noticeboard';
							else if($i	==	13)$type=	'language';
							else if($i	==	14)$type=	'all';
							?>
							<tr>
								<td><?php echo get_phrase($type);?></td>
								<td align="center">
									<a href="<?php echo base_url();?>index.php?admin/backup_restore/create/<?php echo $type;?>" 
										class="btn btn-primary" rel="tooltip" data-original-title="download backup"><i class="fa fa-download" ></i>
											</a>
									<a href="<?php echo base_url();?>index.php?admin/backup_restore/delete/<?php echo $type;?>" 
										class="btn btn-danger" rel="tooltip" data-original-title="delete data" onclick="return confirm('delete confirm?');"><i class="fa fa-trash"></i>
											</a>
								</td>
							</tr>
							<?php 
						endfor;
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
										<?php echo form_open('admin/backup_restore/restore' , array('enctype' => 'multipart/form-data'));?>
                    <input name="userfile" type="file" />
                    <br /><br />
                    <center><input type="submit" class="btn btn-primary" value="<?php echo get_phrase('upload_&_restore_from_backup');?>" /></center>
                    <br />
                <?php echo form_close();?> 
								</div>
                                </div>
							</div>
						</div>
                        
                          
	
						<!-- end: DYNAMIC TABLE -->
											</div>
                                            
                                            
                                <!-- -->
                                
										
										</div>
									</div>
								
								</div>
							</div>
						</div>
                        
                        <!-- end of tabs -->
                        
                 
                