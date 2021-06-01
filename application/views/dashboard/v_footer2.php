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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <?php
        foreach($data_grafik_prodi as $dat){   //menambpilkan kategori pada x-axis
          $tahun[] = $dat->tahun;
           $jumlah_presentase[] = $dat->jumlah_presentase;
      }
        foreach($data_grafik1 as $dat){   //menambpilkan kategori pada x-axis
            $tahun1[] = $dat->tahun;
             $jumlah_presentase1[] = $dat->jumlah_presentase;
        }
        foreach($data_grafik2 as $dat){   //menambpilkan kategori pada x-axis
          $tahun2[] = $dat->tahun;
           $jumlah_presentase2[] = $dat->jumlah_presentase;
        }
        foreach($data_grafik3 as $dat){   //menambpilkan kategori pada x-axis
          $tahun3[] = $dat->tahun;
           $jumlah_presentase3[] = $dat->jumlah_presentase;
        }
        foreach($data_grafik4 as $dat){   //menambpilkan kategori pada x-axis
          $tahun4[] = $dat->tahun;
           $jumlah_presentase4[] = $dat->jumlah_presentase;
        }
        foreach($data_grafik5 as $dat){   //menambpilkan kategori pada x-axis
          $tahun5[] = $dat->tahun;
           $jumlah_presentase5[] = $dat->jumlah_presentase;
        }
        foreach($data_grafik6 as $dat){   //menambpilkan kategori pada x-axis
          $tahun6[] = $dat->tahun;
           $jumlah_presentase6[] = $dat->jumlah_presentase;
        }
        foreach($data_grafik7 as $dat){   //menambpilkan kategori pada x-axis
          $tahun7[] = $dat->tahun;
           $jumlah_presentase7[] = $dat->jumlah_presentase;
        }
        foreach($data_grafik8 as $dat){   //menambpilkan kategori pada x-axis
          $tahun8[] = $dat->tahun;
           $jumlah_presentase8[] = $dat->jumlah_presentase;
        }
        foreach($data_grafik9 as $dat){   //menambpilkan kategori pada x-axis
          $tahun9[] = $dat->tahun;
           $jumlah_presentase9[] = $dat->jumlah_presentase;
        }
        foreach($data_grafik10 as $dat){   //menambpilkan kategori pada x-axis
          $tahun10[] = $dat->tahun;
           $jumlah_presentase10[] = $dat->jumlah_presentase;
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

  // === include 'setup' then 'config' above ===

    

  const data1 = {
  datasets: [{
    label: 'Standar 1',
    data: [
      {x: 0.0, y: 0.1 }, 
      {x: 1.0, y: 1.1},
      {x: 2.0, y: 2.1}, 
      {x: 3.0, y: 3.1}
    ],
    backgroundColor: 'rgb(255, 99, 132)'
  }],
};

const DATA_COUNT = 7;
// const NUMBER_CFG = {count: DATA_COUNT, rmin: 1, rmax: 1, min: 0, max: 100};

const labels = 4;

const data = {
  // labels: labels,
  datasets: [
    {
      label: 'Cluster 1',
      data: [
        <?php 
          foreach($rumus1 as $rum1){
            echo '{x: '.$rum1.', y: 1},';
          } 
        ?>
      ],
      borderColor: 'rgb(255, 99, 132)',
      backgroundColor: 'rgb(255, 99, 132)',
    },
    {
      label: 'Cluster 2',
      data: [
        <?php 
          foreach($rumus2 as $rum2){
            echo '{x: '.$rum2.', y: 2},';
          } 
        ?>
      ],
      borderColor: 'rgb(255, 200, 132)',
      backgroundColor:'rgb(255, 200, 132)',
    },
    {
      label: 'Cluster 3',
      data: [
        <?php 
          foreach($rumus3 as $rum3){
            echo '{x: '.$rum3.', y: 3},';
          } 
        ?>
      ],
      borderColor: 'rgb(50, 147, 168)',
      backgroundColor:'rgb(50, 147, 168)',
    },
    {
      label: 'Cluster 4',
      data: [
        <?php 
          foreach($rumus4 as $rum4){
            echo '{x: '.$rum4.', y: 4},';
          } 
        ?>
      ],
      borderColor: 'rgb(50, 78, 168)',
      backgroundColor:'rgb(50, 78, 168)',
    },
    {
      label: 'Cluster 5',
      data: [
        <?php 
          foreach($rumus5 as $rum5){
            echo '{x: '.$rum5.', y: 5},';
          } 
        ?>
      ],
      borderColor: 'rgb(50, 168, 85)',
      backgroundColor:'rgb(50, 168, 85)',
    },
    {
      label: 'Cluster 6',
      data: [
        <?php 
          foreach($rumus6 as $rum6){
            echo '{x: '.$rum6.', y: 6},';
          } 
        ?>
      ],
      borderColor: 'rgb(50, 168, 139)',
      backgroundColor:'rgb(50, 168, 139)',
    },
    {
      label: 'Cluster 7',
      data: [
        <?php 
          foreach($rumus7 as $rum7){
            echo '{x: '.$rum7.', y: 7},';
          } 
        ?>
      ],
      borderColor: 'rgb(168, 50, 121)',
      backgroundColor:'rgb(168, 50, 121)',
    },
    {
      label: 'Cluster 8',
      data: [
        <?php 
          foreach($rumus8 as $rum8){
            echo '{x: '.$rum8.', y: 8},';
          } 
        ?>
      ],
      borderColor: 'rgb(168, 50, 95)',
      backgroundColor:'rgb(168, 50, 95)',
    },
    {
      label: 'Cluster 9',
      data: [
        <?php 
          foreach($rumus9 as $rum9){
            echo '{x: '.$rum9.', y: 9},';
          } 
        ?>
      ],
      borderColor: 'rgb(168, 74, 50)',
      backgroundColor:'rgb(168, 74, 50)',
    },
    {
      label: 'Cluster 10',
      data: [
        <?php 
          foreach($rumus10 as $rum10){
            echo '{x: '.$rum10.', y: 10},';
          } 
        ?>
      ],
      borderColor: 'rgb(255, 52, 0)',
      backgroundColor:'rgb(255, 52, 0)',
    }
  ]
};
  
const config = {
  type: 'scatter',
  data: data,
  options: {
    responsive: true,
    // scales: {
    //   x: {
    //     type: 'linear',
    //     position: 'bottom'
    //   }
    // }
  }
};
  var myChart = new Chart(
      document.getElementById('kmeansChart'),
    config
  );




    if ($('#mybarChartProdi').length){
        var ctx = document.getElementById("mybarChartProdi");
        var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?php echo json_encode($tahun);?>,
          datasets: [{
          label: 'Jumlah ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($jumlah_presentase);?>
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



      if ($('#mybarCharta').length ){
        var ctx = document.getElementById("mybarCharta");
        var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?php echo json_encode($tahun1);?>,
          datasets: [{
          label: 'Score ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($jumlah_presentase1);?>
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
          labels: <?php echo json_encode($tahun2);?>,
          datasets: [{
          label: 'Score ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($jumlah_presentase2);?>
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
          labels: <?php echo json_encode($tahun3);?>,
          datasets: [{
          label: 'Score ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($jumlah_presentase3);?>
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
          labels: <?php echo json_encode($tahun4);?>,
          datasets: [{
          label: 'Score ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($jumlah_presentase4);?>
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
          labels: <?php echo json_encode($tahun5);?>,
          datasets: [{
          label: 'Score ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($jumlah_presentase5);?>
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
          labels: <?php echo json_encode($tahun6);?>,
          datasets: [{
          label: 'Score ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($jumlah_presentase6);?>
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
          labels: <?php echo json_encode($tahun7);?>,
          datasets: [{
          label: 'Score ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($jumlah_presentase7);?>
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
          labels: <?php echo json_encode($tahun8);?>,
          datasets: [{
          label: 'Score ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($jumlah_presentase8);?>
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
          labels: <?php echo json_encode($tahun9);?>,
          datasets: [{
          label: 'Score ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($jumlah_presentase9);?>
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
      if ($('#mybarChartj').length ){
        var ctx = document.getElementById("mybarChartj");
        var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?php echo json_encode($tahun10);?>,
          datasets: [{
          label: 'Score ',
          backgroundColor: "#26B99A",
          data: <?php echo json_encode($jumlah_presentase10);?>
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