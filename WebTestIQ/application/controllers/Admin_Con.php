<?php
class Admin_Con extends CI_Controller
{
	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('Admin_model');
        $this->load->library("session");
    }

    public function Index()
    {      
    	$session = $this->session->userdata("user");  

    	if(empty($session))
    	{
    		$this->Login_Get();
    	}else {
    	    $this->load->view('Admin/Index');
	    }
	}

	public function IQ()
	{
		$session = $this->session->userdata("user");  

    	if(empty($session))
    	{
    		$this->Login_Get();
    	}else {
    	    $data['data'] = $this->Admin_model->GetListTest_Admin('IQ');
    	    
    	    $this->session->set_userdata("matest", "IQ");

    	    $this->load->view('Admin/ListTest', $data);
	    }
	}

	public function EQ()
	{
		$session = $this->session->userdata("user");  

    	if(empty($session))
    	{
    		$this->Login_Get();
    	}else {
    	    $data['data'] = $this->Admin_model->GetListTest_Admin('EQ');
    	    
    	    $this->session->set_userdata("matest", "EQ");

    	    $this->load->view('Admin/ListTest', $data);
	    }
	}

	public function TC()
	{
		$session = $this->session->userdata("user");  

    	if(empty($session))
    	{
    		$this->Login_Get();
    	}else {
    	    $data['data'] = $this->Admin_model->GetListTest_Admin('TC');
    	    
    	    $this->session->set_userdata("matest", "TC");

    	    $this->load->view('Admin/ListTest', $data);
	    }
	}

	public function IQTD()
	{
		$session = $this->session->userdata("user");  

    	if(empty($session))
    	{
    		$this->Login_Get();
    	}else {
    	    $data['data'] = $this->Admin_model->GetListTest_Admin('IQTD');
    	    
    	    $this->session->set_userdata("matest", "IQTD");

    	    $this->load->view('Admin/ListTest', $data);
	    }
	}

	public function Edit_Get()
	{
    	$session = $this->session->userdata("user");
    	if(empty($session))
    	{
    		$this->Login_Get();
    	}else {
    		$MaCHoi = $_GET['MaCHoi'];

    		$ques = $this->Admin_model->Get_Ques($MaCHoi);
			$ans = $this->Admin_model->Get_Ans($MaCHoi);

			$data['data'] = array(
				'Ques' => $ques,
				'Ans' => $ans
			 );

    	    $this->load->view('Admin/Edit', $data);
	    }
	}

	public function Edit_Post()
	{
		$machoi = $_POST["MaCHoi"];
		print_r($machoi);
		$STT = (int) $_POST["STT"];
        $nd = $_POST["Nd"];
        $dan9xac = $_POST["DAn9xac"];
        $dan1 = $_POST["DAn1"];
        $dan2 = $_POST["DAn2"];
        $dan3 = $_POST["DAn3"];
        $dan4 = $_POST["DAn4"];
        $dan5 = $_POST["DAn5"];
        $dan6 = $_POST["DAn6"];
        if (empty($nd))
        {
        	$thongbao = 'Chỉnh sửa thất bại !';

			echo "<script type='text/javascript'>alert('$thongbao');</script>";

        } else
        {
        
            $up_ques = $this->db->query("UPDATE Questions SET STT = '$STT', Noidung = '$nd' WHERE MaCHoi = '$machoi'");
			$up_ans = $this->db->query("UPDATE Answers SET DAchinhxac = '$dan9xac', DAn1 = '$dan1', DAn2 = '$dan2', DAn3 = '$dan3', DAn4 = '$dan4', DAn5 = '$dan5', DAn6 = '$dan6' WHERE MaCHoi = '$machoi'");

			$thongbao = 'Chỉnh sửa thành công !';

			echo "<script type='text/javascript'>alert('$thongbao');</script>";
		}

        $session = $this->session->userdata("matest");

            if($session == "IQ")
            {
            	$this->IQ();
            }
            if ($session == "EQ")
            {
            	$this->EQ();
            }
            if ($session == "IQTD")
            {
             	$this->IQTD();
            }
            if ($session == "TC")
            {
                $this->TC();
            }
	}

	public function Create_Get()
	{
    	$session = $this->session->userdata("user");  

    	if(empty($session))
    	{
    		$this->Login_Get();
    	}else {
    	    $this->load->view('Admin/Create');
	    }
	}

	public function Create_Post()
	{

		$session = $this->session->userdata("matest");

		$STT = (int) $_POST["STT"];
		$machoi = $_POST["MCHoi"];
        $nd = $_POST["Nd"];
        $dan9xac = $_POST["DAn9xac"];
        $dan1 = $_POST["DAn1"];
        $dan2 = $_POST["DAn2"];
        $dan3 = $_POST["DAn3"];
        $dan4 = $_POST["DAn4"];
        $dan5 = $_POST["DAn5"];
        $dan6 = $_POST["DAn6"];

        $ques = $this->Admin_model->Get_Ques($machoi);
		$ans = $this->Admin_model->Get_Ans($machoi);

        if (empty($nd) || !empty($ques) || (empty($dan1) && empty($dan2) && empty($dan3) && empty($dan4) && empty($dan5) && empty($dan6)))
        {
        	$thongbao = 'Thêm mới thất bại !';

			echo "<script type='text/javascript'>alert('$thongbao');</script>";
        } else
        {
        	$cr_ques = $this->db->query("INSERT INTO Questions(MaCHoi, MaTests, STT, Noidung) VALUES ('$machoi','$session','$STT','$nd')");
            $cr_ans = $this->db->query("INSERT INTO Answers (key_ans, MaCHoi, DAchinhxac, DAn1, DAn2, DAn3, DAn4, DAn5, DAn6) VALUES (null,'$machoi','$dan9xac','$dan1','$dan2','$dan3','$dan4','$dan5','$dan6')");

            $thongbao = 'Thêm mới thành công !';

			echo "<script type='text/javascript'>alert('$thongbao');</script>";
		}
        
        if($session == "IQ")
            {
            	$this->IQ();
            }
            if ($session == "EQ")
            {
            	$this->EQ();
            }
            if ($session == "IQTD")
            {
             	$this->IQTD();
            }
            if ($session == "TC")
            {
                $this->TC();
            }
	}

	public function Delete()
	{
    	$session = $this->session->userdata("user");
    	if(empty($session))
    	{
    		$this->Login_Get();
    	}else {
    		$MaCHoi = $_GET['MaCHoi'];

    		$ans = $this->db->query("DELETE FROM Answers WHERE MaCHoi = '$MaCHoi' ");
    		$ques = $this->db->query("DELETE FROM Questions WHERE MaCHoi = '$MaCHoi' ");
			
    	    $session = $this->session->userdata("matest");

            if($session == "IQ")
            {
            	$this->IQ();
            }
            if ($session == "EQ")
            {
            	$this->load->view('Admin/EQ');
            }
            if ($session == "IQTD")
            {
             	$this->load->view('Admin/IQTD');
            }
            if ($session == "TC")
            {
                $this->load->view('Admin/TC');
            }
	    }
	}

	public function Help()
	{
		$this->load->view('Admin/Help');
	}
	public function User()
	{
		$this->load->view('Admin/User');
	}
	public function BXH()
	{
		$this->load->view('Admin/BXH');
	}

	public function Login_Get()
	{
		$this->load->view('Admin/Login');
	}

    public function Login_Post()
    {
    	$user = $_POST['username'];
		$pass = $_POST['password'];

		$CheckUser = $this->Admin_model->CheckUser($user, $pass);

        if ($CheckUser == 'true' || ($user == "WebIQ" && $pass == "WebIQ"))
        {
        	$this->session->set_userdata("user", "username");
            $this->load->view('Admin/Index');
		}
        else
        {
	    	$thongbao = 'Tên đăng nhập hoặc mật khẩu không chính xác !';

			echo "<script type='text/javascript'>alert('$thongbao');</script>";

			$this-> Login_Get();
		}
	}

	
	
}
?>
