<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class dl_model extends CI_Model{
    //put your code here
    
    function __construct()
    {
        parent::__construct();
        $this->load->database('default');
    }

    public function get_url($doc_id){
    	$query = $this->db->query("SELECT 
            user_url, 
            doc_url, 
            doc_title, 
            doc_ext_name,
            doc_dl_forbidden,
            doc_cate_name 
            FROM m_doc 
            LEFT JOIN m_user ON doc_user_id = user_id 
            LEFT JOIN m_doc_ext ON m_doc.doc_ext_id = m_doc_ext.doc_ext_id 
            LEFT JOIN m_doc_cate ON m_doc.doc_cate_id = m_doc_cate.doc_cate_id 
            WHERE doc_deleted = 0 
            AND user_deleted = 0 
            AND doc_id = ".$doc_id." LIMIT 1");
        if( $query->num_rows() ){
            return $query->row_array();
        }
    	return false;
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
}