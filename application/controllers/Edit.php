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
          'tampil_author'=>$query_tampil_author,
          'tampil_lingkup'=>$query_tampil_lingkup,
          'tampil_talid'=>$query_tampil_talid,
        );
 
		//$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('pengeditan/v_edit_dokumen',$dataHalaman);
		//$this->load->view('dashboard/v_footer');
	}
	public function updatedok(){
        if ($this->input->post('btnUpload') == "Upload") {
			$_tahun = $this->input->post('tahun', TRUE);
			$_nomor = $this->input->post('nomor', TRUE);
			$_jenis_dokumen = $this->input->post('jenis_dokumen', TRUE);
			$_nama_dok = $this->input->post('nama_dok', TRUE);
			$_lingkup = $this->input->post('lingkup', TRUE);
			$_authorisasi = $this->input->post('authorisasi', TRUE);
			//$_kelompok = $this->input->post('kelompok', TRUE);
			$_tahun_valid = $this->input->post('tahun_valid', TRUE);
			$_r2_status = $this->input->post('r2_status', TRUE);			
			$pic = $this->input->post('pic', TRUE);
			$id = $this->input->post('id', TRUE);
			$std = $this->input->post('std', TRUE);
			
              $data = array(
				'tahun' => $_tahun,
				'no_dok' => $_nomor,
				'jenis_dokumen' => $_jenis_dokumen,
				'nama_dokumen' => $_nama_dok,
				'lingkup' => $_lingkup,
				'author' => $_authorisasi,
				//'standar' => $_kelompok,
				'tahun_valid' => $_tahun_valid,
				'valid' => $_r2_status,
				'pic' => $pic
              );              
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
