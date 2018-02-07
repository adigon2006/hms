<div class="box">
	<div class="box-header">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">
        	<?php if(isset($edit_profile)):?>
			<li class="active">
            	<a href="#edit" data-toggle="tab"><i class="icon-wrench"></i> 
					<?php echo get_phrase('edit risk assessment list');?>
                    	</a></li>
            <?php endif;?>
			<li class="<?php if(!isset($edit_profile))echo 'active';?>">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo get_phrase('risk assessment list');?>
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="icon-plus"></i>
					<?php echo get_phrase('add risk assessment');?>
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
                    <?php echo form_open('nurse/manage_risk_assessment/edit/do_update/'.$row['risk_assessment_id'] , array('class' => 'form-horizontal validatable'));?>
                 <div class="padded">
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
                     
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('age');?></label>
                                <div class="controls">
                                    <select name="age" class="uniform" style="width:100%;">
                                                       <option value="N/A" <?php if($row['age']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option> 	<option value="below 18" <?php if($row['age']=='below 18')echo 'selected';?>><?php echo get_phrase('below 18');?></option>
                                    	<option value="above 40" <?php if($row['age']=='above 40')echo 'selected';?>><?php echo get_phrase('above 40');?></option>
         
                                    </select>
                                </div>
                            </div>
                                    <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('weight');?></label>
                                <div class="controls">
                                    <select name="weight" class="uniform" style="width:100%;">
                                                 <option value="N/A" <?php if($row['weight']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option>      	<option value="B.M.I below 18" <?php if($row['weight']=='B.M.I below 18')echo 'selected';?>><?php echo get_phrase('B.M.I below 18');?></option>
                                    	<option value="B.M.I above 35"<?php if($row['weight']=='B.M.I above 35')echo 'selected';?>><?php echo get_phrase('B.M.I above 35');?></option>
                     
         
                                    </select>
                                </div>
                            </div>
                                 <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('family history');?></label>
                                <div class="controls">
                                    <select name="familyhistory" class="uniform" style="width:100%;">
                                <option value="N/A" <?php if($row['family_history']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option>     	<option value="congenital abnormalities" <?php if($row['family_history']=='congenital abnormalities')echo 'selected';?>><?php echo get_phrase('congenital abnormalities');?></option>
                                    	<option value="genetic disorders" <?php if($row['family_history']=='genetic disorders')echo 'selected';?>><?php echo get_phrase('genetic disorders');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                               <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('diabetes');?></label>
                                <div class="controls">
                                    <select name="diabetes" class="uniform" style="width:100%;">
                                    	<option value="N/A" <?php if($row['diabetes']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['diabetes']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['diabetes']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                        
         
                                    </select>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('epilepsy');?></label>
                                <div class="controls">
                                    <select name="epilepsy" class="uniform" style="width:100%;">
                           <option value="N/A" <?php if($row['epilepsy']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['epilepsy']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['epilepsy']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <h4>Present History</h4>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('cardiac/circulatory problems');?></label>
                                <div class="controls">
                                    <select name="cardiac" class="uniform" style="width:100%;">
                                  <option value="N/A" <?php if($row['cardiac_circulatory_problem']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['cardiac_circulatory_problem']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['cardiac_circulatory_problem']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('hypertension');?></label>
                                <div class="controls">
                                    <select name="hypertension" class="uniform" style="width:100%;">
                                  <option value="N/A" <?php if($row['hypertension']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['hypertension']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['hypertension']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('thyroid disease/endocrine disorders');?></label>
                                <div class="controls">
                                    <select name="thyroid" class="uniform" style="width:100%;">
                                    	<option value="N/A" <?php if($row['thyroid_disease_endocrine_disorder']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['thyroid_disease_endocrine_disorder']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['thyroid_disease_endocrine_disorder']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('renal disease');?></label>
                                <div class="controls">
                                    <select name="renal" class="uniform" style="width:100%;">
                                    	<option value="N/A" <?php if($row['renal_disease']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['renal_disease']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['renal_disease']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('poorly controlled asthma');?></label>
                                <div class="controls">
                                    <select name="asthma" class="uniform" style="width:100%;">
                                    	<option value="N/A" <?php if($row['poorly_controlled_asthma']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['poorly_controlled_asthma']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['poorly_controlled_asthma']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('autoimmune disease');?></label>
                                <div class="controls">
                                    <select name="autoimmune" class="uniform" style="width:100%;">
                                    	<option value="N/A" <?php if($row['auto_immmune_disease']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['auto_immmune_disease']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['auto_immmune_disease']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('heamatological disorder (sickle cell)');?></label>
                                <div class="controls">
                                    <select name="heamatological" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['haetological_disorder']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['haetological_disorder']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['haetological_disorder']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('history thrombo-embolic disorders');?></label>
                                <div class="controls">
                                    <select name="thrombo" class="uniform" style="width:100%;">
                                    	<option value="N/A" <?php if($row['thrombo_embolic_disorder']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['thrombo_embolic_disorder']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['thrombo_embolic_disorder']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('substance misuse');?></label>
                                <div class="controls">
                                    <select name="misuse" class="uniform" style="width:100%;">
                                    	<option value="N/A" <?php if($row['substance_misuse']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['substance_misuse']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['substance_misuse']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('spinal/pelvic injury');?></label>
                                <div class="controls">
                                    <select name="spinal" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['spinal_pelvic_injury']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['spinal_pelvic_injury']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['spinal_pelvic_injury']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('psychiatric illness');?></label>
                                <div class="controls">
                                    <select name="psychiatric" class="uniform" style="width:100%;">
                                    	  <option value="N/A" <?php if($row['psychaitric_illness']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['psychaitric_illness']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['psychaitric_illness']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <h4>Obstetric history</h4>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('stillbirth or neonatal death');?></label>
                                <div class="controls">
                                    <select name="stillbirth" class="uniform" style="width:100%;">
                                    	<option value="N/A" <?php if($row['still_birth']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['still_birth']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['still_birth']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            
                             
                               <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('previous severe pre-emclampsia, HELLP or Eclampsia');?></label>
                                <div class="controls">
                                    <select name="emclampsia" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['enclampsia']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['enclampsia']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['enclampsia']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('placenta abruption/APH');?></label>
                                <div class="controls">
                                    <select name="placenta_abruption" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['placenta_abruption']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['placenta_abruption']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['placenta_abruption']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Rh, ABO or other blood group antibodies');?></label>
                                <div class="controls">
                                    <select name="abo" class="uniform" style="width:100%;">
                                <option value="N/A" <?php if($row['abo']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['abo']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['abo']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('TOP? Reason');?></label>
                                <div class="controls">
                              <input type="text" class="" name="top" value="<?php echo $row['top'] ?>"/>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('pre term delivery (below 37 weeks)');?></label>
                                <div class="controls">
                                    <select name="pre_term_delivery" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['pre_term_delivery']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['pre_term_delivery']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['pre_term_delivery']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('birth weight');?></label>
                                <div class="controls">
                                    <select name="birthweight" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['birth_weight']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="below 2.5kg" <?php if($row['birth_weight']=='below 2.5kg')echo 'selected';?>><?php echo get_phrase('below 2.5kg');?></option>
                                    	<option value="above 4.5kg" <?php if($row['birth_weight']=='above 4.5kg')echo 'selected';?>><?php echo get_phrase('above 4.5kg');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('shoulder dystocia');?></label>
                                <div class="controls">
                                    <select name="dystocia" class="uniform" style="width:100%;">
                                    	<option value="N/A" <?php if($row['shoulder_dystocia']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['shoulder_dystocia']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['shoulder_dystocia']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('difficult instrumental delivery');?></label>
                                <div class="controls">
                                    <select name="instrumental_delivery" class="uniform" style="width:100%;">
                                    	<option value="N/A" <?php if($row['instrumental_delivery']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['instrumental_delivery']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['instrumental_delivery']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('episiotomy');?></label>
                                <div class="controls">
                                    <select name="episiotomy" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['episiotomy']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['episiotomy']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['episiotomy']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                           
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('third/fourth degree tear');?></label>
                                <div class="controls">
                                    <select name="degree_tear" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['third_fourth_degree_tear']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['third_fourth_degree_tear']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['third_fourth_degree_tear']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('PPH/Uterine inversion/previous caesarean section');?></label>
                                <div class="controls">
                                    <select name="pph" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['pph']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['pph']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['pph']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <h4>Gynaecological History</h4>
                               <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('uterine or pelvic floor surgery');?></label>
                                <div class="controls">
                                    <select name="pelvic_floor" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['pelvic_floor_surgery']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['pelvic_floor_surgery']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['pelvic_floor_surgery']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Genital tract anomalies/neoplasm');?></label>
                                <div class="controls">
                                    <select name="neoplasm" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['neoplasm']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['neoplasm']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['neoplasm']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Cone blopsy');?></label>
                                <div class="controls">
                                    <select name="cone_blopsy" class="uniform" style="width:100%;">
                                    	<option value="N/A" <?php if($row['cone_blopsy']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['cone_blopsy']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['cone_blopsy']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('current abnormal smear');?></label>
                                <div class="controls">
                                    <select name="abnormal_smear" class="uniform" style="width:100%;">
                                    	<option value="N/A" <?php if($row['abnormal_smear']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['abnormal_smear']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['abnormal_smear']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('IUCD in situ');?></label>
                                <div class="controls">
                                    <select name="iucd" class="uniform" style="width:100%;">
                                    	<option value="N/A" <?php if($row['iucd']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['iucd']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['iucd']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('3 or more miscarriages');?></label>
                                <div class="controls">
                                    <select name="miscarriages" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['more_miscarriages']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['more_miscarriages']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['more_miscarriages']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('TOP over 12 weeks');?></label>
                                <div class="controls">
                                    <select name="top_over" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['top_over_twelve_weeks']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['top_over_twelve_weeks']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['top_over_twelve_weeks']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('previous cervical clevage');?></label>
                                <div class="controls">
                                    <select name="cervical_clevage" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['cervical_clevage']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['cervical_clevage']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['cervical_clevage']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('assisted conception');?></label>
                                <div class="controls">
                                    <select name="assisted_conception" class="uniform" style="width:100%;">
                                    	<option value="N/A" <?php if($row['assisted_conception']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['assisted_conception']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['assisted_conception']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('myomectomy');?></label>
                                <div class="controls">
                                    <select name="myomectomy" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['myomectomy']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="yes" <?php if($row['myomectomy']=='yes')echo 'selected';?>><?php echo get_phrase('yes');?></option>
                                    	<option value="no" <?php if($row['myomectomy']=='no')echo 'selected';?>><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <h4>Risk Factor Assessment</h4>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Risk Factor for client');?></label>
                                <div class="controls">
                                    <select name="risk_factor" class="uniform" style="width:100%;">
                                    	 <option value="N/A" <?php if($row['consideration']=='N/A')echo 'selected';?>><?php echo get_phrase('N/A');?></option><option value="one or more risk factor" <?php if($row['consideration']=='one or more risk factor')echo 'selected';?>><?php echo get_phrase('one or more risk factor');?></option>
                                    	<option value="no risk factor" <?php if($row['consideration']=='no risk factor')echo 'selected';?>><?php echo get_phrase('no risk factor');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('assessment date');?></label>
                                <div class="controls">
                                    <input type="text" class="datepicker fill-up" name="assesmentdate" value="<?php echo $row['assesment_date']; ?>"/>
                                </div>
                            </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue"><?php echo get_phrase('edit risk assessment');?></button>
                        </div>
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
                    		<th><div><?php echo get_phrase('patient');?></div></th>
                    		<th><div><?php echo get_phrase('assessed by');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 1;foreach($risk_assessment as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
							<td><?php echo $this->crud_model->get_type_name_by_id('patient' , 	$row['patient_id'] , 'name');?></td>
							<td>Nurse <?php echo $this->crud_model->get_type_name_by_id('nurse' , 	$row['nurse_id'] , 'name');?></td>
							<td align="center">
                            	<a href="<?php echo base_url();?>index.php?nurse/manage_risk_assessment/edit/<?php echo $row['risk_assessment_id'];?>"
                                	rel="tooltip" data-placement="top" data-original-title="<?php echo get_phrase('edit');?>" class="btn btn-blue">
                                		<i class="icon-wrench"></i>
                                </a>
                            	<a href="<?php echo base_url();?>index.php?nurse/manage_risk_assessment/delete/<?php echo $row['risk_assessment_id'];?>" onclick="return confirm('delete?')"
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
                    <?php echo form_open('nurse/manage_risk_assessment/create/' , array('class' => 'form-horizontal validatable'));?>
                        <div class="padded">
                           <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('patient');?></label>
                                <div class="controls">
                                    <select class="chzn-select" name="patient_id"><option value="">Select One</option>
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
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('age');?></label>
                                <div class="controls">
                                    <select name="age" class="uniform" style="width:100%;">
                                                       <option value="N/A"><?php echo get_phrase('N/A');?></option> 	<option value="below 18"><?php echo get_phrase('below 18');?></option>
                                    	<option value="above 40"><?php echo get_phrase('above 40');?></option>
         
                                    </select>
                                </div>
                            </div>
                                    <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('weight');?></label>
                                <div class="controls">
                                    <select name="weight" class="uniform" style="width:100%;">
                                                 <option value="N/A"><?php echo get_phrase('N/A');?></option>      	<option value="B.M.I below 18"><?php echo get_phrase('B.M.I below 18');?></option>
                                    	<option value="B.M.I above 35"><?php echo get_phrase('B.M.I above 35');?></option>
                     
         
                                    </select>
                                </div>
                            </div>
                                 <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('familyhistory');?></label>
                                <div class="controls">
                                    <select name="familyhistory" class="uniform" style="width:100%;">
                                <option value="N/A"><?php echo get_phrase('N/A');?></option>     	<option value="congenital abnormalities"><?php echo get_phrase('congenital abnormalities');?></option>
                                    	<option value="genetic disorders"><?php echo get_phrase('genetic disorders');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                               <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('diabetes');?></label>
                                <div class="controls">
                                    <select name="diabetes" class="uniform" style="width:100%;">
                                    	<option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                        
         
                                    </select>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('epilepsy');?></label>
                                <div class="controls">
                                    <select name="epilepsy" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <h4>Present History</h4>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('cardiac/circulatory problems');?></label>
                                <div class="controls">
                                    <select name="cardiac" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('hypertension');?></label>
                                <div class="controls">
                                    <select name="hypertension" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('thyroid disease/endocrine disorders');?></label>
                                <div class="controls">
                                    <select name="thyroid" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('renal disease');?></label>
                                <div class="controls">
                                    <select name="renal" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('poorly controlled asthma');?></label>
                                <div class="controls">
                                    <select name="asthma" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('autoimmune disease');?></label>
                                <div class="controls">
                                    <select name="autoimmune" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('heamatological disorder (sickle cell)');?></label>
                                <div class="controls">
                                    <select name="heamatological" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('history thrombo-embolic disorders');?></label>
                                <div class="controls">
                                    <select name="thrombo" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('substance misuse');?></label>
                                <div class="controls">
                                    <select name="misuse" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('spinal/pelvic injury');?></label>
                                <div class="controls">
                                    <select name="spinal" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('psychiatric illness');?></label>
                                <div class="controls">
                                    <select name="psychiatric" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <h4>Obstetric history</h4>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('stillbirth or neonatal death');?></label>
                                <div class="controls">
                                    <select name="stillbirth" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            
                             
                               <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('previous severe pre-emclampsia, HELLP or Eclampsia');?></label>
                                <div class="controls">
                                    <select name="emclampsia" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('placenta abruption/APH');?></label>
                                <div class="controls">
                                    <select name="placenta_abruption" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Rh, ABO or other blood group antibodies');?></label>
                                <div class="controls">
                                    <select name="abo" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('TOP? Reason');?></label>
                                <div class="controls">
                              <input type="text" class="" name="top"/>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('pre term delivery (below 37 weeks)');?></label>
                                <div class="controls">
                                    <select name="pre_term_delivery" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('birth weight');?></label>
                                <div class="controls">
                                    <select name="birthweight" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="below 2.5kg"><?php echo get_phrase('below 2.5kg');?></option>
                                    	<option value="above 4.5kg"><?php echo get_phrase('above 4.5kg');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('shoulder dystocia');?></label>
                                <div class="controls">
                                    <select name="dystocia" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('difficult instrumental delivery');?></label>
                                <div class="controls">
                                    <select name="instrumental_delivery" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('episiotomy');?></label>
                                <div class="controls">
                                    <select name="episiotomy" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                           
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('third/fourth degree tear');?></label>
                                <div class="controls">
                                    <select name="degree_tear" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('PPH/Uterine inversion/previous caesarean section');?></label>
                                <div class="controls">
                                    <select name="pph" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <h4>Gynaecological History</h4>
                               <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('uterine or pelvic floor surgery');?></label>
                                <div class="controls">
                                    <select name="pelvic_floor" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Genital tract anomalies/neoplasm');?></label>
                                <div class="controls">
                                    <select name="neoplasm" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Cone blopsy');?></label>
                                <div class="controls">
                                    <select name="cone_blopsy" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('current abnormal smear');?></label>
                                <div class="controls">
                                    <select name="abnormal_smear" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('IUCD in situ');?></label>
                                <div class="controls">
                                    <select name="iucd" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('3 or more miscarriages');?></label>
                                <div class="controls">
                                    <select name="miscarriages" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('TOP over 12 weeks');?></label>
                                <div class="controls">
                                    <select name="top_over" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('previous cervical clevage');?></label>
                                <div class="controls">
                                    <select name="cervical_clevage" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                             <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('assisted conception');?></label>
                                <div class="controls">
                                    <select name="assisted_conception" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                              <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('myomectomy');?></label>
                                <div class="controls">
                                    <select name="myomectomy" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="yes"><?php echo get_phrase('yes');?></option>
                                    	<option value="no"><?php echo get_phrase('no');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>
                            <h4>Risk Factor Assessment</h4>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('Risk Factor for client');?></label>
                                <div class="controls">
                                    <select name="risk_factor" class="uniform" style="width:100%;">
                                    	 <option value="N/A"><?php echo get_phrase('N/A');?></option><option value="one or more risk factor"><?php echo get_phrase('one or more risk factor');?></option>
                                    	<option value="no risk factor"><?php echo get_phrase('no risk factor');?></option>
                                       
         
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('assessment date');?></label>
                                <div class="controls">
                                    <input type="text" class="datepicker fill-up" name="assesmentdate"/>
                                </div>
                            </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue"><?php echo get_phrase('add risk assessment');?></button>
                        </div>
                    <?php echo form_close();?>                
                </div>                
			</div>
			<!----CREATION FORM ENDS--->
            
		</div>
	</div>
</div>