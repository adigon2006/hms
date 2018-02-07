<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/*	
 *	@author : Adigun Adekunle
 *	date	: 23 September 2016
 *	
 *	Hospital Management system
 *	
 */

class Nurse extends CI_Controller
{
	
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		/*cache control*/
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	}
	
	/***Default function, redirects to login page if no nurse logged in yet***/
	public function index()
	{
		if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		if ($this->session->userdata('nurse_login') == 1)
			redirect(base_url() . 'index.php?nurse/dashboard', 'refresh');
	}
	     function view_single_patient($param1 = '', $param2 = '', $param3 = '')
        {
          if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		
		if ($param1 == 'view') {
			$data = $this->input->post('patient_id');
			
		$page_data['patientdetails'] = $this->db->get_where('patient',array('patient_id'=>$data))->result_array();
                        //$page_data['patientdetails'] = $data;
			$this->session->set_flashdata('flash_message', get_phrase('department_updated'));
			//redirect(base_url() . 'index.php?admin/view_single_patient', 'refresh');
		$page_data['page_name']   = 'view_single_patient';
		$page_data['page_title']  = get_phrase('view_single_patient');
		} 
                
		$page_data['page_name']   = 'view_single_patient';
		$page_data['page_title']  = get_phrase('view_single_patient');
		
		$this->load->view('index', $page_data);  
        }
        /***patient Landing ***/
	function patient_landing()
	{
		if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'patient_landing';
		$page_data['page_title'] = get_phrase('patient_landing');
		$this->load->view('index', $page_data);
	}
        
         /***add patient ***/
	function add_new_patient()
	{
		if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'add_new_patient';
		$page_data['page_title'] = get_phrase('add_new_patient');
		$this->load->view('index', $page_data);
	}
        
            function manage_email_sent($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
                if($param1 == 'delete_email' && $param2 == 'sent')
                {
                  $this->db->where('message_id',$param3);
                  $this->db->delete('message');
                  redirect(base_url() . 'index.php?nurse/manage_email_sent', 'refresh');
                }
                
               
           
                $this->db->where(array('user_from_type'=>'7', 'user_from_id'=>$this->session->userdata('nurse_id')));
                $this->db->order_by('message_id' , 'desc'); 
                $page_data['emails'] = $this->db->get('message_sent')->result_array();
                $page_data['typeofbox'] = 'sent';
                $this->db->where(array('user_from_type'=>'7', 'user_from_id'=>$this->session->userdata('nurse_id')));
                 
                $this->db->limit(1);
                $page_data['lastemails'] = $this->db->get('message_sent')->result_array(); 
                 
                
		$page_data['page_name']  = 'manage_email_sent';
                $page_data['nurse_id'] = $this->session->userdata('nurse_id');
                
                
                
		$page_data['page_title'] = get_phrase('manage_email_sent');
		$this->load->view('index', $page_data);
	}
        
        
        function manage_email()
	{
		if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'manage_email';
                $page_data['nurse_id'] = $this->session->userdata('nurse_id');
                $this->db->where(array('user_to_type'=>'7', 'user_to_id'=>$this->session->userdata('nurse_id')));
                $this->db->order_by('message_id' , 'desc'); 
                $page_data['emails'] = $this->db->get('message')->result_array();
                
                $page_data['typeofbox'] = 'inbox';
                
                $this->db->where(array('user_to_type'=>'7', 'user_to_id'=>$this->session->userdata('nurse_id')));
                $this->db->order_by('message_id' , 'desc'); 
                $this->db->limit(1);
                $page_data['lastemails'] = $this->db->get('message')->result_array();
                
                
		$page_data['page_title'] = get_phrase('manage_email');
		$this->load->view('index', $page_data);
	}
        
        function add_new_nurse()
	{
		if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'add_new_nurse';
		$page_data['page_title'] = get_phrase('add_new_nurse');
		$this->load->view('index', $page_data);
	}
        
        
	/***nurse DASHBOARD***/
	function dashboard()
	{
		if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		$page_data['page_name']  = 'dashboard';
		$page_data['page_title'] = get_phrase('nurse_dashboard');
		$this->load->view('index', $page_data);
	}
	
	
	/***Manage patients**/
	function manage_patient($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		if ($param1 == 'create') {
			$data['title'] = $this->input->post('title');
			$data['name']                      = $this->input->post('name');
			$data['email']                     = $this->input->post('email');
			$data['password']                  = $this->input->post('password');
			$data['address']                   = $this->input->post('address');
			$data['office_address']                   = $this->input->post('address2');
			$data['religion']                   = $this->input->post('religion');
			$data['client_number']              = $this->input->post('clientno');
			$data['phone']                     = $this->input->post('phone');
			$data['sex']                       = $this->input->post('sex');
			$data['birth_date']                = $this->input->post('birth_date');
			$data['age']                       = $this->input->post('age');
			$data['blood_group']               = $this->input->post('blood_group');
			$data['name_of_insurance']               = $this->input->post('noi');
				$data['insurance_number']               = $this->input->post('insurancenumber');
				$data['policy_holder_name']               = $this->input->post('phn');
					$data['holder_dob']               = $this->input->post('phdob');
					$data['nok_name']               = $this->input->post('nonok');
					$data['relationship']               = $this->input->post('relationship');
					$data['nok_phone_no']               = $this->input->post('nokphoneno');
					$data['nok_email']               = $this->input->post('nokemail');
					$data['nok_home_address']               = $this->input->post('nokhomeaddress');
			$data['account_opening_timestamp'] = strtotime(date('Y-m-d') . ' ' . date('H:i:s'));
			$this->db->insert('patient', $data);
			$this->email_model->account_opening_email('patient', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
			$this->session->set_flashdata('flash_message', get_phrase('account_opened'));
			 $memessage = 'created';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_patient', 'refresh');
		}
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['title'] = $this->input->post('title');
			$data['name']        = $this->input->post('name');
			$data['email']       = $this->input->post('email');
			$data['password']    = $this->input->post('password');
			$data['address']     = $this->input->post('address');
					$data['office_address']                   = $this->input->post('address2');
			$data['religion']                   = $this->input->post('religion');
			$data['client_number']              = $this->input->post('clientno');
			$data['phone']       = $this->input->post('phone');
			$data['sex']         = $this->input->post('sex');
			$data['birth_date']  = $this->input->post('birth_date');
			$data['age']         = $this->input->post('age');
			$data['blood_group'] = $this->input->post('blood_group');
			$data['name_of_insurance']               = $this->input->post('noi');
				$data['insurance_number']               = $this->input->post('insurancenumber');
				$data['policy_holder_name']               = $this->input->post('phn');
					$data['holder_dob']               = $this->input->post('phdob');
					$data['nok_name']               = $this->input->post('nonok');
					$data['relationship']               = $this->input->post('relationship');
					$data['nok_phone_no']               = $this->input->post('nokphoneno');
					$data['nok_email']               = $this->input->post('nokemail');
					$data['nok_home_address']               = $this->input->post('nokhomeaddress');
			$this->db->where('patient_id', $param3);
			$this->db->update('patient', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
			 $memessage = 'edited';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_patient', 'refresh');
			
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('patient', array(
				'patient_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('patient_id', $param2);
			$this->db->delete('patient');
			$this->session->set_flashdata('flash_message', get_phrase('account_deleted'));
			
                         $memessage = 'deleted';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_patient', 'refresh');
		}
		$page_data['page_name']  = 'manage_patient';
		$page_data['page_title'] = get_phrase('manage_patient');
		$page_data['patients']   = $this->db->get('patient')->result_array();
		$this->load->view('index', $page_data);
	}
	
        
        
// maange the risk assessment page and their form

function manage_risk_assessment($param1 = '', $param2 = '', $param3 = '')
{
if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');

if($param1 == 'create')
{
$data['patient_id'] = $this->input->post('patient_id');	
$data['age'] = $this->input->post('age');
$data['weight'] = $this->input->post('weight');	
$data['family_history'] = $this->input->post('familyhistory');	
$data['diabetes'] = $this->input->post('diabetes');	
$data['epilepsy'] = $this->input->post('epilepsy');	
$data['cardiac_circulatory_problem'] = $this->input->post('cardiac');
$data['hypertension'] = $this->input->post('hypertension');	
$data['thyroid_disease_endocrine_disorder'] = $this->input->post('thyroid');	
$data['renal_disease'] = $this->input->post('renal');
$data['poorly_controlled_asthma'] = $this->input->post('asthma');
$data['auto_immmune_disease'] = $this->input->post('autoimmune');
$data['haetological_disorder'] = $this->input->post('heamatological');
$data['thrombo_embolic_disorder'] = $this->input->post('thrombo');
$data['substance_misuse'] = $this->input->post('misuse');
$data['spinal_pelvic_injury'] = $this->input->post('spinal');
$data['psychaitric_illness'] = $this->input->post('psychiatric');
$data['still_birth'] = $this->input->post('stillbirth');
$data['enclampsia'] = $this->input->post('emclampsia');
$data['placenta_abruption'] = $this->input->post('placenta_abruption');
$data['abo'] = $this->input->post('abo');
$data['top'] = $this->input->post('top');
$data['pre_term_delivery'] = $this->input->post('pre_term_delivery');
$data['birth_weight'] = $this->input->post('birthweight');
$data['shoulder_dystocia'] = $this->input->post('dystocia');
$data['instrumental_delivery'] = $this->input->post('instrumental_delivery');
$data['episiotomy'] = $this->input->post('episiotomy');
$data['third_fourth_degree_tear'] = $this->input->post('degree_tear');
$data['pph'] = $this->input->post('pph');
$data['pelvic_floor_surgery'] = $this->input->post('pelvic_floor');
$data['neoplasm'] = $this->input->post('neoplasm');
$data['cone_blopsy'] = $this->input->post('cone_blopsy');
$data['abnormal_smear'] = $this->input->post('abnormal_smear');
$data['iucd'] = $this->input->post('iucd');
$data['more_miscarriages'] = $this->input->post('miscarriages');
$data['top_over_twelve_weeks'] = $this->input->post('top_over');
$data['cervical_clevage'] = $this->input->post('cervical_clevage');
$data['assisted_conception'] = $this->input->post('assisted_conception');
$data['myomectomy'] = $this->input->post('myomectomy');
$data['consideration'] = $this->input->post('risk_factor');
$data['assesment_date'] = $this->input->post('assesmentdate');
$data['nurse_id'] = $this->session->userdata('nurse_id');
$this->db->insert('risk_assessment', $data);
			$this->session->set_flashdata('flash_message', get_phrase('Risk Assessment Added'));
			$memessage = 'created';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_risk_assessment', 'refresh');
	
}
if($param1 == 'edit' && $param2 == 'do_update')
{
$data['patient_id'] = $this->input->post('patient_id');	
$data['age'] = $this->input->post('age');
$data['weight'] = $this->input->post('weight');	
$data['family_history'] = $this->input->post('familyhistory');	
$data['diabetes'] = $this->input->post('diabetes');	
$data['epilepsy'] = $this->input->post('epilepsy');	
$data['cardiac_circulatory_problem'] = $this->input->post('cardiac');
$data['hypertension'] = $this->input->post('hypertension');	
$data['thyroid_disease_endocrine_disorder'] = $this->input->post('thyroid');	
$data['renal_disease'] = $this->input->post('renal');
$data['poorly_controlled_asthma'] = $this->input->post('asthma');
$data['auto_immmune_disease'] = $this->input->post('autoimmune');
$data['haetological_disorder'] = $this->input->post('heamatological');
$data['thrombo_embolic_disorder'] = $this->input->post('thrombo');
$data['substance_misuse'] = $this->input->post('misuse');
$data['spinal_pelvic_injury'] = $this->input->post('spinal');
$data['psychaitric_illness'] = $this->input->post('psychiatric');
$data['still_birth'] = $this->input->post('stillbirth');
$data['enclampsia'] = $this->input->post('emclampsia');
$data['placenta_abruption'] = $this->input->post('placenta_abruption');
$data['abo'] = $this->input->post('abo');
$data['top'] = $this->input->post('top');
$data['pre_term_delivery'] = $this->input->post('pre_term_delivery');
$data['birth_weight'] = $this->input->post('birthweight');
$data['shoulder_dystocia'] = $this->input->post('dystocia');
$data['instrumental_delivery'] = $this->input->post('instrumental_delivery');
$data['episiotomy'] = $this->input->post('episiotomy');
$data['third_fourth_degree_tear'] = $this->input->post('degree_tear');
$data['pph'] = $this->input->post('pph');
$data['pelvic_floor_surgery'] = $this->input->post('pelvic_floor');
$data['neoplasm'] = $this->input->post('neoplasm');
$data['cone_blopsy'] = $this->input->post('cone_blopsy');
$data['abnormal_smear'] = $this->input->post('abnormal_smear');
$data['iucd'] = $this->input->post('iucd');
$data['more_miscarriages'] = $this->input->post('miscarriages');
$data['top_over_twelve_weeks'] = $this->input->post('top_over');
$data['cervical_clevage'] = $this->input->post('cervical_clevage');
$data['assisted_conception'] = $this->input->post('assisted_conception');
$data['myomectomy'] = $this->input->post('myomectomy');
$data['consideration'] = $this->input->post('risk_factor');
$data['assesment_date'] = $this->input->post('assesmentdate');
$data['nurse_id'] = $this->session->userdata('nurse_id');

$this->db->where('risk_assessment_id', $param3);
			$this->db->update('risk_assessment', $data);
			$this->session->set_flashdata('flash_message', get_phrase('risk assessment updated'));
			$memessage = 'edited';
                        $this->session->set_userdata('metoast', $memessage);
                        
                        redirect(base_url() . 'index.php?nurse/manage_risk_assessment', 'refresh');	
}else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('risk_assessment', array(
				'risk_assessment_id' => $param2
			))->result_array();
		}
if ($param1 == 'delete') {
			$this->db->where('risk_assessment_id', $param2);
			$this->db->delete('risk_assessment');
			$this->session->set_flashdata('flash_message', get_phrase('Risk Assessment Deleted'));
			$memessage = 'deleted';
                        $this->session->set_userdata('metoast', $memessage);
                        
                        redirect(base_url() . 'index.php?nurse/manage_risk_assessment', 'refresh');
		}
        $page_data['page_name']  = 'manage_risk_assessment';
		$page_data['page_title'] = get_phrase('manage risk assessment');
		$page_data['risk_assessment']       = $this->db->get('risk_assessment')->result_array();
		$this->load->view('index', $page_data);	
}


function manage_vital_assessment($param1 = '', $param2 = '', $param3 = '')
{
if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
if($param1 == 'create')
{
$data['patient_id']  = $this->input->post('patient_id');
$data['bp']  = $this->input->post('bp');
$data['pulse']  = $this->input->post('pulse');
$data['temp']  = $this->input->post('temp');
$data['height']  = $this->input->post('height');
$data['weight']  = $this->input->post('weight');
$data['bmi']  = $this->input->post('bmi');
$data['urinalysis']  = $this->input->post('urinalysis');
$data['remarks']  = $this->input->post('remarks');
$data['assessment_date']  = $this->input->post('assessmentdate');
$this->db->insert('vital_assessment', $data);
			$this->session->set_flashdata('flash_message', get_phrase('vital assessment added'));
			
                        $memessage = 'created';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_vital_assessment', 'refresh');	
}
if($param1 == 'edit' && $param2 == 'do_update')
{
$data['patient_id']  = $this->input->post('patient_id');
$data['bp']  = $this->input->post('bp');
$data['pulse']  = $this->input->post('pulse');
$data['temp']  = $this->input->post('temp');
$data['height']  = $this->input->post('height');
$data['weight']  = $this->input->post('weight');
$data['bmi']  = $this->input->post('bmi');
$data['urinalysis']  = $this->input->post('urinalysis');
$data['remarks']  = $this->input->post('remarks');
$data['assessment_date']  = $this->input->post('assessmentdate');
$this->db->where('vital_id', $param3);
			$this->db->update('vital_assessment', $data);
			$this->session->set_flashdata('flash_message', get_phrase('vital assessment updated'));
			
                        $memessage = 'edited';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_vital_assessment', 'refresh');	
}
else if($param1 == 'edit')
{
$page_data['edit_profile'] = $this->db->get_where('vital_assessment', array(
				'vital_id' => $param2
			))->result_array();	
}
if($param1 == 'delete')
{
$this->db->where('vital_id', $param2);
$this->db->delete('vital_assessment');
$this->session->set_flashdata('flash_message', get_phrase('vital assessment deleted'));

$memessage = 'deleted';
                        $this->session->set_userdata('metoast', $memessage);
redirect(base_url() . 'index.php?nurse/manage_vital_assessment', 'refresh');	
}
$page_data['page_name']  = 'manage_vital_assessment';
		$page_data['page_title'] = get_phrase('manage vital assessment');
		$page_data['vital_assessment']       = $this->db->get('vital_assessment')->result_array();
		$this->load->view('index', $page_data);		
}
	
	/*****LIST OF BED, MANAGE THIER TYPES********/
	function manage_bed($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		if ($param1 == 'create') {
			$data['bed_number']  = $this->input->post('bed_number');
			$data['type']        = $this->input->post('type');
			$data['description'] = $this->input->post('description');
			$this->db->insert('bed', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_opened'));
			$memessage = 'created';
                        $this->session->set_userdata('metoast', $memessage);
                        
                        redirect(base_url() . 'index.php?nurse/manage_bed', 'refresh');
		}
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['bed_number']  = $this->input->post('bed_number');
			$data['type']        = $this->input->post('type');
			$data['status']      = $this->input->post('status');
			$data['description'] = $this->input->post('description');
			$this->db->where('bed_id', $param3);
			$this->db->update('bed', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
			
                        $memessage = 'edited';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_bed', 'refresh');
			
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('bed', array(
				'bed_id' => $param2
			))->result_array();
		}
		if ($param1 == 'view_bed_history') {
			$page_data['view_bed_history_id'] = $this->db->get_where('bed_allotment', array(
				'bed_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('bed_id', $param2);
			$this->db->delete('bed');
			$this->session->set_flashdata('flash_message', get_phrase('account_deleted'));
		
                        $memessage = 'deleted';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_bed', 'refresh');
		}
		$page_data['page_name']  = 'manage_bed';
		$page_data['page_title'] = get_phrase('manage_bed');
		$page_data['beds']       = $this->db->get('bed')->result_array();
		$this->load->view('index', $page_data);
	}
	
	/******ALLOT / DISCHARGE BED TO PATIENTS*****/
	function manage_bed_allotment($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		
		//create a new allotment only in available / unalloted beds. beds can be ward,cabin,icu,other types
		if ($param1 == 'create') {
			$data['bed_id']              = $this->input->post('bed_id');
			$data['patient_id']          = $this->input->post('patient_id');
			$data['allotment_timestamp'] = $this->input->post('allotment_timestamp');
                        $data['allotment_time'] = $this->input->post('allotment_time');
			$data['discharge_timestamp'] = "";
                        $data['discharge_time'] = "";
			$this->db->insert('bed_allotment', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_opened'));
			
                        $memessage = 'created';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_bed_allotment', 'refresh');
		}
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['bed_id']              = $this->input->post('bed_id');
			$data['patient_id']          = $this->input->post('patient_id');
			$data['allotment_timestamp'] = ($this->input->post('allotment_timestamp'));
                        $data['allotment_time'] = $this->input->post('allotment_time');
			$data['discharge_timestamp'] = ($this->input->post('discharge_timestamp'));
                        $data['discharge_time'] = ($this->input->post('discharge_time'));
			$this->db->where('bed_allotment_id', $param3);
			$this->db->update('bed_allotment', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
			
                        $memessage = 'edited';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_bed_allotment', 'refresh');
			
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('bed_allotment', array(
				'bed_allotment_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('bed_allotment_id', $param2);
			$this->db->delete('bed_allotment');
			$this->session->set_flashdata('flash_message', get_phrase('account_deleted'));
			
                        $memessage = 'deleted';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_bed_allotment', 'refresh');
		}
		$page_data['page_name']     = 'manage_bed_allotment';
		$page_data['page_title']    = get_phrase('manage_bed_allotment');
		$page_data['bed_allotment'] = $this->db->get('bed_allotment')->result_array();
		$this->load->view('index', $page_data);
	}
	
	/*******WATCH AND MANAGE STATUS OF BLOOD GROUPS AND THEIR AVAILABLE AMOUNT OF BAGS********/
	function manage_blood_bank($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['status'] = $this->input->post('status');
			$this->db->where('blood_group_id', $param3);
			$this->db->update('blood_bank', $data);
			$this->session->set_flashdata('flash_message', get_phrase('blood_status_updated'));
			redirect(base_url() . 'index.php?nurse/manage_blood_bank', 'refresh');
			
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('blood_bank', array(
				'blood_group_id' => $param2
			))->result_array();
		}
		$page_data['page_name']  = 'manage_blood_bank';
		$page_data['page_title'] = get_phrase('manage_blood_bank');
		$page_data['blood_bank'] = $this->db->get('blood_bank')->result_array();
		$this->load->view('index', $page_data);
	}

	
	/******MANAGE BLOOD DONORS*****/
	function manage_blood_donor($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		
		//create a new allotment only in available / unalloted beds. beds can be ward,cabin,icu,other types
		if ($param1 == 'create') {
			$data['name']                    = $this->input->post('name');
			$data['blood_group']             = $this->input->post('blood_group');
			$data['sex']                     = $this->input->post('sex');
			$data['age']                     = $this->input->post('age');
			$data['phone']                   = $this->input->post('phone');
			$data['email']                   = $this->input->post('email');
			$data['address']                 = $this->input->post('address');
			$data['last_donation_timestamp'] = strtotime($this->input->post('last_donation_timestamp'));
			$this->db->insert('blood_donor', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_opened'));
			
                        $memessage = 'created';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_blood_donor', 'refresh');
		}
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['name']                    = $this->input->post('name');
			$data['blood_group']             = $this->input->post('blood_group');
			$data['sex']                     = $this->input->post('sex');
			$data['age']                     = $this->input->post('age');
			$data['phone']                   = $this->input->post('phone');
			$data['email']                   = $this->input->post('email');
			$data['address']                 = $this->input->post('address');
			$data['last_donation_timestamp'] = strtotime($this->input->post('last_donation_timestamp'));
			$this->db->where('blood_donor_id', $param3);
			$this->db->update('blood_donor', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
			
                        $memessage = 'edited';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_blood_donor', 'refresh');
			
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('blood_donor', array(
				'blood_donor_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('blood_donor_id', $param2);
			$this->db->delete('blood_donor');
			$this->session->set_flashdata('flash_message', get_phrase('account_deleted'));
			
                        $memessage = 'deleted';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_blood_donor', 'refresh');
		}
		$page_data['page_name']    = 'manage_blood_donor';
		$page_data['page_title']   = get_phrase('manage_blood_donor');
		$page_data['blood_donors'] = $this->db->get('blood_donor')->result_array();
		$this->load->view('index', $page_data);
	}
	
	/***CREATE REPORT BIRTH,DEATH,OPERATION**/
	function manage_report($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		
		//create a new report baby birth,patient death, operation , other types
		if ($param1 == 'create') {
			$data['type']        = $this->input->post('type');
			$data['description'] = $this->input->post('description');
			$data['timestamp']   = strtotime(date('Y-m-d') . ' ' . date('H:i:s'));
			$data['doctor_id']   = $this->input->post('doctor_id');
			$data['patient_id']  = $this->input->post('patient_id');
			$this->db->insert('report', $data);
			$this->session->set_flashdata('flash_message', get_phrase('report_created'));
			
                        $memessage = 'created';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_report', 'refresh');
		}
		if ($param1 == 'delete') {
			$this->db->where('report_id', $param2);
			$this->db->delete('report');
			$this->session->set_flashdata('flash_message', get_phrase('report_deleted'));
			
                        $memessage = 'deleted';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?nurse/manage_report', 'refresh');
		}
		$page_data['page_name']  = 'manage_report';
		$page_data['page_title'] = get_phrase('manage_report');
		$page_data['reports']    = $this->db->get('report')->result_array();
		$this->load->view('index', $page_data);
	}


	
	/******MANAGE OWN PROFILE AND CHANGE PASSWORD***/
	function manage_profile($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('nurse_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		if ($param1 == 'update_profile_info') {
			$data['name']    = $this->input->post('name');
			$data['email']   = $this->input->post('email');
			$data['address'] = $this->input->post('address');
			$data['phone']   = $this->input->post('phone');
			
			$this->db->where('nurse_id', $this->session->userdata('nurse_id'));
			$this->db->update('nurse', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
			$memessage = 'updated';
			$this->session->set_userdata('metoast', $memessage);
                        
                        redirect(base_url() . 'index.php?nurse/manage_profile/', 'refresh');
		}
		if ($param1 == 'change_password') {
			$data['password']             = $this->input->post('password');
			$data['new_password']         = $this->input->post('new_password');
			$data['confirm_new_password'] = $this->input->post('confirm_new_password');
			
			$current_password = $this->db->get_where('nurse', array(
				'nurse_id' => $this->session->userdata('nurse_id')
			))->row()->password;
                         if($current_password != $data['password'])
                        {
                            $memessage = 'invalidold';
			$this->session->set_userdata('metoast', $memessage); 
                        }
			else if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
				$this->db->where('nurse_id', $this->session->userdata('nurse_id'));
				$this->db->update('nurse', array(
					'password' => $data['new_password']
				));
                                $memessage = 'updatepass';
			$this->session->set_userdata('metoast', $memessage);
				$this->session->set_flashdata('flash_message', get_phrase('password_updated'));
			} else {
                            
                             $memessage = 'mismatch';
			$this->session->set_userdata('metoast', $memessage);
				$this->session->set_flashdata('flash_message', get_phrase('password_mismatch'));
			}
			redirect(base_url() . 'index.php?nurse/manage_profile/', 'refresh');
		}
		$page_data['page_name']    = 'manage_profile';
		$page_data['page_title']   = get_phrase('manage_profile');
		$page_data['edit_profile'] = $this->db->get_where('nurse', array(
			'nurse_id' => $this->session->userdata('nurse_id')
		))->result_array();
		$this->load->view('index', $page_data);
	}
	
}
