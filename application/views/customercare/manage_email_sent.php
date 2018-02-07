<!-- start: DASHBOARD TITLE -->
						<section id="page-title" class="padding-top-15 padding-bottom-15">
							<div class="row">
								<div class="col-sm-7">
									<h1 class="mainTitle"><?php echo get_phrase('MANAGE SENT EMAILs');?></h1>
									<span class="mainDescription"><?php echo get_phrase('sent emails')?> </span>
								</div>
								<div class="col-sm-5">
<!--									 start: MINI STATS WITH SPARKLINE -->
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
<!--									 end: MINI STATS WITH SPARKLINE -->
								</div>
							</div>
						</section>
						<!-- end: DASHBOARD TITLE -->
                        
                        
                                     
					<div class="wrap-content container" id="container">
						<div class="wrap-messages">
							<div id="inbox" class="inbox">
								<!-- start: EMAIL OPTIONS -->
								<div class="col email-options perfect-scrollbar">
									<div class="padding-15">
										<button class="btn btn-primary btn-block margin-bottom-30" data-toggle="modal" data-target="#messagemodal">
											Compose
										</button>
										<p class="email-options-title no-margin">
											BROWSE
										</p>
										<ul class="main-options padding-15">
											<li>
												<a href="<?php echo base_url();?>index.php?admin/manage_email" id="loadinbox">
													<span class="title"><i class="ti-import"></i> Inbox</span>
													<span class="badge pull-right"><?php 
                                                                                                         $this->db->where(array('user_to_type'=>3,'user_to_id'=>$this->session->userdata('customercare_id'),'status'=>'2'));
                                                                                                       // $this->db->where(array('user_to_type'=>1,'user_to_id'=>"0"));
                                                                                                         echo $this->db->count_all_results('message');?></span>
												</a>
											</li>
											<li>
												<a href="<?php echo base_url();?>index.php?customercare/manage_email_sent/">
													<span class="title"><i class="ti-upload"></i> Sent</span>
												</a>
											</li>
<!--											<li>
												<a href="#">
													<span class="title"><i class="ti-na"></i> Spam</span>
													<span class="badge pull-right">1</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="title"><i class="ti-star"></i> Starred</span>
													<span class="badge pull-right">2</span>
												</a>
											</li>-->


										</ul>
									</div>
								</div>
								<!-- end: EMAIL OPTIONS -->
								<!-- start: EMAIL LIST -->
								<div class="col email-list">
									<div class="wrap-list">
										<div class="wrap-options">
											<div class="messages-options padding-15">
												<div class="btn-group">
													<button class="btn btn-primary btn-wide" type="button" data-toggle="modal" data-target="#messagemodal">
														Compose
													</button>
													<button class="btn btn-primary btn-wide dropdown-toggle" type="button" data-toggle="dropdown">
														Messages<i class="caret pull-right"></i>
													</button>
													<ul role="menu" class="dropdown-menu dropdown-light">
														<li>
															
                                                                                                                    <a href="<?php echo base_url();?>index.php?admin/manage_email" >
													<span class="title"><i class="ti-import"></i> Inbox</span>
													<span class="badge"><?php 
                                                                                                         $this->db->where(array('user_to_type'=>3,'user_to_id'=>$this->session->userdata('customercare_id'),'status'=>'2'));
                                                                                                       // $this->db->where(array('user_to_type'=>1,'user_to_id'=>"0"));
                                                                                                         echo $this->db->count_all_results('message');?></span>
												</a>
														</li>
														<li>
															<a href="<?php echo base_url();?>index.php?customercare/manage_email_sent/">
																<span class="title"><i class="ti-upload"></i> Sent</span>
															</a>
														</li>
