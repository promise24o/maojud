<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{


	public function index()
	{
        if ($this->session->userdata('admin_login') != TRUE)
			redirect(base_url(), 'refresh');

		$data['page_title']  = "Login";
		$this->load->view('Layouts/admin-header', $data);
		$this->load->view('Admin/dashboard');
		$this->load->view('Layouts/admin-footer');
	}



	public function dashboard()
	{
        if ($this->session->userdata('admin_login') != TRUE)
			redirect(base_url(), 'refresh');

		$data['page_title']  = "Dashboard";
		$this->load->view('Layouts/admin-header', $data);
		$this->load->view('Admin/dashboard');
		$this->load->view('Layouts/admin-footer');
	}


	public function categories()
	{
        if ($this->session->userdata('admin_login') != TRUE)
			redirect(base_url(), 'refresh');

		$data['page_title']  = "Product Categories";
		$this->load->view('Layouts/admin-header', $data);
		$this->load->view('Admin/categories');
		$this->load->view('Layouts/admin-footer');
	}


	public function create_landing_page()
	{
        if ($this->session->userdata('admin_login') != TRUE)
			redirect(base_url(), 'refresh');

		$data['page_title']  = "Landing Page Builder";
		$this->load->view('Layouts/admin-header', $data);
		$this->load->view('Admin/create-page');
		$this->load->view('Layouts/admin-footer');
	}

	public function create_category()
	{
        if ($this->session->userdata('admin_login') != TRUE)
			redirect(base_url(), 'refresh');
        
        $data['name']               = $this->input->post('name');
        $data['encrypted_id']       = random_string('alnum', 100);
        $data['created_by']         = $this->session->userdata('admin_name');
        $data['date_created']       = date('F jS, Y | h:i:A');

        $this->db->insert('categories', $data);

        $this->session->set_flashdata('flash_message', 'Category Created Successfully');
        redirect(base_url('admin/categories'));
	}

	public function page_details($id = "")
	{
        if ($this->session->userdata('admin_login') != TRUE)
			redirect(base_url(), 'refresh');

        if($id == ""){
            $this->session->set_flashdata('flash_error', 'An Error has Occured');
            redirect(base_url('admin/dashboard')); 
        }

		$data['page_title']  = "Landing Page Details";
        $data['page']        = $this->crud_model->getPage($id);

		$this->load->view('Layouts/admin-header', $data);
		$this->load->view('Admin/page-details');
		$this->load->view('Layouts/admin-footer');
	}


    public function confirm_create(){
        if ($this->session->userdata('admin_login') != TRUE)
        redirect(base_url(), 'refresh');

        $config = array(
            array(
                'field' => 'title',
                'label' => 'Landing Page Title',
                'rules' => 'required|is_unique[landing_pages.title]'
            ),
            array(
                'field' => 'name[]',
                'label' => 'Product Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'desc[]',
                'label' => 'Product Description',
                'rules' => 'required|callback_check_desc'
            )
            // array(
            //     'field' => 'userfile[]',
            //     'label' => 'Product image',
            //     'rules' => 'callback_upload_image'
            // )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $landing_page_id        =   random_string('alnum', 100);
            $data['title']          =   $this->input->post('landing_title'); 
            $data['category']       =   $this->input->post('category'); 
            $data['slug']           =    str_replace(' ', '-', strtolower(trim($this->input->post('landing_title')))); 
            $data['encrypted_id']   =   $landing_page_id; 
            $data['created_by']     =   $this->session->userdata('admin_name');
            $data['last_updated']   =   date('F jS, Y | h:i:A');
            $data['theme']          =   $this->input->post('theme');
          
            $error = [];
    
            for ($n = 0; $n < count($_FILES['userfile']['tmp_name']); $n++) {
                   
                    if($n == 0){
                        $filename = $_FILES['userfile']['tmp_name'][$n];
                        $width = $this->checkImgWidth($filename);
                        $height = $this->checkImgHeight($filename);
                        if($width != 358 && $height != 711){
                            $error[] = "Product One Image Size should be Width:350px and Height:703px";
                        }
                    }
                    if($n == 1){
                        $filename = $_FILES['userfile']['tmp_name'][$n];
                        $width = $this->checkImgWidth($filename);
                        $height = $this->checkImgHeight($filename);
                        if($width != 175 && $height != 129){
                            $error[] = "Product Two Image Size should be Width:175px and Height:129px";
                        }
                    }
                    if($n == 2){
                        $filename = $_FILES['userfile']['tmp_name'][$n];
                        $width = $this->checkImgWidth($filename);
                        $height = $this->checkImgHeight($filename);
                        if($width != 175 && $height != 129){
                            $error[] = "Product Three Image Size should be Width:175px and Height:129px";
                        }
                    }
                    if($n == 3){
                        $filename = $_FILES['userfile']['tmp_name'][$n];
                        $width = $this->checkImgWidth($filename);
                        $height = $this->checkImgHeight($filename);
                        if($width != 175 && $height != 129){
                            $error[] = "Product Four Image Size should be Width:175px and Height:129px";
                        }
                    }
                    if($n == 4){
                        $filename = $_FILES['userfile']['tmp_name'][$n];
                        $width = $this->checkImgWidth($filename);
                        $height = $this->checkImgHeight($filename);
                        if($width != 500 && $height != 563 ){
                            $error[] = "Product Five Image Size should be Width:500px and Height:563px";
                        }
                    }
                    if($n == 5){
                        $filename = $_FILES['userfile']['tmp_name'][$n];
                        $width = $this->checkImgWidth($filename);
                        $height = $this->checkImgHeight($filename);
                        if($width != 734 && $height != 700){
                            $error[] = "Product Six Image Size should be Width:734px and Height:700px";
                        }
                    }
                    if($n == 6){
                        $filename = $_FILES['userfile']['tmp_name'][$n];
                        $width = $this->checkImgWidth($filename);
                        $height = $this->checkImgHeight($filename);
                        if($width != 819 && $height != 460){
                            $error[] = "Product Seven Image Size should be Width:819px and Height:460px";
                        }
                    }
               
            }
            
            if($error){
                $message = implode(',\n\n', $error);
                $this->session->set_flashdata('flash_error', $message);
                redirect(base_url('admin/create_landing_page'));
            }
    
            $this->db->insert('landing_pages', $data);
            $result=array();
            $post = $this->input->post();
            for ($i = 0; $i < count($post['name']); $i++) {
                $arr = array( 'name' => $post['name'][$i], 'description' => $post['desc'][$i], 'encrypted_id' => random_string('alnum', 100), 'landing_page' => $landing_page_id, 'date_created' => date('F jS, Y | h:i:A') );
                $this->db->insert('products', $arr);
                $result[]=$this->db->insert_id();
            }
    
        
            for ($n = 0; $n < count($_FILES['userfile']['tmp_name']); $n++) {
                $product_id = $result[$n];
                move_uploaded_file($_FILES['userfile']['tmp_name'][$n], 'uploads/product_image/' . $product_id . '.jpg');
            }
           
            
            $this->session->set_flashdata('flash_message', 'Landing Page Created Successfully');
            redirect(base_url('admin/create_landing_page'));
          
            
        }else{
            $data['page_title']  = "Landing Page Builder";
            $this->session->set_flashdata('flash_error', 'Landing Page Created Successfully');
            $this->load->view('Layouts/admin-header', $data);
            $this->load->view('Admin/create-page');
            $this->load->view('Layouts/admin-footer');
            
        }
       
    }

    public function checkImgWidth($filename){
        $data = getimagesize($filename);
        $width = $data[0];
        return $width;
    }

    public function checkImgHeight($filename){
        $data = getimagesize($filename);
        $height = $data[1];
        return $height;
    }

    public function check_desc($str)
    {
        if (strlen($str) > 400){
            $this->form_validation->set_message('check_desc', 'The {field} field can not have more than 300 characters');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function update_landing_page($id = ""){
        if ($this->session->userdata('admin_login') != TRUE)
        redirect(base_url(), 'refresh');

        if($id == ""){
            $this->session->set_flashdata('flash_error', 'An Error has Occured');
            redirect(base_url('admin/dashboard')); 
        }


        $data['title']          =   $this->input->post('landing_title'); 
        $data['category']       =   $this->input->post('category'); 
        $data['slug']           =    str_replace(' ', '-', strtolower(trim($this->input->post('landing_title')))); 
        $data['last_updated']   =   date('F jS, Y | h:i:A');
        $data['theme']          =   $this->input->post('theme');
        
        //Update Landing Page
        $this->db->where('encrypted_id', $id);
        $this->db->update('landing_pages', $data);
        
        $result=array();
       
        $post = $this->input->post();
        for ($i = 0; $i < count($post['name']); $i++) {
            $arr = array( 'name' => $post['name'][$i], 'description' => $post['desc'][$i], 'date_created' => date('F jS, Y | h:i:A') );
            $result[]= $post['id'][$i];
            $this->db->where('id', $result[$i]);
            $this->db->update('products', $arr);
        }
     
        for ($n = 0; $n < count($_FILES['userfile']['tmp_name']); $n++) {
            $product_id = $result[$n];
            move_uploaded_file($_FILES['userfile']['tmp_name'][$n], 'uploads/product_image/' . $product_id . '.jpg');
        }
       
        
        $this->session->set_flashdata('flash_message', 'Landing Page Updated Successfully');
        redirect(base_url('admin/page_details/'.$id));
    }

	
}