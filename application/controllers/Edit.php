<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		} 
	}
	public function index()
	{
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan); 
		$query = $this->M_dokumen->get_dokumen(); 

		$dataHalaman = array(   
		'pagea'	=> "beranda",
          'da' => $kue,
          'query'   => $query
        );
 
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dokumen/standar/v_standar1');
		$this->load->view('dashboard/v_footer');
	}
}
