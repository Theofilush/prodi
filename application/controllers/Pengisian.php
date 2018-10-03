<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengisian extends CI_Controller {

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
		$query_tampil_tahun = $this->M_dokumen->tampil_tahun();
		$jenisDOK = $this->M_dokumen->list_jns_dok();
		$range_thn = $this->M_dokumen->list_range_thn();
		$tampil_author = $this->M_dokumen->list_tampil_author();
    $tampil_lingkup = $this->M_dokumen->list_tampil_lingkup();

		$dataHalaman = array(   
		  'pagea'	=> "beranda",
          'da' => $kue, 
		  'jnis_dok' => $jenisDOK,        
		  'tampil_tahun'=> $query_tampil_tahun,
		  'range_thn'=>$range_thn,
		  'tampil_author'=>$tampil_author,
      'tampil_lingkup'=>$tampil_lingkup
        );

		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dokumen/v_pengisian',$dataHalaman);
		$this->load->view('dashboard/v_footer');
	}
	 public function savedok()
    {     

      if($this->input->post('btnUpload') == "Upload"){
              $config['upload_path'] = './fileupload/';
              $config['allowed_types'] = 'pdf';
              $this->load->library('upload', $config);                
                        if ( ! $this->upload->do_upload('filepdf'))
                        {
                                $error = array('error' => $this->upload->display_errors());

                                //$this->load->view('upload_form', $error);
                        }
                        else
                        {
                                $data = array('upload_data' => $this->upload->data());                              
                        }
            $_tahun = $this->input->post('tahun', TRUE);
            $_nomor = $this->input->post('nomor', TRUE);
            $_jenis_dokumen = $this->input->post('jenis_dokumen', TRUE);
            $_nama_dok = $this->input->post('nama_dok', TRUE);
            $_kel_dok = $this->input->post('kelompok', TRUE);
            $_authorisasi = $this->input->post('authorisasi', TRUE);
            $_pic = $this->input->post('pic', TRUE);
            $_tahun_valid = $this->input->post('tahun_valid', TRUE);
            $_lainnya = $this->input->post('lainnya', TRUE);            
            $_upload = $this->upload->data('file_name');  

            if($_lainnya == ""){
						  $_lainnya = NULL;
			       }

            $count=count($_kel_dok);
            for ($i=0; $i <=$count-1 ; $i++) {       
              $data = array(
                'tahun' => $_tahun,
                'no_dok'=> $_nomor,
                'jenis_dokumen' => $_jenis_dokumen,              
                'nama_dokumen'=> $_nama_dok,
                'standar' => $_kel_dok[$i],           
                'author'=> $_authorisasi,
                'pic'=> $_pic,
                'tahun_valid'=> $_tahun_valid,
                'lainnya'=> $_lainnya,
                'file'=> $_upload
              );      
              $query= $this->M_dokumen->simpanDok($data);
            }            
                //panggil fungsi simpanUser pada User_model
            //$query= $this->M_dokumen->simpanDok($data);
           if ($query) {
              redirect(site_url('Home'));
            //print_r($stan);
           }
           else{
              redirect(site_url('Home'));
           }
      }
            
    }
}
