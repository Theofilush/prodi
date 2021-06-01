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
		$standar = $this->M_dokumen->standar();
    $butir = $this->M_dokumen->butir();
    $jenis_dokumen = $this->M_dokumen->jenis_dokumen();
		// $tampil_author = $this->M_dokumen->list_tampil_author();
    $lingkup_dokumen = $this->M_dokumen->lingkup_dokumen();

		$dataHalaman = array(   
		  'pagea'	=> "beranda",
      'da' => $kue, 
		  'standar' => $standar,        
      'tampil_tahun'=> $query_tampil_tahun,
      'butir'=> $butir,
		  'jenis_dokumen'=> $jenis_dokumen,
		  // 'tampil_author'=>$tampil_author,
      'lingkup_dokumen'=>$lingkup_dokumen
    );

		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dokumen/v_pengisian',$dataHalaman);
		$this->load->view('dashboard/v_footer');
	}
  public function listButir(){
    $id_standar = $this->input->post('id_standar');
    $perbutir = $this->M_dokumen->viewByButir($id_standar);
    
    $lists = "<option value=''>Pilih</option>";
    
    foreach($perbutir as $data){ $lists .= "<option value='".$data->id_butir."'>".$data->nama_butir."</option>"; }
    
    $callback = array('list_perbutir'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
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
              $config['allowed_types'] = 'pdf';
              $config['max_size']      = '10000';
              $this->load->library('upload', $config);                
                        if ( ! $this->upload->do_upload('filepdf'))
                        {
                                $error = array('error' => $this->upload->display_errors());

                                redirect(site_url('ErrorPage/filesize'));
                                //$this->load->view('upload_form', $error);
                        }
                        else
                        {
                                $data = array('upload_data' => $this->upload->data());                              
                        } 
                       
            $_tahun= $this->input->post('tahun', TRUE);
            // $_semester = $this->input->post('semester', TRUE);
            $_standar = $this->input->post('standar', TRUE);
            $_butir =  $this->input->post('butir', TRUE);
            $_jenis_dokumen =  $this->input->post('jenis_dokumen', TRUE);
            $_lingkup_dokumen = $this->input->post('lingkup_dokumen', TRUE);
            $_upload = $this->upload->data('file_name');  
            $_pic = $this->input->post('pic', TRUE);
                  

            // if($_perluasan_dokumen == ""){
						//   $_perluasan_dokumen = "-";
			      // }
            //  if($_kelompok_dokumen2 == ""){
            //   $_kelompok_dokumen2 = "-";
            //  }

            /*digunakan untuk ketika input multiple standar
            $count=count($_kel_dok);
            for ($i=0; $i <=$count-1 ; $i++) {       
            } */           
              $data = array(
                'tahun' => $_tahun,
                // 'semester' => $_semester,
                'id_standar' => $_standar,    
                'id_butir' => $_butir,              
                'id_jenis' => $_jenis_dokumen,
                'id_lingkup'=> $_lingkup_dokumen,
                'file'=> $_upload,
                'pic'=> $_pic
              );
              $query= $this->M_dokumen->simpanDok($data);
              
             
           if ($query) {            
            //echo '<body onLoad="window.close()"></body> ';
            //echo "<script> function ttup() { self.close; return false;} ttup(); </script> ";
            $this->session->set_flashdata('notification', 'Penambahan Dokumen Akreditasi Berhasil');
            redirect(site_url('Home'));
            //print_r($stan);
           }
           else{
              $this->session->set_flashdata('notification1', 'Penambahan Dokumen Akreditasi Tidak Berhasil');
              redirect(site_url('Home'));
              //echo "<b>Data Gagal DiMasukkan</b>";
           }
      }
            
    }
}
