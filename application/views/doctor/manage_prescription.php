<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('prescription');?></h1>
									<!--<span class="mainDescription"><?php echo get_phrase('manage_prescription')?> </span>-->
								</div>
								<div class="col-sm-5">
                                                                    
                                                                    <?php
                                                                  
                                                  $status =  $this->session->userdata('metoast');
                                                  
                                                  if($status == 'created')
                                                  {
                                                 echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('Prescription_created').'</textarea>
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
                                                  else if( $status == 'edited')
                                                  {
                                                    echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('Prescription_updated').'</textarea>
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
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('Prescription_deleted').'</textarea>
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
										<i class="fa fa-wrench"></i> <?php echo get_phrase('edit_prescription');?>
												</a>
											</li>
                                              <?php endif;?>
											<li class="<?php if(!isset($edit_profile))echo 'active';?>">
												<a href="#myTab1_example2" data-toggle="tab">
									<i class="fa fa-bars"></i> <?php echo get_phrase('prescription_list');?>
												</a>
											</li>
											<li>
												<a href="#myTab1_example3" data-toggle="tab">
											<i class="fa fa-plus"></i> <?php echo get_phrase('add_prescription');?>
												</a>
											</li>
										</ul>
										<div class="tab-content">
                                        
                                        <?php if(isset($edit_profile)):?>
					<div class="tab-pane fade in active" id="myTab1_example1"> 
                      <?php foreach($edit_profile as $row):?>
			<div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-12">
                                <div class="panel-body">
                            	<?php echo form_open('doctor/manage_prescription/edit/do_update/'.$row['prescription_id'] , array('role' =>'form','id'=>'form'));?>
										<div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('doctor');?> <span class="symbol required"></span>
													</label>
                                      <select name="doctor_id" class="js-example-basic-single js-states form-control" style="width:100%;">
                                        	<?php 
										$doctors	=	$this->db->get('doctor')->result_array();
										foreach($doctors as $row2):
										?>
                                        	<option value="<?php echo $row2['doctor_id'];?>" <?php if($row2['doctor_id'] == $row['doctor_id'])echo 'selected';?>>
												<?php echo $row2['name'];?>
                                            </option>
                                        <?php
										endforeach;
										?>
                                        </select>
												</div>
                                               
                                               
                                                    <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('patient');?> <span class="symbol required"></span>
													</label>
										<select name="patient_id" class="js-example-basic-single js-states form-control" style="width:100%;">
                                        <?php 
										$this->db->order_by('account_opening_timestamp' , 'asc');
										$patients	=	$this->db->get('patient')->result_array();
										foreach($patients as $row2):
										?>
                                        	<option value="<?php echo $row2['patient_id'];?>" <?php if($row2['patient_id'] == $row['patient_id'])echo 'selected';?>>
												<?php echo $row2['name'];?>
                                            </option>
                                        <?php
										endforeach;
										?>
                                        </select>
                                        </div>
                                      
                                                
                                                       <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('case_history');?> <span class="symbol required"></span>
													</label>
										<textarea class="ckeditor form-control" id="editor2" required="required" placeholder="<?php echo get_phrase('add_description');?>" name="case_history" cols="10" rows="10">
                                        <?php echo $row['case_history'];?>
                                        </textarea>
											
                                        </div>
                                      
                                        
                                                       <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('medication');?> <span class="symbol required"></span>
													</label>
										<textarea class="ckeditor form-control" id="editor2" required="required" placeholder="<?php echo get_phrase('add_description');?>" name="medication" cols="10" rows="10">
                                        <?php echo $row['medication'];?>
                                        </textarea>
											
                                        </div>
                                       
                                       
                                                       <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('medication_from_pharmacist');?> <span class="symbol required"></span>
													</label>
										<textarea class="ckeditor form-control" id="editor2" required="required" placeholder="<?php echo get_phrase('add_description');?>" name="medication_from_pharmacist" cols="10" rows="10">
                                    <?php echo $row['medication_from_pharmacist'];?>    
                                        </textarea>
											
                                        </div>
                                        
                                        
                                                       <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('description');?> <span class="symbol required"></span>
													</label>
										<textarea class="ckeditor form-control" id="editor2" required="required" placeholder="<?php echo get_phrase('add_description');?>" name="description" cols="10" rows="10">
                                        <?php echo $row['description'];?>
                                        </textarea>
											
                                        </div>
                                        
                                        
											
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('date');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline format-datepicker"  placeholder="<?php echo get_phrase('date'); ?>" name="creation_timestamp" value="<?php echo date('m/d/Y', $row['creation_timestamp']);?>" required="required">
												</div>
                                                
                                                <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('edit_prescription');?></button>
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
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('patient (Patient_Number)');?></div></th>
                    		<th><div><?php echo get_phrase('doctor');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                              	<?php $count = 1;foreach($prescriptions as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo date('d M,Y', $row['creation_timestamp']);?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name').' ('. $this->crud_model->get_type_client_number_by_id('patient',$row['patient_id'],'client_number').')';?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?doctor/manage_prescription/edit/<?php echo $row['prescription_id'];?>"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('edit');?>" class="btn btn-primary">
                                		<i class="fa fa-wrench"></i>
                                </a>
                            	<a href="<?php echo base_url();?>index.php?doctor/manage_prescription/delete/<?php echo $row['prescription_id'];?>" onclick="return confirm('delete?')"
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
										<div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-12">
                                <div class="panel-body">
										<?php echo form_open('doctor/manage_prescription/create/' , array('role' =>'form','id'=>'form'));?>
										<div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('doctor');?> <span class="symbol required"></span>
													</label>
                                      <select name="doctor_id" class="js-example-basic-single js-states form-control" style="width:100%;">
                                        	<?php 
										$doctors	=	$this->db->get('doctor')->result_array();
										foreach($doctors as $row):
										?>
                                        	<option value="<?php echo $row['doctor_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
										endforeach;
										?>
                                        </select>
												</div>
                                               
                                               
                                                    <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('patient');?> <span class="symbol required"></span>
													</label>
										<select name="patient_id" class="js-example-basic-single js-states form-control" style="width:100%;">
                                        	<?php 
										$this->db->order_by('account_opening_timestamp' , 'asc');
										$patients	=	$this->db->get('patient')->result_array();
										foreach($patients as $row):
										?>
                                        	<option value="<?php echo $row['patient_id'];?>"><?php echo $row['name'];?></option>
                                        <?php
										endforeach;
										?>
                                        </select>
                                        </div>
                                      
                                                
                                                       <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('case_history');?> <span class="symbol required"></span>
													</label>
										<textarea class="ckeditor form-control" id="editor2" required="required" placeholder="<?php echo get_phrase('add_description');?>" name="case_history" cols="10" rows="10">
                                        
                                        </textarea>
											
                                        </div>
                                      
                                        
                                                       <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('medication');?> <span class="symbol required"></span>
													</label>
										<textarea class="ckeditor form-control" id="editor2" required="required" placeholder="<?php echo get_phrase('add_description');?>" name="medication" cols="10" rows="10">
                                        
                                        </textarea>
											
                                        </div>
                                       
                                       
                                                       <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('medication_from_pharmacist');?> <span class="symbol required"></span>
													</label>
										<textarea class="ckeditor form-control" id="editor2" required="required" placeholder="<?php echo get_phrase('add_description');?>" name="medication_from_pharmacist" cols="10" rows="10">
                                        
                                        </textarea>
											
                                        </div>
                                        
                                        
                                                       <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('description');?> <span class="symbol required"></span>
													</label>
										<textarea class="ckeditor form-control" id="editor2" required="required" placeholder="<?php echo get_phrase('add_description');?>" name="description" cols="10" rows="10">
                                        
                                        </textarea>
											
                                        </div>
                                        
                                        
											
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('date');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline format-datepicker"  placeholder="<?php echo get_phrase('date'); ?>" name="creation_timestamp" required="required">
												</div>
                                                
                                                <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('add_prescription');?></button>
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
                        
                  