<?php foreach($da as $row){$buba= $row->author;$bubi= $row->username; }  ?>
<div class="right_col" role="main">          
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="x_panel">
                  <div class="x_title">
                    <p ><?php echo $this->session->flashdata('notification')?></p>                                           
                      <h4 class="">Dokumen Borang Prodi - Standar 8 - Pengabdian Masyarakat</h4>
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
                        <!-- <button class="btn btn-sm btn-info" onclick="javascript:DataAdd()"><span class="glyphicon glyphicon-plus"></span>  Data Baru</button>  -->
                      </div>
                        <a href="<?php echo site_url() ?>publikasi/PublikasiJurnal/exportexcel" class="btn btn-success pull-right">Excel <i class="fa fa-file-excel-o"></i> </a>
                    </div>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Tahun</th>
                          <th>Semester</th>
                          <th>Perluasan</th>
                          <th>Kategori</th>
                          <th>PIC</th>
                          <th>Nama Dokumen</th>
                          <th>Tanggal Input</th>
                          <?php
                            if($buba == 'administrator' || $buba == 'kaprodi'){
                          ?>                           
                           <th>Edit</th>
                          <?php
                            }
                          ?>
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
                  <?php echo $row->tahun_terbit; ?>
                </td>
                <td>
                  <?php echo $row->tt_semester; ?>
                </td>
                <td>
                  <?php echo $row->nama_perluasan;  ?>
                </td>
                <td>
                  <?php echo $row->nama_keldoku;  ?>
                </td>
                          <td>  
                            <?php echo $row->pic; ?> 
                          </td>
                          <td>      
                            <a href="<?php echo site_url().'fileupload/'.$row->file  ?>" target="_blank"><?php echo $row->nama_dokumen;  ?></a>
                          </td>
                          <td>
                            <?php echo $row->created_at; ?>
                          </td>
                          <?php
                            if($buba == 'administrator' || $buba == 'kaprodi'){
                          ?>                                     
                          <td class="ketengah">
                            <a href="" onclick="return DataEdit('<?php echo $row->id_dok; ?>')" class="btn btn-primary btn-xs btnnomargin"><i class="glyphicon glyphicon-pencil"></i></a>

                            <!-- <?php  echo anchor_popup('Edit/index/'.$row->id_dok, '<i class="glyphicon glyphicon-pencil"></i>', array('target' => '','height'=>800,'class'=>"btn btn-primary btn-xs btnnomargin"));?> -->

                            <a href="<?php echo site_url(); ?>borang/Standar1/deletedok/<?php echo $row->standar; ?>/<?php echo $row->id_dok; ?>" class="btn btn-danger btn-xs btnnomargin" onClick="return doconfirm();"><i class="glyphicon glyphicon-remove  "></i></a>
                          </td> 
                          <?php
                            }
                          ?>
                          <td class="ketengah">
                            <?php
                            if($row->valid == "TIDAK") {
                                 echo '<span class="font_color_red">'.$row->valid.'</span>';
                              } elseif ($row->valid == "YA" ) {
                                 echo '<span class="font_color_green">'.$row->valid.'</span>';
                              } 
                            ?> 
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
