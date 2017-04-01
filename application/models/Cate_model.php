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

    public function get_list($cate_url){
    	$query = $this->db->query("SELECT doc_url, doc_title FROM m_doc LEFT JOIN m_doc_cate ON m_doc.doc_cate_id = m_doc_cate.doc_cate_id WHERE doc_deleted = 0 AND doc_cate_url = ".$cate_url." ORDER BY doc_id DESC");
    	return $query->result_array();
    }
}