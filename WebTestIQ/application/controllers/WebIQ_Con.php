<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebIQ_Con extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
		function __construct() {
		parent::__construct();
		$this->load->database();
		// Load url helper
		$this->load->helper('url');
}
	 public function index()
	{
		$this->load->view('trang_chu');
	}
	 public function baitestiq()
	{
		$this->load->view('baitestiq');
	}
	public function baitesteq()
	{
		$this->load->view('baitesteq');
	}
	public function tuyendung()
	{
		$this->load->view('tuyendung');
	}
	public function tinhcach()
	{
		$this->load->view('tinhcach');
	}
	public function iqnoitieng()
	{
		$this->load->view('iqnguoinoitieng');
	}
	public function iq()
	{
		$this->load->view('iq');
	}

	public function loadcauhoi()
	{
		$this->load->model('baitest_model');
		$id = $this ->input->post('id');
		$matest = $this ->input->post('matest');

		$choi['choi'] = $this->baitest_model->baitest($id, $matest);
        $this->load->view('loadcauhoi', $choi);
	}
	public function dsachcauhoi()
	{
		$this->load->model('baitest_model');
		$matest = $this ->input->post('matest');

		$dschoi['dschoi'] = $this->baitest_model->loadlisttest($matest);
		$this->load->view('loadlisttest', $dschoi);
	}
	public function ketqua(){
		$this->load->view('ketqua');
	}
}
	