<?php

class baitest_model extends CI_Model
{

    public function baitest($id, $matest){
        $query=$this->db->query("SELECT Noidung, DAn1, DAn2, DAn3, DAn4, DAn5, DAn6, SLcau, STT FROM Answers a, Questions b, Tests c WHERE '$matest' = b.MaTests and b.MaTests = c.MaTests and a.MaCHoi = b.MaCHoi and b.STT = '$id'");
        $data=$query->result_array();
        return $data;
    }
    public function loadlisttest($matest){
        $query=$this->db->query("SELECT STT,MaTests FROM `questions` WHERE `MaTests` LIKE '$matest' ORDER BY `STT` ASC");
        $data=$query->result_array();
        return $data;
    }
}

?>