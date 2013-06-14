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
class Login extends CI_Controller {

    public $model_name = 'm_logins';
    public $message_array = array
        (
            0 => 'Please log in.',
            1 => 'Wrong Username & Password. Please try again.',
            2 => 'There seems to be a problem. <br />Please call us on 0161 375 4444 and quote: ',
            3 => 'You\'ve been logged out.',
        );

    public function __construct() {
        parent::__construct();
        $this->session->set_flashdata('message', '');
        //$this->output->enable_profiler();
    }
    
    public function index($message_flag = 0, $reference = '') {
        //Set the message
        $this->data['message'] = $this->message_array[$message_flag] . $reference;
        
        //load the view
        $this->load->view('v_login_index', $this->data);
    }
    
    /* tests $_POST data against log in details in the contacts table
    * 
    * @return nothing
    * @author Al Elliott
    */
    public function log_in() {
        $r = array();
        $url = 'app/dashboard';
        $this->load->model('m_logins'); 
        $r = $this->m_logins->validate_user();
        
        //what's been returned?
        if ($r === TRUE)
        {
            if (element('target_url', $_SESSION, FALSE)) $url = $_SESSION['target_url'];
            redirect(site_url($url));   //Yay!
        }
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