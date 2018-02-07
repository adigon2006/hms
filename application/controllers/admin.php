		<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/*	
 *	@author : Adigun Adekunle
 *	date	: 1 August, 2017
 *	
 *	Hospital Management system
 *	
 */

class Admin extends CI_Controller
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
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		if ($this->session->userdata('admin_login') == 1)
			redirect(base_url() . 'index.php?admin/dashboard', 'refresh');
	}
        
        function manage_payment_integration($param1 = '', $param2 = '', $param3 = '')
        {
          if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');  
          
                
          if($param1 == 'paystack' && $param2 == 'update')
          {
           $data['secret_key_test']        = $this->input->post('demosk');
           $data['public_key_test'] =       $this->input->post('demopk');
            $data['live_secret_key']        = $this->input->post('livesk');
           $data['live_public_key'] = $this->input->post('livepk');
           $this->db->where('payment_integration_id', $param3);
           $this->db->update('payment_integration', $data); 
            $memessage = 'edited';
                       
			$this->session->set_userdata('metoast', $memessage); 
           redirect(base_url() . 'index.php?admin/manage_payment_integration', 'refresh');
          }
                
                $page_data['integrationdetails'] = $this->db->get_where('payment_integration', array(
				'payment_integration_id' => 1
			))->result_array();   
                $page_data['page_name']   = 'manage_payment_integration';
		$page_data['page_title']  = get_phrase('manage_payment_integration');
		
		$this->load->view('index', $page_data); 
        }
        
         function view_single_patient($param1 = '', $param2 = '', $param3 = '')
        {
          if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		
		if ($param1 == 'view') {
			$data = $this->input->post('patient_id');
			if($data == "")
			{
			redirect(base_url() . 'index.php?admin/patient_landing', 'refresh');	
			}
			
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
        
        function view_patient_profile($param1 = '', $param2 = '')
        {
			//global $data;
			if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			if ($param1 == 'view'){
			$patid = $this->input->post('patient_id');	
//			$data = $this->input->post('patient_id');
				
			if($patid != "")
			{
			$data = $this->input->post('patient_id');
			}
			else if($patid == "")
			{
			$data = $param2;
			}
//			$data = $this->input->post('patient_id');
			
			if($data == "")
			{
			redirect(base_url() . 'index.php?admin/patient_landing', 'refresh');	
			}

// patient id
$page_data['patient_id'] = $data;				
// fetch personal details patientdetails				
$page_data['patientdetails'] = $this->db->get_where('patient',array('patient_id'=>$data))->result_array();
// fetch admittance histoory				
$page_data['bedallotments']	= $this->db->get_where('bed_allotment',array('patient_id'=>$data))->result_array();
// fetch patient visits details and appointmens				
$page_data['patient_visits'] = $this->db->get_where('visit_details',array('patient_id'=>$data))->result_array();
// fetch prescriptions split between doctor, laboratorist and pharmacist			
$this->db->order_by('prescription_id' , 'desc');
$page_data['prescriptions'] = $this->db->get_where('prescription',array('patient_id'=>$data))->result_array();
// payment details of each patient 
$page_data['payments'] = $this->db->get_where('payment',array('patient_id'=>$data))->result_array();
// list of recemt  patient appointment
$this->db->order_by('appointment_id' , 'desc');
$this->db->limit(10);				
$page_data['appointments'] = $this->db->get_where('appointment',array('patient_id'=>$data))->result_array();

// list of all patient appointment
$this->db->order_by('appointment_id' , 'desc');			
$page_data['patientappointments'] = $this->db->get_where('appointment',array('patient_id'=>$data))->result_array();
	
				// list of operation history
$page_data['operationreports'] = $this->db->get_where('report',array('patient_id'=>$data,'type'=>'operation'))->result_array();
				
				// list of birth history
$page_data['birthreports'] = $this->db->get_where('report',array('patient_id'=>$data,'type'=>'operation'))->result_array();
			}
      		$page_data['page_name'] = 'view_patient_profile'; 
			$page_data['page_title']  = get_phrase('view_single_patient');
			$this->load->view('index',$page_data);
        }

// special addition for patient profile
	// add a new appointment
	function add_patient_appointment()
	{
			$data['doctor_id']             = $this->input->post('doctor_id');
			$data['patient_id']            = $this->input->post('patient_id');
			$data['appointment_timestamp'] = $this->input->post('appointment_timestamp');
			$data['appointment_time'] = $this->input->post('appointment_time');
			$this->db->insert('appointment', $data);
			$this->session->set_flashdata('flash_message', get_phrase('appointment_created'));
			$memessage = 'createdappoinment';
			$this->session->set_userdata('metoast', $memessage);
                        redirect(base_url() . 'index.php?admin/view_patient_profile/view/'.$data['patient_id'], 'refresh');	
	}
	
	// add new operation
	function add_operation_history()
	{
			$data['type']        = $this->input->post('type');
			$data['description'] = $this->input->post('description');
			$data['timestamp']   = $this->input->post('timestamp');
			$data['realtime']   = $this->input->post('time');
			$data['doctor_id']   = $this->input->post('doctor_id');
			$data['patient_id']  = $this->input->post('patient_id');
			$this->db->insert('report', $data);	
		redirect(base_url() . 'index.php?admin/view_patient_profile/view/'.$data['patient_id'], 'refresh');	
	}
        
        function add_new_diagnosis()
        {
         $data['doctor_id'] = $this->input->post('doctor_id');
         $data['patient_id'] = $this->input->post('patient_id');
         $data['case_history'] = $this->input->post('case_history');
         $data['description'] = $this->input->post('description');
         $data['creation_timestamp'] = strtotime(date('Y-m-d') . ' ' . date('H:i:s'));
         $this->db->insert('prescription',$data);
         redirect(base_url().'index.php?admin//view_patient_profile/view/'.$data['patient_id'], 'refresh');
        }
	
	// add birth history
		function add_birth_history()
	{
			$data['type']        = $this->input->post('type');
			$data['description'] = $this->input->post('description');
			$data['timestamp']   = $this->input->post('timestamp');
			$data['realtime']   = $this->input->post('time');
			$data['doctor_id']   = $this->input->post('doctor_id');
			$data['patient_id']  = $this->input->post('patient_id');
			$this->db->insert('report', $data);	
		redirect(base_url() . 'index.php?admin/view_patient_profile/view/'.$data['patient_id'], 'refresh');	
	}
	
	// end of special additions for patient pprofile	
        function send_message()
        {
                $page_data['page_name']   = 'manage_email';
		$page_data['page_title']  = get_phrase('manage_email');
		
		$this->load->view('index', $page_data); 
  
        }
	
	/***ADMIN DASHBOARD***/
	function dashboard()
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'dashboard';
		$page_data['page_title'] = get_phrase('admin_dashboard');
		$this->load->view('index', $page_data);
	}
        
        /***ADMIN DASHBOARD***/
	function manage_calendar()
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'manage_calendar';
		$page_data['page_title'] = get_phrase('manage_calendar');
		$this->load->view('index', $page_data);
	}
        
        /***patient Landing ***/
	function patient_landing()
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'patient_landing';
		$page_data['page_title'] = get_phrase('patient_landing');
		$this->load->view('index', $page_data);
	}
        
        /***add patient ***/
	function add_new_patient()
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'add_new_patient';
		$page_data['page_title'] = get_phrase('add_new_patient');
		$this->load->view('index', $page_data);
	}
        
        /***add patient ***/
	function add_new_doctor()
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'add_new_doctor';
		$page_data['page_title'] = get_phrase('add_new_doctor');
		$this->load->view('index', $page_data);
	}
        
        function add_new_laboratorist()
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'add_new_laboratorist';
		$page_data['page_title'] = get_phrase('add_new_laboratorist');
		$this->load->view('index', $page_data);
	}
        
          function manage_email_sent($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
                if($param1 == 'delete_email' && $param2 == 'sent')
                {
                  $this->db->where('message_id',$param3);
                  $this->db->delete('message');
                  redirect(base_url() . 'index.php?admin/manage_email_sent', 'refresh');
                }
                
               
           
                $this->db->where(array('user_from_type'=>'1', 'user_from_id'=>$this->session->userdata('admin_id')));
                $this->db->order_by('message_id' , 'desc'); 
                $page_data['emails'] = $this->db->get('message_sent')->result_array();
                $page_data['typeofbox'] = 'sent';
                $this->db->where(array('user_from_type'=>'1', 'user_from_id'=>$this->session->userdata('admin_id')));
                 
                $this->db->limit(1);
                $page_data['lastemails'] = $this->db->get('message_sent')->result_array(); 
                 
                
		$page_data['page_name']  = 'manage_email_sent';
                $page_data['admin_id'] = $this->session->userdata('admin_id');
                
                
                
		$page_data['page_title'] = get_phrase('manage_email_sent');
		$this->load->view('index', $page_data);
	}
        
          function manage_email($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
                if($param1 == 'delete_email' && $param2 == 'inbox')
                {
                  $this->db->where('message_id',$param3);
                  $this->db->delete('message');
                  redirect(base_url() . 'index.php?admin/manage_email', 'refresh');
                }
                
               
           
                $this->db->where(array('user_to_type'=>'1', 'user_to_id'=>$this->session->userdata('admin_id')));
                $this->db->order_by('message_id' , 'desc'); 
                $page_data['emails'] = $this->db->get('message')->result_array();
                $page_data['typeofbox'] = 'inbox';
                $this->db->where(array('user_to_type'=>'1', 'user_to_id'=>$this->session->userdata('admin_id')));
                $this->db->order_by('message_id' , 'desc'); 
                $this->db->limit(1);
                $page_data['lastemails'] = $this->db->get('message')->result_array(); 
                 
                
		$page_data['page_name']  = 'manage_email';
                $page_data['admin_id'] = $this->session->userdata('admin_id');
                
                
                
		$page_data['page_title'] = get_phrase('manage_email');
		$this->load->view('index', $page_data);
	}
        
        
          function add_new_customercare()
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'add_new_customercare';
		$page_data['page_title'] = get_phrase('add_new_customercare');
		$this->load->view('index', $page_data);
	}
        
        function add_new_nurse()
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'add_new_nurse';
		$page_data['page_title'] = get_phrase('add_new_nurse');
		$this->load->view('index', $page_data);
	}
        
           function add_new_pharmacist()
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'add_new_pharmacist';
		$page_data['page_title'] = get_phrase('add_new_pharmacist');
		$this->load->view('index', $page_data);
	}
        
         function add_new_accountant()
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'add_new_accountant';
		$page_data['page_title'] = get_phrase('add_new_accountant');
		$this->load->view('index', $page_data);
	}
        
        /***manage users***/
	function manage_user()
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'manage_user';
		$page_data['page_title'] = get_phrase('manage_user');
		$this->load->view('index', $page_data);
	}
         /***manage users***/
	function manage_hospital()
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		$page_data['page_name']  = 'manage_hospital';
		$page_data['page_title'] = get_phrase('manage_hospital');
		$this->load->view('index', $page_data);
	}
	
	/***DEPARTMENTS OF DOCTORS********/
	function manage_department($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		if ($param1 == 'create') {
			$data['name']        = $this->input->post('name');
			$data['description'] = $this->input->post('description');
			$this->db->insert('department', $data);
			$this->session->set_flashdata('flash_message', get_phrase('department_opened'));
                        $memessage = 'created';
			$this->session->set_userdata('metoast', $memessage); 
			redirect(base_url() . 'index.php?admin/manage_department', 'refresh');
		}
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['name']        = $this->input->post('name');
			$data['description'] = $this->input->post('description');
			$this->db->where('department_id', $param3);
			$this->db->update('department', $data);
			$this->session->set_flashdata('flash_message', get_phrase('department_updated'));
                        $memessage = 'edited';
                       
			$this->session->set_userdata('metoast', $memessage); 
			
			redirect(base_url() . 'index.php?admin/manage_department', 'refresh');
			
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('department', array(
				'department_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('department_id', $param2);
			$this->db->delete('department');
			$this->session->set_flashdata('flash_message', get_phrase('department_deleted'));
                         $memessage = 'deleted';
                       
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_department', 'refresh');
		}
		$page_data['page_name']   = 'manage_department';
		$page_data['page_title']  = get_phrase('manage_department');
		$page_data['departments'] = $this->db->get('department')->result_array();
		$this->load->view('index', $page_data);
		
	}
	/***Manage doctors**/
	function manage_doctor($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		if ($param1 == 'create') {
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $doctorexist = $this->db->count_all_results('doctor');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $adminexist = $this->db->count_all_results('admin');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $patientexist = $this->db->count_all_results('patient');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $accountantexist = $this->db->count_all_results('accountant');
                    
                     $this->db->where(array('email'=>$this->input->post('email')));
                    $nurseexist = $this->db->count_all_results('nurse');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $pharmacistexist = $this->db->count_all_results('pharmacist');
                    
                     $this->db->where(array('email'=>$this->input->post('email')));
                    $laboratoristexist = $this->db->count_all_results('pharmacist');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $customercareexist = $this->db->count_all_results('customercare');
                    
                    if($doctorexist > 0 || $adminexist > 0 || $patientexist > 0 || $accountantexist > 0 || $nurseexist > 0 || $pharmacistexist > 0 || $laboratoristexist > 0 || $customercareexist > 0)
                    {  
                     $memessage = 'inuse';
                     $this->session->set_userdata('metoast', $memessage);  
                     $this->session->set_userdata('name', $this->input->post('name'));
                     $this->session->set_userdata('email',$this->input->post('email'));
		     $this->session->set_userdata('address',$this->input->post('address'));
                     $this->session->set_userdata('phone',$this->input->post('phone'));
                     $this->session->set_userdata('department_id',$this->input->post('department_id'));
		     $this->session->set_userdata('profile',$this->input->post('profile'));
                     $this->session->set_userdata('sex',$this->input->post('sex'));
                     $this->session->set_userdata('twitter',$this->input->post('twitter'));
                     $this->session->set_userdata('facebook',$this->input->post('facebook'));
                     $this->session->set_userdata('linkedin',$this->input->post('linkedin'));
                     $this->session->set_userdata('skype',$this->input->post('skype'));
                     redirect(base_url() . 'index.php?admin/add_new_doctor', 'refresh');
                    }
                    else 
                    {
			$data['name']          = $this->input->post('name');
			$data['email']         = $this->input->post('email');
			$data['password']      = $this->input->post('password');
			$data['address']       = $this->input->post('address');
			$data['phone']         = $this->input->post('phone');
			$data['department_id'] = $this->input->post('department_id');
			$data['profile']       = $this->input->post('profile');
                        $data['sex']       = $this->input->post('sex');
                        $data['twitter']       = $this->input->post('twitter');
                        $data['facebook']       = $this->input->post('facebook');
                        $data['linkedin']       = $this->input->post('linkedin');
                        $data['skype']       = $this->input->post('skype');
			$this->db->insert('doctor', $data);
			$this->email_model->account_opening_email('doctor', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
			$this->session->set_flashdata('flash_message', get_phrase('account_opened'));
			   $memessage = 'created';
			$this->session->set_userdata('metoast', $memessage); 
			redirect(base_url() . 'index.php?admin/manage_doctor', 'refresh');
		
                    }
                    }
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['name']          = $this->input->post('name');
			$data['email']         = $this->input->post('email');
			$data['password']      = $this->input->post('password');
			$data['address']       = $this->input->post('address');
			$data['phone']         = $this->input->post('phone');
			$data['department_id'] = $this->input->post('department_id');
			$data['profile']       = $this->input->post('profile');
			 $data['sex']       = $this->input->post('sex');
                        $data['twitter']       = $this->input->post('twitter');
                        $data['facebook']       = $this->input->post('facebook');
                        $data['linkedin']       = $this->input->post('linkedin');
                        $data['skype']       = $this->input->post('skype');
			$this->db->where('doctor_id', $param3);
			$this->db->update('doctor', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
			  $memessage = 'edited';
                       
			$this->session->set_userdata('metoast', $memessage); 
			redirect(base_url() . 'index.php?admin/manage_doctor', 'refresh');
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('doctor', array(
				'doctor_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('doctor_id', $param2);
			$this->db->delete('doctor');
			$this->session->set_flashdata('flash_message', get_phrase('account_deleted'));
			 $memessage = 'deleted';
                       
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_doctor', 'refresh');
		}
		$page_data['page_name']  = 'manage_doctor';
		$page_data['page_title'] = get_phrase('manage_doctor');
		$page_data['doctors']    = $this->db->get('doctor')->result_array();
		$this->load->view('index', $page_data);
		
	}
	
	/***Manage patients**/
	function manage_patient($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		if ($param1 == 'create') {
                    
                    // check if email exist before creating
                    $this->db->where(array('email'=>$this->input->post('email')));
                    // $this->db->count_all_results('message');
                    $ifexist = $this->db->count_all_results('message');
                    if($ifexist > 0)
                    {
                        
                     $memessage = 'inuse';
                     $this->session->set_userdata('metoast', $memessage);
			   
                    }
                    else if($ifexist == 0)
                    {
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
			redirect(base_url() . 'index.php?admin/manage_patient', 'refresh');
                    }
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
			redirect(base_url() . 'index.php?admin/manage_patient', 'refresh');
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
			redirect(base_url() . 'index.php?admin/manage_patient', 'refresh');
		}
		$page_data['page_name']  = 'manage_patient';
		$page_data['page_title'] = get_phrase('manage_patient');
		$page_data['patients']   = $this->db->get('patient')->result_array();
		$this->load->view('index', $page_data);
	}
	
	
	/***Manage nurses**/
	function manage_nurse($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		if ($param1 == 'create') {
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $doctorexist = $this->db->count_all_results('doctor');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $adminexist = $this->db->count_all_results('admin');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $patientexist = $this->db->count_all_results('patient');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $accountantexist = $this->db->count_all_results('accountant');
                    
                     $this->db->where(array('email'=>$this->input->post('email')));
                    $nurseexist = $this->db->count_all_results('nurse');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $pharmacistexist = $this->db->count_all_results('pharmacist');
                    
                     $this->db->where(array('email'=>$this->input->post('email')));
                    $laboratoristexist = $this->db->count_all_results('pharmacist');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $customercareexist = $this->db->count_all_results('customercare');
                    
                    if($doctorexist > 0 || $adminexist > 0 || $patientexist > 0 || $accountantexist > 0 || $nurseexist > 0 || $pharmacistexist > 0 || $laboratoristexist > 0 || $customercareexist > 0)
                    {  
                     $memessage = 'inuse';
                     $this->session->set_userdata('metoast', $memessage);  
                     $this->session->set_userdata('name', $this->input->post('name'));
                     $this->session->set_userdata('email',$this->input->post('email'));
		     $this->session->set_userdata('address',$this->input->post('address'));
                     $this->session->set_userdata('phone',$this->input->post('phone'));
                    // $this->session->set_userdata('department_id',$this->input->post('department_id'));
		     //$this->session->set_userdata('profile',$this->input->post('profile'));
                     $this->session->set_userdata('sex',$this->input->post('sex'));
                     $this->session->set_userdata('twitter',$this->input->post('twitter'));
                     $this->session->set_userdata('facebook',$this->input->post('facebook'));
                     $this->session->set_userdata('linkedin',$this->input->post('linkedin'));
                     $this->session->set_userdata('skype',$this->input->post('skype'));
                     redirect(base_url() . 'index.php?admin/add_new_nurse', 'refresh');
                    }
                    else 
                    {
			$data['name']     = $this->input->post('name');
			$data['email']    = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['address']  = $this->input->post('address');
			$data['phone']    = $this->input->post('phone');
                        $data['sex']       = $this->input->post('sex');
                        $data['twitter']       = $this->input->post('twitter');
                        $data['facebook']       = $this->input->post('facebook');
                        $data['linkedin']       = $this->input->post('linkedin');
                        $data['skype']       = $this->input->post('skype');
			$this->db->insert('nurse', $data);
			$this->email_model->account_opening_email('nurse', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
			$this->session->set_flashdata('flash_message', get_phrase('account_opened'));
			$memessage = 'created';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_nurse', 'refresh');
		}
                }
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['name']     = $this->input->post('name');
			$data['email']    = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['address']  = $this->input->post('address');
			$data['phone']    = $this->input->post('phone');
                        $data['sex']       = $this->input->post('sex');
                        $data['twitter']       = $this->input->post('twitter');
                        $data['facebook']       = $this->input->post('facebook');
                        $data['linkedin']       = $this->input->post('linkedin');
                        $data['skype']       = $this->input->post('skype');
			$this->db->where('nurse_id', $param3);
			$this->db->update('nurse', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
			 $memessage = 'edited';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_nurse', 'refresh');
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('nurse', array(
				'nurse_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('nurse_id', $param2);
			$this->db->delete('nurse');
			$this->session->set_flashdata('flash_message', get_phrase('account_deleted'));
			$memessage = 'deleted';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_nurse', 'refresh');
		}
		$page_data['page_name']  = 'manage_nurse';
		$page_data['page_title'] = get_phrase('manage_nurse');
		$page_data['nurses']     = $this->db->get('nurse')->result_array();
		$this->load->view('index', $page_data);
		
	}
	
	/***Manage pharmacists**/
	function manage_pharmacist($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		if ($param1 == 'create') {
                               $this->db->where(array('email'=>$this->input->post('email')));
                    $doctorexist = $this->db->count_all_results('doctor');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $adminexist = $this->db->count_all_results('admin');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $patientexist = $this->db->count_all_results('patient');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $accountantexist = $this->db->count_all_results('accountant');
                    
                     $this->db->where(array('email'=>$this->input->post('email')));
                    $nurseexist = $this->db->count_all_results('nurse');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $pharmacistexist = $this->db->count_all_results('pharmacist');
                    
                     $this->db->where(array('email'=>$this->input->post('email')));
                    $laboratoristexist = $this->db->count_all_results('pharmacist');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $customercareexist = $this->db->count_all_results('customercare');
                    
                    if($doctorexist > 0 || $adminexist > 0 || $patientexist > 0 || $accountantexist > 0 || $nurseexist > 0 || $pharmacistexist > 0 || $laboratoristexist > 0 || $customercareexist > 0)
                    {  
                     $memessage = 'inuse';
                     $this->session->set_userdata('metoast', $memessage);  
                     $this->session->set_userdata('name', $this->input->post('name'));
                     $this->session->set_userdata('email',$this->input->post('email'));
		     $this->session->set_userdata('address',$this->input->post('address'));
                     $this->session->set_userdata('phone',$this->input->post('phone'));
                    // $this->session->set_userdata('department_id',$this->input->post('department_id'));
		     //$this->session->set_userdata('profile',$this->input->post('profile'));
                     $this->session->set_userdata('sex',$this->input->post('sex'));
                     $this->session->set_userdata('twitter',$this->input->post('twitter'));
                     $this->session->set_userdata('facebook',$this->input->post('facebook'));
                     $this->session->set_userdata('linkedin',$this->input->post('linkedin'));
                     $this->session->set_userdata('skype',$this->input->post('skype'));
                     redirect(base_url() . 'index.php?admin/add_new_pharmacist', 'refresh');
                    }
                    else 
                    {
			$data['name']     = $this->input->post('name');
			$data['email']    = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['address']  = $this->input->post('address');
			$data['phone']    = $this->input->post('phone');
                        $data['sex']       = $this->input->post('sex');
                        $data['twitter']       = $this->input->post('twitter');
                        $data['facebook']       = $this->input->post('facebook');
                        $data['linkedin']       = $this->input->post('linkedin');
                        $data['skype']       = $this->input->post('skype');
			$this->db->insert('pharmacist', $data);
			$this->email_model->account_opening_email('pharmacist', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
			$this->session->set_flashdata('flash_message', get_phrase('account_opened'));
                        $memessage = 'created';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_pharmacist', 'refresh');
		}
                }
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['name']     = $this->input->post('name');
			$data['email']    = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['address']  = $this->input->post('address');
			$data['phone']    = $this->input->post('phone');
                        $data['sex']       = $this->input->post('sex');
                        $data['twitter']       = $this->input->post('twitter');
                        $data['facebook']       = $this->input->post('facebook');
                        $data['linkedin']       = $this->input->post('linkedin');
                        $data['skype']       = $this->input->post('skype');
			$this->db->where('pharmacist_id', $param3);
			$this->db->update('pharmacist', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
			   $memessage = 'edited';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_pharmacist', 'refresh');
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('pharmacist', array(
				'pharmacist_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('pharmacist_id', $param2);
			$this->db->delete('pharmacist');
			$this->session->set_flashdata('flash_message', get_phrase('account_deleted'));
			 $memessage = 'deleted';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_pharmacist', 'refresh');
		}
		$page_data['page_name']   = 'manage_pharmacist';
		$page_data['page_title']  = get_phrase('manage_pharmacist');
		$page_data['pharmacists'] = $this->db->get('pharmacist')->result_array();
		$this->load->view('index', $page_data);
		
	}
	
	/***Manage laboratorists**/
	function manage_laboratorist($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		if ($param1 == 'create') {
                     $this->db->where(array('email'=>$this->input->post('email')));
                    $doctorexist = $this->db->count_all_results('doctor');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $adminexist = $this->db->count_all_results('admin');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $patientexist = $this->db->count_all_results('patient');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $accountantexist = $this->db->count_all_results('accountant');
                    
                     $this->db->where(array('email'=>$this->input->post('email')));
                    $nurseexist = $this->db->count_all_results('nurse');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $pharmacistexist = $this->db->count_all_results('pharmacist');
                    
                     $this->db->where(array('email'=>$this->input->post('email')));
                    $laboratoristexist = $this->db->count_all_results('pharmacist');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $customercareexist = $this->db->count_all_results('customercare');
                    
                    if($doctorexist > 0 || $adminexist > 0 || $patientexist > 0 || $accountantexist > 0 || $nurseexist > 0 || $pharmacistexist > 0 || $laboratoristexist > 0 || $customercareexist > 0)
                    {  
                     $memessage = 'inuse';
                     $this->session->set_userdata('metoast', $memessage);  
                     $this->session->set_userdata('name', $this->input->post('name'));
                     $this->session->set_userdata('email',$this->input->post('email'));
		     $this->session->set_userdata('address',$this->input->post('address'));
                     $this->session->set_userdata('phone',$this->input->post('phone'));
                    // $this->session->set_userdata('department_id',$this->input->post('department_id'));
		     //$this->session->set_userdata('profile',$this->input->post('profile'));
                     $this->session->set_userdata('sex',$this->input->post('sex'));
                     $this->session->set_userdata('twitter',$this->input->post('twitter'));
                     $this->session->set_userdata('facebook',$this->input->post('facebook'));
                     $this->session->set_userdata('linkedin',$this->input->post('linkedin'));
                     $this->session->set_userdata('skype',$this->input->post('skype'));
                     redirect(base_url() . 'index.php?admin/add_new_laboratorist', 'refresh');
                    }
                    else 
                    {
			$data['name']     = $this->input->post('name');
			$data['email']    = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['address']  = $this->input->post('address');
			$data['phone']    = $this->input->post('phone');
                        $data['sex']       = $this->input->post('sex');
                        $data['twitter']       = $this->input->post('twitter');
                        $data['facebook']       = $this->input->post('facebook');
                        $data['linkedin']       = $this->input->post('linkedin');
                        $data['skype']       = $this->input->post('skype');
			$this->db->insert('laboratorist', $data);
			$this->email_model->account_opening_email('laboratorist', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
			$this->session->set_flashdata('flash_message', get_phrase('account_opened'));
                          $memessage = 'created';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_laboratorist', 'refresh');
		}
                }
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['name']     = $this->input->post('name');
			$data['email']    = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['address']  = $this->input->post('address');
			$data['phone']    = $this->input->post('phone');
                        $data['sex']       = $this->input->post('sex');
                        $data['twitter']       = $this->input->post('twitter');
                        $data['facebook']       = $this->input->post('facebook');
                        $data['linkedin']       = $this->input->post('linkedin');
                        $data['skype']       = $this->input->post('skype');
			$this->db->where('laboratorist_id', $param3);
			$this->db->update('laboratorist', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
			  $memessage = 'edited';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_laboratorist', 'refresh');
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('laboratorist', array(
				'laboratorist_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('laboratorist_id', $param2);
			$this->db->delete('laboratorist');
			$this->session->set_flashdata('flash_message', get_phrase('account_deleted'));
                        $memessage = 'deleted';
			$this->session->set_userdata('metoast', $memessage);
                        
			redirect(base_url() . 'index.php?admin/manage_laboratorist', 'refresh');
		}
		$page_data['page_name']     = 'manage_laboratorist';
		$page_data['page_title']    = get_phrase('manage_laboratorist');
		$page_data['laboratorists'] = $this->db->get('laboratorist')->result_array();
		$this->load->view('index', $page_data);
	}
	/***Manage accountants**/
	function manage_accountant($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		if ($param1 == 'create') {
                        $this->db->where(array('email'=>$this->input->post('email')));
                    $doctorexist = $this->db->count_all_results('doctor');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $adminexist = $this->db->count_all_results('admin');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $patientexist = $this->db->count_all_results('patient');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $accountantexist = $this->db->count_all_results('accountant');
                    
                     $this->db->where(array('email'=>$this->input->post('email')));
                    $nurseexist = $this->db->count_all_results('nurse');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $pharmacistexist = $this->db->count_all_results('pharmacist');
                    
                     $this->db->where(array('email'=>$this->input->post('email')));
                    $laboratoristexist = $this->db->count_all_results('pharmacist');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $customercareexist = $this->db->count_all_results('customercare');
                    
                    if($doctorexist > 0 || $adminexist > 0 || $patientexist > 0 || $accountantexist > 0 || $nurseexist > 0 || $pharmacistexist > 0 || $laboratoristexist > 0 || $customercareexist > 0)
                    {  
                     $memessage = 'inuse';
                     $this->session->set_userdata('metoast', $memessage);  
                     $this->session->set_userdata('name', $this->input->post('name'));
                     $this->session->set_userdata('email',$this->input->post('email'));
		     $this->session->set_userdata('address',$this->input->post('address'));
                     $this->session->set_userdata('phone',$this->input->post('phone'));
                    // $this->session->set_userdata('department_id',$this->input->post('department_id'));
		     //$this->session->set_userdata('profile',$this->input->post('profile'));
                     $this->session->set_userdata('sex',$this->input->post('sex'));
                     $this->session->set_userdata('twitter',$this->input->post('twitter'));
                     $this->session->set_userdata('facebook',$this->input->post('facebook'));
                     $this->session->set_userdata('linkedin',$this->input->post('linkedin'));
                     $this->session->set_userdata('skype',$this->input->post('skype'));
                     redirect(base_url() . 'index.php?admin/add_new_accountant', 'refresh');
                    }
                    else 
                    {
			$data['name']     = $this->input->post('name');
			$data['email']    = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['address']  = $this->input->post('address');
			$data['phone']    = $this->input->post('phone');
                        $data['sex']       = $this->input->post('sex');
                        $data['twitter']       = $this->input->post('twitter');
                        $data['facebook']       = $this->input->post('facebook');
                        $data['linkedin']       = $this->input->post('linkedin');
                        $data['skype']       = $this->input->post('skype');
			$this->db->insert('accountant', $data);
			$this->email_model->account_opening_email('accountant', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
			$this->session->set_flashdata('flash_message', get_phrase('account_opened'));
			$memessage = 'created';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_accountant', 'refresh');
		}
                }
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['name']     = $this->input->post('name');
			$data['email']    = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['address']  = $this->input->post('address');
			$data['phone']    = $this->input->post('phone');
                        $data['sex']       = $this->input->post('sex');
                        $data['twitter']       = $this->input->post('twitter');
                        $data['facebook']       = $this->input->post('facebook');
                        $data['linkedin']       = $this->input->post('linkedin');
                        $data['skype']       = $this->input->post('skype');
			$this->db->where('accountant_id', $param3);
			$this->db->update('accountant', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
                           $memessage = 'edited';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_accountant', 'refresh');
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('accountant', array(
				'accountant_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('accountant_id', $param2);
			$this->db->delete('accountant');
			$this->session->set_flashdata('flash_message', get_phrase('account_deleted'));
                        $memessage = 'deleted';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_accountant', 'refresh');
		}
		$page_data['page_name']   = 'manage_accountant';
		$page_data['page_title']  = get_phrase('manage_accountant');
		$page_data['accountants'] = $this->db->get('accountant')->result_array();
		$this->load->view('index', $page_data);
	}
	
	
		/***Manage accountants**/
	function manage_customer_care($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		if ($param1 == 'create') {
                          $this->db->where(array('email'=>$this->input->post('email')));
                    $doctorexist = $this->db->count_all_results('doctor');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $adminexist = $this->db->count_all_results('admin');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $patientexist = $this->db->count_all_results('patient');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $accountantexist = $this->db->count_all_results('accountant');
                    
                     $this->db->where(array('email'=>$this->input->post('email')));
                    $nurseexist = $this->db->count_all_results('nurse');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $pharmacistexist = $this->db->count_all_results('pharmacist');
                    
                     $this->db->where(array('email'=>$this->input->post('email')));
                    $laboratoristexist = $this->db->count_all_results('pharmacist');
                    
                    $this->db->where(array('email'=>$this->input->post('email')));
                    $customercareexist = $this->db->count_all_results('customercare');
                    
                    if($doctorexist > 0 || $adminexist > 0 || $patientexist > 0 || $accountantexist > 0 || $nurseexist > 0 || $pharmacistexist > 0 || $laboratoristexist > 0 || $customercareexist > 0)
                    {  
                     $memessage = 'inuse';
                     $this->session->set_userdata('metoast', $memessage);  
                     $this->session->set_userdata('name', $this->input->post('name'));
                     $this->session->set_userdata('email',$this->input->post('email'));
		     $this->session->set_userdata('address',$this->input->post('address'));
                     $this->session->set_userdata('phone',$this->input->post('phone'));
                    // $this->session->set_userdata('department_id',$this->input->post('department_id'));
		     //$this->session->set_userdata('profile',$this->input->post('profile'));
                     $this->session->set_userdata('sex',$this->input->post('sex'));
                     $this->session->set_userdata('twitter',$this->input->post('twitter'));
                     $this->session->set_userdata('facebook',$this->input->post('facebook'));
                     $this->session->set_userdata('linkedin',$this->input->post('linkedin'));
                     $this->session->set_userdata('skype',$this->input->post('skype'));
                     redirect(base_url() . 'index.php?admin/add_new_customercare', 'refresh');
                    }
                    else 
                    {
			$data['name']     = $this->input->post('name');
			$data['email']    = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['address']  = $this->input->post('address');
			$data['phone']    = $this->input->post('phone');
                        $data['sex']       = $this->input->post('sex');
                        $data['twitter']       = $this->input->post('twitter');
                        $data['facebook']       = $this->input->post('facebook');
                        $data['linkedin']       = $this->input->post('linkedin');
                        $data['skype']       = $this->input->post('skype');
			$this->db->insert('customercare', $data);
			$this->email_model->account_opening_email('customercare', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
			$this->session->set_flashdata('flash_message', get_phrase('account_opened'));
			$memessage = 'created';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_customer_care', 'refresh');
		}
                }
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['name']     = $this->input->post('name');
			$data['email']    = $this->input->post('email');
			$data['password'] = $this->input->post('password');
			$data['address']  = $this->input->post('address');
			$data['phone']    = $this->input->post('phone');
                        $data['sex']       = $this->input->post('sex');
                        $data['twitter']       = $this->input->post('twitter');
                        $data['facebook']       = $this->input->post('facebook');
                        $data['linkedin']       = $this->input->post('linkedin');
                        $data['skype']       = $this->input->post('skype');
			$this->db->where('customercare_id', $param3);
			$this->db->update('customercare', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
                        	$memessage = 'edited';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_customer_care', 'refresh');
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('customercare', array(
				'customercare_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('customercare_id', $param2);
			$this->db->delete('customercare');
			$this->session->set_flashdata('flash_message', get_phrase('account_deleted'));
                             $memessage = 'deleted';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_customer_care', 'refresh');
		}
		$page_data['page_name']   = 'manage_customer_care';
		$page_data['page_title']  = get_phrase('manage customer care');
		$page_data['customer_care'] = $this->db->get('customercare')->result_array();
		$this->load->view('index', $page_data);
	}
	
	/*******VIEW APPOINTMENT REPORT	********/
	function view_appointment($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		$page_data['page_name']    = 'view_appointment';
		$page_data['page_title']   = get_phrase('view_appointment');
		$page_data['appointments'] = $this->db->get('appointment')->result_array();
		$this->load->view('index', $page_data);
	}
	
	/*******VIEW PAYMENT REPORT	********/
	function view_payment($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		$page_data['page_name']  = 'view_payment';
		$page_data['page_title'] = get_phrase('view_payment');
		$page_data['payments']   = $this->db->get('payment')->result_array();
		$this->load->view('index', $page_data);
	}
	
	/*******VIEW BED STATUS	********/
	function view_bed_status($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		$page_data['page_name']      = 'view_bed_status';
		$page_data['page_title']     = get_phrase('view_blood_bank');
		$page_data['bed_allotments'] = $this->db->get('bed_allotment')->result_array();
		$page_data['beds']           = $this->db->get('bed')->result_array();
		$this->load->view('index', $page_data);
	}
	
	/*******VIEW BLOOD BANK	********/
	function view_blood_bank($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		$page_data['page_name']    = 'view_blood_bank';
		$page_data['page_title']   = get_phrase('view_blood_bank');
		$page_data['blood_donors'] = $this->db->get('blood_donor')->result_array();
		$page_data['blood_bank']   = $this->db->get('blood_bank')->result_array();
		$this->load->view('index', $page_data);
	}
	
	/*******VIEW MEDICINE********/
	function view_medicine($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		$page_data['page_name']  = 'view_medicine';
		$page_data['page_title'] = get_phrase('view_medicine');
		$page_data['medicines']  = $this->db->get('medicine')->result_array();
		$this->load->view('index', $page_data);
	}
	
	/*******VIEW MEDICINE********/
	function view_report($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		$page_data['page_name']   = 'view_report';
		$page_data['page_title']  = get_phrase('view_' . $param1 . '_report');
		$page_data['report_type'] = $param1;
		$page_data['reports']     = $this->db->get_where('report', array(
			'type' => $param1
		))->result_array();
		$this->load->view('index', $page_data);
	}
	
	/***MANAGE EMAIL TEMPLATE**/
	function manage_email_template($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		
		if ($param2 == 'do_update') {
			$this->db->where('task', $param1);
			$this->db->update('email_template', array(
				'body' => $this->input->post('body'),
				'subject' => $this->input->post('subject')
			));
			$this->session->set_flashdata('flash_message', get_phrase('template_updated'));
			redirect(base_url() . 'index.php?admin/manage_email_template/' . $param1, 'refresh');
		}
		$page_data['page_name']     = 'manage_email_template';
		$page_data['page_title']    = get_phrase('manage_email_template');
		$page_data['template']      = $this->db->get_where('email_template', array(
			'task' => $param1
		))->result_array();
		$page_data['template_task'] = $param1;
		$this->load->view('index', $page_data);
	}
	
	/***MANAGE NOTICEBOARD, WILL BE SEEN BY ALL ACCOUNTS DASHBOARD**/
	function manage_noticeboard($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		
		if ($param1 == 'create') {
			$data['notice_title']     = $this->input->post('notice_title');
			$data['notice']           = $this->input->post('notice');
			$data['create_timestamp'] = strtotime($this->input->post('create_timestamp'));
			$this->db->insert('noticeboard', $data);
			$this->session->set_flashdata('flash_message', get_phrase('report_created'));
			$memessage = 'created';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_noticeboard', 'refresh');
		}
		if ($param1 == 'edit' && $param2 == 'do_update') {
			$data['notice_title']     = $this->input->post('notice_title');
			$data['notice']           = $this->input->post('notice');
			$data['create_timestamp'] = strtotime($this->input->post('create_timestamp'));
			$this->db->where('notice_id', $param3);
			$this->db->update('noticeboard', $data);
			$this->session->set_flashdata('flash_message', get_phrase('notice_updated'));
					$memessage = 'edited';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_noticeboard', 'refresh');
		} else if ($param1 == 'edit') {
			$page_data['edit_profile'] = $this->db->get_where('noticeboard', array(
				'notice_id' => $param2
			))->result_array();
		}
		if ($param1 == 'delete') {
			$this->db->where('notice_id', $param2);
			$this->db->delete('noticeboard');
			$this->session->set_flashdata('flash_message', get_phrase('notice_deleted'));
			  $memessage = 'deleted';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_noticeboard', 'refresh');
		}
		$page_data['page_name']  = 'manage_noticeboard';
		$page_data['page_title'] = get_phrase('manage_noticeboard');
		$page_data['notices']    = $this->db->get('noticeboard')->result_array();
		$this->load->view('index', $page_data);
	}
	
	
	/*****SITE/SYSTEM SETTINGS*********/
	function system_settings($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		
		if ($param2 == 'do_update') {
			$this->db->where('type', $param1);
			$this->db->update('settings', array(
				'description' => $this->input->post('description')
			));
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . 'index.php?admin/system_settings/', 'refresh');
		}
		if ($param1 == 'upload_logo') {
			move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/logo.png');
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . 'index.php?admin/system_settings/', 'refresh');
		}
		$page_data['page_name']  = 'system_settings';
		$page_data['page_title'] = get_phrase('system_settings');
		$page_data['settings']   = $this->db->get('settings')->result_array();
		$this->load->view('index', $page_data);
	}
	
	/*****LANGUAGE SETTINGS*********/
	function manage_language($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		
		if ($param1 == 'edit_phrase') {
			$page_data['edit_profile'] 	= $param2;	
		}
		if ($param1 == 'update_phrase') {
			$language	=	$param2;
			$total_phrase	=	$this->input->post('total_phrase');
			for($i = 1 ; $i < $total_phrase ; $i++)
			{
				//$data[$language]	=	$this->input->post('phrase').$i;
				$this->db->where('phrase_id' , $i);
				$this->db->update('language' , array($language => $this->input->post('phrase'.$i)));
			}
			redirect(base_url() . 'index.php?admin/manage_language/edit_phrase/'.$language, 'refresh');
		}
		if ($param1 == 'do_update') {
			$language        = $this->input->post('language');
			$data[$language] = $this->input->post('phrase');
			$this->db->where('phrase_id', $param2);
			$this->db->update('language', $data);
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . 'index.php?admin/manage_language/', 'refresh');
		}
		if ($param1 == 'add_phrase') {
			$data['phrase'] = $this->input->post('phrase');
			$this->db->insert('language', $data);
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . 'index.php?admin/manage_language/', 'refresh');
		}
		if ($param1 == 'add_language') {
			$language = $this->input->post('language');
			$this->load->dbforge();
			$fields = array(
				$language => array(
					'type' => 'LONGTEXT'
				)
			);
			$this->dbforge->add_column('language', $fields);
			
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . 'index.php?admin/manage_language/', 'refresh');
		}
		if ($param1 == 'delete_language') {
			$language = $param2;
			$this->load->dbforge();
			$this->dbforge->drop_column('language', $language);
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			
			redirect(base_url() . 'index.php?admin/manage_language/', 'refresh');
		}
		$page_data['page_name']        = 'manage_language';
		$page_data['page_title']       = get_phrase('manage_language');
		//$page_data['language_phrases'] = $this->db->get('language')->result_array();
		$this->load->view('index', $page_data);
	}
	
	
	/*****BACKUP / RESTORE / DELETE DATA PAGE**********/
	function backup_restore($operation = '', $type = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect('login', 'refresh');
		
		if ($operation == 'create') {
			$this->crud_model->create_backup($type);
		}
		if ($operation == 'restore') {
			$this->crud_model->restore_backup();
			redirect(base_url() . 'index.php?admin/backup_restore/', 'refresh');
		}
		if ($operation == 'delete') {
			$this->crud_model->truncate($type);
			redirect(base_url() . 'index.php?admin/backup_restore/', 'refresh');
		}
		
		$page_data['page_name']  = 'backup_restore';
		$page_data['page_title'] = get_phrase('backup_restore');
		$this->load->view('index', $page_data);
	}
	
	/******MANAGE OWN PROFILE AND CHANGE PASSWORD***/
	function manage_profile($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		if ($param1 == 'update_profile_info') {
			$data['name']    = $this->input->post('name');
			$data['email']   = $this->input->post('email');
			$data['address'] = $this->input->post('address');
			$data['phone']   = $this->input->post('phone');
			
			$this->db->where('admin_id', $this->session->userdata('admin_id'));
			$this->db->update('admin', $data);
			$this->session->set_flashdata('flash_message', get_phrase('account_updated'));
			$memessage = 'updated';
			$this->session->set_userdata('metoast', $memessage);
			redirect(base_url() . 'index.php?admin/manage_profile/', 'refresh');
		}
		if ($param1 == 'change_password') {
			$data['password']             = $this->input->post('password');
			$data['new_password']         = $this->input->post('new_password');
			$data['confirm_new_password'] = $this->input->post('confirm_new_password');
			
			$current_password = $this->db->get_where('admin', array(
				'admin_id' => $this->session->userdata('admin_id')
			))->row()->password;
                        if($current_password != $data['password'])
                        {
                            $memessage = 'invalidold';
			$this->session->set_userdata('metoast', $memessage); 
                        }
			else if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
				$this->db->where('admin_id', $this->session->userdata('admin_id'));
				$this->db->update('admin', array(
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
			
			redirect(base_url() . 'index.php?admin/manage_profile/', 'refresh');
		}
		$page_data['page_name']    = 'manage_profile';
		$page_data['page_title']   = get_phrase('manage_profile');
		$page_data['edit_profile'] = $this->db->get_where('admin', array(
			'admin_id' => $this->session->userdata('admin_id')
		))->result_array();
		$this->load->view('index', $page_data);
	}
	
}
