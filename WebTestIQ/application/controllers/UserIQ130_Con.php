<?php
class UserIQ130_Con extends CI_Controller
{
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function UserIQ130()
	{
		$this->load->view('useriq130');
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
