<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product extends CI_Controller
{


	public function index($id = "")
	{
		if($id == ""){
			$this->session->set_flashdata('flash_error', 'An Error has Occured');
			redirect(base_url());
		}

		$data['page_title']  = $this->crud_model->getPageName($id);
        $data['page']        = $this->crud_model->getPage2($id);
		$theme 				 = $this->crud_model->getTheme($id);

		$this->load->view($theme, $data);
	}


	

	
}
