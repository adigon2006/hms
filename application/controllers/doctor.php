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

class Doctor extends CI_Controller
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
	
	/***Default function, redirects to login page if no admin logged in yet***/
	public function index()
	{
		if ($this->session->userdata('doctor_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		if ($this->session->userdata('doctor_login') == 1)
			redirect(base_url() . 'index.php?doctor/dashboard', 'refresh');
	}
	
	/***DOCTOR DASHBOARD***/
	function dashboard()
	{
		if ($this->session->userdata('doctor_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		$page_data['page_name']  = 'dashboard';
		$page_data['page_title'] = get_phrase('doctor_dashboard');
		$this->load->view('index', $page_data);
	}
        
        /*******VIEW PAYMENT REPORT	********/
	function view_payment($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('doctor_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		$page_data['page_name']  = 'view_payment';
		$page_data['page_title'] = get_phrase('view_payment');
		$page_data['payments']   = $this->db->get('payment')->result_array();
		$this->load->view('index', $page_data);
	}
        
         /***patient Landing ***/
	function patient_landing()
	{
		if ($this->session->userdata('doctor_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'patient_landing';
		$page_data['page_title'] = get_phrase('patient_landing');
		$this->load->view('index', $page_data);
	}
        
            function view_single_patient($param1 = '', $param2 = '', $param3 = '')
        {
          if ($this->session->userdata('doctor_login') != 1)
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
    function manage_in_patient($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('doctor_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		
		//create a new allotment only in available / unalloted beds. beds can be ward,cabin,icu,other types
		if ($param1 == 'create') {
			$data['bed_id']              = $this->input->post('bed_id');
			$data['patient_id']          = $this->input->post('patient_id');
			$data['allotment_timestamp'] = $this->input->post('allotment_timestamp');
			$data['discharge_timestamp'] = $this->input->post('discharge_timestamp');
			$data['allotment_time'] = $this->input->post('allotment_time');
			$data['discharge_time'] = $this->input->post('discharge_time');
			$this->db->insert('bed_allotment', $data);
			$this->session->set_flashdata('flash_message', get_phrase('bed_alloted'));
			$memessage = 'created';
                        $this->session->set_userdata('metoast', $memessage);
                        
                        redirect(base_url() . 'index.php?doctor/manage_in_patient', 'refresh');
		}
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['bed_id']              = $this->input->post('bed_id');
			$data['patient_id']          = $this->input->post('patient_id');
			$data['allotment_timestamp'] = $this->input->post('allotment_timestamp');
			$data['discharge_timestamp'] = $this->input->post('discharge_timestamp');
			$data['allotment_time'] = $this->input->post('allotment_time');
			$data['discharge_time'] = $this->input->post('discharge_time');
			
			
			$this->db->where('bed_id', $param3);
			$this->db->update('bed_allotment', $data);
			$this->session->set_flashdata('flash_message', get_phrase('in_patient_updated'));
			
                        $memessage = 'edited';
                        $this->session->set_userdata('metoast', $memessage);
                        
                        redirect(base_url() . 'index.php?doctor/manage_in_patient', 'refresh');
			
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('bed_allotment', array(
				'bed_allotment_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('bed_allotment_id', $param2);
			$this->db->delete('bed_allotment');
			$this->session->set_flashdata('flash_message', get_phrase('in_patient_deleted'));
			
                        $memessage = 'deleted';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?doctor/manage_in_patient', 'refresh');
		}
		$page_data['page_name']     = 'manage_in_patient';
                
		$page_data['page_title']    = get_phrase('manage_in_patient');
                $this->db->where(array('discharge_timestamp'=>'','discharge_time'=>''));
		$page_data['bed_allotment'] = $this->db->get('bed_allotment')->result_array();
		$this->load->view('index', $page_data);
	}    
        /***add patient ***/
	function add_new_patient()
	{
		if ($this->session->userdata('doctor_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'add_new_patient';
		$page_data['page_title'] = get_phrase('add_new_patient');
		$this->load->view('index', $page_data);
	}
        
          function manage_email_sent($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('doctor_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
                if($param1 == 'delete_email' && $param2 == 'sent')
                {
                  $this->db->where('message_id',$param3);
                  $this->db->delete('message');
                  redirect(base_url() . 'index.php?doctor/manage_email_sent', 'refresh');
                }
                
               
           
                $this->db->where(array('user_from_type'=>'2', 'user_from_id'=>$this->session->userdata('doctor_id')));
                $this->db->order_by('message_id' , 'desc'); 
                $page_data['emails'] = $this->db->get('message_sent')->result_array();
                $page_data['typeofbox'] = 'sent';
                $this->db->where(array('user_from_type'=>'2', 'user_from_id'=>$this->session->userdata('doctor_id')));
                 
                $this->db->limit(1);
                $page_data['lastemails'] = $this->db->get('message_sent')->result_array(); 
                 
                
		$page_data['page_name']  = 'manage_email_sent';
                $page_data['doctor_id'] = $this->session->userdata('doctor_id');
                
                
                
		$page_data['page_title'] = get_phrase('manage_email_sent');
		$this->load->view('index', $page_data);
	}
        
           function manage_email()
	{
		if ($this->session->userdata('doctor_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		
                if($param1 == 'delete_email' && $param2 == 'inbox')
                {
                  $this->db->where('message_id',$param3);
                  $this->db->delete('message');
                  redirect(base_url() . 'index.php?doctor/manage_email', 'refresh');
                }
                
                $page_data['doctor_id'] = $this->session->userdata('doctor_id');
                $this->db->where(array('user_to_type'=>'2', 'user_to_id'=>$this->session->userdata('doctor_id')));
                $page_data['emails'] = $this->db->get('message')->result_array();
                $this->db->order_by('message_id' , 'desc');
                $page_data['typeofbox'] = 'inbox';
                
                $this->db->where(array('user_to_type'=>'2', 'user_to_id'=>$this->session->userdata('doctor_id')));
                $this->db->order_by('message_id' , 'desc');
                $this->db->limit(1);
                $page_data['lastemails'] = $this->db->get('message')->result_array();
                
                
                $page_data['page_name']  = 'manage_email';
		$page_data['page_title'] = get_phrase('manage_email');
		$this->load->view('index', $page_data);
	}
        
	/***Manage patients**/
	function manage_patient($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('doctor_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		if ($param1 == 'create') {
			$data['title'] = $this->input->post('title');
			$data['name']                      = $this->input->post('name');
			$data['email']                     = $this->input->post('email');
			$data['password']                  = $this->input->post('password');
			$data['address']                   = $this->input->post('address');
			$data['office_address']            = $this->input->post('address2');
			$data['religion']                  = $this->input->post('religion');
			$data['client_number']             = $this->input->post('clientno');
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
			redirect(base_url() . 'index.php?doctor/manage_patient', 'refresh');
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
                        redirect(base_url() . 'index.php?doctor/manage_patient', 'refresh');
			
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
                        redirect(base_url() . 'index.php?doctor/manage_patient', 'refresh');
		}
		$page_data['page_name']  = 'manage_patient';
		$page_data['page_title'] = get_phrase('manage_patient');
		$page_data['patients']   = $this->db->get('patient')->result_array();
		$this->load->view('index', $page_data);
	}
	
	/***MANAGE APPOINTMENTS******/
	function manage_appointment($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('doctor_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		
		if ($param1 == 'create') {
			$data['doctor_id']             = $this->input->post('doctor_id');
			$data['patient_id']            = $this->input->post('patient_id');
			$data['appointment_timestamp'] = $this->input->post('appointment_timestamp');
			$data['appointment_time'] = $this->input->post('appointment_time');
			$this->db->insert('appointment', $data);
			$this->session->set_flashdata('flash_message', get_phrase('appointment_created'));
			
                        $memessage = 'created';
			$this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?doctor/manage_appointment', 'refresh');
		}
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['doctor_id']             = $this->input->post('doctor_id');
			$data['patient_id']            = $this->input->post('patient_id');
			$data['appointment_timestamp'] = $this->input->post('appointment_timestamp');
			$data['appointment_time'] = $this->input->post('appointment_time');
			$this->db->where('appointment_id', $param3);
			$this->db->update('appointment', $data);
			$this->session->set_flashdata('flash_message', get_phrase('appointment_updated'));
			
                        $memessage = 'edited';
			$this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?doctor/manage_appointment', 'refresh');
			
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('appointment', array(
				'appointment_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('appointment_id', $param2);
			$this->db->delete('appointment');
			$this->session->set_flashdata('flash_message', get_phrase('appointment_deleted'));
			
                        $memessage = 'deleted';
			$this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?doctor/manage_appointment', 'refresh');
		}
		$page_data['page_name']    = 'manage_appointment';
		$page_data['page_title']   = get_phrase('manage_appointment');
		$page_data['appointments'] = $this->db->get_where('appointment', array(
			'doctor_id' => $this->session->userdata('doctor_id')
		))->result_array();
		$this->load->view('index', $page_data);
	}
	
	/***MANAGE PRESCRIPTIONS******/
	function manage_prescription($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('doctor_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		
		if ($param1 == 'create') {
			$data['doctor_id']                  = $this->input->post('doctor_id');
			$data['patient_id']                 = $this->input->post('patient_id');
			$data['creation_timestamp']         = strtotime(date('Y-m-d') . ' ' . date('H:i:s'));
			$data['case_history']               = $this->input->post('case_history');
			$data['medication']                 = $this->input->post('medication');
			$data['medication_from_pharmacist'] = $this->input->post('medication_from_pharmacist');
			$data['description']                = $this->input->post('description');
			
			$this->db->insert('prescription', $data);
			$this->session->set_flashdata('flash_message', get_phrase('prescription_created'));
			
                        $memessage = 'created';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?doctor/manage_prescription', 'refresh');
		}
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['doctor_id']                  = $this->input->post('doctor_id');
			$data['patient_id']                 = $this->input->post('patient_id');
			$data['case_history']               = $this->input->post('case_history');
			$data['medication']                 = $this->input->post('medication');
			$data['medication_from_pharmacist'] = $this->input->post('medication_from_pharmacist');
			$data['description']                = $this->input->post('description');
			
			$this->db->where('prescription_id', $param3);
			$this->db->update('prescription', $data);
			$this->session->set_flashdata('flash_message', get_phrase('prescription_updated'));
			$memessage = 'edited';
			$this->session->set_userdata('metoast', $memessage);
                        
                        redirect(base_url() . 'index.php?doctor/manage_prescription', 'refresh');
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('prescription', array(
				'prescription_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('prescription_id', $param2);
			$this->db->delete('prescription');
			$this->session->set_flashdata('flash_message', get_phrase('prescription_deleted'));
			
                        $memessage = 'deleted';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?doctor/manage_prescription', 'refresh');
		}
		$page_data['page_name']     = 'manage_prescription';
		$page_data['page_title']    = get_phrase('manage_prescription');
		$page_data['prescriptions'] = $this->db->get('prescription')->result_array();
		$this->load->view('index', $page_data);
	}
	
	
	/*******VIEW BLOOD BANK	********/
	function view_blood_bank($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('doctor_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		$page_data['page_name']    = 'view_blood_bank';
		$page_data['page_title']   = get_phrase('view_blood_bank');
		$page_data['blood_donors'] = $this->db->get('blood_donor')->result_array();
		$page_data['blood_bank']   = $this->db->get('blood_bank')->result_array();
		$this->load->view('index', $page_data);
	}
	
	// maange the risk assessment page and their form

function manage_risk_assessment($param1 = '', $param2 = '', $param3 = '')
{
if ($this->session->userdata('doctor_login') != 1)
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
			redirect(base_url() . 'index.php?doctor/manage_risk_assessment', 'refresh');
	
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
//$data['nurse_id'] = $this->session->userdata('nurse_id');

$this->db->where('risk_assessment_id', $param3);
			$this->db->update('risk_assessment', $data);
			$this->session->set_flashdata('flash_message', get_phrase('risk assessment updated'));
			redirect(base_url() . 'index.php?doctor/manage_risk_assessment', 'refresh');	
}else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('risk_assessment', array(
				'risk_assessment_id' => $param2
			))->result_array();
		}
if ($param1 == 'delete') {
			$this->db->where('risk_assessment_id', $param2);
			$this->db->delete('risk_assessment');
			$this->session->set_flashdata('flash_message', get_phrase('Risk Assessment Deleted'));
			redirect(base_url() . 'index.php?doctor/manage_risk_assessment', 'refresh');
		}
        $page_data['page_name']  = 'manage_risk_assessment';
		$page_data['page_title'] = get_phrase('manage risk assessment');
		$page_data['risk_assessment']       = $this->db->get('risk_assessment')->result_array();
		$this->load->view('index', $page_data);	
}

function manage_vital_assessment($param1 = '', $param2 = '', $param3 = '')
{
if ($this->session->userdata('doctor_login') != 1)
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
$data['assessment_date']  = $this->input->post('assessment_date');
$data['assessment_time']  = $this->input->post('assessment_time');
$this->db->insert('vital_assessment', $data);
			$this->session->set_flashdata('flash_message', get_phrase('vital assessment added'));
			$memessage = 'created';
			$this->session->set_userdata('metoast', $memessage);
                        
                        redirect(base_url() . 'index.php?doctor/manage_vital_assessment', 'refresh');	
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
                        redirect(base_url() . 'index.php?doctor/manage_vital_assessment', 'refresh');	
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
redirect(base_url() . 'index.php?doctor/manage_vital_assessment', 'refresh');	
}
$page_data['page_name']  = 'manage_vital_assessment';
		$page_data['page_title'] = get_phrase('manage vital assessment');
		$page_data['vital_assessment']       = $this->db->get('vital_assessment')->result_array();
		$this->load->view('index', $page_data);		
}

	/******ALLOT / DISCHARGE BED TO PATIENTS*****/
	function manage_bed_allotment($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('doctor_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		
		//create a new allotment only in available / unalloted beds. beds can be ward,cabin,icu,other types
		if ($param1 == 'create') {
			$data['bed_id']              = $this->input->post('bed_id');
			$data['patient_id']          = $this->input->post('patient_id');
			$data['allotment_timestamp'] = $this->input->post('allotment_timestamp');
			$data['discharge_timestamp'] = $this->input->post('discharge_timestamp');
			$data['allotment_time'] = $this->input->post('allotment_time');
			$data['discharge_time'] = $this->input->post('discharge_time');
			$this->db->insert('bed_allotment', $data);
			$this->session->set_flashdata('flash_message', get_phrase('bed_alloted'));
			$memessage = 'created';
                        $this->session->set_userdata('metoast', $memessage);
                        
                        redirect(base_url() . 'index.php?doctor/manage_bed_allotment', 'refresh');
		}
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['bed_id']              = $this->input->post('bed_id');
			$data['patient_id']          = $this->input->post('patient_id');
			$data['allotment_timestamp'] = $this->input->post('allotment_timestamp');
			$data['discharge_timestamp'] = $this->input->post('discharge_timestamp');
			$data['allotment_time'] = $this->input->post('allotment_time');
			$data['discharge_time'] = $this->input->post('discharge_time');
			
			
			$this->db->where('bed_id', $param3);
			$this->db->update('bed_allotment', $data);
			$this->session->set_flashdata('flash_message', get_phrase('bed_allotment_updated'));
			
                        $memessage = 'edited';
                        $this->session->set_userdata('metoast', $memessage);
                        
                        redirect(base_url() . 'index.php?doctor/manage_bed_allotment', 'refresh');
			
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('bed_allotment', array(
				'bed_allotment_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('bed_allotment_id', $param2);
			$this->db->delete('bed_allotment');
			$this->session->set_flashdata('flash_message', get_phrase('bed_allotment_deleted'));
			
                        $memessage = 'deleted';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?doctor/manage_bed_allotment', 'refresh');
		}
		$page_data['page_name']     = 'manage_bed_allotment';
		$page_data['page_title']    = get_phrase('manage_bed_allotment');
		$page_data['bed_allotment'] = $this->db->get('bed_allotment')->result_array();
		$this->load->view('index', $page_data);
	}
	
	
	/***CREATE REPORT BIRTH,DEATH,OPERATION**/
	function manage_report($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('doctor_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		
		//create a new report baby birth,patient death, operation , other types
		if ($param1 == 'create') {
			$data['type']        = $this->input->post('type');
			$data['description'] = $this->input->post('description');
			$data['timestamp']   = $this->input->post('timestamp');
			$data['realtime']   = $this->input->post('time');
			$data['doctor_id']   = $this->input->post('doctor_id');
			$data['patient_id']  = $this->input->post('patient_id');
			$this->db->insert('report', $data);
			$this->session->set_flashdata('flash_message', get_phrase('report_created'));
			
                        $memessage = 'created';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?doctor/manage_report', 'refresh');
		}
		if ($param1 == 'delete') {
			$this->db->where('report_id', $param2);
			$this->db->delete('report');
			$this->session->set_flashdata('flash_message', get_phrase('report_deleted'));
			
                        $memessage = 'deleted';
                        $this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?doctor/manage_report', 'refresh');
		}
		$page_data['page_name']  = 'manage_report';
		$page_data['page_title'] = get_phrase('manage_report');
		$page_data['reports']    = $this->db->get('report')->result_array();
		$this->load->view('index', $page_data);
	}
	
	
	/******MANAGE OWN PROFILE AND CHANGE PASSWORD***/
	function manage_profile($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('doctor_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		if ($param1 == 'update_profile_info') {
			$data['name']    = $this->input->post('name');
			$data['email']   = $this->input->post('email');
			$data['address'] = $this->input->post('address');
			$data['phone']   = $this->input->post('phone');
			$data['profile'] = $this->input->post('profile');
			$data['sex']       = $this->input->post('sex');
                        $data['twitter']       = $this->input->post('twitter');
                        $data['facebook']       = $this->input->post('facebook');
                        $data['linkedin']       = $this->input->post('linkedin');
                        $data['skype']       = $this->input->post('skype');
			
			$this->db->where('doctor_id', $this->session->userdata('doctor_id'));
			$this->db->update('doctor', $data);
			$this->session->set_flashdata('flash_message', get_phrase('profile_updated'));
			redirect(base_url()  . 'index.php?doctor/manage_profile/', 'refresh');
		}
		if ($param1 == 'change_password') {
			$data['password']             = $this->input->post('password');
			$data['new_password']         = $this->input->post('new_password');
			$data['confirm_new_password'] = $this->input->post('confirm_new_password');
			
			$current_password = $this->db->get_where('doctor', array(
				'doctor_id' => $this->session->userdata('doctor_id')
			))->row()->password;
                        if($current_password != $data['password'])
                        {
                            $memessage = 'invalidold';
			$this->session->set_userdata('metoast', $memessage); 
                        }
			else	if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
				$this->db->where('doctor_id', $this->session->userdata('doctor_id'));
				$this->db->update('doctor', array(
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
			redirect(base_url() . 'index.php?doctor/manage_profile/', 'refresh');
		}
		$page_data['page_name']    = 'manage_profile';
		$page_data['page_title']   = get_phrase('manage_profile');
		$page_data['edit_profile'] = $this->db->get_where('doctor', array(
			'doctor_id' => $this->session->userdata('doctor_id')
		))->result_array();
		$this->load->view('index', $page_data);
	}
}