<?php

class baitest_model extends CI_Model
{

    public function baitest($id, $matest){
        $query=$this->db->query("SELECT Cauhoi, DAn1, DAn2, DAn3, DAn4, DAn5, DAn6, Sl, Id FROM Answers a, Questions b, Tests c WHERE '$matest' = b.MaTests and b.MaTests = c.MaTests and a.MaCHoi = b.MaCHoi and b.STT = '$id'");
        $data=$query->result_array();
        return $data;
    }

}

?>