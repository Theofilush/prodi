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
    $perluasan_dok = $this->M_dokumen->perluasan_dok();
    $kelompok_dok = $this->M_dokumen->kelompok_dok();
		$tampil_author = $this->M_dokumen->list_tampil_author();
    $tampil_lingkup = $this->M_dokumen->list_tampil_lingkup();

		$dataHalaman = array(   
		  'pagea'	=> "beranda",
      'da' => $kue, 
		  'jnis_dok' => $jenisDOK,        
      'tampil_tahun'=> $query_tampil_tahun,
      'perluasan_dok'=> $perluasan_dok,
		  'kelompok_dok'=> $kelompok_dok,
		  'range_thn'=>$range_thn,
		  'tampil_author'=>$tampil_author,
      'tampil_lingkup'=>$tampil_lingkup
    );

		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dokumen/v_pengisian',$dataHalaman);
		$this->load->view('dashboard/v_footer');
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
  public function listLingDok(){
    $id_lingdok = $this->input->post('id_lingdok');
    $perdok = $this->M_dokumen->viewByProvinsi3($id_lingdok);

    $lists = "<option value=''>Pilih</option>";
    
    foreach($perdok as $data){ $lists .= "<option value='".$data->id_lingkup."'>".$data->lingkup."</option>"; }
    
    $callback = array('list_lingdok'=>$lists); 
    echo json_encode($callback);
  }

	 public function savedok(){     
      if($this->input->post('btnUpload') == "Upload"){
              $config['upload_path'] = './fileupload/';
              $config['allowed_types'] = '*';
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
            $_tahun_terbit= $this->input->post('tahun_terbit', TRUE);
            $_tt_smt = $this->input->post('tt_smt', TRUE);
            $_kel_dok = $this->input->post('kelompok', TRUE);
            $_perluasan_dokumen =  $this->input->post('perluasan_dokumen', TRUE);
            $_kelompok_dokumen2 =  $this->input->post('kelompok_dokumen2', TRUE);
            $_nama_dok = $this->input->post('nama_dok', TRUE);
            $_upload = $this->upload->data('file_name');  
            $_pic = $this->input->post('pic', TRUE);
            
            /*$_tahun_berakhir = $this->input->post('tahun_berakhir', TRUE);
            $_tb_smt = $this->input->post('tb_smt', TRUE); 
            $_nomor = $this->input->post('nomor', TRUE);
            $_authorisasi = $this->input->post('authorisasi', TRUE);
            $_tahun_valid = $this->input->post('tahun_valid', TRUE);
            $_lainnya = $this->input->post('lainnya', TRUE); */           

            if($_perluasan_dokumen == ""){
						  $_perluasan_dokumen = "-";
			      }
             if($_kelompok_dokumen2 == ""){
              $_kelompok_dokumen2 = "-";
             }

            /*digunakan untuk ketika input multiple standar
            $count=count($_kel_dok);
            for ($i=0; $i <=$count-1 ; $i++) {       
            } */           
              $data = array(
                'tahun_terbit' => $_tahun_terbit,
                'tt_semester' => $_tt_smt,
                'standar' => $_kel_dok,    
                'jenis_dokumen' => $_perluasan_dokumen,              
                'lingkup' => $_kelompok_dokumen2,
                'nama_dokumen'=> $_nama_dok,
                'file'=> $_upload,
                'pic'=> $_pic
                /*'no_dok'=> $_nomor,
                'tahun_berakhir' => $_tahun_berakhir,
                'tb_semester' => $_tb_smt*/
                //'standar' => $_kel_dok[$i],           
                //'tahun' => $_tahun,
                //'author'=> $_authorisasi,
                //'tahun_valid'=> $_tahun_valid,
                //'lainnya'=> $_lainnya, 
              );
              $query= $this->M_dokumen->simpanDok($data);
             
           if ($query) {            
            //echo '<body onLoad="window.close()"></body> ';
            //echo "<script> function ttup() { self.close; return false;} ttup(); </script> ";
            $this->session->set_flashdata('notification', 'Penambahan Dokumen Akreditasi Berhasil');
            redirect(site_url('Pengisian'));
            //print_r($stan);
           }
           else{
              $this->session->set_flashdata('notification1', 'Penambahan Dokumen Akreditasi Tidak Berhasil');
              redirect(site_url('Pengisian'));
              //echo "<b>Data Gagal DiMasukkan</b>";
           }
      }
            
    }
}
