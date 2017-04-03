<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class home_model extends CI_Model{
    //put your code here
    
    function __construct()
    {
        parent::__construct();
        $this->load->database('default');
    }

    public function get_new_doc(){
        $retval = array();
    	$query = $this->db->query("SELECT doc_url, doc_title FROM m_doc WHERE doc_deleted = 0 AND doc_cate_id = 1 ORDER BY doc_id DESC LIMIT 16");
    	$retval[1] = $query->result_array();
        $query = $this->db->query("SELECT doc_url, doc_title FROM m_doc WHERE doc_deleted = 0 AND doc_cate_id = 2 ORDER BY doc_id DESC LIMIT 16");
        $retval[2] = $query->result_array();
        $query = $this->db->query("SELECT doc_url, doc_title FROM m_doc WHERE doc_deleted = 0 AND doc_cate_id = 3 ORDER BY doc_id DESC LIMIT 16");
        $retval[3] = $query->result_array();
        $query = $this->db->query("SELECT doc_url, doc_title FROM m_doc WHERE doc_deleted = 0 AND doc_cate_id = 4 ORDER BY doc_id DESC LIMIT 16");
        $retval[4] = $query->result_array();
        return $retval;
    }
}