<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_operasional extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_operasional');

	}

	public function index()
	{
		$data['financial']=$this->db->query('select * from transaksi where id_kategori="1234"')->result_array();
		$this->load->view('financial/v_operasional', $data);
	}

	public function tambah()
	{
		if ($this->input->post() !=null) {
			$id 			=	$this->input->post ('id_transaksi');
			$tgl			=	date('Y-m-d H-i-s', strtotime($tgl));
			$id_member 		=	$this->input->post ('id_member');
			$id_kategori 	=	$this->input->post ('id_kategori');
			$tipe	 		=	$this->input->post ('tipe');
			$jml_transaksi 	=	$this->input->post ('jml_transaksi');
			$keterangan 	=	$this->input->post ('keterangan');

			$simpan_data = array(
				'id_transaksi'=>$id,
				'tanggal'=>$tgl,
				'id_member'=>$id_member,
				'id_kategori'=>$id_kategori,
				'tipe'=>$tipe,
				'jml_transaksi'=>$jml_transaksi,
				'keterangan'=>$keterangan,
				);
			$this->db->insert("transaksi", $simpan_data);
			redirect(base_url('C_operasional'));
		}
		else{
			$this->load->view('financial/tambah_o.php');
		}
	}
	public function edit($id=null){
		if ($id !=null) {
			# code...
			$where = array('id_transaksi'=>$id);
			$data['financial'] = $this->m_operasional->update($where,'transaksi')->result();
								$this->load->view('ganti',$data);
		}
	}
	public function do_edit(){
		$id = $this->input->post('id_transaksi');
		$tgl = $this->input->post('tanggal');
		$id_kategori = $this->input->post('id_kategori');
		$id_member = $this->input->post('id_member');
		$tipe = $this->input->post('tipe');
		$jml_transaksi = $this->input->post('jml_transaksi');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'id_transaksi'=>$id,
			'tanggal'=>$tgl,
			'id_kategori'=>$id_kategori,
			'id_member'=>$id_member,
			'tipe'=>$tipe,
			'jml_transaksi'=>$jml_transaksi,
			'keterangan'=>$keterangan 
			);

		$this->db->where('id_transaksi',$id);
		$this->db->update('transaksi',$data);
		$kondisi = array('id_transaksi'=>$id);
		$data['financial'] = $this->db->get_where('transaksi', $kondisi)->result_array();
		redirect('C_operasional/index');
	}
	public function delete($id){
		$where = array('id_transaksi'=>$id);
		$this->m_operasional->hapus($where,'transaksi');
		redirect('C_operasional/index');
	}
}
?>