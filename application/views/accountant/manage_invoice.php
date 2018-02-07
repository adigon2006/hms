<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('MANAGE_INVOICE');?></h1>
									<!--<span class="mainDescription"><?php echo get_phrase('overview and statistics')?> </span>-->
								</div>
								<div class="col-sm-5">
                                                                    
                                                                    <?php
                                                                  
                                                  $status =  $this->session->userdata('metoast');
                                                  
                                                  if($status == 'created')
                                                  {
                                                 echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('department_created').'</textarea>
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
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('department_updated').'</textarea>
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
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('department_deleted').'</textarea>
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
										<i class="fa fa-wrench"></i> <?php echo get_phrase('edit_invoice');?>
												</a>
											</li>
                                              <?php endif;?>
											<li class="<?php if(!isset($edit_profile))echo 'active';?>">
												<a href="#myTab1_example2" data-toggle="tab">
									<i class="fa fa-bars"></i> <?php echo get_phrase('invoice_list');?>
												</a>
											</li>
											<li>
												<a href="#myTab1_example3" data-toggle="tab">
											<i class="fa fa-plus"></i> <?php echo get_phrase('add_invoice');?>
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
                             
										<?php echo form_open('accountant/manage_invoice/edit/do_update/'.$row['invoice_id'] , array('role' =>'form'));?>
											<div class="row"> <div class="col-md-6"> <div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('patient (Patient_Number)');?> <span class="symbol required"></span>
													</label>
													<select class="js-example-basic-single js-states form-control" style="width:100%;" name="patient_id">
										<?php 
										$this->db->order_by('account_opening_timestamp' , 'asc');
										$patients	=	$this->db->get('patient')->result_array();
										foreach($patients as $row2):
										?>
                                        	<option value="<?php echo $row2['patient_id'];?>" <?php if($row2['patient_id']==$row['patient_id'])echo 'selected';?>>
												<?php echo $row2['name'].' ('.$row2['client_number'].')';?></option>
                                        <?php
										endforeach;
										?>
									</select>
                                    
                                    </div>
                                                                                            </div>
                                                                                            <div class="col-md-6">
												<div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('payment_type');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" value="<?php echo $row['title'];?>" class="form-control underline"  placeholder="<?php echo get_phrase('Enter_title'); ?>" name="title" required="required">
												</div>
                                                                                            </div>
                                                                                        </div>
                                                                                         <div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('amount');?> <span class="symbol required"></span>
													</label>
													<input type="text" value="<?php echo $row['amount'];?>" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('Enter_amount'); ?>" name="amount" required="required">
												</div>
                                                                                                <div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('description');?> <span class="symbol required"></span>
													</label>
													<textarea class="ckeditor form-control" id="editor2" required="required" placeholder="<?php echo get_phrase('description');?>" name="description" cols="10" rows="10">
                                        <?php echo $row['description'];?>
                                        </textarea>
                                                                                                
                                                                                                </div>
												<div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('status');?>
													</label>
                                                                                                    
                                        <select name="status" class="js-example-basic-single js-states form-control" style="width:100%;">
                                       		<option value="paid" <?php if($row['status']=='paid')echo 'selected';?>><?php echo get_phrase('paid');?></option>
                                       	<option value="unpaid" <?php if($row['status']=='unpaid')echo 'selected';?>><?php echo get_phrase('unpaid');?></option>
					
					</select>
													</div>
                                                <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('edit_invoice');?></button>
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
                    		<th><div><?php echo get_phrase('invoice_id');?></div></th>
                    		<th><div><?php echo get_phrase('title');?></div></th>
                    		<th><div><?php echo get_phrase('amount');?></div></th>
                    		<th><div><?php echo get_phrase('patient (Patient_Number)');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('status');?></div></th>
                    		<th><div><?php echo get_phrase('option');?></div></th>
						</tr>
										</thead>
                                      
										<tbody>
                                          <?php $count = 1;foreach($invoices as $row):?>
											<tr>
                            <td class="center"><?php echo $count++;?></td>
                            <td class="center"><?php echo $row['invoice_id'];?></td>
                            <td><?php echo $row['title'];?></td>
                            <td class="center"><?php echo $row['amount'];?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name').' ('. $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'client_number').')';?></td>
                            <td class="center"><?php echo date('d M,Y', $row['creation_timestamp']);?></td>
                            <td class="center">
                            	<?php if($row['status']=='paid'):?>
                            		<span class="label label-btn btn-success"><?php echo get_phrase('paid');?></span>
                                <?php endif;?>
                                <?php if($row['status']=='unpaid'):?>
                            		<span class="label label-btn btn-danger"><?php echo get_phrase('unpaid');?></span>
                                    
                                    <!-----take cash payment-->
                                    <?php echo form_open('accountant/take_cash_payment' , array(
										'onsubmit' => "return confirm('Confirm cash payment ? It will mark this invoice as paid')"));?>
                                        	<input name="payment_type" 	type="hidden" value="<?php echo $row['title'];?>" />
                                        	<input name="invoice_id"   	type="hidden" value="<?php echo $row['invoice_id'];?>" />
                                        	<input name="patient_id" 	type="hidden" value="<?php echo $row['patient_id'];?>" />
                                        	<input name="method" 		type="hidden" value="cash" />
                                        	<input name="description" 	type="hidden" value="<?php echo $row['description'];?>" />
                                        	<input name="amount" 		type="hidden" value="<?php echo $row['amount'];?>" />
                                    		<input name="" type="submit" value="<?php echo get_phrase('take_cash_payment');?>" class="btn btn-primary margin-top-5"/>
                                    <?php echo form_close();?>
                                    
                                <?php endif;?>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?accountant/manage_invoice/edit/<?php echo $row['invoice_id'];?>"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('edit');?>" class="btn btn-primary">
                                		<i class="fa fa-wrench"></i>
                                </a>
                            	<a href="<?php echo base_url();?>index.php?accountant/manage_invoice/delete/<?php echo $row['invoice_id'];?>" onclick="return confirm('delete?')"
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
										<?php echo form_open('accountant/manage_invoice/create' , array('role' =>'form','id'=>'form'));?>
                                   <div class="row"> <div class="col-md-6"> <div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('patient (Patient_Number)');?> <span class="symbol required"></span>
													</label>
													<select class="js-example-basic-single js-states form-control" style="width:100%;" name="patient_id">
										<?php 
										$this->db->order_by('account_opening_timestamp' , 'asc');
										$patients	=	$this->db->get('patient')->result_array();
										foreach($patients as $row):
										?>
                                        	<option value="<?php echo $row['patient_id'];?>"><?php echo $row['name'].'('.$row['client_number'].')';?></option>
                                        <?php
										endforeach;
										?>
									</select>
                                    
                                    </div>
                                       </div>
                                        <div class="col-md-6">
												<div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('payment_type');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('Enter_title'); ?>" name="title" required="required">
												</div>
                                        </div>
                                   </div>
                                                                                         <div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('amount');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('Enter_amount'); ?>" name="amount" required="required">
												</div>
                                                                                                <div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('description');?> <span class="symbol required"></span>
													</label>
													<textarea class="ckeditor form-control" id="editor2" required="required" placeholder="<?php echo get_phrase('description');?>" name="description" cols="10" rows="10">
                                        
                                        </textarea>
                                                                                                
                                                                                                </div>
												<div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('status');?>
													</label>
                                                                                                    
                                        <select name="status" class="js-example-basic-single js-states form-control" style="width:100%;">
                                       	<option value="unpaid"><?php echo get_phrase('unpaid');?></option>
                                       	<option value="paid"><?php echo get_phrase('paid');?></option>
					</select>
													</div>
                                                <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('add_invoice');?></button>
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
                        
                  