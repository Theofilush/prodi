<?php foreach($da as $row){$buba= $row->author;$bubi= $row->username; }  ?>
<div class="right_col" role="main">          
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="x_panel">
                  <div class="x_title">
                    <p ><?php echo $this->session->flashdata('notification')?></p>                                           
                      <h4 class="">Dokumen Borang Prodi</h4>
                      <!-- <div class=" hidden-xs hidden-sm col-md-12">
                  Urutkan:
                      <button class="btn btn-default btn-sm" id="reset">Reset</button>
                      <button class="btn btn-default btn-sm" id="dragId1">Jurnal Internasional</button>
                      <button class="btn btn-default btn-sm" id="dragId2">Jurnal Nasional Terakreditasi</button>
                      <button class="btn btn-default btn-sm" id="dragId3">Jurnal Nasional Tidak Terakreditasi (Mempunyai ISSN)</button> —&nbsp;
                                  <select class="form-control select2_ok" style="width: 10%; height:10px;" class="pull-right" data-placeholder="Pilih Tahun" id="dragThn1">                                            
                                  <option></option>
                                  <?php 
                                    foreach($tampil_tahun as $row1){
                                  ?>  
                                      <option><?php echo $row1->tahun; ?></option> 
                                  <?php
                                    }
                                  ?>   
                                  </select>
                      </div> -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"> 
                    <div class="row">
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" style="margin-bottom: 5px;">
                        <a href="<?php echo site_url() ?>databaru/NewPublikasiJurnal" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>  Data Baru</a>
                      </div>
                        <a href="<?php echo site_url() ?>publikasi/PublikasiJurnal/exportexcel" class="btn btn-success pull-right">Excel <i class="fa fa-file-excel-o"></i> </a>
                    </div>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nomor Dok.</th>
                          <th>Kategori</th>
                          <th>Keterangan</th>
                          <th>Tahun Valid</th>
                          <th>File</th>
                          <th>Edit</th>
                          <th>Valid</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1; 
                        foreach($query as $row){                   
                        ?> 
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td>
                              <b><?php echo $row->no_dok; ?></b><br>
                          </td>
                          <td>
                            <?php echo $row->jenis_dokumen;  ?>
                          </td>
                          <td>
                            <?php echo $row->nama_dokumen;  ?>
                          </td>
                          <td class="ketengah">  
                          <?php echo $row->tahun_valid; ?> 
                          </td>
                          <td class="ketengah">    
                            <?php echo $row->file; ?>                         
                          </td>
                          <td class="ketengah">
                            EDIT
                          </td> 
                          <td class="ketengah">
                            <?php echo $row->valid; ?>
                          </td>                         
                        </tr>
                        <?php
                         }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
</div>

