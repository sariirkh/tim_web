<?php
class M_HomePelamar extends CI_Model{
    
    function getAll(){
        $this->db->select('*');
        $this->db->from('tb_Pelamar'); 
        //$this->db->select('*');
        //$this->db->from('login_admin');
        $query = $this->db->get();
        return $query;
    }

    // function tampil_Pelamar(){
    //     $this->db->select('*');
    //     $this->db->from('tb_pelamar');        
    //     $this->db->where('nama_pelamar');
    //     echo $this->db->count_all_results();
        
    // }
    public function jum_Pelamar(){   
        $query = $this->db->get('tb_pelamar');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }

    // public function v_pelaporan(){   
    //     $query = $this->db->get('tb_pelamar');
    //     if($query->num_rows()>0)
    //     {
    //         return $query->num_rows();
    //     }
    //     else
    //     {
    //         return 0;
    //     }
    // }
}
?>