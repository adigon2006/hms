<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('ACCOUNTANT');?></h1>
									<span class="mainDescription"><?php echo get_phrase('manage_accountant');?> </span>
								</div>
								<div class="col-sm-5">
                                                                    
                                                                    <?php
                                                                  
                                                  $status =  $this->session->userdata('metoast');
                                                  
                                                  if($status == 'created')
                                                  {
                                                 echo  '<div class="notification" style="display:none;"><input type="text" placeholder="Enter a title ..." value="Notifications" class="form-control" id="title">
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('accountant_created').'</textarea>
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
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('accountant_updated').'</textarea>
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
                                                       <textarea placeholder="Enter a message ..." rows="3" id="message" class="form-control">'.get_phrase('accountant_deleted').'</textarea>
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
										<i class="fa fa-wrench"></i> <?php echo get_phrase('edit_accountant');?>
												</a>
											</li>
                                              <?php endif;?>
											<li class="<?php if(!isset($edit_profile))echo 'active';?>">
												<a href="#myTab1_example2" data-toggle="tab">
									<i class="fa fa-bars"></i> <?php echo get_phrase('accountant_list');?>
												</a>
											</li>
											<li>
												<a href="<?php echo base_url();?>index.php?admin/add_new_accountant" >
											<i class="fa fa-plus"></i> <?php echo get_phrase('add_accountant');?>
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
                                
								<?php echo form_open('admin/manage_accountant/edit/do_update/'.$row['accountant_id'] , array('role' =>'form'));?>
                                    <div class="row"> <div class="col-md-6">	<div class="form-group">
													<label class="control-label" for="exampleInputEmail1">
														<?php echo get_phrase('name');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('name'); ?>" name="name" required="required" value="<?php echo $row['name'];?>">
												</div>
                                        </div>
                                      <div class="col-md-6">
                                                <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('email');?> <span class="symbol required"></span>
													</label>
													<input type="email" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('email'); ?>" name="email" required="required" value="<?php echo $row['email'];?>">
												</div>
                                      </div>
                                    </div>
                                    <div class="row"> <div class="col-md-6">
                                                  <div class="form-group">
													<label class="control-label">
														<?php echo get_phrase('password');?> <span class="symbol required"></span>
													</label>
													<input type="password" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('password'); ?>" name="password" required="required" value="<?php echo $row['password'];?>">
												</div>
                                        </div>
                                         <div class="col-md-6">
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('address');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('address'); ?>" name="address" required="required" value="<?php echo $row['address'] ?>">
												</div>
                                         </div>
                                    </div>
                                    <div class="row"> <div class="col-md-6">
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('phone');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('phone'); ?>" name="phone" required="required" value="<?php echo $row['phone']?>">
												</div>
                                        </div>
                                        <div class="col-md-6">
                                                 <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('gender');?> <span class="symbol required"></span>
													</label>
										<select name="sex" class="js-example-basic-single js-states form-control" style="width:100%;">
                                       
                                                                                    <option value="Male" <?php if($row2['sex'] == "Male"){echo "selected='selected'";}?>>
                                                                                        Male
                                                                                    </option>
                                                                                    <option value="Female" <?php if($row2['sex'] == "Female"){echo "selected='selected'";}?>>
                                                                                        Female
                                                                                    </option>
                                        </select>
												</div>
                                        </div>
                                    </div>
                                    <div class="row"> <div class="col-md-6">
                                              
                                    <div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('Twitter');?>
													</label>
													<input type="text" name="twitter" value="<?=$row['twitter']?>" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('username');?> ">
												</div>
                                        </div>
                                       <div class="col-md-6">
                                    <div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('facebook');?>
													</label>
													<input type="text" name="facebook" value="<?=$row['facebook']?>" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('url');?> ">
												</div>
                                       </div>
                                    </div>
                                    <div class="row"> <div class="col-md-6">
                                    <div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('linkedin');?>
													</label>
													<input type="text" name="linkedin" value="<?=$row['linkedin']?>" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('profile');?> ">
												</div>
                                        </div>
                                        <div class="col-md-6">
                                               <div class="form-group">
													<label for="exampleInputPassword1">
														<?php echo get_phrase('Skype');?>
													</label>
													<input type="text" name="skype" value="<?=$row['skype']?>" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('Skype');?> ">
												</div>
                                        </div>
                                    </div>
											
                                                <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary"><?php echo get_phrase('edit_accountant');?></button>
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
                    		<th><div><?php echo get_phrase('accountant_name');?></div></th>
                    		<th><div><?php echo get_phrase('email');?></div></th>
                    		<th><div><?php echo get_phrase('address');?></div></th>
                    		<th><div><?php echo get_phrase('phone');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
											</tr>
										</thead>
                                      
										<tbody>
                    	<?php $count = 1;foreach($accountants as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['email'];?></td>
							<td><?php echo $row['address'];?></td>
							<td><?php echo $row['phone'];?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?admin/manage_accountant/edit/<?php echo $row['accountant_id'];?>"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('edit');?>" class="btn btn-primary">
                                		<i class="fa fa-wrench"></i>
                                </a>
                            	<a href="<?php echo base_url();?>index.php?admin/manage_accountant/delete/<?php echo $row['accountant_id'];?>" onclick="return confirm('delete?')"
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
										<?php echo form_open('admin/manage_accountant/create/' , array('role' =>'form','id'=>'form'));?>
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
														<?php echo get_phrase('address');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('address'); ?>" name="address" required="required">
												</div>
                                                <div class="form-group">
													<label class="control-label" >
														<?php echo get_phrase('phone');?> <span class="symbol required"></span>
													</label>
													<input type="text" autocomplete="off" class="form-control underline"  placeholder="<?php echo get_phrase('phone'); ?>" name="phone" required="required">
												</div>
                                                
											
                                                <div class="form-group"> 
                                                <button type="submit" class="btn btn-purple"><?php echo get_phrase('add_accountant');?></button>
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
                        
                 