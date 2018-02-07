<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('add_diagnosis_report');?></h1>
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
										<i class="fa fa-wrench"></i> <?php echo get_phrase('edit_prescription');?>
												</a>
											</li>
                                              <?php endif;?>
											<li class="<?php if(!isset($edit_profile))echo 'active';?>">
												<a href="#myTab1_example2" data-toggle="tab">
									<i class="fa fa-bars"></i> <?php echo get_phrase('prescription_list');?>
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
                     
			<div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-12">
                                <div class="panel-body">
                             <?php 
					foreach($edit_profile as $row):
					$prescription_id	=	$row['prescription_id'];
					?>
                    <?php echo form_open('laboratorist/manage_prescription/edit/do_update/'.$row['prescription_id'] , array('class' => 'form-horizontal validatable'));?>
                      		<div class="form-group">
							<label class="control-label" for="exampleInputEmail1">
						<?php echo get_phrase('doctor');?> </label> 
                                         <div class="form-control">                                                                
				<?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?>
                                         </div>                                                                  
                        
                                </div>
                                   
                                    
                                      <div class="form-group">
							<label class="control-label" for="exampleInputEmail1">
						<?php echo get_phrase('patient (Patient_Number)');?> </label>
                                        <div class="form-control">
                                       <?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name').' ('.$this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'client_number').')';?>     
                                        </div>
                                                                                                    
                        
                                </div>
                                     <div class="form-group">
							<label class="control-label" for="exampleInputEmail1">
						<?php echo get_phrase('case_history');?> </label>
                                        <div class="form-control">
                                   <?php echo $row['case_history'];?>  
                                        </div>
                                                                                                    
                        
                                </div>
                                       <div class="form-group">
							<label class="control-label" for="exampleInputEmail1">
						<?php echo get_phrase('medication');?> </label>
                                        <div class="form-control">
                                     <?php echo $row['medication'];?> 
                                        </div>
                                                                                                    
                        
                                </div>
					  <div class="form-group">
							<label class="control-label" for="exampleInputEmail1">
						<?php echo get_phrase('medication_from_pharmacist');?> </label>
                                        <div class="form-control">
                                     <?php echo $row['medication_from_pharmacist'];?> 
                                        </div>
                                                                                                    
                        
                                </div>
                                      <div class="form-group">
							<label class="control-label" for="exampleInputEmail1">
						<?php echo get_phrase('description');?> </label>
                                        <div class="form-control">
                                     <?php echo $row['description'];?> 
                                        </div>
                                                                                                    
                        
                                </div>
					   <div class="form-group">
							<label class="control-label" for="exampleInputEmail1">
						<?php echo get_phrase('date');?> </label>
                                        <div class="form-control">
                                    <?php echo date('m/d/Y', $row['creation_timestamp']);?>
                                        </div>
                                                                                                    
                        
                                </div>							
                                                
											<?php echo form_close();?> 
                                           
										</div>
                                            <div class="form-group">
							<h4 class="control-label" for="exampleInputEmail1">
						<?php echo get_phrase('diagnosis_report');?> </h4>
                                                
                                            </div>
                                                                    
                                                                    
                                                             <table class="table table-striped table-bordered table-hover table-full-width" id="sample_3">
										<thead>
										<tr>
                                    <td><div>#</div></th>
                                    <td><div><?php echo get_phrase('report_type');?></div></td>
                                    <td><div><?php echo get_phrase('document_type');?></div></td>
                                    <td><div><?php echo get_phrase('download');?></div></td>
                                    <td><div><?php echo get_phrase('description');?></div></td>
                                    <td><div><?php echo get_phrase('date');?></div></td>
                                    <td><div><?php echo get_phrase('laboratorist');?></div></td>
                                    <td><div><?php echo get_phrase('option');?></div></td>
                                </tr>
										</thead>
                                      
										<tbody>
                                     <?php 
                                $count = 1;
                                $diagnostic_reports	=	$this->db->get_where('diagnosis_report' , array('prescription_id' => $prescription_id))->result_array();
                                foreach($diagnostic_reports as $row2):?>
                                <tr>
                                    <td><?php echo $count++;?></td>
                                    <td><?php echo $row2['report_type'];?></td>
                                    <td><?php echo $row2['document_type'];?></td>
                                    <td style="text-align:center;">
                                    	<?php if($row2['document_type'] == 'image'):?>
                                        <div id="thumbs">
  						<a href="<?php echo base_url();?>uploads/diagnosis_report/<?php echo $row2['file_name'];?>" 
                                            	style="background-image:url(<?php echo base_url();?>uploads/diagnosis_report/<?php echo $row2['file_name'];?>)" title="<?php echo $row2['file_name'];?>">
                                                	</a></div>
 										<?php endif;?>
                                                    
										<a href="<?php echo base_url();?>uploads/diagnosis_report/<?php echo $row2['file_name'];?>" target="_blank"
                                        	class="btn btn-primary">	<i class="icon-download-alt"></i> <?php echo get_phrase('download');?></a>
                                    </td>
                                    <td><?php echo $row2['description'];?></td>
                                    <td><?php echo date('d M,Y', $row2['timestamp']);?></td>
                                    <td><?php echo $this->crud_model->get_type_name_by_id('laboratorist',$row2['laboratorist_id'],'name');?></td>
                                    <td align="center">
   										<a href="<?php echo base_url();?>index.php?laboratorist/manage_prescription/delete_diagnosis_report/<?php echo $row2['diagnosis_report_id'];?>/<?php echo $prescription_id;?>" onclick="return confirm('delete?')"
                                			rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('delete');?>" class="btn btn-red">
                                				<i class="fa fa-trash"></i>
                                					</a>
                                    </td>
                                </tr>
										 <?php endforeach;?>
										</tbody>
                                        
									</table> 
                                                                   
                                                                    <br/>
                                                                    <div class="form-group">
													<h4 for="exampleInputPassword1">
														<?php echo get_phrase('add_diagnosis_report');?>
													</h4>
                                                                        
                                                                    </div>
                                                  <?php echo form_open_multipart('laboratorist/manage_prescription/create_diagnosis_report' );?>
                        
                                                                    <div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('report_type');?>
													</label>
													<input type="text" name="report_type" autocomplete="off" class="form-control underline" placeholder="<?php echo get_phrase("report_type");?>">
												</div>
                                                                    <div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('document_type');?>
													</label>
                                                                        <select name="document_type" class="js-example-basic-single js-states form-control" style="width:100%;">
                                                                            
                                                                            <option value="image"><?php echo get_phrase('image');?></option>
                                            <option value="doc"	><?php echo get_phrase('doc');?></option>
                                            <option value="pdf"><?php echo get_phrase('pdf');?></option>
                                            <option value="excel"><?php echo get_phrase('excel');?></option>
                                            <option value="other"><?php echo get_phrase('other');?></option>
                                     
                                                                        </select>					
                                                                    </div>
                                                                    <div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('upload_document');?>
													</label>
													 <input type="file" name="userfile" class="form-control" />	
                                                                    </div>
                                                                     <div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('description');?>
													</label>
													<textarea class="ckeditor form-control" id="editor2" required="required" placeholder="<?php echo get_phrase('add_description');?>" name="description" cols="10" rows="10">
                                        
                                        </textarea>	</div>
                                                                    
                                                                    <div class="form-group"> 
                                                                        <input type="hidden" name="prescription_id" value="<?php echo $prescription_id;?>" />
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('add_diagnosis_report');?></button>
                                                </div>
                                                                    <?php echo form_close();?> 
                                                                    
                                   <?php endforeach;?>                                 
                                </div>
                                </div>
                                </div>
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
                    		<th><div><?php echo get_phrase('report_status');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                                         <?php $count = 1;foreach($prescriptions as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php echo date('d M,Y', $row['creation_timestamp']);?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name').' ('.$this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'client_number').')';?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'],'name');?></td>
							<td><span class="label label-btn btn-primary">0 report</span></td>
							<td align="center">
                            	
                            	<a href="<?php echo base_url();?>index.php?laboratorist/manage_prescription/edit/<?php echo $row['prescription_id'];?>"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('edit');?>" class="btn btn-primary">
                                		<i class="fa fa-wrench"></i> <?php echo get_phrase('add_diagnostic_report');?>
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
                                                                        </div>
										</div>
									</div>
								
								</div>
							</div>
						</div>
                        
                        <!-- end of tabs -->
                        
                  