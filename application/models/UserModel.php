<?php


class UserModel extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function Create($data){
		$this->db->insert()
	}
	
	public function get_kib($telkomid){
		$this->db->select('kib')
				->from('user')
				->where('telkom_id',$telkomid)
				->get();
		return $this->db->result();	
	}
}
