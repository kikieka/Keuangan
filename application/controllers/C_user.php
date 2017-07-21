<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');

	}

	public function index()
	{
		$data['financial']=$this->db->query('select * from user')->result_array();
		$this->load->view('financial/v_user.php', $data);
	}
	public function tambah()
	{
		if (isset($_POST['submit'])) {
			$id 			=	$this->input->post ('id_user');
			$name			=	$this->input->post ('username');
			$jabatan 		=	$this->input->post ('role');
			$action		 	=	$this->input->post ('action');

			$simpan_data = array(
				'id_user'=>$id,
				'username'=>$name,
				'role'=>$jabatan,
				'action'=>$action,
				);
			$this->db->insert("user", $simpan_data);
			redirect(base_url('C_user'));
		}
		else{
			$this->load->view('financial/tambah_t.php');
		}
	}
		public function edit($id){
		{
		$where = array ('id_user'=>$id);
		$data['financial']=$this->m_user->update($where, 'user')->result();
		$this->load->view('update', $data);
		}
		
	}
	public function do_edit() {
		$id_user= $this->input->post('id_user');
		$username=$this->input->post('username');
		$role=$this->input->post('role');

		$data=array(
			'id_user'=>$id_user,
			'username'=>$username,
			'role'=>$role
			);

		$this->db->where('id_user',$id_user);
		$this->db->update('user',$data);
		$kondisi = array('id_user' => $id_user);
		$data['financial'] = $this->db->get_where('user', $kondisi)->result_array();
		$this->load->view('financial/v_user', $data);
	}
	public function delete($id){
		$where = array('id_user'=>$id_user);
		$this->m_user->delete($where,'user');
		redirect('C_user/index');
	}
}
?>