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
 
class customercare extends CI_controller
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
	
	/***Default function, redirects to login page if no customercare logged in yet***/
	public function index()
	{
		if ($this->session->userdata('customercare_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		if ($this->session->userdata('customercare_login') == 1)
			redirect(base_url() . 'index.php?customercare/dashboard', 'refresh');
	}	
        
          /***patient Landing ***/
	function patient_landing()
	{
		if ($this->session->userdata('customercare_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'patient_landing';
		$page_data['page_title'] = get_phrase('patient_landing');
		$this->load->view('index', $page_data);
	}
               function view_single_patient($param1 = '', $param2 = '', $param3 = '')
        {
          if ($this->session->userdata('customercare_login') != 1)
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
        function add_new_patient()
	{
		if ($this->session->userdata('customercare_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'add_new_patient';
		$page_data['page_title'] = get_phrase('add_new_patient');
		$this->load->view('index', $page_data);
	}
        
        /***add patient ***/
          function manage_email_sent($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('customercare_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
                if($param1 == 'delete_email' && $param2 == 'sent')
                {
                  $this->db->where('message_id',$param3);
                  $this->db->delete('message');
                  redirect(base_url() . 'index.php?customercare/manage_email_sent', 'refresh');
                }
                
               
           
                $this->db->where(array('user_from_type'=>'3', 'user_from_id'=>$this->session->userdata('customercare_id')));
                $this->db->order_by('message_id' , 'desc'); 
                $page_data['emails'] = $this->db->get('message_sent')->result_array();
                $page_data['typeofbox'] = 'sent';
                $this->db->where(array('user_from_type'=>'3', 'user_from_id'=>$this->session->userdata('customercare_id')));
                 
                $this->db->limit(1);
                $page_data['lastemails'] = $this->db->get('message_sent')->result_array(); 
                 
                
		$page_data['page_name']  = 'manage_email_sent';
                $page_data['customercare_id'] = $this->session->userdata('customercare_id');
                
                
                
		$page_data['page_title'] = get_phrase('manage_email_sent');
		$this->load->view('index', $page_data);
	}
        
        // manage email
          function manage_email()
	{
		if ($this->session->userdata('customercare_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
                
                
		
                $page_data['customercare_id'] = $this->session->userdata('customercare_id');
                $this->db->where(array('user_to_type'=>'3', 'user_to_id'=>$this->session->userdata('customercare_id')));
                $this->db->order_by('message_id' , 'desc'); 
                $page_data['emails'] = $this->db->get('message')->result_array();
                
                $page_data['typeofbox'] = 'inbox';
                
                $this->db->where(array('user_to_type'=>'3', 'user_to_id'=>$this->session->userdata('customercare_id')));
                $this->db->order_by('message_id' , 'desc'); 
                $this->db->limit(1);
                $page_data['lastemails'] = $this->db->get('message')->result_array();
                
                $page_data['page_name']  = 'manage_email';
		$page_data['page_title'] = get_phrase('manage_email');
		$this->load->view('index', $page_data);
	}
        
        
        
	function dashboard()
	{
		if ($this->session->userdata('customercare_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		$page_data['page_name']  = 'dashboard';
		$page_data['page_title'] = get_phrase('customer_care_dashboard');
		$this->load->view('index', $page_data);
	}
	/******MANAGE OWN PROFILE AND CHANGE PASSWORD***/
	function manage_profile($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('customercare_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		if ($param1 == 'update_profile_info') {
			$data['name']    = $this->input->post('name');
			$data['email']   = $this->input->post('email');
			$data['address'] = $this->input->post('address');
			$data['phone']   = $this->input->post('phone');
			
			$this->db->where('customercare_id', $this->session->userdata('customercare_id'));
			$this->db->update('customercare', $data);
			$this->session->set_flashdata('flash_message', get_phrase('profile_updated'));
                        $memessage = 'updated';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?customercare/manage_profile/', 'refresh');
		}
		if ($param1 == 'change_password') {
			$data['password']             = $this->input->post('password');
			$data['new_password']         = $this->input->post('new_password');
			$data['confirm_new_password'] = $this->input->post('confirm_new_password');
			
			$current_password = $this->db->get_where('customercare', array(
				'customercare_id' => $this->session->userdata('customercare_id')
			))->row()->password;
                         if($current_password != $data['password'])
                        {
                            $memessage = 'invalidold';
			$this->session->set_userdata('metoast', $memessage); 
                        }
			else if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
				$this->db->where('customercare_id', $this->session->userdata('customercare_id'));
				$this->db->update('customercare', array(
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
			redirect(base_url() . 'index.php?customercare/manage_profile/', 'refresh');
		}
		$page_data['page_name']    = 'manage_profile';
		$page_data['page_title']   = get_phrase('manage_profile');
		$page_data['edit_profile'] = $this->db->get_where('customercare', array(
			'customercare_id' => $this->session->userdata('customercare_id')
		))->result_array();
		$this->load->view('index', $page_data);
	}
	
	// View Appointment
	function view_appointment($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('customercare_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		$page_data['page_name']    = 'view_appointment';
		$page_data['page_title']   = get_phrase('view_appointment');
		$page_data['appointments'] = $this->db->get('appointment')->result_array();
		$this->load->view('index', $page_data);
	}
	
	/*******VIEW BED STATUS	********/
	function view_bed_status($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('customercare_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		$page_data['page_name']      = 'view_bed_status';
		$page_data['page_title']     = get_phrase('view_blood_bank');
		$page_data['bed_allotments'] = $this->db->get('bed_allotment')->result_array();
		$page_data['beds']           = $this->db->get('bed')->result_array();
		$this->load->view('index', $page_data);
	}
	
/***Manage patients**/
	function manage_patient($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('customercare_login') != 1)
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
			redirect(base_url() . 'index.php?customercare/manage_patient', 'refresh');
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
			redirect(base_url() . 'index.php?customercare/manage_patient', 'refresh');
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
			redirect(base_url() . 'index.php?customercare/manage_patient', 'refresh');
		}
		$page_data['page_name']  = 'manage_patient';
		$page_data['page_title'] = get_phrase('manage_patient');
		$page_data['patients']   = $this->db->get('patient')->result_array();
		$this->load->view('index', $page_data);
	}
	
	
function manage_patient_billing($param1 = '')
{
$page_data['page_name']  = 'manage_patient_billing';
$page_data['page_title'] = get_phrase('manage_patient_billing');
$page_data['patient_billing']   = $this->db->get('patient_billing')->result_array();
$this->load->view('index', $page_data);	
}
	
	
}

?>




