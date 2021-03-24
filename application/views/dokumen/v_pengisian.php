<div class="right_col" role="main"><?php foreach($da as $row){$buba= $row->author;$bubi= $row->username;$bubc= $row->NIDN; }  ?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="x_panel">
                <!--<div class="x_title">
                    <h4 class="">Publikasi Jurnal</h4>
                    <div class="clearfix"></div>
                </div>--> 
                <!-- <p style="color:red;text-align:center;padding: 10px;"><?php echo $this->session->flashdata('notification')?></p> -->
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
                            <!--  <div class="form-group">
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
                                
                            </div>  -->
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Tahun
                                </label>
                                <div class="col-md-2 col-sm-2 col-xs-12">
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
                                <label class="control-label col-md-1 col-sm-1 col-xs-12">Semester
                                </label>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <select class="form-control" style="width: 100%;" data-placeholder="Pilih Tahun" name="semester" required="required">
                                        <option>Gasal</option>
                                        <option>Genap</option>
                                    </select>
                                </div>
                                <div class="col-md-1 col-sm-1 col-xs-1">
                                    <a href="<?php echo site_url().'AddYear';  ?>" class="btn bg-purple btn-xs btnnomargin"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Standar
                                </label>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <select class="form-control select2_ok" style="width: 100%;"  data-placeholder="Pilih Standar" name="standar" id="kelompok" required="required">
                                        <option value="">Pilih</option>
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
                             <div class="form-group" >
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Butir
                                </label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <select class="form-control select2_ok" id="per_dok" style="width: 100%;" data-placeholder="Pilih Jenis" name="butir" required="required">
                                        <option value="">Pilih</option>
                                        <!-- <?php
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
                                        <option value="">Pilih</option>
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
                                    <option value="">Pilih</option>
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
                                <label class="control-label col-md-2 col-sm-2 col-xs-12">Upload Berkas
                                </label>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <!--  <input type="file" class="form-control" name="filepdf" id="upload" accept="application/pdf" required /> -->
                                    <input type="file" class="form-control" name="filepdf" id="upload" required />
                                    <small> Ukuran file:  maksimum 10 MB</small>
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