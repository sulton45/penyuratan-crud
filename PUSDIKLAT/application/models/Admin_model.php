<?php 

/**
 * summary
 */
class Admin_model extends CI_Model
{
    /**
     * summary
     */
    public function getAllmahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }
}