<!--														<li>
															<a href="#">
																<span class="title"><i class="ti-na"></i> Spam</span>
																<span class="badge">1</span>
															</a>
														</li>
														<li>
															<a href="#">
																<span class="title"><i class="ti-star"></i> Starred</span>
																<span class="badge">2</span>
															</a>
														</li>-->
													</ul>
												</div>
												<button class="btn btn-transparent pull-right open-message-search">
													<i class="ti-search"></i>
												</button>
												<button class="btn btn-transparent pull-right close-message-search">
													<i class="ti-close"></i>
												</button>
											</div>
											<div class="messages-search">
												<form>
													<input type="text" placeholder="<?=$typeofbox ?>" readonly class="form-control underline">
												</form>
                                                                                           
											</div>
										</div>
										<ul class="messages-list perfect-scrollbar">
                                                                                    <?php foreach($emails as $email): ?>
											<li class="messages-item">
												<a href="?messaage=<?=$email['message_id'] ?>">
<!--													<span class="messages-item-star" title="Mark as starred"><i class="fa fa-star"></i></span>
													<img class="messages-item-avatar bordered border-primary" alt="John Stark" src="assets/images/avatar-6.jpg">-->
													<span class="messages-item-from">
                                                                                                             <?php
                                                                                                            if($email['user_to_type'] == "1")
                                                                                                            {
                                                                                                               echo '(admin) '.$this->crud_model->get_type_name_by_id('admin' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                            else if($email['user_to_type'] == "2")
                                                                                                            {
                                                                                                               echo '(doctor) '.$this->crud_model->get_type_name_by_id('doctor' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                             else if($email['user_to_type'] == "3")
                                                                                                            {
                                                                                                               echo '(support) '. $this->crud_model->get_type_name_by_id('customercare' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                             else if($email['user_to_type'] == "4")
                                                                                                            {
                                                                                                               echo '(accountant) '. $this->crud_model->get_type_name_by_id('accountant' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                             else if($email['user_to_type'] == "5")
                                                                                                            {
                                                                                                               echo '(pharmacist) '. $this->crud_model->get_type_name_by_id('pharmacist' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                             else if($email['user_to_type'] == "6")
                                                                                                            {
                                                                                                               echo '(eo) ', $this->crud_model->get_type_name_by_id('laboratorist' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                             else if($email['user_to_type'] == "7")
                                                                                                            {
                                                                                                               echo '(nurse) '. $this->crud_model->get_type_name_by_id('nurse' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                            else if($email['user_to_type'] == "8")
                                                                                                            {
                                                                                                               echo '(patient) '.$this->crud_model->get_type_name_by_id('patient' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            } 
                                                                                                             
                                                                                                             ?>
                                                                                                            </span>
													<div class="messages-item-time">
														<span class="text"><?php echo $email['timestamp'] ?>  <a href="<?php echo base_url();?>index.php?customercare/manage_email/delete_email/<?=$typeofbox ?>/<?=$email['message_id'] ?>"><i class="fa fa-trash pull-right"></i></a> <a href="?message=<?=$email['message_id'] ?>" class="forwardto"><i class="fa fa-arrow-right pull-right"></i></a> <a href="?to=<?=$email['message_id'] ?>" class="reply"><i class=" fa fa-reply pull-right"></i></a>
												</span>
													</div>
													<span class="messages-item-subject"><?php echo $email['subject'] ?></span>
													<span class="messages-item-content"><?php echo $email['message'] ?></span>
                                                                                                        </a>
											</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
								<!-- end: EMAIL LIST -->
								<!-- start: EMAIL READER -->
								<div class="email-reader perfect-scrollbar">
									<div>
										<div class="message-actions">
											<ul class="actions no-margin no-padding block">
												<li class="email-list-toggle">
													<a href="#"><i class="fa fa-angle-left"></i> All Inboxes </a>
												</li>
												<li class="actions-dropdown">
													<span class="dropdown">
														<a class="dropdown-toggle" href="">
															<i class="caret"></i>
														</a>
														<ul class="dropdown-menu dropdown-light">
															<li>
																<a href="#">
																	Reply
																</a>
															</li>
															
															<li>
																<a href="#">
																	Forward
																</a>
															</li>
															<li>
																<a href="#">
																	Delete
																</a>
															</li>
														</ul> </span>
												</li>
                                                                                           <?php foreach($lastemails as$lastemail): ?>
                                                                                                <a href="?group=<?=$email['user_from_type'] ?>" class="text-info" id="group">
														
													</a>
												<li class="no-padding">
													<a href="?to=<?=$email['message_id'] ?>" class="text-info" id="reply">
														Reply
													</a>
												</li>
												<li class="no-padding" id="forward">
													<a href="?message=<?=$email['message_id'] ?>" id="forwardto">
														Forward
													</a>
												</li>
												<li class="no-padding">
													<a href="<?php echo base_url();?>index.php?customercare/manage_email_sent/delete_email/<?=$typeofbox ?>/<?=$email['message_id'] ?>" id="delete" onclick="return confirm('Are you sure you want to delete this email')">
														Delete
													</a>
												</li>
											</ul>
										</div>
                                                                              
										<div class="message-header">
<!--											<img class="message-item-avatar" alt="John Stark" src="assets/images/avatar-6.jpg">-->
									
                                                                                    <div class="message-time">
												<?php echo $email['timestamp'] ?>
											</div>
											
											<div class="message-from">
												 <?php
                                                                                                            if($email['user_from_type'] == "1")
                                                                                                            {
                                                                                                               echo $this->crud_model->get_type_name_by_id('admin' , 	$email['user_from_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                            else if($email['user_from_type'] == "2")
                                                                                                            {
                                                                                                               echo $this->crud_model->get_type_name_by_id('doctor' , 	$email['user_from_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                             else if($email['user_from_type'] == "3")
                                                                                                            {
                                                                                                               echo $this->crud_model->get_type_name_by_id('customercare' , 	$email['user_from_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                             else if($email['user_from_type'] == "4")
                                                                                                            {
                                                                                                               echo $this->crud_model->get_type_name_by_id('accountant' , 	$email['user_from_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                             else if($email['user_from_type'] == "5")
                                                                                                            {
                                                                                                               echo $this->crud_model->get_type_name_by_id('pharmacist' , 	$email['user_from_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                             else if($email['user_from_type'] == "6")
                                                                                                            {
                                                                                                               echo $this->crud_model->get_type_name_by_id('laboratorist' , 	$email['user_from_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                             else if($email['user_from_type'] == "7")
                                                                                                            {
                                                                                                               echo $this->crud_model->get_type_name_by_id('nurse' , 	$email['user_from_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                            else if($email['user_from_type'] == "8")
                                                                                                            {
                                                                                                               echo $this->crud_model->get_type_name_by_id('patient' , 	$email['user_from_id'] , 'name');
                                                                                                              
                                                                                                            } 
                                                                                                             
                                                                                                             ?>
											</div>
											<div class="message-to">
												To:  <?php
                                                                                                            if($email['user_to_type'] == "1")
                                                                                                            {
                                                                                                               echo '(admin) '.$this->crud_model->get_type_name_by_id('admin' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                            else if($email['user_to_type'] == "2")
                                                                                                            {
                                                                                                               echo '(doctor) '.$this->crud_model->get_type_name_by_id('doctor' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                             else if($email['user_to_type'] == "3")
                                                                                                            {
                                                                                                               echo '(support) '. $this->crud_model->get_type_name_by_id('customercare' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                             else if($email['user_to_type'] == "4")
                                                                                                            {
                                                                                                               echo '(accountant) '. $this->crud_model->get_type_name_by_id('accountant' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                             else if($email['user_to_type'] == "5")
                                                                                                            {
                                                                                                               echo '(pharmacist) '. $this->crud_model->get_type_name_by_id('pharmacist' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                             else if($email['user_to_type'] == "6")
                                                                                                            {
                                                                                                               echo '(eo) ', $this->crud_model->get_type_name_by_id('laboratorist' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                             else if($email['user_to_type'] == "7")
                                                                                                            {
                                                                                                               echo '(nurse) '. $this->crud_model->get_type_name_by_id('nurse' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            }
                                                                                                            else if($email['user_to_type'] == "8")
                                                                                                            {
                                                                                                               echo '(patient) '.$this->crud_model->get_type_name_by_id('patient' , 	$email['user_to_id'] , 'name');
                                                                                                              
                                                                                                            } 
                                                                                                             
                                                                                                             ?>
											</div>
										</div>
										<div class="message-subject">
											<?php echo $email['subject'] ?>
										</div>
										<div class="message-content">
											<?php echo $email['message'] ?>
										</div>
                                                                            
                                                                            <?php endforeach; ?>
									</div>
								</div>
								<!-- end: EMAIL READER -->
							</div>
						</div>
					</div>
				
                                                
                            <div class="modal fade bs-example-modal-lg" id="replymodal"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
                                                                                                            
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
														<h4 class="modal-title" id="myModalLabel">Compose Message</h4>
													</div>
                                                                                                    <form method="post" id="sendbulkemail2">
													<div class="modal-body">
                                                                                                            <div id="display-msg2"></div>
                                                                                                            <div class="form-group"><label class="control-label">Receiver Group</label>
                                                                                                                <select class="form-control" id="receiver-group2">
                                                                                                                    <option value="">Select Receiver Group</option>
                                                                                                                    <option value="1">Admin</option>
                                                                                                                     <option value="2">Doctor</option>
                                                                                                                      <option value="3">Customer Care</option>
                                                                                                                       <option value="4">Accountant</option>
                                                                                                                        <option value="5">Pharmacist</option>
                                                                                                                        <option value="6">Laboratorist,eo</option>
                                                                                                                          <option value="7">Nurse</option>
                                                                                                                          <option value="8">Patient</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                            <input type="hidden" id="sender-group2" value="3" />
                                                                                                            <input type="hidden" id="sender-id2" value="<?php echo $this->session->userdata('customercare_id'); ?>" />
                                                                                                                  <div class="form-group">  
                                                                                                                    <label class="control-label">Receiver</label>
                                                                                                                
                                                                                                                <select id="receiver-id2" class=" js-states form-control" style="width:100%;">
                                                                                                                     <option value="">Select Receiver</option>
                                                                                                                   
                                                                                                                </select>
                                                                                                                   
                                                                                                                  </div>
                                                                                                            
                                                                                                            <div class="form-group">  
                                                                                                                    <label class="control-label">Subject</label>
                                                                                                                
                                                                                                                <input type="text" id="subject2" class="form-control" />
                                                                                                                   
                                                                                                                  </div>
                                                                                                                    
                                                                                                            
                                                                                                            <div class="form-group"><label class="control-label">Message</label>
                                                                                                                <textarea id="message-content2" name="message-content" class="ckeditor form-control">

                                                                                                                </textarea> 
                                                                                                            </div>      
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
															Close
														</button>
														<button type="submit" class="btn btn-primary" id="send-message2">
															Send Message  <i class="fa fa-paper-plane"></i>
														</button>
                                                                                                    
													</div></form>
												</div>
											</div>
										</div>  
                                                
                              <div class="modal fade bs-example-modal-lg" id="forwardmodal"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
                                                                                                            
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
														<h4 class="modal-title" id="myModalLabel">Compose Message</h4>
													</div>
                                                                                                    <form method="post" id="sendbulkemail3">
													<div class="modal-body">
                                                                                                            <div id="display-msg3"></div>
                                                                                                            <div class="form-group"><label class="control-label">Receiver Group</label>
                                                                                                                <select class="form-control" id="receiver-group3">
                                                                                                                    <option value="">Select Receiver Group</option>
                                                                                                                    <option value="1">Admin</option>
                                                                                                                     <option value="2">Doctor</option>
                                                                                                                      <option value="3">Customer Care</option>
                                                                                                                       <option value="4">Accountant</option>
                                                                                                                        <option value="5">Pharmacist</option>
                                                                                                                        <option value="6">Laboratorist,eo</option>
                                                                                                                          <option value="7">Nurse</option>
                                                                                                                          <option value="8">Patient</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                            <input type="hidden" id="sender-group3" value="3" />
                                                                                                            <input type="hidden" id="sender-id3" value="<?php echo $this->session->userdata('customercare_id'); ?>" />
                                                                                                                  <div class="form-group">  
                                                                                                                    <label class="control-label">Receiver</label>
                                                                                                                
                                                                                                                <select id="receiver-id3" class=" js-states form-control" style="width:100%;">
                                                                                                                     <option value="">Select Receiver</option>
                                                                                                                   
                                                                                                                </select>
                                                                                                                   
                                                                                                                  </div>
                                                                                                            
                                                                                                            <div class="form-group">  
                                                                                                                    <label class="control-label">Subject</label>
                                                                                                                
                                                                                                                <input type="text" id="subject3" class="form-control" />
                                                                                                                   
                                                                                                                  </div>
                                                                                                                    
                                                                                                            
                                                                                                            <div class="form-group"><label class="control-label">Message</label>
                                                                                                                <textarea id="message-content3" name="message-content" class="ckeditor form-control">

                                                                                                                </textarea> 
                                                                                                            </div>      
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
															Close
														</button>
														<button type="submit" class="btn btn-primary" id="send-message3">
															Send Message  <i class="fa fa-paper-plane"></i>
														</button>
                                                                                                    
													</div></form>
												</div>
											</div>
										</div>                     
                                                
                                                  <div class="modal fade bs-example-modal-lg" id="messagemodal"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
                                                                                                            
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
														<h4 class="modal-title" id="myModalLabel">Compose Message</h4>
													</div>
                                                                                                    <form method="post" id="sendbulkemail">
													<div class="modal-body">
                                                                                                            <div id="display-msg"></div>
                                                                                                            <div class="form-group"><label class="control-label">Receiver Group</label>
                                                                                                                <select class="form-control" id="receiver-group">
                                                                                                                    <option value="">Select Receiver Group</option>
                                                                                                                    <option value="1">Admin</option>
                                                                                                                     <option value="2">Doctor</option>
                                                                                                                      <option value="3">Customer Care</option>
                                                                                                                       <option value="4">Accountant</option>
                                                                                                                        <option value="5">Pharmacist</option>
                                                                                                                        <option value="6">Laboratorist,eo</option>
                                                                                                                          <option value="7">Nurse</option>
                                                                                                                          <option value="8">Patient</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                            <input type="hidden" id="sender-group" value="3" />
                                                                                                            <input type="hidden" id="sender-id" value="<?php echo $this->session->userdata('customercare_id'); ?>" />
                                                                                                                  <div class="form-group">  
                                                                                                                    <label class="control-label">Receiver</label>
                                                                                                                
                                                                                                                <select id="receiver-id" class=" js-states form-control" style="width:100%;">
                                                                                                                     <option value="">Select Receiver</option>
                                                                                                                   
                                                                                                                </select>
                                                                                                                   
                                                                                                                  </div>
                                                                                                            
                                                                                                            <div class="form-group">  
                                                                                                                    <label class="control-label">Subject</label>
                                                                                                                
                                                                                                                <input type="text" id="subject" class="form-control" />
                                                                                                                   
                                                                                                                  </div>
                                                                                                                    
                                                                                                            
                                                                                                            <div class="form-group"><label class="control-label">Message</label>
                                                                                                                <textarea id="message-content" name="message-content" class="ckeditor form-control">

                                                                                                                </textarea> 
                                                                                                            </div>      
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
															Close
														</button>
														<button type="submit" class="btn btn-primary" id="send-message">
															Send Message  <i class="fa fa-paper-plane"></i>
														</button>
                                                                                                    
													</div></form>
												</div>
											</div>
										</div>  