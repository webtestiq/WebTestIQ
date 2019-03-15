<?php
class userIQ130_model extends CI_Model
{

    public function bxh(){
        $query=$this->db->query("SELECT Diem, Hoten, Namsinh, Nghenghiep, Sothich FROM Thanhtich a, Users b WHERE a.IDUser = b.IDUser");
        $data=$query->result_array();
        return $data;
    }

    public function CheckUser($sdt, $hoten, $namsinh)
    {

        $query = $this->db->query("SELECT IDUser FROM Users a WHERE ((a.SDT = $sdt and a.Namsinh = $namsinh) or (a.Hoten = '$hoten' and a.SDT = $sdt)) LIMIT 1 ");

        $idUser = $query->row();

        if(empty($idUser))
        {
            return $CheckUser = 'true';
        } else
        {
            return $CheckUser = $idUser->IDUser;
        }
    }

    public function getDiemTT($IDUser)
    {
        $query = $this->db->query("SELECT Diem FROM Thanhtich a WHERE a.IDUser = $IDUser ORDER BY Diem DESC LIMIT 1");
        
        $data = $query->row();
        
        return $data->Diem;
    }

	public function insert_userIQ130($user)
        {
            $this->db->insert('users', $user);

            $IDUser = $this->db->insert_id();
        
            return $IDUser;
        }

    public function insert_thanhtichIQ130($ttich)
        {
            $this->db->insert('thanhtich', $ttich);
        }

/*
    public function update_userIQ130()
        {
                $this->ID    = $_POST['ID'];
                $this->Hoten  = $_POST['Hoten'];
                $this->Email     = $_POST['Email'];

                $this->db->update('entries', $this, array('ID' => $_POST['ID']));
        }   
*/
}
?>