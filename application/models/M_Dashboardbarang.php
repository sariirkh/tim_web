<?php
class M_Dashboardbarang extends CI_Model{
    
    // function getAll(){
    //     $this->db->select('*');
    //     $this->db->from('tb_barang'); 
    //     //$this->db->select('*');
    //     //$this->db->from('login_admin');
    //     $query = $this->db->get();
    //     return $query;
    // }

    function tampil_barang(){
        $this->db->select('*');
        $this->db->from('tb_barang');        
        $this->db->where('id_barang');
        echo $this->db->count_all_results();
        
    }
    public function jum_barang(){   
        $query = $this->db->get('tb_barang');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }

    public function jum_barangmasuk(){   
        $query = $this->db->get('tb_barangmasuk');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }

    public function jum_barangkeluar(){   
        $query = $this->db->get('tb_barangkeluar');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }

    public function jum_karyawan(){   
        $query = $this->db->get('tb_karyawan');
        $this->db->where('pengguna_kendaraan');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }

   
}
?>