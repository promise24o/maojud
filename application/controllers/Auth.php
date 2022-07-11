<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{


	public function index()
	{
		$data['page_title']  = "Login";
		$this->load->view('Layouts/header', $data);
		$this->load->view('Pages/index');
		$this->load->view('Layouts/footer');
	}

	function confirm_login()
	{
		$email    = $this->input->post('email', TRUE);
		$password = $this->input->post('password', TRUE);
		$user_status = $this->crud_model->validate($email, $password);


		if ($user_status == 'admin') {
			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('flash_error', 'Incorrect Email Address or Password');
			redirect(base_url());
		}
	}

	function forgot()
	{
		$this->crud_model->check_login();
		$data['page_title']  = "Reset Account Pasword";
		$this->load->view('Layouts/auth-header', $data);
		$this->load->view('Pages/forgot');
		$this->load->view('Layouts/auth-footer');
	}

	function logout()
	{
		$this->session->sess_destroy();
		$this->session->unset_userdata('logged_in');
		$this->session->set_flashdata('flash_message', 'Logout Successfully');
		redirect(base_url(), 'refresh');
	}
}
