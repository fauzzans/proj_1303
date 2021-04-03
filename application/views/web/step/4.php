<div class="panel panel-primary">
    <div class="panel-heading">
        <h2><strong class="text-success" style="color:#eee;">Data Sekolah</strong></h2>
    </div>
    <div class="panel-body">

                <div class="form-group" style="padding-bottom:30px;">
                    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jenjang yang Dipilih <span class="text-danger">*</span></label>
                    <div class="col-sm-9" style="margin-top:3px;">
                        <select class="form-control bg-blue class" data-placeholder="Pilih Jenjang Sekolah" name="jenjang" data-parsley-group="block3" data-parsley-errors-container='div[id="error-jenjang"]' required>
                            <option value="">Pilih Jenjang Sekolah</option>
                            <option value="1">Dinniyah</option>
                            <option value="2">MTs</option>
                            <option value="3">MA</option>
                            <option value="4">SMA</option>
                        </select>
                        <div id="error-jenjang" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px; "></div>
                    </div>
<!--                    <div class="col-sm-5" ></div>-->
                </div>

        <!--        <div class="form-group" style="padding-bottom:30px;">-->
        <!--            <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">NPSN Sekolah <span class="text-danger">*</span></label>-->
        <!--            <div class="col-sm-9 prepend-icon" style="margin-top:1px;">-->
        <!--                <input type="text" name="npsn" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="30" placeholder="NPSN Sekolah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-npsn"]' required>-->
        <!--                <i class="fa fa-users" style="margin-left:15px;"></i>-->
        <!--                <div id="error-npsn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
        <!--            </div>-->
        <!--        </div>-->

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Sekolah Asal <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
                <input type="text" name="nama_sekolah" class="form-control bg-blue" placeholder="Nama Sekolah Asal" maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_sekolah"]' required>
                <i class="fa fa-university" style="margin-left:15px;"></i>
                <div id="error-nama_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nomor Ijazah <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
                <input type="text" name="no_ijazah" class="form-control bg-blue" onkeypress="return hanyaAngka(this);" placeholder="Nomor Ijazah" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-no_ijazah"]' required>
                <i class="fa fa-university" style="margin-left:15px;"></i>
                <div id="error-no_ijazah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" style="padding-bottom:30px;" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tahun Ijazah <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
                <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Ijazah" name="thn_ijazah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-thn_ijazah"]' required>
                    <option value="" selected>Pilih Tahun Ijazah</option>
                    <?php
                    $thn_max=date('Y');
                    for ($i=$thn_max; $i >= 2010; $i--) {?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <div id="error-thn_ijazah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
<!--            <div class="col-sm-5"></div>-->
<!--            <div class="col-sm-1"></div>-->
        </div>

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nomor Ujian <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
                <input type="text" name="no_ujian" class="form-control bg-blue" onkeypress="return hanyaAngka(this);" placeholder="Nomor Ujian" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-no_ujian"]' required>
                <i class="fa fa-university" style="margin-left:15px;"></i>
                <div id="error-no_ujian" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">N.I.S.N <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
                <input type="text" name="nisn" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="30" placeholder="Nomor Induk Siswa Nasional" data-parsley-group="block3" data-parsley-errors-container='div[id="error-nisn"]' required>
                <i class="fa fa-users" style="margin-left:15px;"></i>
                <div id="error-nisn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                <div id="pesan_komentar">*Sesuai dengan data dari web  http://nisn.data.kemdikbud.go.id</div>
            </div>
        </div>


        <!--        <div class="form-group">-->
        <!--            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Status Sekolah <span class="text-danger">*</span></label>-->
        <!--            <div class="col-sm-9" style="margin-top:3px;">-->
        <!--                <select class="form-control bg-blue class" data-placeholder="Pilih Status Sekolah" name="status_sekolah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-status_sekolah"]' required>-->
        <!--                    <option value="">Pilih Status Sekolah</option>-->
        <!--                    <option value="NEGERI">NEGERI</option>-->
        <!--                    <option value="SWASTA">SWASTA</option>-->
        <!--                </select>-->
        <!--                <div id="error-status_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!---->
        <!--        <div class="form-group">-->
        <!--            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Model Ujian Nasional <span class="text-danger">*</span></label>-->
        <!--            <div class="col-sm-9" style="margin-top:3px;">-->
        <!--                <select class="form-control bg-blue class" data-placeholder="Pilih Model Ujian Nasional" name="model_un" data-parsley-group="block3" data-parsley-errors-container='div[id="error-model_un"]' required>-->
        <!--                    <option value="">Pilih Model Ujian Nasional</option>-->
        <!--                    <option value="UNBK">UNBK</option>-->
        <!--                    <option value="UNKP">UNKP</option>-->
        <!--                </select>-->
        <!--                <div id="error-model_un" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
        <!--            </div>-->
        <!--        </div>-->

        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat Sekolah <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
                <input type="text" name="alamat_sekolah" class="form-control bg-blue class" placeholder="Alamat Sekolah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-alamat_sekolah"]' required>
                <i class="fa fa-map-marker" style="margin-left:15px;"></i>
                <div id="error-alamat_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

                <div class="form-group" >
                    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
                    <div class="col-sm-9" style="margin-top:3px;">
                        <div class="col-sm-4" style="padding:0px">
                            <select class="form-control bg-blue class"  name="skl_kd_kabupaten" id="postKab5" data-parsley-group="block3" data-parsley-errors-container='div[id="error-skl_kd_kabupaten"]' required>
                                <option value="" selected>Pilih Kab/Kota</option>
                                <?php foreach ($v_kabupaten as $valueKabupaten) { ?>
                                    <option value="<?php echo $valueKabupaten->kd_provinsi.'.'.$valueKabupaten->kd_kabupaten; ?>"><?php echo $valueKabupaten->nm_kabupaten; ?></option>
                                <?php } ?>
                            </select>
                            <div id="error-skl_kd_kabupaten" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                        </div>
                        <div class="col-sm-4"  style="padding-left:3px;" id="list9">
                            <select class="form-control bg-blue class" name="skl_kd_kecamatan" id="postKec5" data-parsley-group="block3" data-parsley-errors-container='div[id="error-skl_kd_kecamatan"]' required>
                                <option value="" selected>Pilih Kecamatan</option>
                            </select>
                            <div id="error-skl_kd_kecamatan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                        </div>
                        <div class="col-sm-4" style="margin-left:-27px;" id="list10">

                            <select class="form-control bg-blue class" name="skl_kd_kelurahan" id="postKel5" data-parsley-group="block3" data-parsley-errors-container='div[id="error-skl_kd_kelurahan"]' required>
                                <option value="" selected>Pilih Kelurahan</option>
                            </select>
                            <div id="error-skl_kd_kelurahan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                        </div>

                    </div>
                </div>

                <div class="form-group" >
                    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Masuk <span class="text-danger">*</span></label>
                    <div class="col-sm-9" style="margin-top:3px;">
                        <div class="col-sm-4" style="padding:0px">
                            <select class="form-control bg-blue class"  name="tgl_masuk" data-parsley-group="block3" data-parsley-errors-container='div[id="error-tgl_masuk"]' required>
                                <option value="" selected>Pilih Tanggal</option>
                                <?php for ($i=1; $i <=31 ; $i++) {
                                    if ($i < 10) {
                                        $i = "0".$i;
                                    }?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                            <div id="error-tgl_masuk" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                        </div>
                        <div class="col-sm-4"  style="padding-left:3px;">
                            <select class="form-control bg-blue class" data-placeholder="Pilih Bulan" name="bln_masuk" data-parsley-group="block3" data-parsley-errors-container='div[id="error-bln_masuk"]' required>
                                <option value="" selected>Pilih Bulan</option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                            <div id="error-bln_masuk" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                        </div>
                        <div class="col-sm-4" style="margin-left:-27px;">

                            <select class="form-control bg-blue class" data-placeholder="Pilih Tahun" name="thn_masuk" data-parsley-group="block3" data-parsley-errors-container='div[id="error-thn_masuk"]' required>
                                <option value="" selected>Pilih Tahun</option>
                                <?php
                                $thn_max=date('Y') - 2;
                                for ($i=1990; $i <= $thn_max; $i++) {?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                            <div id="error-thn_masuk" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                        </div>

                    </div>
                </div>

                <div class="form-group" >
                    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tahun Lulus <span class="text-danger">*</span></label>
                    <div class="col-sm-4 style="margin-top:3px;">
                        <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lulus" name="thn_lulus" data-parsley-group="block3" data-parsley-errors-container='div[id="error-thn_lulus"]' required>
                            <option value="" selected>Pilih Tahun Lulus...</option>
                            <?php
                            $thn_max=date('Y');
                            for ($i=$thn_max; $i >= 2010; $i--) {?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <div id="error-thn_lulus" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
                    </div>
                    <div class="col-sm-5"></div>
                </div>

    </div>
</div>


<div class="col-md-12">
    <hr>
    <blockquote>
        <p><b>CATATAN:</b> Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
    </blockquote>
    <div>
