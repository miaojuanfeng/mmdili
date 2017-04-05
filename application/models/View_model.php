<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class view_model extends CI_Model{
    //put your code here
    
    function __construct()
    {
        parent::__construct();
        $this->load->database('default');
    }

    public function get_detail($doc_url){
    	$query = $this->db->query("SELECT 
            user_url, 
            doc_url, 
            doc_title, 
            doc_width, 
            doc_height, 
            doc_page_num, 
            doc_poly2bitmap, 
            doc_cate_name 
            FROM m_doc 
            LEFT JOIN m_user ON doc_user_id = user_id 
            LEFT JOIN m_doc_cate ON m_doc.doc_cate_id = m_doc_cate.doc_cate_id 
            WHERE doc_deleted = 0 
            AND user_deleted = 0 
            AND doc_url = ".$doc_url." LIMIT 1");
    	return $query->row_array();
    }

    public function get_new(){
        $query = $this->db->query("SELECT 
            doc_url, 
            doc_title 
            FROM m_doc 
            WHERE doc_deleted = 0 
            ORDER BY doc_id DESC LIMIT 5");
        return $query->result_array();
    }

    public function get_hot(){
        $query = $this->db->query("SELECT 
            doc_url, 
            doc_title 
            FROM m_doc 
            WHERE doc_deleted = 0 
            ORDER BY RAND() LIMIT 5");
        return $query->result_array();
    }

    public function get_rand(){
        $query = $this->db->query("SELECT 
            doc_url, 
            doc_title 
            FROM m_doc 
            WHERE doc_deleted = 0 
            ORDER BY RAND() LIMIT 5");
        return $query->result_array();
    }
}