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
            $this->session->set_userdata('admin_name', $row->admin_name);
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

    public function getAllLandingPages(){
        $this->db->order_by('id', 'desc'); 
        $query = $this->db->get('landing_pages'); 
        return $query->result_array();
    }

    public function getAllHeroPages(){
        $this->db->order_by('id', 'desc'); 
        $query = $this->db->get('hero_pages'); 
        return $query->result_array();
    }

    public function getPageName($id){
        $this->db->where('slug', $id);
        $query = $this->db->get('landing_pages'); 
        if($query->num_rows() > 0){
            return $query->row()->title;
        }

        $this->db->where('slug', $id);
        $query = $this->db->get('hero_pages'); 
        if($query->num_rows() > 0){
            return $query->row()->title;
        }
        
    }

    public function getPage2($id){
        $this->db->where('slug', $id);
        $query = $this->db->get('landing_pages'); 
        if($query->num_rows() > 0){
            return $query->row_array();
        }
        

        $this->db->where('slug', $id);
        $query = $this->db->get('hero_pages'); 
        if($query->num_rows() > 0){
            return $query->row_array();
        }
       
    }

    public function getHeroPage($id){
        $this->db->where('encrypted_id', $id);
        $query = $this->db->get('hero_pages'); 
        return $query->row_array();
    }

    public function getPage($id){
        $this->db->where('encrypted_id', $id);
        $query = $this->db->get('landing_pages'); 
        return $query->row_array();
    }

    public function getProducts($id){
        $this->db->where('landing_page', $id);
        $query = $this->db->get('products'); 
        return $query->result_array();
    }

    public function getProductPrice($id){
        $this->db->where('encrypted_id', $id);
        $query = $this->db->get('products'); 
        return $query->row()->price;
    }
    public function getProductName($id){
        $this->db->where('encrypted_id', $id);
        $query = $this->db->get('products'); 
        return $query->row()->name;
    }

    public function getThreeProducts($id){
        // $this->db->order_by('id', 'desc');
        $this->db->where('landing_page', $id);
        $query = $this->db->get('products')->result_array(); 
        for($i=0; $i<sizeof($query); $i++){
            if($i>0 && $i<4){
                $result[] = $query[$i];
            }
        }
        return $result;  
    }

    public function getFifthProduct($id){
        // $this->db->order_by('id', 'desc');
        $this->db->where('landing_page', $id);
        $query = $this->db->get('products')->result_array(); 
        for($i=0; $i<sizeof($query); $i++){
            if($i == 4){
                $result[] = $query[$i];
            }
        }
        return $result;  
    }

    public function getSixthProduct($id){
        // $this->db->order_by('id', 'desc');
        $this->db->where('landing_page', $id);
        $query = $this->db->get('products')->result_array(); 
        for($i=0; $i<sizeof($query); $i++){
            if($i == 5){
                $result[] = $query[$i];
            }
        }
        return $result;  
    }

    public function getSeventhProduct($id){
        // $this->db->order_by('id', 'desc');
        $this->db->where('landing_page', $id);
        $query = $this->db->get('products')->result_array(); 
        for($i=0; $i<sizeof($query); $i++){
            if($i == 6){
                $result[] = $query[$i];
            }
        }
        return $result;  
    }

    public function getProduct($id){
        $this->db->limit(1);
        $this->db->where('landing_page', $id);
        $query = $this->db->get('products'); 
        return $query->row_array();
    }

    public function getPageCategory($id){
        $this->db->where('encrypted_id', $id);
        $query = $this->db->get('landing_pages'); 
        if($query->num_rows() >0){
            return $query->row()->category;
        }

        $this->db->where('encrypted_id', $id);
        $query = $this->db->get('hero_pages'); 
        if($query->num_rows() >0){
            return $query->row()->category;
        }
    }

    public function getPageIdByProduct($id){
        $this->db->where('encrypted_id', $id);
        $query = $this->db->get('products'); 
        return $query->row()->landing_page;
    }

    public function getPageSlug($id){
        $this->db->where('encrypted_id', $id);
        $query = $this->db->get('landing_pages'); 
        if($query->num_rows() >0){
            return $query->row()->slug;
        }

        $this->db->where('encrypted_id', $id);
        $query = $this->db->get('hero_pages'); 
        if($query->num_rows() >0){
            return $query->row()->slug;
        }
    }

    public function getHeroSimilarProducts($id){
        $cat = $this->getPageCategory($id);
        $this->db->where('category', $cat);
        $this->db->where('type', 'hero');
        $this->db->order_by('id', 'RANDOM');
        $query = $this->db->get('products');
        return $query->result_array(); 
    }

    public function getFirstProduct($id){
        // $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $this->db->where('landing_page', $id);
        $query = $this->db->get('products'); 
        return $query->row_array();
    }

    public function getTotalProducts(){
        $query = $this->db->get('products'); 
        return $query->num_rows();
    }

    public function countEmails(){
        $query = $this->db->get('messages'); 
        return $query->num_rows();
    }

    public function changeEmailStatus($id){
        $this->db->where('encrypted_id', $id);
        $query = $this->db->update('messages', array('status' => 1)); 
    }

    public function countUndreadEmails(){
        $this->db->where('status', 0);
        $query = $this->db->get('messages'); 
        return $query->num_rows();
    }

    public function getTotalAdmin(){
        $query = $this->db->get('admin'); 
        return $query->num_rows();
    }

    public function getCategoryName($id){
        $this->db->where('encrypted_id', $id);
        $query = $this->db->get('categories'); 
        return $query->row()->name;
    }

    public function getOrders(){
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('orders'); 
        return $query->result_array();
    }

    public function getAllMessages(){
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('messages'); 
        return $query->result_array();
    }

    public function getMessage($id){
        $this->db->where('encrypted_id', $id);
        $query = $this->db->get('messages'); 
        return $query->row_array();
    }

    public function getAllCategories(){
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('categories'); 
        return $query->result_array();
    }

    public function getNoLandingPages($id){
        $this->db->where('category', $id); 
        $query = $this->db->get('landing_pages'); 
        return $query->num_rows();
    }

    public function getNoHeroPages($id){
        $this->db->where('category', $id); 
        $query = $this->db->get('hero_pages'); 
        return $query->num_rows();
    }

    public function getTotalLandingPages(){
        $query = $this->db->get('landing_pages'); 
        return $query->num_rows();
    }

    public function getTotalHeroPages(){
        $query = $this->db->get('hero_pages'); 
        return $query->num_rows();
    }

    public function getHeroThemeName($id){
        $name = "";
        if($id == 1){
            return $name = "Hero Theme 1";
        }elseif($id == 2){
            return $name = "Hero Theme 2";
        }elseif($id == 3){
            return $name = "Hero Theme 3";
        }elseif($id == 4){
            return $name = "Hero Theme 4";
        }elseif($id == 5){
            return $name = "Hero Theme 5";
        }elseif($id == 6){
            return $name = "Hero Theme 6";
        }else{
            return $name = "Hero Theme 7";
        }
    }

    public function getThemeName($id){
        $name = "";
        if($id == 1){
            return $name = "Generic";
        }elseif($id == 2){
            return $name = "Light";
        }elseif($id == 3){
            return $name = "Dark";
        }elseif($id ==4){
            return $name = "Glow";
        }else{
            return $name = "Neutral";
        }
    }

    public function getTheme($id){
        $theme = "";
        $this->db->where('slug', $id);
        $query = $this->db->get('landing_pages');
        if($query->num_rows() > 0){
            $query = $query->row()->theme;
            if($query == 1){
                return 'Landing/generic';
            }elseif($query == 2){
                return 'Landing/light';
            }elseif($query == 3){
                return 'Landing/dark';
            }elseif($query == 4){
                return 'Landing/glow';
            }else{
                return 'Landing/neutral';
            }
        }

        $this->db->where('slug', $id);
        $query = $this->db->get('hero_pages');;
        if($query->num_rows() > 0){
            $query = $query->row()->theme; 
            if($query == 1){
                return 'Hero/hero1';
            }elseif($query == 2){
                return 'Hero/hero2';
            }elseif($query == 3){
                return 'Hero/hero3';
            }elseif($query == 4){
                return 'Hero/hero4';
            }elseif($query == 5){
                return 'Hero/hero5';
            }elseif($query == 6){
                return 'Hero/hero6';
            }else{
                return 'Hero/hero7';
            }
        }
       
    }
}