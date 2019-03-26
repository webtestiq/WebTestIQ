<?php
class Admin_model extends CI_Model
{
    public function CheckUser($user, $pass)
    {
        $query = $this->db->query("SELECT UserAdmin FROM Admin a WHERE (a.UserAdmin = '$user' and a.PassAdmin = '$pass') LIMIT 1 ");

        $idUser = $query->row();

        if(!empty($idUser))
        {
            return $CheckUser = 'true';
        } else
        {
            return $CheckUser = 'false';
        }
    }

    public function GetListTest_Admin($Matest)
    {
        $tam_ques = $this->db->query("SELECT * FROM Questions a WHERE (a.MaTests = '$Matest') ORDER BY STT ");
        $ques = $tam_ques->result_array();
        $tam_ans = $this->db->query("SELECT * FROM Answers");
        $ans = $tam_ans->result_array();

        $data = array(
            '$Ques' => $ques,
            '$Ans' => $ans );

        return $data;
    }

    public function Get_Ques($MaCHoi)
    {
        $query = $this->db->query("SELECT * FROM Questions a WHERE (a.MaCHoi = '$MaCHoi') LIMIT 1 ");

        $Ques = $query->row();

        return $Ques;
    }

    public function Get_Ans($MaCHoi)
    {
        $query = $this->db->query("SELECT * FROM Answers a WHERE (a.MaCHoi = '$MaCHoi') LIMIT 1 ");

        $Ans = $query->row();

        return $Ans;
    }
}
?>