<?php
class userIQ130_model extends CI_Model
{

    public function bxh(){
        $query=$this->db->query("SELECT Diem, Hoten, Namsinh, Nghenghiep, Sothich FROM thanhtich a, users b WHERE a.IDUser = b.IDUser");
        $data=$query->result_array();
        return $data;
    }

	public function insert_userIQ130()
        {
            $data = array(
			   'Hoten' => 'hoten' ,
			   'Email' => 'email' ,
			   'SDT' => 'sdt',
			   'Namsinh' => 'namsinh',
			   'Nghenghiep' => 'nghenghiep',
			   'Sothich' => 'sothich'
			);

			$this->db->insert('User', $data);
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