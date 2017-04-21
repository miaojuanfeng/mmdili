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
            doc_ext_name  
            FROM m_doc 
            LEFT JOIN m_user ON doc_user_id = user_id 
            LEFT JOIN m_doc_ext ON m_doc.doc_ext_id = m_doc_ext.doc_ext_id 
            WHERE doc_deleted = 0 
            AND user_deleted = 0 
            AND doc_id = ".$doc_id." LIMIT 1");
        if( $query->num_rows() ){
            return $query->row_array();
        }
    	return false;
    }
}