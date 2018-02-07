<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('report');?></h1>
									<span class="mainDescription"><?php echo get_phrase('manage_report');?> </span>
								</div>
								<div class="col-sm-5">
									<!-- start: MINI STATS WITH SPARKLINE -->
                                                                        
                                                                        <?php
                                                                  
                                                  $status =  $this->session->userdata('metoast');
                                                  
                                                  if($status == 'created')
                                                  {
                                                 echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('report_created').'</textarea>
                                                               <div id="toastTypeGroup" class="form-group">
                                                                     <input type="radio" checked value="success" name="toasts" id="typesuccess"></div>
                                                                    <div id="positionGroup" class="form-group">
                                                                  <input type="radio" checked value="toast-top-full-width" name="positions" id="typetfw">
								</div>
                                                                <input type="text" value="swing" class="form-control input-small" placeholder="swing, linear" id="showEasing">
								<input type="text" value="linear" class="form-control input-small" placeholder="swing, linear" id="hideEasing">
								<input type="text" value="fadeIn" class="form-control input-small" placeholder="show, fadeIn, slideDown" id="showMethod">
								<input type="text" value="fadeOut" class="form-control input-small" placeholder="hide, fadeOut, slideUp" id="hideMethod">
								<input type="text" value="1000" class="form-control input-small" placeholder="ms" id="showDuration">
								<input type="text" value="10000" class="form-control input-small" placeholder="ms" id="hideDuration">
								<input type="text" value="5000" class="form-control input-small" placeholder="ms" id="timeOut">
								<input type="text" value="3000" class="form-control input-small" placeholder="ms" id="extendedTimeOut">
                                                                    </div>';   
                                                  }
                                                  
                                                   else if( $status == 'deleted')
                                                  {
                                                    echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('report_deleted').'</textarea>
                                                               <div id="toastTypeGroup" class="form-group">
                                                                     <input type="radio" checked value="error" name="toasts" id="typeerror"></div>
                                                                    <div id="positionGroup" class="form-group">
                                                                  <input type="radio" checked value="toast-top-full-width" name="positions" id="typetfw">
								</div>
                                                                <input type="text" value="swing" class="form-control input-small" placeholder="swing, linear" id="showEasing">
								<input type="text" value="linear" class="form-control input-small" placeholder="swing, linear" id="hideEasing">
								<input type="text" value="fadeIn" class="form-control input-small" placeholder="show, fadeIn, slideDown" id="showMethod">
								<input type="text" value="fadeOut" class="form-control input-small" placeholder="hide, fadeOut, slideUp" id="hideMethod">
								<input type="text" value="1000" class="form-control input-small" placeholder="ms" id="showDuration">
								<input type="text" value="10000" class="form-control input-small" placeholder="ms" id="hideDuration">
								<input type="text" value="5000" class="form-control input-small" placeholder="ms" id="timeOut">
								<input type="text" value="3000" class="form-control input-small" placeholder="ms" id="extendedTimeOut">
                                                                    </div>';     
                                                  }
                                                   $this->session->unset_userdata('metoast');
                                                                      ?>
                                                                        
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
									<i class="fa fa-bars"></i> <?php echo get_phrase('operation');?>
												</a>
											</li>
										
                                        
											<li>
												<a href="#myTab1_example2" data-toggle="tab">
									<i class="fa fa-bars"></i> <?php echo get_phrase('birth');?>
												</a>
											</li>
                                            
                                            <li>
												<a href="#myTab1_example3" data-toggle="tab">
									<i class="fa fa-bars"></i> <?php echo get_phrase('death');?>
												</a>
											</li>
                                            
                                            <li>
												<a href="#myTab1_example4" data-toggle="tab">
									<i class="fa fa-bars"></i> <?php echo get_phrase('other');?>
												</a>
											</li>
                                             <li>
												<a href="#myTab1_example5" data-toggle="tab">
									<i class="fa fa-plus"></i> <?php echo get_phrase('add_report');?>
												</a>
											</li>
                                            
                                            
										
										</ul>
										<div class="tab-content">
                                        
					

                                            

                                        	<div class="tab-pane fade in active" id="myTab1_example1">
								<!-- start: DYNAMIC TABLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
										<thead>
												<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('patient (Patient_Number)');?></div></th>
                    		<th><div><?php echo get_phrase('doctor');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                   	<?php 
						$count = 1;
						$birth_reports	=	$this->db->get_where('report' , array('type'=>'operation'))->result_array();
						foreach($birth_reports as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php if($row['timestamp'] == ""){echo $row['timestamp'];}elseif($row['timestamp'] != ""){ echo $row['timestamp']." ".$row['realtime'];}?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name').' ('. $this->crud_model->get_type_client_number_by_id('patient',$row['patient_id'],'client_number').')';?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?doctor/manage_report/delete/<?php echo $row['report_id'];?>" onclick="return confirm('delete?')"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('delete');?>" class="btn btn-red">
                                		<i class="fa fa-trash"></i>
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
                                            
                                     <div class="tab-pane fade" id="myTab1_example2">
								<!-- start: DYNAMIC TABLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_3">
										<thead>
												<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('doctor');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                  <?php 
						$count = 1;
						$birth_reports	=	$this->db->get_where('report' , array('type'=>'birth'))->result_array();
						foreach($birth_reports as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php if($row['timestamp'] == ""){echo $row['timestamp'];}elseif($row['timestamp'] != ""){ echo $row['timestamp']." ".$row['realtime'];}?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?doctor/manage_report/delete/<?php echo $row['report_id'];?>" onclick="return confirm('delete?')"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('delete');?>" class="btn btn-red">
                                		<i class="fa fa-trash"></i>
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
								<!-- start: DYNAMIC TABLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_4">
										<thead>
										<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('doctor');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                 <?php 
						$count = 1;
						$birth_reports	=	$this->db->get_where('report' , array('type'=>'death'))->result_array();
						foreach($birth_reports as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php if($row['timestamp'] == ""){echo $row['timestamp'];}elseif($row['timestamp'] != ""){ echo $row['timestamp']." ".$row['realtime'];}?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?doctor/manage_report/delete/<?php echo $row['report_id'];?>" onclick="return confirm('delete?')"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('delete');?>" class="btn btn-red">
                                		<i class="icon-trash"></i>
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
                                            
                                            
                                            
                                             <div class="tab-pane fade" id="myTab1_example4">
								<!-- start: DYNAMIC TABLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_5">
										<thead>
										<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('description');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('doctor');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                  	<?php 
						$count = 1;
						$birth_reports	=	$this->db->get_where('report' , array('type'=>'other'))->result_array();
						foreach($birth_reports as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php if($row['timestamp'] == ""){echo $row['timestamp'];}elseif($row['timestamp'] != ""){ echo $row['timestamp']." ".$row['realtime'];}?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?doctor/manage_report/delete/<?php echo $row['report_id'];?>" onclick="return confirm('delete?')"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('delete');?>" class="btn btn-red">
                                		<i class="icon-trash"></i>
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
                                    
                                    
                                      <div class="tab-pane fade" id="myTab1_example5">
                                      <div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-12">
                                <div class="panel-body">
                                
                                <?php echo form_open('doctor/manage_report/create/' , array('role' =>'form','id'=>'form'));?>
										
                               <div class="row"> <div class="col-md-12">    <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('type');?> <span class="symbol required"></span>
													</label>
										<select name="type" class="js-example-basic-single js-states form-control" style="width:100%;">
                                        <option value="operation"><?php echo get_phrase('operation');?></option>
                                    	<option value="birth"><?php echo get_phrase('birth');?></option>
                                    	<option value="death"><?php echo get_phrase('death');?></option>
                                    	<option value="other"><?php echo get_phrase('other');?></option>
                                        </select>
                                        </div>
                                   </div>
                                        <div class="col-md-12">
                                                  <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('description');?> <span class="symbol required"></span>
													</label>
										<textarea class="ckeditor form-control" id="editor2" required="required" placeholder="<?php echo get_phrase('description');?>" name="description" cols="10" rows="10">
                                     
                                        </textarea>
											
                                        </div>
                                        </div>
                                   </div>
                                        
                                          <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('date');?> <span class="symbol required"></span>
													</label>
										<div class="row">
                                        <div class="col-md-6"><input type="text" autocomplete="off" class="form-control underline format-datepicker"  placeholder="<?php echo get_phrase('date'); ?>" name="timestamp" required="required">
                                        </div>
                                        <div class="col-md-6">
                                          <input type="text" name="time" class="timepicker-default form-control underline">
                                              
                                        </div>
												</div>
                                                </div>
                                   <div class="row"> <div class="col-md-6">
                                                
                                                <div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('doctor');?> <span class="symbol required"></span>
													</label>
                                      	
                                        <input type="text" readonly="readonly" autocomplete="off" class="form-control underline" value=" <?php echo $this->crud_model->get_type_name_by_id('doctor' ,$this->session->userdata('doctor_id') , 'name');?>"  required="required"/>
                                        <input type="hidden" name="doctor_id" value="<?php echo $this->session->userdata('doctor_id');?>"  />
                                
                                        
                                      
                                
												</div>
                                       </div>
                                      <div class="col-md-6">
												
                                                  <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('patient');?> <span class="symbol required"></span>
													</label>
										<select name="patient_id" class="js-example-basic-single js-states form-control" style="width:100%;">
                                        	<option value="">select</option>
										<?php 
										$patients	=	$this->db->get('patient')->result_array();
										foreach($patients as $row):
										?>
                                        	<option value="<?php echo $row['patient_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
										endforeach;
										?>
                                        </select>
                                        </div>
                                      </div>
                                   </div>
                                         <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('add_report');?></button>
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
                        
                 