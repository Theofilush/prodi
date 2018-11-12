      </div>      

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            2018 - <a href="http://upj.ac.id">Universitas Pembangunan Jaya</a> | All Data Reserved
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
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
    <script src="<?php echo base_url() ?>asett/plugins/Chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>asett/dist/js/custom.js"></script>
        <?php
        // foreach($ttal_std as $dat){   //menambpilkan kategori pada x-axis
        //     $kd[] = $dat->jenis_dokumen;
        // } 
        foreach($ttal_std1 as $dat){   //menambpilkan kategori pada x-axis
            $kd1[] = $dat->jenis_dokumen;
        }        
        foreach($ttal_std2 as $dat){   //menambpilkan kategori pada x-axis
            $kd2[] = $dat->jenis_dokumen;
        }        
        foreach($ttal_std3 as $dat){   //menambpilkan kategori pada x-axis
            $kd3[] = $dat->jenis_dokumen;
        }        
        foreach($ttal_std4 as $dat){   //menambpilkan kategori pada x-axis
            $kd4[] = $dat->jenis_dokumen;
        }        
        foreach($ttal_std5 as $dat){   //menambpilkan kategori pada x-axis
            $kd5[] = $dat->jenis_dokumen;
        }        
        foreach($ttal_std6 as $dat){   //menambpilkan kategori pada x-axis
            $kd6[] = $dat->jenis_dokumen;
        }        
        foreach($ttal_std7 as $dat){   //menambpilkan kategori pada x-axis
            $kd7[] = $dat->jenis_dokumen;
        }        
        foreach($ttal_std8 as $dat){   //menambpilkan kategori pada x-axis
            $kd8[] = $dat->jenis_dokumen;
        }        
        foreach($ttal_std9 as $dat){   //menambpilkan kategori pada x-axis
            $kd9[] = $dat->jenis_dokumen;
        }        
        foreach($std1 as $rowa){ 
          $total_a1[] = $rowa;
        }
        foreach($std2 as $rowab){ 
          $total_a2[] = $rowab;
        }
        foreach($std3 as $rowc){ 
          $total_a3[] = $rowc;
        }
        foreach($std4 as $rowd){ 
          $total_a4[] = $rowd;
        }
        foreach($std5 as $rowe){ 
          $total_a5[] = $rowe;
        }
        foreach($std6 as $rowf){ 
          $total_a6[] = $rowf;
        }
        foreach($std7 as $rowg){
          $total_a7[] = $rowg;
        }
        foreach($std8 as $rowh){ 
          $total_a8[] = $rowh;
        }
        foreach($std9 as $rowi){ 
          $total_a9[] = $rowi;
        }

      ?>
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
    function doconfirm(){
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
    function DataAdd() {
      win2 = window.open("<?php echo base_url() ?>Pengisian", "", "width=800, height=800, scrollbars, status");
    } 
    function DataEdit($urlku) {
      win2 = window.open("<?php echo base_url() ?>Edit/index/"+$urlku, "", "width=800, height=800, scrollbars, status");
    } 
     if ($('#mybarCharta').length ){
        var ctx = document.getElementById("mybarCharta");
        var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?php echo json_encode($kd1);?>,
          datasets: [{
          label: 'Jumlah ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($total_a1);?>
          }]
        },

        options: {
          scales: {
          yAxes: [{
            ticks: {
            beginAtZero: true
            }
          }]
          },
          legend: {
            display: false
          } 
        }
        });       
      }
if ($('#mybarChartb').length ){
        var ctx = document.getElementById("mybarChartb");
        var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?php echo json_encode($kd2);?>,
          datasets: [{
          label: 'Jumlah ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($total_a2);?>
          }]
        },

        options: {
          scales: {
          yAxes: [{
            ticks: {
            beginAtZero: true
            }
          }]
          },
          legend: {
            display: false
          } 
        }
        });       
      }
if ($('#mybarChartc').length ){
        var ctx = document.getElementById("mybarChartc");
        var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?php echo json_encode($kd3);?>,
          datasets: [{
          label: 'Jumlah ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($total_a3);?>
          }]
        },

        options: {
          scales: {
          yAxes: [{
            ticks: {
            beginAtZero: true
            }
          }]
          },
          legend: {
            display: false
          } 
        }
        });       
      }
if ($('#mybarChartd').length ){
        var ctx = document.getElementById("mybarChartd");
        var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?php echo json_encode($kd4);?>,
          datasets: [{
          label: 'Jumlah ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($total_a4);?>
          }]
        },

        options: {
          scales: {
          yAxes: [{
            ticks: {
            beginAtZero: true
            }
          }]
          },
          legend: {
            display: false
          } 
        }
        });       
      }
if ($('#mybarCharte').length ){
        var ctx = document.getElementById("mybarCharte");
        var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?php echo json_encode($kd5);?>,
          datasets: [{
          label: 'Jumlah ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($total_a5);?>
          }]
        },

        options: {
          scales: {
          yAxes: [{
            ticks: {
            beginAtZero: true
            }
          }]
          },
          legend: {
            display: false
          } 
        }
        });       
      }
if ($('#mybarChartf').length ){
        var ctx = document.getElementById("mybarChartf");
        var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?php echo json_encode($kd6);?>,
          datasets: [{
          label: 'Jumlah ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($total_a6);?>
          }]
        },

        options: {
          scales: {
          yAxes: [{
            ticks: {
            beginAtZero: true
            }
          }]
          },
          legend: {
            display: false
          } 
        }
        });       
      }
if ($('#mybarChartg').length ){
        var ctx = document.getElementById("mybarChartg");
        var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?php echo json_encode($kd7);?>,
          datasets: [{
          label: 'Jumlah ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($total_a7);?>
          }]
        },

        options: {
          scales: {
          yAxes: [{
            ticks: {
            beginAtZero: true
            }
          }]
          },
          legend: {
            display: false
          } 
        }
        });       
      }
if ($('#mybarCharth').length ){
        var ctx = document.getElementById("mybarCharth");
        var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?php echo json_encode($kd8);?>,
          datasets: [{
          label: 'Jumlah ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($total_a8);?>
          }]
        },

        options: {
          scales: {
          yAxes: [{
            ticks: {
            beginAtZero: true
            }
          }]
          },
          legend: {
            display: false
          } 
        }
        });       
      }
if ($('#mybarCharti').length ){
        var ctx = document.getElementById("mybarCharti");
        var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?php echo json_encode($kd9);?>,
          datasets: [{
          label: 'Jumlah ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($total_a9);?>
          }]
        },

        options: {
          scales: {
          yAxes: [{
            ticks: {
            beginAtZero: true
            }
          }]
          },
          legend: {
            display: false
          } 
        }
        });       
      }

  </script>
  </body>
</html>