<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		} 
	}
	public function index($id)
	{
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan); 
		$query = $this->M_dokumen->listEdit($id); 

		$query_tampil_tahun = $this->M_dokumen->tampil_tahun(); 
		$query_tampil_kategori = $this->M_dokumen->list_jns_dok(); 
		$range_thn = $this->M_dokumen->list_range_thn();
   		$perluasan_dok = $this->M_dokumen->perluasan_dok();
		$perluasan_dok2 = $this->M_dokumen->viewByProvinsi($id);
  		$kelompok_dok = $this->M_dokumen->kelompok_dok();
		$query_tampil_author = $this->M_dokumen->list_tampil_author();
		$query_tampil_lingkup = $this->M_dokumen->list_tampil_lingkup(); 
		$query_tampil_talid = $this->M_dokumen->list_range_thn();
 
		//tahun, kategori, author, lingkup, tahun valid
		$dataHalaman = array(   
		  'pagea'	=> "beranda",
          'da' => $kue, 
          'query'   => $query,
          'tampil_tahun'=>$query_tampil_tahun,
          'tampil_kategori'=>$query_tampil_kategori,
          'perluasan_dok'=> $perluasan_dok,
          'perluasan_dok2'=> $perluasan_dok2,
		  'kelompok_dok'=> $kelompok_dok,
          'tampil_author'=>$query_tampil_author,
          'tampil_lingkup'=>$query_tampil_lingkup,
          'tampil_talid'=>$query_tampil_talid,
        );
 
		//$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('pengeditan/v_edit_dokumen',$dataHalaman);
		//$this->load->view('dashboard/v_footer');
	}
	public function listPerluasan(){
    $id_provinsi = $this->input->post('id_provinsi');
    $perdok = $this->M_dokumen->viewByProvinsi($id_provinsi);
    
    $lists = "<option value=''>Pilih</option>";
    
    foreach($perdok as $data){ $lists .= "<option value='".$data->id_permen."'>".$data->nama."</option>"; }
    
    $callback = array('list_perdok'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
public function listKelDok(){
    $id_keldok = $this->input->post('id_keldok');
    $perdok = $this->M_dokumen->viewByProvinsi2($id_keldok);
  
    $lists = "<option value=''>Pilih</option>";
    
    foreach($perdok as $data){ $lists .= "<option value='".$data->kd_dok."'>".$data->nama."</option>"; }
    
    $callback = array('list_keldok'=>$lists); 
    echo json_encode($callback);
  }

	public function updatedok(){
        if ($this->input->post('btnUpload') == "Upload") {
        	$_tahun_terbit= $this->input->post('tahun_terbit', TRUE);
            $_tt_smt = $this->input->post('tt_smt', TRUE);
            $_perluasan_dokumen =  $this->input->post('perluasan_dokumen', TRUE);
            $_kelompok_dokumen2 =  $this->input->post('kelompok_dokumen2', TRUE);
			$_nama_dok = $this->input->post('nama_dok', TRUE);
			$_r2_status = $this->input->post('r2_status', TRUE);

			$pic = $this->input->post('pic', TRUE);
			$id = $this->input->post('id', TRUE);
			$std = $this->input->post('std', TRUE);
			
			if ($_perluasan_dokumen =="" || $_kelompok_dokumen2 == "") {
              $data = array(
				'nama_dokumen' => $_nama_dok,
				/*'jenis_dokumen' => $_perluasan_dokumen,
				'lingkup' => $_kelompok_dokumen2,*/
				'pic' => $pic,
				'tahun_terbit' => $_tahun_terbit,
                'tt_semester' => $_tt_smt,
				'valid' => $_r2_status
              );              
			}elseif ($_perluasan_dokumen !="" || $_kelompok_dokumen2 != "") {
              $data = array(
				'nama_dokumen' => $_nama_dok,
				'jenis_dokumen' => $_perluasan_dokumen,
				'lingkup' => $_kelompok_dokumen2,
				'pic' => $pic,
				'tahun_terbit' => $_tahun_terbit,
                'tt_semester' => $_tt_smt,
				'valid' => $_r2_status
              );              
			}
			
          $query= $this->M_dokumen->updateDok($data,$id);
          if ($query) {
          	echo '<body onLoad="window.close()"></body> ';
            //redirect("borang/Standar".$std);
          	//echo '<body onLoad="window.location.reload()"></body> ';
          }
          else{
			//$this->session->set_flashdata('notification', 'Gagal Melakukan Update');	
          	echo '<body onLoad="window.close()"></body> ';
            //redirect("borang/Standar".$std);
          }
        }
	}
}
