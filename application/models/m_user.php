<?php
class m_user extends CI_Model 
	{
	public function __construct()
    {
    $this->load->database();
    }
    function daftar(){
		$data = $this->db->get('user');
		return $data;
	}
	function update($where , $table){
		return $this->db->get_where($table , $where);
	}
	function delete($where , $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function simpan($where , $table){
		return $this->db->get_where($table,$where);
	}
}
?>