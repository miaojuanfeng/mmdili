<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class cate_model extends CI_Model{
    //put your code here
    
    function __construct()
    {
        parent::__construct();
        $this->load->database('default');
    }

    public function get_list($cate_id){
    	$query = $this->db->query("SELECT doc_url, doc_title, doc_page_num FROM m_doc WHERE doc_deleted = 0 AND doc_cate_id = ".$cate_id." ORDER BY doc_id DESC");
    	return $query->result_array();
    }

    public function get_hot($cate_id){
        $query = $this->db->query("SELECT 
            doc_url, 
            doc_title 
            FROM m_doc 
            WHERE doc_deleted = 0 
            AND doc_cate_id = ".$cate_id." 
            ORDER BY RAND() LIMIT 5");
        return $query->result_array();
    }

    public function get_rand($cate_id){
        $query = $this->db->query("SELECT 
            doc_url, 
            doc_title 
            FROM m_doc 
            WHERE doc_deleted = 0 
            AND doc_cate_id = ".$cate_id." 
            ORDER BY RAND() LIMIT 5");
        return $query->result_array();
    }
}