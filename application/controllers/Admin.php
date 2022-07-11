<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{


	public function index()
	{
		$data['page_title']  = "Login";
		$this->load->view('Layouts/header', $data);
		$this->load->view('Pages/index');
		$this->load->view('Layouts/footer');
	}


	public function dashboard()
	{
		$data['page_title']  = "Dashboard";
		$this->load->view('Layouts/admin-header', $data);
		$this->load->view('Admin/dashboard');
		$this->load->view('Layouts/admin-footer');
	}


	public function create_landing_page()
	{
		$data['page_title']  = "Create Landing Page";
		$this->load->view('Layouts/admin-header', $data);
		$this->load->view('Admin/create-page');
		$this->load->view('Layouts/admin-footer');
	}

    public function confirm_create(){
        if ($this->session->userdata('admin_login') != TRUE)
        redirect(base_url(), 'refresh');

        $landing_page_id        =   random_string('alnum', 100);
        $data['title']          =   $this->input->post('landing_title'); 
        $data['encrypted_id']   =   $landing_page_id; 
        $data['created_by']     =   $this->session->userdata('admin_name');
        $data['last_updated']   =   date('F jS, Y | h:i:A');
        $data['theme']          =   $this->input->post('theme');

        $this->db->insert('landing_page', $data);

        
    }

	
}
