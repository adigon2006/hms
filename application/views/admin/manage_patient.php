<?php
function generateuniqueID()
{
$s = 'P';
$s .= substr(number_format(time() * rand(),0,'',''),0,6);
return $s;	
}
?>
<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('PATIENT');?></h1>
									<span class="mainDescription"><?php echo get_phrase('manage_patient');?> </span>
								</div>
								<div class="col-sm-5">
									<!-- start: MINI STATS WITH SPARKLINE -->
                                                                        
                                                                        <?php
                                                                  
                                                  $status =  $this->session->userdata('metoast');
                                                          if($status == 'created')
                                                  {
                                                 echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('patient_created').'</textarea>
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
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('patient_updated').'</textarea>
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
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('patient_deleted').'</textarea>
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
                                        <?php if(isset($edit_profile)):?>
											<li class="active">
												<a href="#myTab1_example1" data-toggle="tab">
										<i class="fa fa-wrench"></i> <?php echo get_phrase('edit_patient');?>
												</a>
											</li>
                                              <?php endif;?>
											<li class="<?php if(!isset($edit_profile))echo 'active';?>">
												<a href="#myTab1_example2" data-toggle="tab">
									<i class="fa fa-bars"></i> <?php echo get_phrase('patient_list');?>
												</a>
											</li>
											<li>
												<a href="<?php echo base_url();?>index.php?admin/add_new_patient" >
											<i class="fa fa-plus"></i> <?php echo get_phrase('add_patient');?>
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
                                
	<?php echo form_open('admin/manage_patient/edit/do_update/'.$row['patient_id'] , array('role' =>'form','id'=>'form'));?>
                                        <h4><?php echo get_phrase('personal_information');?></h4>
                                        <div class="row"> <div class="col-md-6"><div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('Title');?> <span class="symbol required"></span>
													</label>
										<select name="title" class="js-example-basic-single js-states form-control" style="width:100%;">
                                    	<option value="Mr" <?php if($row['title']=='Mr')echo 'selected';?>><?php echo get_phrase('Mr');?></option>
                                    	<option value="Mrs" <?php if($row['title']=='Mrs')echo 'selected';?>><?php echo get_phrase('Mrs');?></option>
                                        <option value="Ms" <?php if($row['title']=='Ms')echo 'selected';?>><?php echo get_phrase('Ms');?></option>
                                        
                                        </select>
												</div>
                                            </div>
                                             <div class="col-md-6">
												<div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('name');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('name'); ?>" name="name" required="required" value="<?php echo $row['name'];?>">
												</div>
                                             </div>
                                        </div>
                                        <div class="row"> <div class="col-md-6">
                                                <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('email');?> <span class="symbol required"></span>
													</label>
													<input type="email" value="<?php echo $row['email'];?>" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('email'); ?>" name="email" required="required">
												</div>
                                            </div>
                                           <div class="col-md-6">
                                                  <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('password');?> <span class="symbol required"></span>
													</label>
													<input type="password" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('password'); ?>" name="password" required="required" value="<?php echo $row['password'];?>">
												</div>
                                           </div>
                                        </div>
                                        <div class="row"> <div class="col-md-6">
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('home_address');?><span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('home_address');?>" name="address" value="<?php echo $row['address'];?>" required="required">
												</div>
                                            </div>
                                           <div class="col-md-6">
                                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('office_address');?><span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('office_address');?>" name="address2" required="required" value="<?php echo $row['office_address'];?>">
												</div>
                                           </div>
                                        </div>
                                        <div class="row"> <div class="col-md-6">
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('phone');?> <span class="symbol required"></span>
													</label>
													<input type="text" value="<?php echo $row['phone'];?>" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('phone'); ?>" name="phone" required="required">
												</div>
                                            </div>
                                             <div class="col-md-6">
                                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('client_number');?> 
													</label>
													<input type="text" readonly="readonly" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('client_number'); ?>" name="clientno" value="<?php echo $row['client_number'];?>">
												</div>
                                             </div>
                                        </div>
                                        <div class="row"> <div class="col-md-6">
                                                     <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('religion');?> <span class="symbol required"></span>
													</label>
										<select name="religion" class="js-example-basic-single js-states form-control" style="width:100%;">
                                    	<option value="Christian" <?php if($row['religion']=='Christian')echo 'selected';?>><?php echo get_phrase('Christian');?></option>
                                    	<option value="female" <?php if($row['religion']=='Muslim')echo 'selected';?>><?php echo get_phrase('Muslim');?></option>
                                             	<option value="Others" <?php if($row['religion']=='Others')echo 'selected';?>><?php echo get_phrase('Others');?></option>  </select>
												</div>
                                            </div>
                                                 <div class="col-md-6">
                                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('sex');?> <span class="symbol required"></span>
													</label>
										<select name="sex" class="js-example-basic-single js-states form-control" style="width:100%;">
                                    		<option value="male" <?php if($row['sex']=='male')echo 'selected';?>><?php echo get_phrase('male');?></option>
                                    	<option value="female" <?php if($row['sex']=='female')echo 'selected';?>><?php echo get_phrase('female');?></option>    </select>
												</div>
                                                 </div>
                                        </div>
                                        <div class="row"> <div class="col-md-6">
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('birth_date');?> <span class="symbol required"></span>
													</label>
													<input type="text" value="<?php echo $row['birth_date'];?>" autocomplete="off" class="form-control underline format-datepicker"  placeholder="<?php echo get_phrase('birth_date'); ?>" name="birth_date" required="required">
												</div>
                                            </div>
                                             <div class="col-md-6">
                                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('age');?> <span class="symbol required"></span>
													</label>
													<input type="number" value="<?php echo $row['age'];?>" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('age'); ?>" name="age" required="required">
												</div>
                                             </div>
                                        </div>
                                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('blood_group');?> <span class="symbol required"></span>
													</label>
										<select name="blood_group" class="js-example-basic-single js-states form-control" style="width:100%;">
                                    	<option value="A+" <?php if($row['blood_group']=='A+')echo 'selected';?>>A+</option>
                                        <option value="A-" <?php if($row['blood_group']=='A-')echo 'selected';?>>A-</option>
                                        <option value="B+" <?php if($row['blood_group']=='B+')echo 'selected';?>>B+</option>
                                        <option value="B-" <?php if($row['blood_group']=='B-')echo 'selected';?>>B-</option>
                                        <option value="AB+" <?php if($row['blood_group']=='AB+')echo 'selected';?>>AB+</option>
                                        <option value="AB-" <?php if($row['blood_group']=='AB-')echo 'selected';?>>AB-</option>
                                        <option value="O+" <?php if($row['blood_group']=='O+')echo 'selected';?>>O+</option>
                                        <option value="O-" <?php if($row['blood_group']=='O-')echo 'selected';?>>O-</option>
                                        </select>
												</div>
                                                <h4>Insurance Information</h4>
                                                <div class="row"> <div class="col-md-6">
                                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('name_of_insurance');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline" value="<?php echo $row['name_of_insurance'] ?>"  placeholder="<?php echo get_phrase('name_of_insurance'); ?>" name="noi" required="required">
												</div>
                                                    </div>
                                                     <div class="col-md-6">
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('insurance_number');?> <span class="symbol required"></span>
													</label>
													<input type="text" value="<?php echo $row['insurance_number'] ?>" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('insurance_number'); ?>" name="insurancenumber" required="required">
												</div>
                                                     </div>
                                                </div>
                                                <div class="row"> <div class="col-md-6">
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('policy_holder\'s_name');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" value="<?php echo $row['policy_holder_name'] ?>" class="form-control underline"  placeholder="<?php echo get_phrase('policy_holder\'s_name'); ?>" name="phn" required="required">
												</div>
                                                    </div>
                                                  <div class="col-md-6">
                                                  <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('policy_holder\'s_date_of_birth');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline format-datepicker"  placeholder="<?php echo get_phrase('policy_holder\'s_date_of_birth'); ?>" name="phdob" value="<?php echo $row['holder_dob'] ?>" required="required">
												</div>
                                                  </div>
                                                </div>
                                                <h4>Next of Kin/Contact Person</h4>
                                                <div class="row"> <div class="col-md-6">
                                              <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('name_of_next_of_kin');?>
													</label>
													<input type="text" name="nonok" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('name_of_next_of_kin');?>" value="<?php echo $row['nok_name'] ?>">
												</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                 <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('relationship');?>
													</label>
													<input type="text" name="relationship" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('relationship');?>" value="<?php echo $row['relationship'] ?>">
												</div>
                                                    </div>
                                                </div>
                                                <div class="row"> <div class="col-md-6">
                                                  <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('phone_number');?>
													</label>
		<input type="text" name="nokphoneno" autocomplete="off" value="<?php echo $row['nok_phone_no'] ?>" class="form-control underline"  placeholder="<?php echo get_phrase('phone_number');?>">
												</div>
                                                    </div>
                                                     <div class="col-md-6">
                                                  <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('email');?> <span class="symbol required"></span>
													</label>
													<input type="email" value="<?php echo $row['nok_email'] ?>" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('email'); ?>" name="nokemail" required="required">
												</div>
                                                     </div>
                                                </div>
                                                   <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('home_address');?><span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" value="<?php echo $row['nok_home_address'] ?>" class="form-control underline"  placeholder="<?php echo get_phrase('home_address');?>" name="nokhomeaddress" required="required">
												</div>
                                                <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('edit_patient');?></button>
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
                    		<th><div><?php echo get_phrase('patient_name')." (Patient Number) ";?></div></th>
                    		<th><div><?php echo get_phrase('age');?></div></th>
                    		<th><div><?php echo get_phrase('sex');?></div></th>
                    		<th><div><?php echo get_phrase('blood_group');?></div></th>
                    		<th><div><?php echo get_phrase('birth_date');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
												
											</tr>
										</thead>
                                      
										<tbody>
                    <?php $count = 1;foreach($patients as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
							<td><?php echo $row['title']." ".$row['name']." (".$row['client_number'].")";?></td>
							<td><?php echo $row['age'];?></td>
							<td><?php echo $row['sex'];?></td>
							<td><?php echo $row['blood_group'];?></td>
							<td><?php echo $row['birth_date'];?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?admin/manage_patient/edit/<?php echo $row['patient_id'];?>"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('edit');?>" class="btn btn-primary">
                                		<i class="fa fa-wrench"></i>
                                </a>
                                                            <a href="<?php echo base_url();?>index.php?admin/view_patient_profile/view/<?php echo $row['patient_id'];?>"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('view');?>" class="btn btn-primary">
                                		<i class="fa fa-eye"></i>
                                </a>
                            	<a href="<?php echo base_url();?>index.php?admin/manage_patient/delete/<?php echo $row['patient_id'];?>" onclick="return confirm('delete?')"
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
								<div class="col-md-6">
                                <div class="panel-body">
										<?php echo form_open('admin/manage_patient/create/' , array('role' =>'form','id'=>'form'));?>
                                        <h4><?php echo get_phrase('personal_information');?></h4>
                                           <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('Title');?> <span class="symbol required"></span>
													</label>
										<select name="title" class="js-example-basic-single js-states form-control" style="width:100%;">
                                    	<option value="Mr"><?php echo get_phrase('Mr');?></option>
                                    	<option value="Mrs"><?php echo get_phrase('Mrs');?></option>
                                        <option value="Ms"><?php echo get_phrase('Ms');?></option>
                                        
                                        </select>
												</div>
												<div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('name');?> <span class="symbol required"></span>
													</label>
				<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('name'); ?>" name="name" required="required">
												</div>
                                                <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('email');?> <span class="symbol required"></span>
													</label>
													<input type="email" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('email'); ?>" name="email" required="required">
												</div>
                                                  <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('password');?> <span class="symbol required"></span>
													</label>
													<input type="password" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('password'); ?>" name="password" required="required">
												</div>
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('home_address');?><span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('home_address');?>" name="address" required="required">
												</div>
                                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('office_address');?><span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('office_address');?>" name="address2" required="required">
												</div>
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('phone');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('phone'); ?>" name="phone" required="required">
												</div>
                                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('client_number');?> 
													</label>
													<input type="text" readonly="readonly" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('client_number'); ?>" name="clientno" value="<?=generateuniqueID(); ?>">
												</div>
                                                     <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('religion');?> <span class="symbol required"></span>
													</label>
										<select name="religion" class="js-example-basic-single js-states form-control" style="width:100%;">
                                    	<option value="Christian"><?php echo get_phrase('Christian');?></option>
                                    	<option value="Muslim"><?php echo get_phrase('Muslim');?></option>
                                        <option value="Others"><?php echo get_phrase('Others');?></option>
                                        </select>
												</div>
                                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('sex');?> <span class="symbol required"></span>
													</label>
										<select name="sex" class="js-example-basic-single js-states form-control" style="width:100%;">
                                    	<option value="male"><?php echo get_phrase('male');?></option>
                                    	<option value="female"><?php echo get_phrase('female');?></option>
                                        </select>
												</div>
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('birth_date');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline format-datepicker"  placeholder="<?php echo get_phrase('birth_date'); ?>" name="birth_date" required="required">
												</div>
                                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('age');?> <span class="symbol required"></span>
													</label>
													<input type="number" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('age'); ?>" name="age" required="required">
												</div>
                                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('blood_group');?> <span class="symbol required"></span>
													</label>
										<select name="blood_group" class="js-example-basic-single js-states form-control" style="width:100%;">
                                    		<option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        </select>
												</div>
                                                <h4>Insurance Information</h4>
                                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('name_of_insurance');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('name_of_insurance'); ?>" name="noi" required="required">
												</div>
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('insurance_number');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('insurance_number'); ?>" name="insurancenumber" required="required">
												</div>
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('policy_holder\'s_name');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('policy_holder\'s_name'); ?>" name="phn" required="required">
												</div>
                                                  <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('policy_holder\'s_date_of_birth');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline format-datepicker"  placeholder="<?php echo get_phrase('policy_holder\'s_date_of_birth'); ?>" name="phdob" required="required">
												</div>
                                                <h4>Next of Kin/Contact Person</h4>
                                              <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('name_of_next_of_kin');?>
													</label>
													<input type="text" name="nonok" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('name_of_next_of_kin');?>">
												</div>
                                                 <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('relationship');?>
													</label>
													<input type="text" name="relationship" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('relationship');?>">
												</div>
                                                  <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('phone_number');?>
													</label>
		<input type="text" name="nokphoneno" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('phone_number');?>">
												</div>
                                                  <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('email');?> <span class="symbol required"></span>
													</label>
													<input type="email" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('email'); ?>" name="nokemail" required="required">
												</div>
                                                   <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('home_address');?><span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('home_address');?>" name="nokhomeaddress" required="required">
												</div>
                                                <div class="form-group"> 
                                                <button type="submit" class="btn btn-purple"><?php echo get_phrase('add_patient');?></button>
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
                        
                 