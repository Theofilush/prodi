<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url() ?>asett/images/favicon.png" type="image/ico" />

    <title>Universitas Pembangunan Jaya </title>

    <link href="<?php echo base_url() ?>asett/dist/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asett/dist/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gamja+Flower|Ubuntu|Roboto" rel="stylesheet"> 
    <link href="<?php echo base_url() ?>asett/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet"> 
    <!--<link href="<?php echo base_url() ?>asett/plugins/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">-->
    <link href="<?php echo base_url() ?>asett/plugins/iCheck/skins/all.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asett/plugins/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asett/plugins/nprogress/nprogress.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asett/plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asett/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asett/plugins/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asett/plugins/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asett/dist/css/custom.css" rel="stylesheet">
    <!-- <script type="text/javascript" src="http://www.appelsiini.net/projects/chained/jquery.chained.js?v=0.9.10"></script> -->
  </head>

  <body class="nav-md"><?php foreach($da as $row){$buba= $row->author;$bubi= $row->username;$bubc= $row->NIDN; }  ?>
    <div class="container body">
      <div class="main_container">
        <div class="right_col" role="main"><?php foreach($da as $row){$buba= $row->author;$bubi= $row->username;$bubc= $row->NIDN; } 
foreach ($query as $rou) { $nomoer_std =$rou->standar;}
?>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="x_panel">
                        <!--<div class="x_title">
                            <h4 class="">Publikasi Jurnal</h4>                     
                            <div class="clearfix"></div>
                        </div>-->
                        <div class="x_content">                    
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Form Edit Data</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>                                
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                        </ul> 
                                        <div class="clearfix"></div>
                                    </div> 
                                    <div class="x_content">
                                        <br />
                                        <?php
                                            $atribut = array(
                                                    'class' => 'form-horizontal form-label-left',
                                                    'data-parsley-validate' => '',
                                                    'id'=>'demo-form2'
                                            );                                        
                                                echo form_open_multipart('Edit/updatedok',$atribut);
                                                foreach ($query as $rou) {    
                                                echo form_hidden('id',$rou->id_dok);
                                                echo form_input(array('name' => 'std', 'type'=>'hidden', 'id' =>'std', 'value' => $rou->standar));
                                               // echo form_hidden(array('value'=>$rou->standar, 'name'=>'std', 'id'=>'std'));
                                                echo form_hidden('pic',$bubi);
                                        ?> 
                                        <!--<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">-->                                
                                       <!--  <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tahun 
                                            </label>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                            <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Tahun" name="tahun">
                                                <option selected><?php echo $rou->tahun; ?></option> 
                                                    <?php 
                                                  foreach($tampil_tahun as $row){
                                                ?>  
                                                <option><?php echo $row->tahun; ?></option> 
                                                <?php
                                                   }
                                                ?>   
                                            </select>
                                            </div>
                                        </div> -->
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Tahun Terbit
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                    <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Tahun" name="tahun_terbit" required="required">
                                        <option><?php echo $rou->tahun_terbit; ?></option>
                                            <?php 
                                          foreach($tampil_tahun as $row){
                                        ?>  
                                        <option><?php echo $row->tahun; ?></option>
                                        <?php
                                           }
                                        ?>   
                                    </select>
                                    </div>
                                    <label class="control-label col-md-1 col-sm-1 col-xs-12">Semester
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-5">
                                    <select class="form-control" style="width: 100%;" data-placeholder="Pilih Tahun" name="tt_smt" required="required">                                            
                                        <option>Gasal</option>
                                        <option>Genap</option>
                                    </select>
                                    </div>
                                     <div class="col-md-1 col-sm-1 col-xs-1">
                                    <a href="<?php echo site_url().'AddYear';  ?>" class="btn bg-purple btn-xs btnnomargin"><i class="fa fa-plus"></i></a>
                                </div>
                                </div>                             
                                 <div class="form-group" >
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Perluasan Dokumen
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <select class="form-control select2_ok" id="per_dok" style="width: 100%;" data-placeholder="Pilih Jenis" name="perluasan_dokumen">
                                        <option value="">Pilih</option>
                                        <!-- <?php
                                        foreach($perluasan_dok as $row){
                                        ?>
                                        <option><?php echo $row->nama; ?></option>
                                        <?php
                                        }
                                        ?> -->
                                        <!-- <optgroup label="Group Name">
                                            <option>Nested option</option>
                                        </optgroup> -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Kelompok Dokumen
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <select class="form-control select2_ok" id="keldok" style="width: 100%;" data-placeholder="Pilih Jenis" name="kelompok_dokumen2">
                                        <option value="">Pilih</option>
                                        <!-- <?php
                                        foreach($kelompok_dok as $roww){
                                        ?>
                                        <option><?php echo $roww->nama; ?></option>
                                        <?php
                                        }
                                        ?> -->
                                        <!-- <optgroup label="Group Name">
                                            <option>Nested option</option>
                                        </optgroup> -->
                                    </select>
                                </div>
                            </div>
                                       <!--  <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Lingkup
                                            </label>
                                            <div class="col-md-7 col-sm-7 col-xs-12">                                    
                                             <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Jenis Dokumen" name="lingkup">
                                                <option><?php echo $rou->lingkup; ?></option>
                                                <?php
                                                  foreach($tampil_lingkup as $row){
                                                ?>  
                                                <option><?php echo $row->lingkup; ?></option>                      
                                                <?php
                                                   }
                                                ?>   
                                              </select>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Author
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Jenis Dokumen" name="authorisasi">
                                                     <option><?php echo $rou->author; ?></option> 
                                                <?php
                                                  foreach($tampil_author as $row){
                                                ?>  
                                                <option><?php echo $row->author; ?></option>                      
                                                <?php
                                                   }
                                                ?>   
                                              </select>
                                            </div>
                                        </div>  -->
                                        <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Keterangan
                                            </label>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                            <textarea name="nama_dok" id="nama_dok" rows="2" cols="20" required="required" style="font-family:Tahoma;height:70px;" class="form-control col-md-7 col-xs-12"><?php echo $rou->nama_dokumen; ?></textarea>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Kelompok Dokumen
                                            </label>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                              <select class="form-control select2_ok" style="width: 100%;" multiple="multiple" data-placeholder="Pilih Standar" name="kelompok[]">
                                                <option value="1" <?php if( $rou->standar=='1'){echo "selected"; } ?>>Standar 1</option>
                                                <option value="2" <?php if( $rou->standar=='2'){echo "selected"; } ?>>Standar 2</option>
                                                <option value="3" <?php if( $rou->standar=='3'){echo "selected"; } ?>>Standar 3</option>
                                                <option value="4" <?php if( $rou->standar=='4'){echo "selected"; } ?>>Standar 4</option>
                                                <option value="5" <?php if( $rou->standar=='5'){echo "selected"; } ?>>Standar 5</option>
                                                <option value="6" <?php if( $rou->standar=='6'){echo "selected"; } ?>>Standar 6</option>
                                                <option value="7" <?php if( $rou->standar=='7'){echo "selected"; } ?>>Standar 7</option>
                                                <option value="8" <?php if( $rou->standar=='8'){echo "selected"; } ?>>Standar 8</option>
                                                <option value="9" <?php if( $rou->standar=='9'){echo "selected"; } ?>>Standar 9</option>
                                              </select>                                    
                                            </div>
                                        </div> -->
                                        <!-- <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Tahun Valid
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                            <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih range_tahun" name="tahun_valid" id="operasi1" onchange="cek_bunyi();">
                                                    <?php 
                                                  foreach($tampil_talid as $row){
                                                ?>  
                                                <option <?php if( $row->range_thn== $rou->tahun_valid){echo "selected"; } ?>><?php echo $row->range_thn; ?></option>
                                                <?php
                                                   }
                                                ?>   
                                                <option value="sembunyi" <?php if($rou->tahun_valid == NULL){echo "selected"; } ?>>Lainnya</option>
                                            </select>
                                            </div>
                                        </div>   
                                        <?php
                                        if ($rou->tahun_valid != NULL) {
                                            # code...
                                        }
                                        ?>
                                        <div class="form-group" id="akuhidding" style="display: none;">
                                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Lainnya 
                                            </label>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="text" id="lainnya" name="lainnya" class="form-control col-md-7 col-xs-12"  value="<?php echo $rou->lainnya; ?>">
                                            <small>tidak harus diisi (jika tahun valid tidak tercantum diatas)</small>
                                            </div>
                                        </div>  --> 
                                        <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-2 col-xs-12">Status Valid </label>
                                            <div class="col-md-7 col-sm-7 col-xs-12" style="margin-top: 9px;">
                                                <label><input type="radio" name="r2_status" class="minimal" value="YA" <?php if( $rou->valid=='YA'){echo "checked"; } ?> >&nbsp;YA</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <label><input type="radio" name="r2_status" class="minimal" value="TIDAK"  <?php if( $rou->valid=='TIDAK'){echo "checked"; } ?> >&nbsp;TIDAK</label>
                                            </div>
                                        </div> 
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
                                            <!--<button type="button" onclick="window.history.back()" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Batal</button>-->
                            <!-- <button class="btn btn-primary" type="reset">Reset</button> -->
                                            <button type="submit" class="btn btn-success" name="btnUpload" value="Upload">Submit</button>
                                            </div>
                                        </div>

                                        <?php
                                            }
                                            echo form_close();
                                        ?>
                                    </div>
                                    </div>
                                </div>
                            </div>
                </div>
                          
                    </div>
                </div>
            </div>
        </div>
      </div>      

      </div>
      <span id="demo-form2" style="display:none;"></span>
    <!-- <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script> -->
    <script src="<?php echo base_url() ?>asett/dist/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>asett/dist/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>asett/plugins/fastclick/lib/fastclick.js"></script>
    <script src="<?php echo base_url() ?>asett/plugins/nprogress/nprogress.js"></script>
    <script src="<?php echo base_url() ?>asett/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="<?php echo base_url() ?>asett/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>asett/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!--<script src="<?php echo base_url() ?>asett/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() ?>asett/plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>-->
    <script src="<?php echo base_url() ?>asett/plugins/pnotify/dist/pnotify.js"></script>
    <script src="<?php echo base_url() ?>asett/plugins//pnotify/dist/pnotify.buttons.js"></script>
    <script src="<?php echo base_url() ?>asett/plugins/parsleyjs/dist/parsley.min.js"></script>
    <script src="<?php echo base_url() ?>asett/plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo base_url() ?>asett/plugins/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url() ?>asett/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url() ?>asett/dist/js/custom.js"></script>
  <script>
    function cek_bunyi() {
        var dropdown = document.getElementById("operasi1");
        var current_value = dropdown.options[dropdown.selectedIndex].value;

        if (current_value == "sembunyi") {
            document.getElementById("akuhidding").style.display = "block";
        }
        else {
            document.getElementById("akuhidding").style.display = "none";
        }
    };
    $('.select2_ok').select2({
      placeholder: 'Your NULL value caption',
      allowClear: true  
    });
    $('#kalenderku1').datepicker({
      autoclose: true,
      format: "yyyy-mm-dd",
      orientation: 'auto bottom'
    })
    $('#kalenderku2').datepicker({
      autoclose: true,
      format: "yyyy-mm-dd",
      orientation: 'auto bottom'
    })
    function doconfirm()
    {
        job=confirm("Are you sure to delete permanently?");
        if(job!=true)
        {
            return false;
        }
    }
 
    function cek_nidn(){
        //$("#pesan_username").hide();
        var nidn1 = $("#penulis").val();       
        var nidn3 = $("#anggota2").val();
        if(nidn1 != ""){
            $.ajax({ 
              url: "<?php echo site_url() . 'publikasi/BukuAjar/cek_status_user'; ?>", 
                data: 'penulis='+nidn1,
                type: "POST",
                success: function(msg){                  
                  //$("#pesan_penulis").val(msg);
                    if(msg==1){
                      //$("#pesan_penulis").css("color","#59c113");
                      $("#pesan_penulis").val("NIDN tidak ditemukan");                        
                        error = 0;
                    }else {
                      $("#pesan_penulis").val(msg);  
                        error = 1;
                    }
 
                   // $("#pesan_username").fadeIn(1000);
                }
            });
        }              
        if(nidn3 != ""){
            $.ajax({ 
              url: "<?php echo site_url() . 'publikasi/BukuAjar/cek_status_user'; ?>", 
                data: 'penulis='+nidn3,
                type: "POST",
                success: function(msg){                  
                  //$("#pesan_penulis").val(msg);
                    if(msg==1){
                      //$("#pesan_penulis").css("color","#59c113");
                      $("#pesan_penulis").val("NIDN tidak ditemukan");                        
                        error = 0;
                    }else {
                      $("#pesan_penulis").val(msg);  
                        error = 1;
                    }
 
                   // $("#pesan_username").fadeIn(1000);
                }
            });
        }            
    }
    function cek_nidn2(){
        var nidn2 = $("#anggota1").val();    
        if(nidn2 != ""){
            $.ajax({ 
              url: "<?php echo site_url() . 'publikasi/BukuAjar/cek_status_user'; ?>", 
                data: 'penulis='+nidn2,
                type: "POST",
                success: function(msg){                  
                  //$("#pesan_penulis").val(msg);
                    if(msg==1){
                      //$("#pesan_penulis").css("color","#59c113");
                      $("#pesan_penulis2").val("NIDN tidak ditemukan");                        
                        error = 0;
                    }else {
                      $("#pesan_penulis2").val(msg);  
                        error = 1;
                    }
 
                   // $("#pesan_username").fadeIn(1000);
                }
            });
        }             
    }
    function cek_nidn3(){
        //$("#pesan_username").hide();   
        var nidn3 = $("#anggota2").val();               
        if(nidn3 != ""){
            $.ajax({ 
              url: "<?php echo site_url() . 'publikasi/BukuAjar/cek_status_user'; ?>", 
                data: 'penulis='+nidn3,
                type: "POST",
                success: function(msg){                  
                  //$("#pesan_penulis").val(msg);
                    if(msg==1){
                      //$("#pesan_penulis").css("color","#59c113");
                      $("#pesan_penulis3").val("NIDN tidak ditemukan");                        
                        error = 0;
                    }else {
                      $("#pesan_penulis3").val(msg);  
                        error = 1;
                    }
 
                   // $("#pesan_username").fadeIn(1000);
                }
            });
        }            
    }   
    function DataEdt() {
      win2 = window.open("<?php echo base_url() ?>add/Dokumen", "", "width=800, height=500, scrollbars, status");
    } 
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
     $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass   : 'iradio_flat-blue'
    })
    $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
      // Kita sembunyikan dulu untuk loadingnya
     // $("#loading").hide();
