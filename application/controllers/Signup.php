<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->library('upload');
    }

    public function index() {
        // $this->load->view('first_signup_view');
        $this->load->view('first_signup');
    }

    

   

    public function submit() {


        $this->form_validation->set_rules('first-name', 'First Name', 'required');
        $this->form_validation->set_rules('last-name', 'Last Name', 'required');
        

        $upload_path = './uploads/';
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, TRUE);
        }

        $config_profile = array(
            'upload_path' => $upload_path,
            'allowed_types' => 'jpg|jpeg|png|gif',
            'max_size' => 2048, // 2MB
            'file_name' => 'profile_' . time()
        );

        $config_signature = array(
            'upload_path' => $upload_path,
            'allowed_types' => 'jpg|jpeg|png|gif',
            'max_size' => 2048, // 2MB
            'file_name' => 'signature_' . time()
        );

        $this->upload->initialize($config_profile);
        if ($this->upload->do_upload('photo')) {
            $profile_data = $this->upload->data();
            $profile_photo = $profile_data['file_name'];
        } else {
            $profile_error = $this->upload->display_errors();
            echo $profile_error;
            return;
        }

        $this->upload->initialize($config_signature);
        if ($this->upload->do_upload('signature')) {
            $signature_data = $this->upload->data();
            $signature_photo = $signature_data['file_name'];
        } else {
            $signature_error = $this->upload->display_errors();
            echo $signature_error;
            return;
        }

        $data = array(
            'profile_photo' => $profile_photo,
            'signature_photo' => $signature_photo
        );


        if ($this->form_validation->run() == FALSE) {
            
            redirect('signup');
        } else {

            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'first_name' => $this->input->post('first-name'),
                'last_name' => $this->input->post('last-name'),
                'contact_no' => $this->input->post('contact-no'),
                'alt_contact_no' => $this->input->post('alt-contact-no'),
                'p_photo' => $profile_photo,
                'signature_photo' => $signature_photo
            );


            if ($this->db->insert('signup', $data)){
                redirect('signup');
            } 
        }
    }
}
