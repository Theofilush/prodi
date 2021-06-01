<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
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
		$tampil_kategori = $this->M_dokumen->tampil_kategori();
		$data_grafik_prodi = $this->M_dokumen->get_grafik_prodi();
		$data_grafik1 = $this->M_dokumen->get_grafik_standar1();
		$data_grafik2 = $this->M_dokumen->get_grafik_standar2();
		$data_grafik3 = $this->M_dokumen->get_grafik_standar3();
		$data_grafik4 = $this->M_dokumen->get_grafik_standar4();
		$data_grafik5 = $this->M_dokumen->get_grafik_standar5();
		$data_grafik6 = $this->M_dokumen->get_grafik_standar6();
		$data_grafik7 = $this->M_dokumen->get_grafik_standar7();
		$data_grafik8 = $this->M_dokumen->get_grafik_standar8();
		$data_grafik9 = $this->M_dokumen->get_grafik_standar9();
		$data_grafik10 = $this->M_dokumen->get_grafik_standar10();
		$data_akreditasi = $this->M_dokumen->get_grafik_akreditasi();

		$data_random1 = $this->M_dokumen->get_grafik_random1();		
		$data_random2 = $this->M_dokumen->get_grafik_random2();
		$data_random3 = $this->M_dokumen->get_grafik_random3();
		$data_random4 = $this->M_dokumen->get_grafik_random4();
		$data_random5 = $this->M_dokumen->get_grafik_random5();
		$data_random6 = $this->M_dokumen->get_grafik_random6();
		$data_random7 = $this->M_dokumen->get_grafik_random7();
		$data_random8 = $this->M_dokumen->get_grafik_random8();
		$data_random9 = $this->M_dokumen->get_grafik_random9();
		$data_random10 = $this->M_dokumen->get_grafik_random10();

		$arrStandar=array();
		$arrButir=array();
		$arrLingkup=array();
		$arrJenis=array();
		

		foreach($data_akreditasi as $row){
			array_push($arrStandar, $row->id_standar);
			array_push($arrButir, $row->id_butir);
			array_push($arrLingkup, $row->id_lingkup);
			array_push($arrJenis, $row->id_jenis);
		}
		for($i = 0; $i <= count($arrStandar) -1; $i++){
			// if(is_nan(SQRT(($arrStandar[$i]-$data_random1[0]['id_standar'])^2 + ($arrButir[$i]-$data_random1[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random1[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random1[0]['id_jenis'])^2))){
			if(is_nan(SQRT(($arrStandar[$i]-1)^2 + ($arrButir[$i]-1)^2 + ($arrLingkup[$i]-3)^2 + ($arrJenis[$i]-2)^2))){
				$rumus1[]=0;
			}
			else{
				$rumus1[] = number_format( SQRT(($arrStandar[$i]-$data_random1[0]['id_standar'])^2 + ($arrButir[$i]-$data_random1[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random1[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random1[0]['id_jenis'])^2), 3);
			}
			// print_r($arrButir[$i]);
			echo  SQRT(($arrStandar[$i]-$data_random1[0]['id_standar'])^2 + ($arrButir[$i]-$data_random1[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random1[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random1[0]['id_jenis'])^2);
			echo '<br>'; 
		}
		exit();
		for($i = 0; $i <= count($arrStandar) -1; $i++){
			if(is_nan(SQRT(($arrStandar[$i]-$data_random2[0]['id_standar'])^2 + ($arrButir[$i]-$data_random2[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random2[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random2[0]['id_jenis'])^2))){
				$rumus2[]=0;
			}
			else{
				$rumus2[] = number_format( SQRT(($arrStandar[$i]-$data_random2[0]['id_standar'])^2 + ($arrButir[$i]-$data_random2[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random2[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random2[0]['id_jenis'])^2), 3);
			}
		}
		for($i = 0; $i <= count($arrStandar) -1; $i++){
			if(is_nan(SQRT(($arrStandar[$i]-$data_random3[0]['id_standar'])^2 + ($arrButir[$i]-$data_random3[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random3[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random3[0]['id_jenis'])^2))){
				$rumus3[]=0;
			}
			else{
				$rumus3[] = number_format( SQRT(($arrStandar[$i]-$data_random3[0]['id_standar'])^2 + ($arrButir[$i]-$data_random3[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random3[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random3[0]['id_jenis'])^2), 3);
			}
		}
		for($i = 0; $i <= count($arrStandar) -1; $i++){
			if(is_nan(SQRT(($arrStandar[$i]-$data_random4[0]['id_standar'])^2 + ($arrButir[$i]-$data_random4[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random4[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random4[0]['id_jenis'])^2))){
				$rumus4[]=0;
			}
			else{
				$rumus4[] = number_format( SQRT(($arrStandar[$i]-$data_random4[0]['id_standar'])^2 + ($arrButir[$i]-$data_random4[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random4[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random4[0]['id_jenis'])^2), 3);
			}
		}
		for($i = 0; $i <= count($arrStandar) -1; $i++){
			if(is_nan(SQRT(($arrStandar[$i]-$data_random5[0]['id_standar'])^2 + ($arrButir[$i]-$data_random5[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random5[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random5[0]['id_jenis'])^2))){
				$rumus5[]=0;
			}
			else{
				$rumus5[] = number_format( SQRT(($arrStandar[$i]-$data_random5[0]['id_standar'])^2 + ($arrButir[$i]-$data_random5[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random5[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random5[0]['id_jenis'])^2), 3);
			}
		}
		for($i = 0; $i <= count($arrStandar) -1; $i++){
			if(is_nan(SQRT(($arrStandar[$i]-$data_random6[0]['id_standar'])^2 + ($arrButir[$i]-$data_random6[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random6[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random6[0]['id_jenis'])^2))){
				$rumus6[]=0;
			}
			else{
				$rumus6[] = number_format( SQRT(($arrStandar[$i]-$data_random6[0]['id_standar'])^2 + ($arrButir[$i]-$data_random6[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random6[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random6[0]['id_jenis'])^2), 3);
			}
		}
		for($i = 0; $i <= count($arrStandar) -1; $i++){
			if(is_nan(SQRT(($arrStandar[$i]-$data_random7[0]['id_standar'])^2 + ($arrButir[$i]-$data_random7[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random7[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random7[0]['id_jenis'])^2))){
				$rumus7[]=0;
			}
			else{
				$rumus7[] = number_format( SQRT(($arrStandar[$i]-$data_random7[0]['id_standar'])^2 + ($arrButir[$i]-$data_random7[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random7[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random7[0]['id_jenis'])^2), 3);
			}
		}
		for($i = 0; $i <= count($arrStandar) -1; $i++){
			if(is_nan(SQRT(($arrStandar[$i]-$data_random8[0]['id_standar'])^2 + ($arrButir[$i]-$data_random8[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random8[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random8[0]['id_jenis'])^2))){
				$rumus8[]=0;
			}
			else{
				$rumus8[] = number_format( SQRT(($arrStandar[$i]-$data_random8[0]['id_standar'])^2 + ($arrButir[$i]-$data_random8[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random8[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random8[0]['id_jenis'])^2), 3);
			}
		}
		for($i = 0; $i <= count($arrStandar) -1; $i++){
			if(is_nan(SQRT(($arrStandar[$i]-$data_random9[0]['id_standar'])^2 + ($arrButir[$i]-$data_random9[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random9[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random9[0]['id_jenis'])^2))){
				$rumus9[]=0;
			}
			else{
				$rumus9[] = number_format( SQRT(($arrStandar[$i]-$data_random9[0]['id_standar'])^2 + ($arrButir[$i]-$data_random9[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random9[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random9[0]['id_jenis'])^2), 3);
			}
		}
		for($i = 0; $i <= count($arrStandar) -1; $i++){
			if(is_nan(SQRT(($arrStandar[$i]-$data_random10[0]['id_standar'])^2 + ($arrButir[$i]-$data_random10[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random10[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random10[0]['id_jenis'])^2))){
				$rumus10[]=0;
			}
			else{
				$rumus10[] = number_format( SQRT(($arrStandar[$i]-$data_random10[0]['id_standar'])^2 + ($arrButir[$i]-$data_random10[0]['id_butir'])^2 + ($arrLingkup[$i]-$data_random10[0]['id_lingkup'])^2 + ($arrJenis[$i]-$data_random10[0]['id_jenis'])^2), 3);
			}
		}

		// foreach($rumus2 as $row){
		// 	echo $row;
		// 	echo '<br>';
		// } 
		// exit();
		// print_r($arrButir); exit();
		



		$dataHalaman = array(
			'pagea'	=> "beranda",
			'da' => $kue,
			'query'   => $query,
			'tampil_kategori'=>$tampil_kategori,
			'data_grafik_prodi'=>$data_grafik_prodi,
			'data_grafik1'=>$data_grafik1,
			'data_grafik2'=>$data_grafik2,
			'data_grafik3'=>$data_grafik3,
			'data_grafik4'=>$data_grafik4,
			'data_grafik5'=>$data_grafik5,
			'data_grafik6'=>$data_grafik6,
			'data_grafik7'=>$data_grafik7,
			'data_grafik8'=>$data_grafik8,
			'data_grafik9'=>$data_grafik9,
			'data_grafik10'=>$data_grafik10,
			'rumus1'=>$rumus1,
			'rumus2'=>$rumus2,
			'rumus3'=>$rumus3,
			'rumus4'=>$rumus4,
			'rumus5'=>$rumus5,
			'rumus6'=>$rumus6,
			'rumus7'=>$rumus7,
			'rumus8'=>$rumus8,
			'rumus9'=>$rumus9,
			'rumus10'=>$rumus10,

			

		);

		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dashboard/v_home');
		$this->load->view('dashboard/v_footer2', $dataHalaman);
	}
}