<?php

defined('BASEPATH') or exit('no direct script acces allowed');

class M_riset extends CI_Model {

        public function inputkan($data)
    {
        $this->db->insert('mytable', $data);
        return $this->db->affected_rows();
    }
    //get data untuk user
    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('user');
        return $this->db->get()->result_array();
    }

    //get data peta
     public function get_datapeta()
    {
        $this->db->select('*');
        $this->db->from('mytable');
        return $this->db->get()->result_array();
    }

    //hapus data
     public function hapus($table, $where)
    {
        $this->db->delete($table, $where);
        return $this->db->affected_rows();
    }

    //detail smk
    
    public function detailnya($id)
    {
       return $this->db->get_where('', ['id'=>$id])->row_array();
      
    }



    //login
     public function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function inputdatamap($data)
    {
        $this->db->insert('datapeta', $data);
        return $this->db->affected_rows();
    }
       
}