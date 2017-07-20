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

    public function get_count($cate_id){
        $query = $this->db->query("SELECT COUNT(doc_id) as rows_total FROM m_doc WHERE doc_deleted = 0 AND doc_cate_id = ".$cate_id);
        return $query->row_array()['rows_total'];
    }

    public function get_list($cate_id, $limit, $offset){
	//substring(doc_content, 1, 250) as doc_desc, 
    	$query = $this->db->query("SELECT 
            doc_url, 
            doc_title, 
            doc_content as doc_desc, 
            doc_ext_name,
            doc_page_num 
            FROM m_doc 
            LEFT JOIN m_doc_ext ON m_doc.doc_ext_id = m_doc_ext.doc_ext_id 
            WHERE doc_deleted = 0 
            AND doc_cate_id = ".$cate_id." 
            ORDER BY doc_id DESC LIMIT ".$limit." OFFSET ".$offset);
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