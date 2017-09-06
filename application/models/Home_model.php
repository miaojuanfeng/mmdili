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
        $limit = 18;
        $retval = array();
    	$query = $this->db->query("SELECT doc_url, doc_title FROM m_doc WHERE doc_deleted = 0 AND doc_cate_id = 1 ORDER BY doc_id DESC LIMIT ".$limit);
    	$retval[1] = $query->result_array();
        $query = $this->db->query("SELECT doc_url, doc_title FROM m_doc WHERE doc_deleted = 0 AND doc_cate_id = 2 ORDER BY doc_id DESC LIMIT ".$limit);
        $retval[2] = $query->result_array();
        $query = $this->db->query("SELECT doc_url, doc_title FROM m_doc WHERE doc_deleted = 0 AND doc_cate_id = 3 ORDER BY doc_id DESC LIMIT ".$limit);
        $retval[3] = $query->result_array();
        $query = $this->db->query("SELECT doc_url, doc_title FROM m_doc WHERE doc_deleted = 0 AND doc_cate_id = 4 ORDER BY doc_id DESC LIMIT ".$limit);
        $retval[4] = $query->result_array();
        $query = $this->db->query("SELECT doc_url, doc_title FROM m_doc WHERE doc_deleted = 0 AND doc_cate_id = 5 ORDER BY doc_id DESC LIMIT ".$limit);
        $retval[5] = $query->result_array();
        $query = $this->db->query("SELECT doc_url, doc_title FROM m_doc WHERE doc_deleted = 0 AND doc_cate_id = 6 ORDER BY doc_id DESC LIMIT ".$limit);
        $retval[6] = $query->result_array();
        $query = $this->db->query("SELECT doc_url, doc_title FROM m_doc WHERE doc_deleted = 0 AND doc_cate_id = 7 ORDER BY doc_id DESC LIMIT ".$limit);
        $retval[7] = $query->result_array();
        $query = $this->db->query("SELECT doc_url, doc_title FROM m_doc WHERE doc_deleted = 0 AND doc_cate_id = 8 ORDER BY doc_id DESC LIMIT ".$limit);
        $retval[8] = $query->result_array();
        return $retval;
    }

    public function get_new(){
        $query = $this->db->query("SELECT 
            doc_url, 
            doc_title 
            FROM m_doc 
            WHERE doc_deleted = 0 
            ORDER BY doc_id DESC LIMIT 8");
        return $query->result_array();
    }

    public function get_hot(){
        $query = $this->db->query("SELECT 
            doc_url, 
            doc_title 
            FROM m_doc 
            WHERE doc_deleted = 0 
            ORDER BY RAND() LIMIT 8");
        return $query->result_array();
    }

    public function get_rand(){
        $query = $this->db->query("SELECT 
            doc_url, 
            doc_title 
            FROM m_doc 
            WHERE doc_deleted = 0 
            ORDER BY RAND() LIMIT 8");
        return $query->result_array();
    }
}