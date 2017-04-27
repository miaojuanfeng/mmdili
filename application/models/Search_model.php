<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class search_model extends CI_Model{
    //put your code here
    
    function __construct()
    {
        parent::__construct();
        $this->load->database('default');
    }

    public function get_count($k){
        $query = $this->db->query("SELECT 
            COUNT(doc_id) as rows_total 
            FROM m_doc 
            WHERE doc_deleted = 0 
            AND doc_title like '%".$k."%');
        return $query->row_array()['rows_total'];
    }

    public function search_doc($k, $limit, $offset){
    	$query = $this->db->query("SELECT 
            doc_url, 
            doc_title, 
            doc_page_num 
            FROM m_doc 
            WHERE doc_deleted = 0 
            AND doc_title like '%".$k."%' 
            ORDER BY doc_id DESC LIMIT ".$limit." OFFSET ".$offset);
        return $query->result_array();
    }
}