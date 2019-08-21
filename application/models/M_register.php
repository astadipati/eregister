<?php

Class M_register extends CI_Model{

    public $table = "tbl_eviden";
 
    function tampilkan_data(){
        $query = $this->db->query("select * from perkara_banding ORDER BY perkara_id DESC");
        return $query; 
    }
    
    function tampilkan_data_paging($halaman, $offset){
        return $this->db->query("select * from perkara_banding ORDER BY perkara_id DESC limit $halaman, $offset");
    }

}
