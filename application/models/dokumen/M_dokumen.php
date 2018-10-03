<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_dokumen extends CI_Model{
    var $t_dokumen = 't_dokumen';
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


}
?>
