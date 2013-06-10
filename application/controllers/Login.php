<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Login
 * @author Al Elliott
 * 
 * Deals with logging in and out
 * 
 */
class Login extends Base_Controller {

    public $model_name = 'M_Logins';
    public $message_array = array
        (
            0 => 'Please log in.',
            1 => 'Wrong Username & Password. Please try again.',
            2 => 'There seems to be a problem. Please call us on 0161 375 4444 and quote reference: ',
            3 => 'You\'re now logged out.',
        );

    public function __construct() {
        parent::__construct();
        //$this->output->enable_profiler();
    }
    
    public function index($message_flag = 0, $reference = '') {
        //$this->is_logged_in();
        die('login_page here');
        //Set default message
        $this->data['message'] = $this->message_array[$message_flag] . $reference;
        
        //Load view
       $this->load->view('v_login_index');
    }
    
    /* tests $_POST data against log in details in the contacts table
    * 
    * @return nothing
    * @author Al Elliott
    */
    public function log_in() {
        $r = array();
        $this->load->model('M_Logins'); 
        $r = $this->M_Logins->validate_user();
        
        //what's been returned?
        if ($r === TRUE) redirect(site_url('app/dashboard'));   //Yay!
        //else redirect(site_url('login/log_out'), 'refresh');
        else
        {
            $url = site_url('login/index/' . $r['message_flag'] . '/' . $r['reference']);
            redirect($url, 'refresh');
        }
    }
    
    public function log_out() {
        $this->session->sess_destroy(); //Destroys CI session
        session_destroy();  //destroys PHP session too
        redirect(site_url('login/index/3'), 'refresh');
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/XXXXXXXXXXXXXXXXXXXX/Login.php */