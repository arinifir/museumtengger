<?php

class M_koleksi extends CI_Model
{
    public function getData()
    {
        $this->db->order_by('waktu_artikel', 'desc');
        $result = $this->db->get('tb_artikel');
        return $result->result_array();
    }
}
