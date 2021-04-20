<?php

class M_api extends CI_Model
{
    //untuk menampilkan seluruh data pasa tabel admin
    function checkuser($table, $field1){
        return $this->db->get_where($table, ['username'=>$field1])->row_array();
    }
}
?>