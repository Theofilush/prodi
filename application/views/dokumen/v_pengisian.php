<div class="right_col" role="main"><?php foreach($da as $row){$buba= $row->author;$bubi= $row->username;$bubc= $row->NIDN; }  ?>
          
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
                                <h2>Form Input Data</h2>
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
                                        echo form_open_multipart('Pengisian/savedok',$atribut);
                                        echo form_hidden('pic',$bubi);
                                ?> 
                                <!--<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">-->                                
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Tahun 
                                    </label>
                                    <div class="col-md-2 col-sm-2 col-xs-11">
                                    <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Tahun" name="tahun" required="required">                                            
                                            <?php 
                                          foreach($tampil_tahun as $row){
                                        ?>  
                                        <option><?php echo $row->tahun; ?></option>                      
                                        <?php
                                           }
                                        ?>   
                                    </select>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                       <a href="<?php echo site_url().'AddYear';  ?>" class="btn bg-purple btn-xs btnnomargin"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Nomor Dokumen
                                    </label>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                    <input type="text" id="nomor" name="nomor" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>                               
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Kategori
                                    </label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                    <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Jenis" name="jenis_dokumen" required="required">
                                            <?php 
                                          foreach($jnis_dok as $row){
                                        ?>  
                                        <option><?php echo $row->jenis_dokumen; ?></option>                      
                                        <?php
                                           }
                                        ?>   
                                        <!-- <optgroup label="Group Name">
                                          <option>Nested option</option>
                                        </optgroup> -->
                                    </select>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Author
                                    </label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Jenis Dokumen" name="authorisasi" required="required">
                                        <?php
                                          foreach($tampil_author as $row){
                                        ?>  
                                        <option><?php echo $row->author; ?></option>                      
                                        <?php
                                           }
                                        ?>   
                                      </select>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Lingkup
                                    </label>
                                    <div class="col-md-7 col-sm-7 col-xs-12">                                    
                                     <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih Jenis Dokumen" name="lingkup" required="required">
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
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Keterangan
                                    </label>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                    <textarea name="nama_dok" id="nama_dok" rows="2" cols="20" required="required" style="font-family:Tahoma;height:70px;" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Kelompok Dokumen
                                    </label>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                      <select class="form-control select2_ok" style="width: 100%;" multiple="multiple" data-placeholder="Pilih Standar" name="kelompok[]" required="required">
                                        <option value="1">Standar 1</option>
                                        <option value="2">Standar 2</option>
                                        <option value="3">Standar 3</option>
                                        <option value="4">Standar 4</option>
                                        <option value="5">Standar 5</option>
                                        <option value="6">Standar 6</option>
                                        <option value="7">Standar 7</option>
                                        <option value="8">Standar 8</option>
                                        <option value="9">Standar 9</option>
                                      </select>                                    
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Tahun Valid
                                    </label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                    <select class="form-control select2_ok" style="width: 100%;" data-placeholder="Pilih range_tahun" name="tahun_valid" id="operasi1" onchange="cek_bunyi();" required="required">
                                            <?php 
                                          foreach($range_thn as $row){
                                        ?>  
                                        <option><?php echo $row->range_thn; ?></option>
                                        <?php
                                           }
                                        ?>   
                                        <option value="sembunyi">Lainnya</option>
                                    </select>
                                    </div>
                                </div>   
                                <div class="form-group" id="akuhidding" style="display: none;">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Lainnya 
                                    </label>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                    <input type="text" id="lainnya" name="lainnya" class="form-control col-md-7 col-xs-12">
                                    <small>tidak harus diisi (jika tahun valid tidak tercantum diatas)</small>
                                    </div>
                                </div>                                       
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Upload Berkas
                                    </label>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                    <input type="file" class="form-control" name="filepdf" id="upload" accept="application/pdf" required />
                                    <small> Ukuran file:  maksimum 5 MB | Format: PDF</small>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
                                    <!--<button type="button" onclick="window.history.back()" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Batal</button>-->
                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success" name="btnUpload" value="Upload">Submit</button>
                                    </div>
                                </div>

                                <?php
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