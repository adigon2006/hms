<?php
function generateuniqueID()
{
$s = 'P';
$s .= substr(number_format(time() * rand(),0,'',''),0,6);
return $s;	
}
?>
<div class="box">
	<div class="box-header">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">
        	<?php if(isset($edit_profile)):?>
			<li class="active">
            	<a href="#edit" data-toggle="tab"><i class="icon-wrench"></i> 
					<?php echo get_phrase('edit_patient_billing');?>
                    	</a></li>
            <?php endif;?>
			<li class="<?php if(!isset($edit_profile))echo 'active';?>">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo get_phrase('patient_billing_list');?>
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="icon-plus"></i>
					<?php echo get_phrase('add_patient_billing');?>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------->
        
	</div>
	<div class="box-content padded">
		<div class="tab-content">
        	<!----EDITING FORM STARTS---->
        	<?php if(isset($edit_profile)):?>
			<div class="tab-pane box active" id="edit" style="padding: 5px">
                <div class="box-content">
                	<?php foreach($edit_profile as $row):?>
                    <?php echo form_open('customercare/manage_patient/edit/do_update/'.$row['patient_id'] , array('class' => 'form-horizontal validatable'));?>
                        <div class="padded">
                         <h4>Personal Information</h4>                     
                        <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Title');?></label>
                                <div class="controls">
                                   <select name="title" class="uniform" style="width:100%;">
                                        <option value="" <?php if($row['title']=='')echo 'selected';?>><?php echo get_phrase('Select One');?></option>
                                    	<option value="Mr" <?php if($row['title']=='Mr')echo 'selected';?>><?php echo get_phrase('Mr');?></option>
                                    	<option value="Mrs" <?php if($row['title']=='Mrs')echo 'selected';?>><?php echo get_phrase('Mrs');?></option>
                                        <option value="Ms" <?php if($row['title']=='Ms')echo 'selected';?>><?php echo get_phrase('Ms');?></option>
                                    	
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('name');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="name" value="<?php echo $row['name'];?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('email');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="email" value="<?php echo $row['email'];?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('password');?></label>
                                <div class="controls">
                                    <input type="password" class="validate[required]" name="password" value="<?php echo $row['password'];?>"/>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('home address');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="address" value="<?php echo $row['address'];?>"/>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('office address');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="address2" value="<?php echo $row['office_address'];?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('phone');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="phone" value="<?php echo $row['phone'];?>"/>
                                </div>
                            </div>
                                  <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('client number');?></label>
                                <div class="controls">
                                    <input readonly="readonly" type="text" class="" name="clientno" value="<?php echo $row['client_number'];?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('religion');?></label>
                                <div class="controls">
                                    <select name="religion" class="uniform" style="width:100%;">
                                    	<option value="Christian" <?php if($row['religion']=='Christian')echo 'selected';?>><?php echo get_phrase('Christian');?></option>
                                    	<option value="female" <?php if($row['religion']=='Muslim')echo 'selected';?>><?php echo get_phrase('Muslim');?></option>
                                             	<option value="Others" <?php if($row['religion']=='Others')echo 'selected';?>><?php echo get_phrase('Others');?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('sex');?></label>
                                <div class="controls">
                                    <select name="sex" class="uniform" style="width:100%;">
                                    	<option value="male" <?php if($row['sex']=='male')echo 'selected';?>><?php echo get_phrase('male');?></option>
                                    	<option value="female" <?php if($row['sex']=='female')echo 'selected';?>><?php echo get_phrase('female');?></option>
                                    </select>
                                </div>
                            </div>
                           <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('birth_date');?></label>
                                <div class="controls">
                                    <input type="text"  class="datepicker fill-up"  name="birth_date" value="<?php echo $row['birth_date'];?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('age');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="age" value="<?php echo $row['age'];?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('blood_group');?></label>
                                <div class="controls">
                                    <select name="blood_group" class="uniform" style="width:100%;">
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
                            </div>
                            
                             <h4>Insurance Information</h4>
                          <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('name of insurance');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="noi" value="<?php echo $row['name_of_insurance'] ?>"/>
                                </div>
                            </div>   
                            
                               <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('insurance number');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="insurancenumber" value="<?php echo $row['insurance_number'] ?>"/>
                                </div>
                            </div>  
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('policy holder\'s name');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="phn" value="<?php echo $row['policy_holder_name'] ?>"/>
                                </div>
                            </div> 
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('policy holder\'s date of birth');?></label>
                                <div class="controls">
                                    <input type="text"  class="datepicker fill-up"  name="phdob" value="<?php echo $row['holder_dob'] ?>"/>
                                </div>
                            </div>  
                          <h4>Next of Kin/Contact Person</h4>
             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('name of next of kin');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="nonok" value="<?php echo $row['nok_name'] ?>"/>
                                </div>
                            </div> <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('relationship');?></label>
                                <div class="controls">
                                    <input type="text" class="" name="relationship" value="<?php echo $row['relationship'] ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('phone number');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="nokphoneno" value="<?php echo $row['nok_phone_no'] ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Email');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="nokemail" value="<?php echo $row['nok_email'] ?>"/>
                                </div>
                            </div> <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Home Address');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="nokhomeaddress" value="<?php echo $row['nok_home_address'] ?>"/>
                                </div>
                            </div>   
                            
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue"><?php echo get_phrase('edit_patient');?></button>
                        </div>
                    <?php echo form_close();?>
                    <?php endforeach;?>
                </div>
			</div>
            <?php endif;?>
            <!----EDITING FORM ENDS--->
            
            <!----TABLE LISTING STARTS--->
            <div class="tab-pane box <?php if(!isset($edit_profile))echo 'active';?>" id="list">
				
                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                	<thead>
                		<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('patient_name (Client_number)');?></div></th>
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
							<td><?php echo $row['name'].' ('.$row['client_number'].')';?></td>
							<td><?php echo $row['age'];?></td>
							<td><?php echo $row['sex'];?></td>
							<td><?php echo $row['blood_group'];?></td>
							<td><?php echo $row['birth_date'];?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?customercare/manage_patient/edit/<?php echo $row['patient_id'];?>"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('edit');?>" class="btn btn-blue">
                                		<i class="icon-wrench"></i>
                                </a>
                            	<a href="<?php echo base_url();?>index.php?customercare/manage_patient/delete/<?php echo $row['patient_id'];?>" onclick="return confirm('delete?')"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('delete');?>" class="btn btn-red">
                                		<i class="icon-trash"></i>
                                </a>
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLE LISTING ENDS--->
            
            
			<!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                    <?php echo form_open('customercare/manage_patient/create/' , array('class' => 'form-horizontal validatable'));?>
                        <div class="padded">
                          <div class="control-group">
                        <h4>Personal Information</h4>
                        </div>
                         <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Title');?></label>
                                <div class="controls">
                                    <select name="title" class="uniform validate[required]" style="width:100%;">
                                    <option value="" ><?php echo get_phrase('Select One');?></option>
                                    	<option value="Mr"><?php echo get_phrase('Mr');?></option>
                                    	<option value="Mrs"><?php echo get_phrase('Mrs');?></option>
                                        <option value="Ms"><?php echo get_phrase('Ms');?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('name');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="name"/>
                                </div>
                            </div>
                         <div class="span6">
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('patient');?></label>
                                <div class="controls">
                                    <select class="chzn-select" name="patient_id">
										<?php 
										$this->db->order_by('account_opening_timestamp' , 'asc');
										$patients	=	$this->db->get('patient')->result_array();
										foreach($patients as $row2):
										?>
                                        	<option value="<?php echo $row2['patient_id'];?>" <?php if($row2['patient_id'] == $row['patient_id'])echo 'selected';?>>
												<?php echo $row2['name'];?></option>
                                        <?php
										endforeach;
										?>
									</select>
                                </div>
                         </div>  
                         <div class="span6">
                         
                         </div>   
                            
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue"><?php echo get_phrase('add_patient');?></button>
                        </div>
                    <?php echo form_close();?>                
                </div>                
			</div>
			<!----CREATION FORM ENDS--->
            
		</div>
	</div>
</div>