/*$("#kelompok").change(function(){ 
});*/
        $.ajax({
          type: "POST", // Method pengiriman data bisa dengan GET atau POST
          url: "<?php echo base_url("Edit/listPerluasan"); ?>", // Isi dengan url/path file php yang dituju 
          data: {id_provinsi : $("#std").val()}, // data yang akan dikirim ke file yang dituju
          //$('#idlibur').val($(this).data('id'));
          dataType: "json",
          beforeSend: function(e) {
            if(e && e.overrideMimeType) {
              e.overrideMimeType("application/json;charset=UTF-8");
            }
          },
          success: function(response){ // Ketika proses pengiriman berhasil
            //$("#loading").hide(); // Sembunyikan loadingnya
            // set isi dari combobox kota
            // lalu munculkan kembali combobox kotanya
            $("#per_dok").html(response.list_perdok).show();
          },
          error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
          }
        });
      //$("#per_dok").change(function(){ 
        $.ajax({
          type: "POST", // Method pengiriman data bisa dengan GET atau POST
          url: "<?php echo base_url("Pengisian/listKelDok"); ?>", // Isi dengan url/path file php yang dituju
          data: {id_keldok : $("#per_dok").val()}, // data yang akan dikirim ke file yang dituju
          dataType: "json",
          beforeSend: function(e) {
            if(e && e.overrideMimeType) {
              e.overrideMimeType("application/json;charset=UTF-8");
            }
          },
          success: function(response){ // Ketika proses pengiriman berhasil
            //$("#loading").hide(); // Sembunyikan loadingnya
            // set isi dari combobox kota
            // lalu munculkan kembali combobox kotanya
            $("#keldok").html(response.list_keldok).show();
          },
          error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
          }
        });
      //});
    });
  </script>
  </body>
</html>