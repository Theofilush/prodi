<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		}
	}
	public function index2()
	{
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan);
		$query = $this->M_dokumen->get_dokumen();
		$tampil_kategori = $this->M_dokumen->tampil_kategori();
		$ttal_std = $this->M_dokumen->hitung_std();
		$ttal_std1 = $this->M_dokumen->hitung_std1();
		$ttal_std2 = $this->M_dokumen->hitung_std2();
		$ttal_std3 = $this->M_dokumen->hitung_std3();
		$ttal_std4 = $this->M_dokumen->hitung_std4();
		$ttal_std5 = $this->M_dokumen->hitung_std5();
		$ttal_std6 = $this->M_dokumen->hitung_std6();
		$ttal_std7 = $this->M_dokumen->hitung_std7();
		$ttal_std8 = $this->M_dokumen->hitung_std8();
		$ttal_std9 = $this->M_dokumen->hitung_std9();
		
		// foreach($ttal_std as $row){
			// 	if ($row->standar != 1) { $std1[] = 0; }elseif ($row->standar == 1) { $std1[] = $row->jumlah_dok; }
			// 	if ($row->standar != 2) { $std2[] = 0; }elseif ($row->standar == 2) { $std2[] = $row->jumlah_dok; }
			// 	if ($row->standar != 3) { $std3[] = 0; }elseif ($row->standar == 3) { $std3[] = $row->jumlah_dok; }
			// 	if ($row->standar != 4) { $std4[] = 0; }elseif ($row->standar == 4) { $std4[] = $row->jumlah_dok; }
			// 	if ($row->standar != 5) { $std5[] = 0; }elseif ($row->standar == 5) { $std5[] = $row->jumlah_dok; }
			// 	if ($row->standar != 6) { $std6[] = 0; }elseif ($row->standar == 6) { $std6[] = $row->jumlah_dok; }
			// 	if ($row->standar != 7) { $std7[] = 0; }elseif ($row->standar == 7) { $std7[] = $row->jumlah_dok; }
			// 	if ($row->standar != 8) { $std8[] = 0; }elseif ($row->standar == 8) { $std8[] = $row->jumlah_dok; }
			// 	if ($row->standar != 9) { $std9[] = 0; }elseif ($row->standar == 9) { $std9[] = $row->jumlah_dok; }
		// }
		foreach($ttal_std1 as $row){
					if ($row->standar != 1) { $std1[] = 0; }elseif ($row->standar == 1) { $std1[] = $row->jumlah_dok; }
				}
		foreach($ttal_std2 as $row){
					if ($row->standar != 2) { $std2[] = 0; }elseif ($row->standar == 2) { $std2[] = $row->jumlah_dok; }
				}
		foreach($ttal_std3 as $row){
					if ($row->standar != 3) { $std3[] = 0; }elseif ($row->standar == 3) { $std3[] = $row->jumlah_dok; }
				}
		foreach($ttal_std4 as $row){
					if ($row->standar != 4) { $std4[] = 0; }elseif ($row->standar == 4) { $std4[] = $row->jumlah_dok; }
				}
		foreach($ttal_std5 as $row){
					if ($row->standar != 5) { $std5[] = 0; }elseif ($row->standar == 5) { $std5[] = $row->jumlah_dok; }
				}
		foreach($ttal_std6 as $row){
					if ($row->standar != 6) { $std6[] = 0; }elseif ($row->standar == 6) { $std6[] = $row->jumlah_dok; }
				}
		foreach($ttal_std7 as $row){
					if ($row->standar != 7) { $std7[] = 0; }elseif ($row->standar == 7) { $std7[] = $row->jumlah_dok; }
				}
		foreach($ttal_std8 as $row){
					if ($row->standar != 8) { $std8[] = 0; }elseif ($row->standar == 8) { $std8[] = $row->jumlah_dok; }
				}
		foreach($ttal_std9 as $row){
					if ($row->standar != 9) { $std9[] = 0; }elseif ($row->standar == 9) { $std9[] = $row->jumlah_dok; }
				}
	$dataHalaman = array(
		'pagea'	=> "beranda",
		'da' => $kue,
		'query'   => $query,
		'tampil_kategori'=>$tampil_kategori,
		/*'ttal_std'=>$ttal_std,*/
		'ttal_std1'=>$ttal_std1,
		'ttal_std2'=>$ttal_std2,
		'ttal_std3'=>$ttal_std3,
		'ttal_std4'=>$ttal_std4,
		'ttal_std5'=>$ttal_std5,
		'ttal_std6'=>$ttal_std6,
		'ttal_std7'=>$ttal_std7,
		'ttal_std8'=>$ttal_std8,
		'ttal_std9'=>$ttal_std9,
		'std1'=>$std1,
		'std2'=>$std2,
		'std3'=>$std3,
		'std4'=>$std4,
		'std5'=>$std5,
		'std6'=>$std6,
		'std7'=>$std7,
		'std8'=>$std8,
		'std9'=>$std9
		);

		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dashboard/v_home');
		$this->load->view('dashboard/v_footer2');
	}
	public function index()
	{
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan);
		$query = $this->M_dokumen->get_dokumen();
		$tampil_kategori = $this->M_dokumen->tampil_kategori();
		$data_jumdok = $this->M_dokumen->get_data_jumdok();
		$dataHalaman = array(
			'pagea'	=> "beranda",
			'da' => $kue,
			'query'   => $query,
			'tampil_kategori'=>$tampil_kategori,
			'data_jumdok'=>$data_jumdok
		);

		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dashboard/v_home');
		$this->load->view('dashboard/v_footer2');
	}
}