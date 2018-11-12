<?php foreach($da as $row){$buba= $row->author;$bubi= $row->username; $profile= $row->username;}  ?>
<div class="right_col" role="main">          
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="x_panel">
                  <div class="x_title">
                    <p ><?php echo $this->session->flashdata('notification')?></p>                                           
                      <h4 class="">Welcome, <?php echo $profile;?></h4>                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">  
                    <!-- <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" style="margin-bottom: 5px;">
                        <a href="<?php echo site_url() ?>databaru/NewPublikasiJurnal" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>  Data Baru</a>
                      </div>
                        <a href="<?php echo site_url() ?>publikasi/PublikasiJurnal/exportexcel" class="btn btn-success pull-right">Excel <i class="fa fa-file-excel-o"></i> </a>
                    </div> -->

                  </div>
                </div>
              </div>
          </div>
          <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h4>Data Standar 1 </h4>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <canvas id="mybarCharta"></canvas>
                          </div>
                        </div>
                      </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h4>Data Standar 2 </h4>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <canvas id="mybarChartb"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h4>Data Standar 3 </h4>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <canvas id="mybarChartc"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h4>Data Standar 4 </h4>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <canvas id="mybarChartd"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h4>Data Standar 5 </h4>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <canvas id="mybarCharte"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h4>Data Standar 6 </h4>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <canvas id="mybarChartf"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h4>Data Standar 7 </h4>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <canvas id="mybarChartg"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h4>Data Standar 8 </h4>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <canvas id="mybarCharth"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h4>Data Standar 9 </h4>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <canvas id="mybarCharti"></canvas>
                          </div>
                        </div>
                      </div>
          </div>

</div>
