<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_dokumen extends CI_Model{
    var $t_dokumen = 't_dokumen';
    var $ktg = 'kategori';
	function tampil_tahun(){ //query untuk menampilkan tahun pada form input
        $this->db->order_by('tahun', 'ASC');
        $query = $this->db->get('tahun'); 
        return $query->result();
    }
    function list_jns_dok(){
        $this->db->order_by('id_jenis_dokumen', 'ASC');
        $query = $this->db->get('kategori'); 
        return $query->result();
    }
    function list_range_thn(){ 
        $this->db->order_by('id_thn_valid', 'ASC');
        $query = $this->db->get('tahun_valid'); 
        return $query->result();
    }
    function tampil_jabatan(){
    	$this->db->where('akses_id >1');         
        $query = $this->db->get('hak_akses'); 
        return $query->result();
    }
    function list_tampil_author(){
        $this->db->order_by('id_author', 'ASC');
        $query = $this->db->get('author'); 
        return $query->result();
    }
    function list_tampil_lingkup(){
    	$this->db->order_by('id_lingkup', 'ASC');
        $query = $this->db->get('lingkup'); 
        return $query->result();
    }
    function simpanDok($data){
        return $this->db->insert($this->t_dokumen, $data);
    } 
    function get_dokumen(){
        $query = $this->db->get($this->t_dokumen);
        return $query->result();
    } 
    function get_dokumen_1(){
        $this->db->where('standar',1);
        $hasil = $this->db->get($this->t_dokumen);
        return $hasil->result();
    }
    function get_dokumen_2(){
        $this->db->where('standar',2);
        $hasil = $this->db->get($this->t_dokumen);
        return $hasil->result();
    }
    function get_dokumen_3(){
        $this->db->where('standar',3);
        $hasil = $this->db->get($this->t_dokumen);
        return $hasil->result();
    }
    function get_dokumen_4(){
        $this->db->where('standar',4);
        $hasil = $this->db->get($this->t_dokumen);
        return $hasil->result();
    }
    function get_dokumen_5(){
        $this->db->where('standar',5);
        $hasil = $this->db->get($this->t_dokumen);
        return $hasil->result();
    }
    function get_dokumen_6(){
        $this->db->where('standar',6);
        $hasil = $this->db->get($this->t_dokumen);
        return $hasil->result();
    }
    function get_dokumen_7(){
        $this->db->where('standar',7);
        $hasil = $this->db->get($this->t_dokumen);
        return $hasil->result();
    }
    function get_dokumen_8(){
        $this->db->where('standar',8);
        $hasil = $this->db->get($this->t_dokumen);
        return $hasil->result();
    }
    function get_dokumen_9(){
        $this->db->where('standar',9);
        $hasil = $this->db->get($this->t_dokumen);
        return $hasil->result();
    }
    function listEdit($id){
        $this->db->where('id_dok',$id);
        $hasil = $this->db->get($this->t_dokumen);
        return $hasil->result();
    }
    //menghitung total setiap standar ke grafik
    function hitung_stdxxxx(){
        $this->db->select('standar,`kategori`.jenis_dokumen,COUNT(*) as jumlah_dok');
        $this->db->from($this->t_dokumen);  
        $this->db->join($this->ktg, 't_dokumen.jenis_dokumen= kategori.jenis_dokumen','RIGHT');   
        $this->db->where('standar',1);  
        $this->db->group_by('kategori.jenis_dokumen'); 
        $this->db->order_by('kategori.jenis_dokumen','ASC'); 
        return $this->db->get()->result();
    }function hitung_std(){
        $this->db->select('standar,`kategori`.jenis_dokumen,COUNT(*) as jumlah_dok');
        $this->db->from($this->t_dokumen);  
        $this->db->join($this->ktg, 't_dokumen.jenis_dokumen= kategori.jenis_dokumen','RIGHT');   
        $this->db->where('standar ',1);  
        $this->db->group_by('kategori.jenis_dokumen'); 
        $this->db->order_by('kategori.jenis_dokumen','ASC'); 
        return $this->db->get()->result();
    }
    function hitung_std1(){
        $this->db->select('standar,`kategori`.jenis_dokumen,COUNT(*) as jumlah_dok');
        $this->db->from($this->t_dokumen);  
        $this->db->join($this->ktg, 't_dokumen.jenis_dokumen= kategori.jenis_dokumen','RIGHT');   
        $this->db->where('standar',1);  
        $this->db->group_by('kategori.jenis_dokumen'); 
        $this->db->order_by('kategori.jenis_dokumen','ASC'); 
        return $this->db->get()->result();
    }
    function hitung_std2(){
        $this->db->select('standar,`kategori`.jenis_dokumen,COUNT(*) as jumlah_dok');
        $this->db->from($this->t_dokumen);  
        $this->db->join($this->ktg, 't_dokumen.jenis_dokumen= kategori.jenis_dokumen','RIGHT');   
        $this->db->where('standar',2);  
        $this->db->group_by('kategori.jenis_dokumen'); 
        $this->db->order_by('kategori.jenis_dokumen','ASC'); 
        return $this->db->get()->result();
    }
    function hitung_std3(){
        $this->db->select('standar,`kategori`.jenis_dokumen,COUNT(*) as jumlah_dok');
        $this->db->from($this->t_dokumen);  
        $this->db->join($this->ktg, 't_dokumen.jenis_dokumen= kategori.jenis_dokumen','RIGHT');   
        $this->db->where('standar',3);  
        $this->db->group_by('kategori.jenis_dokumen'); 
        $this->db->order_by('kategori.jenis_dokumen','ASC'); 
        return $this->db->get()->result();
    }
    function hitung_std4(){
        $this->db->select('standar,`kategori`.jenis_dokumen,COUNT(*) as jumlah_dok');
        $this->db->from($this->t_dokumen);  
        $this->db->join($this->ktg, 't_dokumen.jenis_dokumen= kategori.jenis_dokumen','RIGHT');   
        $this->db->where('standar',4);  
        $this->db->group_by('kategori.jenis_dokumen'); 
        $this->db->order_by('kategori.jenis_dokumen','ASC'); 
        return $this->db->get()->result();
    }
    function hitung_std5(){
        $this->db->select('standar,`kategori`.jenis_dokumen,COUNT(*) as jumlah_dok');
        $this->db->from($this->t_dokumen);  
        $this->db->join($this->ktg, 't_dokumen.jenis_dokumen= kategori.jenis_dokumen','RIGHT');   
        $this->db->where('standar',5);  
        $this->db->group_by('kategori.jenis_dokumen'); 
        $this->db->order_by('kategori.jenis_dokumen','ASC'); 
        return $this->db->get()->result();
    }
    function hitung_std6(){
        $this->db->select('standar,`kategori`.jenis_dokumen,COUNT(*) as jumlah_dok');
        $this->db->from($this->t_dokumen);  
        $this->db->join($this->ktg, 't_dokumen.jenis_dokumen= kategori.jenis_dokumen','RIGHT');   
        $this->db->where('standar',6);  
        $this->db->group_by('kategori.jenis_dokumen'); 
        $this->db->order_by('kategori.jenis_dokumen','ASC'); 
        return $this->db->get()->result();
    }
    function hitung_std7(){
        $this->db->select('standar,`kategori`.jenis_dokumen,COUNT(*) as jumlah_dok');
        $this->db->from($this->t_dokumen);  
        $this->db->join($this->ktg, 't_dokumen.jenis_dokumen= kategori.jenis_dokumen','RIGHT');   
        $this->db->where('standar',7);  
        $this->db->group_by('kategori.jenis_dokumen'); 
        $this->db->order_by('kategori.jenis_dokumen','ASC'); 
        return $this->db->get()->result();
    }
    function hitung_std8(){
        $this->db->select('standar,`kategori`.jenis_dokumen,COUNT(*) as jumlah_dok');
        $this->db->from($this->t_dokumen);  
        $this->db->join($this->ktg, 't_dokumen.jenis_dokumen= kategori.jenis_dokumen','RIGHT');   
        $this->db->where('standar',8);  
        $this->db->group_by('kategori.jenis_dokumen'); 
        $this->db->order_by('kategori.jenis_dokumen','ASC'); 
        return $this->db->get()->result();
    }
    function hitung_std9(){
        $this->db->select('standar,`kategori`.jenis_dokumen,COUNT(*) as jumlah_dok');
        $this->db->from($this->t_dokumen);  
        $this->db->join($this->ktg, 't_dokumen.jenis_dokumen= kategori.jenis_dokumen','RIGHT');   
        $this->db->where('standar',9);  
        $this->db->group_by('kategori.jenis_dokumen'); 
        $this->db->order_by('kategori.jenis_dokumen','ASC'); 
        return $this->db->get()->result();
    }
    function tampil_kategori(){ //query untuk menampilkan tahun pada form input
        $this->db->order_by('jenis_dokumen', 'ASC');
        $query = $this->db->get('kategori'); 
        return $query->result();
    }
    function deleteDok_standar1($id){
        $this->db->where('id_dok', $id);
        $this->db->delete($this->t_dokumen);
    }
    function updateDok($data,$id){
        $this->db->where('id_dok',$id);
        return $this->db->update($this->t_dokumen,$data);
    }
}
?>
