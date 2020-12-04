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
        $tgl = date("Y-m-d");   
        $query = $this->db->get("tb_barangmasuk WHERE tanggal_masuk = '$tgl'");
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
        $tgl = date("Y-m-d");   
        $query = $this->db->get("tb_barangkeluar WHERE tanggal_keluar = '$tgl'");
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
        $this->db->where('id_karyawan');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }

    public function getHistory(){
        $query = $this->db->query("SELECT id_barang_masuk, id_barang, tipe_barang, nama_barang, des_barang, jumlah_masuk FROM tb_detailmasuk JOIN tb_barangmasuk USING(id_barang_masuk) JOIN tb_barang USING(id_barang) ORDER BY id_barang_masuk DESC LIMIT 5");
        return $query;
    }

    public function getHistoryKeluar(){
        $query = $this->db->query("SELECT id_barang_keluar, id_barang, tipe_barang, nama_barang, des_barang, jumlah_keluar FROM tb_detailkeluar JOIN tb_barangkeluar USING(id_barang_keluar) JOIN tb_barang USING(id_barang) ORDER BY id_barang_keluar DESC LIMIT 5");
        return $query;
    }

   
}
?>