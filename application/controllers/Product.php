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

	public function update_dates(){ 
		$orders = $this->db->get('orders')->result_array(); 
		$dates = "";
		foreach($orders as $order){
			$this->db->where('id', $order['id']); 
			$this->db->update('orders', array('date2' => date('Y-m-d', strtotime(strtok($order['date'], '|')))));
		}

		$this->session->set_flashdata('flash_message', 'Updated Successfully');
		redirect(base_url());
	}

	public  function test(){
		$this->load->view('Hero/hero7');
	}

	public function confirm_order(){
		$product_id = $this->input->post('product_id');

		$page 	= 	$this->crud_model->getPageIdByProduct($product_id);
		$slug 	=	$this->crud_model->getPageSlug($page);

		$price 		=	$this->crud_model->getProductPrice($product_id);
		$qty		=	$this->input->post('qty');

		$data['encrypted_id']	=	random_string('alnum', 100);
		$data['order_id']		=	$this->crud_model->generateOrderNo();
		$data['fullname']		=	$this->input->post('fullname');
		$data['email']			=	$this->input->post('email');
		$data['phone']			=	$this->input->post('phone');
		$data['project']		=	$this->input->post('project');
		$data['address']		=	$this->input->post('address');
		$data['color']			=	$this->input->post('color');
		$data['size']			=	$this->input->post('size');
		$data['product']		=	$product_id;
		$data['category']		=	$this->crud_model->getProductCategory($product_id);
		$data['qty']			=	$qty;
		$data['date2']			=	date('Y-m-d');
		$data['date']			=	date('F jS, Y | h:i:A');
		$data['amount']			=	$qty * $price;

		//Reduce Qty of Item Available
		$stock = $this->crud_model->getProductStock($product_id);
		$new_stock = $stock - $qty; 

		//Update Stock Available 
		$this->db->where('landing_page', $page);
		$products = $this->db->get('products')->result_array(); 
		foreach($products as $product){
			$this->db->where('landing_page', $product['landing_page']);
			$this->db->update('products', array('stock_available' => $new_stock));
		}

		$this->db->insert('orders', $data);

		$this->session->set_flashdata('flash_message', 'Order Sent Successfully. You will be contacted');
		redirect(base_url('/' . $slug), 'refresh');
	}


	public function send_message(){
		$slug 					=	$this->input->post('slug');

		$data['encrypted_id']	=	random_string('alnum', 100);
		
		$data['product']		=	$this->input->post('product');
		$data['name']			=	$this->input->post('contact_name');
		$data['phone']			=	$this->input->post('contact_phone');
		$data['email']			=	$this->input->post('contact_email');
		$data['subject']		=	$this->input->post('contact_subject');
		$data['message']		=	$this->input->post('contact_message');
		$data['date']			=	date('F jS, Y | h:i:A');

		$this->db->insert('messages', $data);
		$this->session->set_flashdata('flash_message', 'Message Sent Successfully. You will be contacted');
		redirect(base_url('/' . $slug), 'refresh');
	}

	

	
}