<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

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

		$dataHalaman = array(   
		  'pagea'	=> "beranda",
          'da' => $kue   
        );

		//$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('penambahan/v_add_dokumen',$dataHalaman);
		//$this->load->view('dashboard/v_footer');
	}
}
