<?php

class M_admin extends CI_Model
{
    public function addData($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function delData($table, $data)
    {
        $this->db->delete($table, $data);
    }

    public function editData($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function getData($table)
    {
        return $this->db->get_where($table);
    }
    function randomcode($length)
    {
        $text = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123457890';
        $panj = $length;
        $txtl = strlen($text) - 1;
        $result = '';
        for ($i = 1; $i <= $panj; $i++) {
            $result .= $text[rand(0, $txtl)];
        }
        return $result;
    }
    public function cekkode()
    {
        $query = $this->db->query("SELECT MAX(kd_koleksi) as kd_koleksi from tb_koleksi");
        $hasil = $query->row();
        return $hasil->kd_koleksi;
    }
    public function cekkodein()
    {
        $query = $this->db->query("SELECT MAX(id_artikel) as id_artikel from tb_artikel");
        $hasil = $query->row();
        return $hasil->id_artikel;
    }
    public function cekEmail($id)
    {
        return $this->db->get_where('tb_user', ['email_user' => $id])->num_rows();
    }
    public function cekUsername($id)
    {
        return $this->db->get_where('tb_user', ['username' => $id])->num_rows();
    }
}
?>