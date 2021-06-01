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
// foreach ($query as $rou) { $nomoer_std =$rou->standar;}
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
                                                //  print_r($rou); exit(); 
                                                echo form_hidden('id',$rou->id_akreditasi);
                                               
                                        ?> 
                                    
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Tahun
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                    <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Tahun" name="tahun" required="required">
                                        <option><?php echo $rou->tahun; ?></option>
                                            <?php 
                                          foreach($tampil_tahun as $row){
                                        ?>  
                                        <option><?php echo $row->tahun; ?></option>
                                        <?php
                                           }
                                        ?>   
                                    </select>
                                    </div>
                                    <!-- <label class="control-label col-md-1 col-sm-1 col-xs-12">Semester
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-5">
                                    <select class="form-control" style="width: 100%;" data-placeholder="Pilih Tahun" name="semester" required="required">                                            
                                        <option>Gasal</option>
                                        <option>Genap</option>
                                    </select>
                                    </div> -->
                                     <div class="col-md-1 col-sm-1 col-xs-1">
                                    <a href="<?php echo site_url().'AddYear';  ?>" class="btn bg-purple btn-xs btnnomargin"><i class="fa fa-plus"></i></a>
                                </div>
                                </div>                             
                                 <div class="form-group" >
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">standar
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <select class="form-control select2_ok" id="per_standar" style="width: 100%;" data-placeholder="Pilih Jenis" name="standar">
                                    <option value="<?php echo $rou->id_standar; ?>"><?php echo $rou->nama_standar; ?></option>
                                        < <?php
                                        foreach($standar as $row){
                                        ?>
                                        <option value="<?php echo $row->id_standar ?>"><?php echo $row->nama_standar; ?></option>
                                        <?php
                                        }
                                        ?> 
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Butir
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <select class="form-control select2_ok" id="per_dok" style="width: 100%;" data-placeholder="Pilih Jenis" name="butir">
                                    <option value="<?php echo $rou->id_butir; ?>"><?php echo $rou->nama_butir; ?></option>
                                        <!-- < <?php
                                        foreach($butir as $row){
                                        ?>
                                        <option><?php echo $row->nama_butir; ?></option>
                                        <?php
                                        }
                                        ?>  -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Jenis Dokumen
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Jenis" name="jenis_dokumen">
                                        <option value="<?php echo $rou->id_jenis; ?>"><?php echo $rou->jenis_dokumen; ?></option>
                                         <?php
                                        foreach($jenis_dokumen as $row){
                                        ?>
                                        <option value="<?php echo $row->id_jenis ?>"><?php echo $row->jenis_dokumen; ?></option>
                                        <?php
                                        }
                                        ?> 
                                         <!-- <optgroup label="Group Name">
                                            <option>Nested option</option>
                                        </optgroup>  -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Lingkup Dokumen
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <select class="form-control select2_ok" id="lingdok" style="width: 100%;" data-placeholder="Pilih Jenis" name="lingkup_dokumen">
                                    <option value="<?php echo $rou->id_lingkup; ?>"><?php echo $rou->nama_lingkup; ?></option>
                                         <?php
                                        foreach($lingkup_dokumen as $row){
                                        ?>
                                        <option value="<?php echo $row->id_lingkup ?>"><?php echo $row->nama_lingkup; ?></option>
                                        <?php
                                        }
                                        ?> 
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Indikator</label>
                            <div class="col-md-2 col-sm-2 col-xs-11">
                                <select class="form-control" style="width: 100%;" data-placeholder="Pilih Tahun" name="indikator" required="required">                                            
                                    <option value="<?php echo $rou->indikator ?>"><?php echo $rou->indikator; ?></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>8</option>
                                    <option>10</option>
                                    <option>12</option>
                                    <option>25</option>
                                    <option>150</option>
                                </select>
                            </div>
                            <label class=" control-label">%</label>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Bobot</label>
                            <div class="col-md-2 col-sm-2 col-xs-11">
                                <select id="bobot" class="form-control" style="width: 100%;" data-placeholder="Pilih Tahun" name="bobot" required="required" onclick="hasilpresentase();">                                            
                                    <option value="<?php echo $rou->bobot ?>"><?php echo $rou->bobot; ?></option>
                                    <option value="0.25">0.25</option>
                                    <option value="0.5">0.5</option>
                                    <option value="0.75">0.75</option>
                                    <option value="1">1</option>
                                    <option value="1.5">1.5</option>
                                    <option value="2">2</option>
                                    <option value="2.5">2.5</option>
                                    <option value="2.75">2.75</option>
                                </select>
                            </div>
                            <label class=" control-label">%</label>
                            </div>
                            <div class="form-group">
                              <label  class="col-sm-2 control-label">Pencapaian</label>
                              <div class="col-md-2 col-sm-2 col-xs-11">
                              <input id="pencapaian" name="pencapaian" value="<?php echo $rou->pencapaian ?>" type="text" class="form-control" placeholder="100" onkeyup="hasilpresentase();">
                            </div>
                            </div>
                            <div class="form-group">
                              <label  class="col-sm-2 control-label">Presentase</label>
                              <div class="col-md-2 col-sm-2 col-xs-11">
                              <label class="col-sm-2 control-label" name="presentase2" id="presentase2"><?php echo $rou->presentase ?></label>
                              <input id="presentase" name="presentase" value="<?php echo $rou->presentase ?>" type="hidden" class="form-control" >
                            </div>
                            <label class=" control-label">%</label>
                            </div>
                          <!-- <div class="form-group">
                              <label  class="col-sm-2 control-label">Bobot</label>
                              <div class="col-md-2 col-sm-2 col-xs-11">
                              <input name="bobot" value="<?php echo $rou->bobot ?>" type="text" class="form-control" placeholder="2.00">
                          </div>
                          <label class=" control-label">%</label>
                          </div> -->
                          <div class="form-group">
                              <label class="control-label col-md-2 col-sm-2 col-xs-12">Status Valid </label>
                              <div class="col-md-7 col-sm-7 col-xs-12" style="margin-top: 9px;">
                                <label><input type="radio" name="valid" class="minimal" value="Ya" <?php if( $rou->valid=='Ya'){echo "checked"; } ?> >&nbsp;Ya</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label><input type="radio" name="valid" class="minimal" value="Tidak"  <?php if( $rou->valid=='Tidak'){echo "checked"; } ?> >&nbsp;Tidak</label>
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
        // $.ajax({
        //   type: "POST", // Method pengiriman data bisa dengan GET atau POST
        //   url: "<?php echo base_url("Edit/listPerluasan"); ?>", // Isi dengan url/path file php yang dituju 
        //   data: {id_provinsi : $("#std").val()}, // data yang akan dikirim ke file yang dituju
        //   //$('#idlibur').val($(this).data('id'));
        //   dataType: "json",
        //   beforeSend: function(e) {
        //     if(e && e.overrideMimeType) {
        //       e.overrideMimeType("application/json;charset=UTF-8");
        //     }
        //   },
        //   success: function(response){ // Ketika proses pengiriman berhasil
        //     //$("#loading").hide(); // Sembunyikan loadingnya
        //     // set isi dari combobox kota
        //     // lalu munculkan kembali combobox kotanya
        //     $("#per_dok").html(response.list_perdok).show();
        //   },
        //   error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
        //     alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        //   }
        // });
      $("#per_standar").change(function(){ 
        $.ajax({
          type: "POST", // Method pengiriman data bisa dengan GET atau POST
          url: "<?php echo base_url("Pengisian/listButir"); ?>", // Isi dengan url/path file php yang dituju
          data: {id_standar : $("#per_standar").val()}, // data yang akan dikirim ke file yang dituju
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
            $("#per_dok").html(response.list_perbutir).show();
          },
          error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
          }
        });
      });
    });

    function hasilpresentase() {
      var txtbobot = document.getElementById('bobot');
      var txtpencapaian = document.getElementById('pencapaian');
      var txtbobot = txtbobot.options[txtbobot.selectedIndex].value;
      
      var txtpencapaian = txtpencapaian.value;
    
	    var txtbobot = txtbobot / 100;
      var result = parseFloat(txtbobot) * parseFloat(txtpencapaian);
 
      var result = result.toFixed(2);
      document.getElementById('presentase').value = result;
      document.getElementById('presentase2').innerHTML = result;
}
  </script>
  </body>
</html>