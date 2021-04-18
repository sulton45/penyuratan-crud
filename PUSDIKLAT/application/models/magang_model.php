<?php 
/**
 * summary
 */
class Magang_model extends CI_model
{
	public function getAllmahasiswa()
	{
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tambahDataMagang($data)
	{
		$this->db->insert('mahasiswa', $data);
	}
}