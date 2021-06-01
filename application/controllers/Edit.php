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
		$standar = $this->M_dokumen->standar();
    	$butir = $this->M_dokumen->butir();
    	$jenis_dokumen = $this->M_dokumen->jenis_dokumen();
		// $tampil_author = $this->M_dokumen->list_tampil_author();
    	$lingkup_dokumen = $this->M_dokumen->lingkup_dokumen();

		//tahun, kategori, author, lingkup, tahun valid
		$dataHalaman = array(   
		  	'pagea'	=> "beranda",
          	'da' => $kue, 
          	'query'   => $query,
		  	'standar' => $standar,        
      		'tampil_tahun'=> $query_tampil_tahun,
      		'butir'=> $butir,
		  	'jenis_dokumen'=> $jenis_dokumen,
      		'lingkup_dokumen'=>$lingkup_dokumen
        );
 
		//$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('pengeditan/v_edit_dokumen',$dataHalaman);
		//$this->load->view('dashboard/v_footer');
	}


	public function updatedok(){
        if ($this->input->post('btnUpload') == "Upload") {
        	$_tahun= $this->input->post('tahun', TRUE);
            // $_semester = $this->input->post('semester', TRUE);
			$_standar = $this->input->post('standar', TRUE);
            $_butir =  $this->input->post('butir', TRUE);
            $_jenis_dokumen =  $this->input->post('jenis_dokumen', TRUE);
            $_lingkup_dokumen = $this->input->post('lingkup_dokumen', TRUE);
			$_pencapaian = $this->input->post('pencapaian', TRUE);
			$_bobot = $this->input->post('bobot', TRUE);
			$_valid = $this->input->post('valid', TRUE);
			$_indikator = $this->input->post('indikator', TRUE);
			$_presentase = $this->input->post('presentase', TRUE);
			$id = $this->input->post('id', TRUE);
			// $std = $this->input->post('std', TRUE);
			
              $data = array(
				'tahun' => $_tahun,
                // 'semester' => $_semester,
                'id_standar' => $_standar,    
                'id_butir' => $_butir,              
                'id_jenis' => $_jenis_dokumen,
                'id_lingkup'=> $_lingkup_dokumen,
				'pencapaian' => $_pencapaian,
                'bobot'=> $_bobot,
				'valid' => $_valid,
				'indikator' => $_indikator,
				'presentase' => $_presentase
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
