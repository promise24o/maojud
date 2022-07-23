<?php
class Landing_model extends CI_Model{

   
    public function getFirstProduct($id){
        $this->db->limit(1);
        $this->db->where('landing_page', $id);
        $query = $this->db->get('products'); 
        return $query->row_array();
    }

    

    public function getSecondProduct($id){
        $this->db->where('landing_page', $id);
        $query = $this->db->get('products')->result_array(); 
        for($i=0; $i<sizeof($query); $i++){
            if($i == 1){
                $result[] = $query[$i];
            }
        }
        return $result;  
    }
    

    public function getThirdProduct($id){
        // $this->db->order_by('id', 'desc');
        $this->db->where('landing_page', $id);
        $query = $this->db->get('products')->result_array(); 
        for($i=0; $i<sizeof($query); $i++){
            if($i == 2){
                $result[] = $query[$i];
            }
        }
        return $result;  
    }
    

    public function getFourthProduct($id){
        // $this->db->order_by('id', 'desc');
        $this->db->where('landing_page', $id);
        $query = $this->db->get('products')->result_array(); 
        for($i=0; $i<sizeof($query); $i++){
            if($i == 3){
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



   
}
