<?php
class UserIQ130_Con extends CI_Controller
{
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function UserIQ130_get()
    {
    	$this->load->view('userIQ130');
    }

    public function UserIQ130_post()
	{
		$this->load->model('userIQ130_model');

		$hoten = $_POST['hoten'];
		$email = $_POST['email'];
		$sdt = $_POST['sdt'];
		$namsinh = $_POST['namsinh'];
		$nghenghiep = $_POST['nghenghiep'];
		$sothich = $_POST['sothich'];

        $diemiq = $_POST['ketquaiq'];
        $date = getdate();
		$ngaylam = $date['year'].'/'.$date['mon'].'/'.$date['mday'].' '.$date['hours'].'/'.$date['minutes'].'/'.$date['seconds'];
		
		$CheckUser_isnull = $this->userIQ130_model->CheckUser($sdt, $hoten, $namsinh);

		if($CheckUser_isnull == 'true')
		{
			$user = array(
					'Hoten' => $hoten,
					'Email' => $email,
					'SDT' => $sdt,
					'Namsinh' => $namsinh,
					'Nghenghiep' => $nghenghiep,
					'Sothich' => $sothich );

			$id = $this->userIQ130_model->insert_userIQ130($user);

			$ttich = array(
				'IDUser' => $id,
				'MaTests' => 'IQ',
				'MaTTich' => null,
				'Ngaylam' => $ngaylam,
				'Diem' => $diemiq, );

				$this->userIQ130_model->insert_thanhtichIQ130($ttich);

				$this->BxhIQ();
		}else 
		{
			$data = $this->userIQ130_model->getDiemTT($CheckUser_isnull);

			if ($diemiq <= $data)
	        {
	                $thongbao = 'Bạn Đã Tồn tại thành tích cao hơn rồi!!';

	                $this-> BxhIQ($thongbao);
	                echo "<h2 style='text-align:center; color:#1200ff'> $thongbao </h2>";
			} else 
			{
				$ttich = array(
					'IDUser' => $CheckUser_isnull,
					'MaTests' => 'IQ',
					'MaTTich' => null,
					'Ngaylam' => '$ngaylam',
					'Diem' => $diemiq, );

				$this->userIQ130_model->insert_thanhtichIQ130($ttich);

				$this->BxhIQ();
			}
		}
		
	}

	public function BxhIQ()
        {
            // Load model
	        $this->load->model('userIQ130_model');
	  
	        // Gọi function trong model
	        $bxh['bxh'] = $this->userIQ130_model->bxh();
			
            $this->load->view('bangxephang', $bxh);
        }
}
?>
