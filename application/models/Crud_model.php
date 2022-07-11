<?php
class Crud_model extends CI_Model{

    ////////LOGIN VALIDATION//////////
    function validate($email='',$password=''){
        $admin_credential = array('admin_email' => $email, 'admin_password' => MD5($password));
       

        // Checking login credential for Admin
        $query = $this->db->get_where('admin', $admin_credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->session->set_userdata('admin_login', TRUE);
            $this->session->set_userdata('admin_id', $row->admin_id);
            $this->session->set_userdata('admin_encrypted_id', $row->encrypted_id);            
            $this->session->set_userdata('email', $row->admin_email);
            $this->session->set_userdata('logged_in', TRUE);
            return 'admin';
        }

    }

    ////////CACHE CONTROL//////////
    function clear_cache() {
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

      ////////IMAGE URL//////////
    function get_image_url($type = '', $id = '') {
        if (file_exists('uploads/' . $type . '_image/' . $id . '.jpg'))
            $image_url = base_url() . 'uploads/' . $type . '_image/' . $id . '.jpg';
        else
            $image_url = base_url() . 'uploads/user.png';

        return $image_url;
    }

}
