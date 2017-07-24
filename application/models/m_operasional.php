<?php
class m_operasional extends CI_Model 
	{
		public function __construct()
    {
        $this->load->database();
    }
    function daftar(){
		$data = $this->db->get('transaksi');
		return $data;
	}

}
?>