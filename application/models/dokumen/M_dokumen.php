<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_dokumen extends CI_Model{ 
    var $t_dokumen = 't_dokumen';
    var $t_kelompok_dokumen = 'kelompok_dokumen';
    var $t_perluasan_dokumen = 'perluasan_dokumen';
    var $ktg = 'kategori';
	function tampil_tahun(){ //query untuk menampilkan tahun pada form input
        $this->db->order_by('tahun', 'ASC');
        $query = $this->db->get('tahun'); 
        return $query->result();
    }
    function standar(){
        $this->db->order_by('id_standar', 'ASC');
        $query = $this->db->get('standar'); 
        return $query->result();
    }
    function tampil_jabatan(){
    	$this->db->where('akses_id >1');         
        $query = $this->db->get('hak_akses'); 
        return $query->result();
    }
    function lingkup_dokumen(){
    	$this->db->order_by('id_lingkup', 'ASC');
        $query = $this->db->get('lingkup_dokumen'); 
        return $query->result();
    }
    function simpanDok($data){
        return $this->db->insert("akreditasi", $data);
    } 
    function get_dokumen(){
        $query = $this->db->get($this->t_dokumen);
        return $query->result();
    } 
    function get_dokumen_1(){
        $this->db->select('*');
        $this->db->join("standar", 'akreditasi.id_standar = standar.id_standar','INNER');
        $this->db->join("butir", 'akreditasi.id_butir = butir.id_butir','INNER');
        $this->db->join("lingkup_dokumen", 'akreditasi.id_lingkup = lingkup_dokumen.id_lingkup','INNER');
        $this->db->join("jenis_dokumen", 'akreditasi.id_jenis = jenis_dokumen.id_jenis','INNER');
        $this->db->where('akreditasi.id_standar',1);
        $this->db->order_by('akreditasi.id_akreditasi');
        $hasil = $this->db->get("akreditasi");
        return $hasil->result();
    }
    function get_dokumen_2(){
        $this->db->select('*');
        $this->db->join("standar", 'akreditasi.id_standar = standar.id_standar','INNER');
        $this->db->join("butir", 'akreditasi.id_butir = butir.id_butir','INNER');
        $this->db->join("lingkup_dokumen", 'akreditasi.id_lingkup = lingkup_dokumen.id_lingkup','INNER');
        $this->db->join("jenis_dokumen", 'akreditasi.id_jenis = jenis_dokumen.id_jenis','INNER');
        $this->db->where('akreditasi.id_standar',2);
        $this->db->order_by('akreditasi.id_akreditasi');
        $hasil = $this->db->get("akreditasi");
        return $hasil->result();
    }
    function get_dokumen_3(){
        $this->db->select('*');
        $this->db->join("standar", 'akreditasi.id_standar = standar.id_standar','INNER');
        $this->db->join("butir", 'akreditasi.id_butir = butir.id_butir','INNER');
        $this->db->join("lingkup_dokumen", 'akreditasi.id_lingkup = lingkup_dokumen.id_lingkup','INNER');
        $this->db->join("jenis_dokumen", 'akreditasi.id_jenis = jenis_dokumen.id_jenis','INNER');
        $this->db->where('akreditasi.id_standar',3);
        $this->db->order_by('akreditasi.id_akreditasi');
        $hasil = $this->db->get("akreditasi");
        return $hasil->result();
    }
    function get_dokumen_4(){
        $this->db->select('*');
        $this->db->join("standar", 'akreditasi.id_standar = standar.id_standar','INNER');
        $this->db->join("butir", 'akreditasi.id_butir = butir.id_butir','INNER');
        $this->db->join("lingkup_dokumen", 'akreditasi.id_lingkup = lingkup_dokumen.id_lingkup','INNER');
        $this->db->join("jenis_dokumen", 'akreditasi.id_jenis = jenis_dokumen.id_jenis','INNER');
        $this->db->where('akreditasi.id_standar',4);
        $this->db->order_by('akreditasi.id_akreditasi');
        $hasil = $this->db->get("akreditasi");
        return $hasil->result();
    }
    function get_dokumen_5(){
        $this->db->select('*');
        $this->db->join("standar", 'akreditasi.id_standar = standar.id_standar','INNER');
        $this->db->join("butir", 'akreditasi.id_butir = butir.id_butir','INNER');
        $this->db->join("lingkup_dokumen", 'akreditasi.id_lingkup = lingkup_dokumen.id_lingkup','INNER');
        $this->db->join("jenis_dokumen", 'akreditasi.id_jenis = jenis_dokumen.id_jenis','INNER');
        $this->db->where('akreditasi.id_standar',5);
        $this->db->order_by('akreditasi.id_akreditasi');
        $hasil = $this->db->get("akreditasi");
        return $hasil->result();
    }
    function get_dokumen_6(){
        $this->db->select('*');
        $this->db->join("standar", 'akreditasi.id_standar = standar.id_standar','INNER');
        $this->db->join("butir", 'akreditasi.id_butir = butir.id_butir','INNER');
        $this->db->join("lingkup_dokumen", 'akreditasi.id_lingkup = lingkup_dokumen.id_lingkup','INNER');
        $this->db->join("jenis_dokumen", 'akreditasi.id_jenis = jenis_dokumen.id_jenis','INNER');
        $this->db->where('akreditasi.id_standar',6);
        $this->db->order_by('akreditasi.id_akreditasi');
        $hasil = $this->db->get("akreditasi");
        return $hasil->result();
    }
    function get_dokumen_7(){
        $this->db->select('*');
        $this->db->join("standar", 'akreditasi.id_standar = standar.id_standar','INNER');
        $this->db->join("butir", 'akreditasi.id_butir = butir.id_butir','INNER');
        $this->db->join("lingkup_dokumen", 'akreditasi.id_lingkup = lingkup_dokumen.id_lingkup','INNER');
        $this->db->join("jenis_dokumen", 'akreditasi.id_jenis = jenis_dokumen.id_jenis','INNER');
        $this->db->where('akreditasi.id_standar',7);
        $this->db->order_by('akreditasi.id_akreditasi');
        $hasil = $this->db->get("akreditasi");
        return $hasil->result();
    }
    function get_dokumen_8(){
        $this->db->select('*');
        $this->db->join("standar", 'akreditasi.id_standar = standar.id_standar','INNER');
        $this->db->join("butir", 'akreditasi.id_butir = butir.id_butir','INNER');
        $this->db->join("lingkup_dokumen", 'akreditasi.id_lingkup = lingkup_dokumen.id_lingkup','INNER');
        $this->db->join("jenis_dokumen", 'akreditasi.id_jenis = jenis_dokumen.id_jenis','INNER');
        $this->db->where('akreditasi.id_standar',8);
        $this->db->order_by('akreditasi.id_akreditasi');
        $hasil = $this->db->get("akreditasi");
        return $hasil->result();
    }
    function get_dokumen_9(){
        $this->db->select('*');
        $this->db->join("standar", 'akreditasi.id_standar = standar.id_standar','INNER');
        $this->db->join("butir", 'akreditasi.id_butir = butir.id_butir','INNER');
        $this->db->join("lingkup_dokumen", 'akreditasi.id_lingkup = lingkup_dokumen.id_lingkup','INNER');
        $this->db->join("jenis_dokumen", 'akreditasi.id_jenis = jenis_dokumen.id_jenis','INNER');
        $this->db->where('akreditasi.id_standar',9);
        $this->db->order_by('akreditasi.id_akreditasi');
        $hasil = $this->db->get("akreditasi");
        return $hasil->result();
    }
    function get_dokumen_10(){
        $this->db->select('*');
        $this->db->join("standar", 'akreditasi.id_standar = standar.id_standar','INNER');
        $this->db->join("butir", 'akreditasi.id_butir = butir.id_butir','INNER');
        $this->db->join("lingkup_dokumen", 'akreditasi.id_lingkup = lingkup_dokumen.id_lingkup','INNER');
        $this->db->join("jenis_dokumen", 'akreditasi.id_jenis = jenis_dokumen.id_jenis','INNER');
        $this->db->where('akreditasi.id_standar',10);
        $this->db->order_by('akreditasi.id_akreditasi');
        $hasil = $this->db->get("akreditasi");
        return $hasil->result();
    }
    function listEdit($id){
        $this->db->select('*');
        $this->db->join("standar", 'akreditasi.id_standar = standar.id_standar','INNER');
        $this->db->join("butir", 'akreditasi.id_butir = butir.id_butir','INNER');
        $this->db->join("lingkup_dokumen", 'akreditasi.id_lingkup = lingkup_dokumen.id_lingkup','INNER');
        $this->db->join("jenis_dokumen", 'akreditasi.id_jenis = jenis_dokumen.id_jenis','INNER');
        $this->db->where('id_akreditasi',$id);
        $hasil = $this->db->get("akreditasi");
        return $hasil->result();
    }
    //menghitung total setiap standar ke grafik
    function get_data_jumdok(){
        /*$this->db->select('tahun_terbit,COUNT(*) as jumlah_dok');
        $this->db->from($this->t_dokumen);  
        $this->db->group_by('tahun_terbit'); 
        return $this->db->get()->result();*/

        $query = $this->db->query("SELECT tahun_terbit,COUNT(*) as jumlah_dok FROM t_dokumen GROUP BY tahun_terbit");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    function get_grafik_prodi(){
        $query = $this->db->query("SELECT SUM(presentase) as jumlah_presentase, tahun FROM `akreditasi` WHERE valid = 'Ya' GROUP BY tahun");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_grafik_standar1(){
        $query = $this->db->query("SELECT SUM(presentase) as jumlah_presentase, tahun FROM `akreditasi` WHERE id_standar = 1 AND valid = 'Ya' GROUP BY tahun");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_grafik_standar2(){
        $query = $this->db->query("SELECT SUM(presentase) as jumlah_presentase, tahun FROM `akreditasi` WHERE id_standar = 2 AND valid = 'Ya' GROUP BY tahun");      
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_grafik_standar3(){
        $query = $this->db->query("SELECT SUM(presentase) as jumlah_presentase, tahun FROM `akreditasi` WHERE id_standar = 3 AND valid = 'Ya' GROUP BY tahun");      
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_grafik_standar4(){
        $query = $this->db->query("SELECT SUM(presentase) as jumlah_presentase, tahun FROM `akreditasi` WHERE id_standar = 4 AND valid = 'Ya' GROUP BY tahun");      
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_grafik_standar5(){
        $query = $this->db->query("SELECT SUM(presentase) as jumlah_presentase, tahun FROM `akreditasi` WHERE id_standar = 5 AND valid = 'Ya' GROUP BY tahun");      
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_grafik_standar6(){
        $query = $this->db->query("SELECT SUM(presentase) as jumlah_presentase, tahun FROM `akreditasi` WHERE id_standar = 6 AND valid = 'Ya' GROUP BY tahun");      
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_grafik_standar7(){
        $query = $this->db->query("SELECT SUM(presentase) as jumlah_presentase, tahun FROM `akreditasi` WHERE id_standar = 7 AND valid = 'Ya' GROUP BY tahun");      
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_grafik_standar8(){
        $query = $this->db->query("SELECT SUM(presentase) as jumlah_presentase, tahun FROM `akreditasi` WHERE id_standar = 8 AND valid = 'Ya' GROUP BY tahun");      
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_grafik_standar9(){
        $query = $this->db->query("SELECT SUM(presentase) as jumlah_presentase, tahun FROM `akreditasi` WHERE id_standar = 9 AND valid = 'Ya' GROUP BY tahun");      
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_grafik_standar10(){
        $query = $this->db->query("SELECT SUM(presentase) as jumlah_presentase, tahun FROM `akreditasi` WHERE id_standar = 10 AND valid = 'Ya' GROUP BY tahun");      
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }


    function hitung_stdxxxx(){
        $this->db->select('standar,`kategori`.jenis_dokumen,COUNT(*) as jumlah_dok');
        $this->db->from($this->t_dokumen);  
        $this->db->join($this->ktg, 't_dokumen.jenis_dokumen= kategori.jenis_dokumen','RIGHT');   
        $this->db->where('standar',1);  
        $this->db->group_by('kategori.jenis_dokumen'); 
        $this->db->order_by('kategori.jenis_dokumen','ASC'); 
        return $this->db->get()->result();
    }
    function hitung_std(){
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
    function hitung_std10(){
        $this->db->select('standar,`kategori`.jenis_dokumen,COUNT(*) as jumlah_dok');
        $this->db->from($this->t_dokumen);  
        $this->db->join($this->ktg, 't_dokumen.jenis_dokumen= kategori.jenis_dokumen','RIGHT');   
        $this->db->where('standar',10);  
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
        $this->db->where('id_akreditasi', $id);
        $this->db->delete("akreditasi");
    }
    function updateDok($data,$id){
        $this->db->where('id_akreditasi',$id);
        return $this->db->update("akreditasi",$data);
    }
    function butir(){
        $this->db->order_by('id_butir', 'ASC');
        $query = $this->db->get('butir'); 
        return $query->result();
    }
    function jenis_dokumen(){
        $this->db->order_by('id_jenis', 'ASC');
        $query = $this->db->get('jenis_dokumen'); 
        return $query->result();
    }
    public function viewByButir($id_standar){
        $this->db->where('id_standar', $id_standar);
        $result = $this->db->get('butir')->result(); // Tampilkan semua data perluasan dokumen berdasarkan kode starndar
        return $result;
    }
    public function viewByProvinsi2($id_keldok){
        $this->db->where('kode_permen', $id_keldok);
        $result = $this->db->get('kelompok_dokumen')->result(); // Tampilkan semua data perluasan dokumen berdasarkan kode starndar
        return $result;
    }
    public function viewByProvinsi3($id_lingdok){
        $this->db->where('kode_kat_dok', $id_lingdok);
        $result = $this->db->get('lingkup')->result(); // Tampilkan semua data perluasan dokumen berdasarkan kode starndar
        return $result;
    }

    public function get_grafik_akreditasi(){
        $this->db->select('id_standar, id_butir ,id_lingkup,id_jenis');
        $this->db->from('akreditasi');  
        $this->db->where('valid', 'Ya');  
        return $this->db->get()->result();
    }

    public function get_grafik_random1(){
        $this->db->select('id_standar, id_butir ,id_lingkup,id_jenis');
        $this->db->from('akreditasi');  
        $this->db->where('valid', 'Ya');
        $this->db->where('id_standar', 1);  
        $this->db->order_by('rand()');
        $this->db->limit(1);    
        return $this->db->get()->result_array();
    }
    public function get_grafik_random2(){
        $this->db->select('id_standar, id_butir ,id_lingkup,id_jenis');
        $this->db->from('akreditasi');  
        $this->db->where('valid', 'Ya');
        $this->db->where('id_standar', 2);
        $this->db->order_by('rand()');
        $this->db->limit(1);   
        return $this->db->get()->result_array();
    }
    public function get_grafik_random3(){
        $this->db->select('id_standar, id_butir ,id_lingkup,id_jenis');
        $this->db->from('akreditasi');  
        $this->db->where('valid', 'Ya');
        $this->db->where('id_standar', 3);
        $this->db->order_by('rand()');
        $this->db->limit(1);   
        return $this->db->get()->result_array();
    }
    public function get_grafik_random4(){
        $this->db->select('id_standar, id_butir ,id_lingkup,id_jenis');
        $this->db->from('akreditasi');  
        $this->db->where('valid', 'Ya');
        $this->db->where('id_standar', 4);
        $this->db->order_by('rand()');
        $this->db->limit(1);   
        return $this->db->get()->result_array();
    }
    public function get_grafik_random5(){
        $this->db->select('id_standar, id_butir ,id_lingkup,id_jenis');
        $this->db->from('akreditasi');  
        $this->db->where('valid', 'Ya');
        $this->db->where('id_standar', 5);
        $this->db->order_by('rand()');
        $this->db->limit(1);   
        return $this->db->get()->result_array();
    }
    public function get_grafik_random6(){
        $this->db->select('id_standar, id_butir ,id_lingkup,id_jenis');
        $this->db->from('akreditasi');  
        $this->db->where('valid', 'Ya');
        $this->db->where('id_standar', 6);
        $this->db->order_by('rand()');
        $this->db->limit(1);   
        return $this->db->get()->result_array();
    }
    public function get_grafik_random7(){
        $this->db->select('id_standar, id_butir ,id_lingkup,id_jenis');
        $this->db->from('akreditasi');  
        $this->db->where('valid', 'Ya');
        $this->db->where('id_standar', 7);
        $this->db->order_by('rand()');
        $this->db->limit(1);   
        return $this->db->get()->result_array();
    }
    public function get_grafik_random8(){
        $this->db->select('id_standar, id_butir ,id_lingkup,id_jenis');
        $this->db->from('akreditasi');  
        $this->db->where('valid', 'Ya');
        $this->db->where('id_standar', 8);
        $this->db->order_by('rand()');
        $this->db->limit(1);   
        return $this->db->get()->result_array();
    }
    public function get_grafik_random9(){
        $this->db->select('id_standar, id_butir ,id_lingkup,id_jenis');
        $this->db->from('akreditasi');  
        $this->db->where('valid', 'Ya');
        $this->db->where('id_standar', 9);
        $this->db->order_by('rand()');
        $this->db->limit(1);   
        return $this->db->get()->result_array();
    }
    public function get_grafik_random10(){
        $this->db->select('id_standar, id_butir ,id_lingkup,id_jenis');
        $this->db->from('akreditasi');  
        $this->db->where('valid', 'Ya');
        $this->db->where('id_standar', 10);
        $this->db->order_by('rand()');
        $this->db->limit(1);   
        return $this->db->get()->result_array();
    }
}
?>
