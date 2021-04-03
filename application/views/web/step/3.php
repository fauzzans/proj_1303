<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Data Ayah</strong></h2>
  </div>
  <div class="panel-body">

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="ayah_nama" class="form-control bg-blue" placeholder="Nama lengkap Ayah"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-ayah_nama"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-ayah_nama" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

      <div class="form-group" style="padding-bottom:30px;">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tempat Kelahiran <span class="text-danger">*</span></label>
          <div class="col-sm-9 prepend-icon">
              <input type="text" name="ayah_tmp_lahir" class="form-control bg-blue" placeholder="Tempat Kelahiran Ayah"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-ayah_tmp_lahir"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-ayah_tmp_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
      </div>

      <div class="form-group" >
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Kelahiran <span class="text-danger">*</span></label>
          <div class="col-sm-9" style="margin-top:3px;">
              <div class="col-sm-4" style="padding:0px">
                  <select class="form-control bg-blue class"  name="ayah_tgl_lahir" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ayah_tgl_lahir"]' required>
                      <option value="" selected>Pilih Tanggal</option>
                      <?php for ($i=1; $i <=31 ; $i++) {
                          if ($i < 10) {
                              $i = "0".$i;
                          }?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php } ?>
                  </select>
                  <div id="error-ayah_tgl_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              </div>
              <div class="col-sm-4"  style="padding-left:3px;">
                  <select class="form-control bg-blue class" data-placeholder="Pilih Bulan" name="ayah_bln_lahir" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ayah_bln_lahir"]' required>
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
                  <div id="error-ayah_bln_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              </div>
              <div class="col-sm-4" style="margin-left:-27px;">

                  <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lahir" name="ayah_thn_lahir" data-parsley-group="block3" data-parsley-errors-container='div[id="error-ayah_thn_lahir"]' required>
                      <option value="" selected>Pilih Tahun Lahir</option>
                      <?php
                      $thn_max=date('Y') - 2;
                      for ($i=1950; $i <= $thn_max; $i++) {?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php } ?>
                  </select>
                  <div id="error-ayah_thn_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              </div>

          </div>
      </div>


      <div class="form-group">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pekerjaan <span class="text-danger">*</span></label>
          <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pekerjaan Ayah" name="ayah_pekerjaan" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ayah_pekerjaan"]' required>
                  <option value="">Pilih Pekerjaan Ayah</option>
                  <?php foreach ($v_pekerjaan_ayah as $baris): ?>
                      <option value="<?php echo $baris->nama_pekerjaan; ?>"><?php echo $baris->nama_pekerjaan; ?></option>
                  <?php endforeach; ?>
              </select>
              <div id="error-ayah_pekerjaan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
      </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pendidikan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pendidikan Ayah" name="ayah_pendidikan" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ayah_pendidikan"]' required>
                  <option value="">Pilih Pendidikan Ayah</option>
                  <?php foreach ($v_pdd as $baris): ?>
                    <option value="<?php echo $baris->nama_pdd; ?>"><?php echo $baris->nama_pdd; ?></option>
                  <?php endforeach; ?>
              </select>
              <div id="error-ayah_pendidikan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

      <div class="form-group">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Agama <span class="text-danger">*</span></label>
          <div class="col-sm-9" style="margin-top:3px;">
            <select class="form-control bg-blue class" data-placeholder="Pilih Agama yang dianut" name="ayah_agama" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ayah_agama"]' required>
                    <option value="">Pilih agama yang dianut</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="lainnya">Lainnya</option>
            </select>
            <div id="error-ayah_agama" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
      </div>


      <div class="form-group" >
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat <span class="text-danger">*</span></label>
          <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="ayah_alamat" class="form-control bg-blue class" placeholder="Alamat Ayah" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ayah_alamat"]' required>
              <i class="fa fa-map-marker" style="margin-left:15px;"></i>
              <div id="error-ayah_alamat" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
      </div>
      <div class="form-group" >
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
          <div class="col-sm-9" style="margin-top:3px;">
              <div class="col-sm-4" style="padding:0px">
                  <select class="form-control bg-blue class"  name="ayah_kd_kabupaten" id="postKab2" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ayah_kd_kabupaten"]' required>
                      <option value="" selected>Pilih Kab/Kota</option>
                      <?php foreach ($v_kabupaten as $valueKabupaten) { ?>
                          <option value="<?php echo $valueKabupaten->kd_provinsi.'.'.$valueKabupaten->kd_kabupaten; ?>"><?php echo $valueKabupaten->nm_kabupaten; ?></option>
                      <?php } ?>
                  </select>
                  <div id="error-ayah_kd_kabupaten" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              </div>
              <div class="col-sm-4"  style="padding-left:3px;" id="list3">
                  <select class="form-control bg-blue class" name="ayah_kd_kecamatan" id="postKec2" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ayah_kd_kecamatan"]' required>
                      <option value="" selected>Pilih Kecamatan</option>
                  </select>
                  <div id="error-ayah_kd_kecamatan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              </div>
              <div class="col-sm-4" style="margin-left:-27px;" id="list4">

                  <select class="form-control bg-blue class" name="ayah_kd_kelurahan" id="postKel2" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ayah_kd_kelurahan"]' required>
                      <option value="" selected>Pilih Kelurahan</option>
                  </select>
                  <div id="error-ayah_kd_kelurahan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              </div>

          </div>
      </div>

<!--        <div class="form-group">-->
<!--            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penghasilan <span class="text-danger">*</span></label>-->
<!--            <div class="col-sm-9" style="margin-top:3px;">-->
<!--              <select class="form-control bg-blue class" data-placeholder="Pilih Penghasilan Ayah" name="penghasilan_ayah" data-parsley-group="block2" data-parsley-errors-container='div[id="error-penghasilan_ayah"]' required>-->
<!--                  <option value="">Pilih Penghasilan Ayah</option>-->
<!--                  --><?php //foreach ($v_penghasilan as $baris): ?>
<!--                    <option value="--><?php //echo $baris->nama_penghasilan; ?><!--">--><?php //echo $baris->nama_penghasilan; ?><!--</option>-->
<!--                  --><?php //endforeach; ?>
<!--              </select>-->
<!--              <div id="error-penghasilan_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form-group" >-->
<!--            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone <span class="text-danger">*</span></label>-->
<!--            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">-->
<!--              <input type="text" name="no_hp_ayah" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="14" placeholder="No. Handphone Ayah" data-parsley-group="block2" data-parsley-errors-container='div[id="error-no_hp_ayah"]' required>-->
<!--              <i class="fa fa-phone" style="margin-left:15px;"></i>-->
<!--              <div id="error-no_hp_ayah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Data Ibu</strong></h2>
  </div>
  <div class="panel-body">

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="ibu_nama" class="form-control bg-blue" placeholder="Nama lengkap Ibu"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-ibu_nama"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-ibu_nama" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>
      <div class="form-group" style="padding-bottom:30px;">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tempat Kelahiran <span class="text-danger">*</span></label>
          <div class="col-sm-9 prepend-icon">
              <input type="text" name="ibu_tmp_lahir" class="form-control bg-blue" placeholder="Tempat Kelahiran Ibu"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-ibu_tmp_lahir"]' required>
              <i class="fa fa-user" style="margin-left:15px;"></i>
              <div id="error-ibu_tmp_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
      </div>

      <div class="form-group" >
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Kelahiran <span class="text-danger">*</span></label>
          <div class="col-sm-9" style="margin-top:3px;">
              <div class="col-sm-4" style="padding:0px">
                  <select class="form-control bg-blue class"  name="ibu_tgl_lahir" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ibu_tgl_lahir"]' required>
                      <option value="" selected>Pilih Tanggal</option>
                      <?php for ($i=1; $i <=31 ; $i++) {
                          if ($i < 10) {
                              $i = "0".$i;
                          }?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php } ?>
                  </select>
                  <div id="error-ibu_tgl_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              </div>
              <div class="col-sm-4"  style="padding-left:3px;">
                  <select class="form-control bg-blue class" data-placeholder="Pilih Bulan" name="ibu_bln_lahir" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ibu_bln_lahir"]' required>
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
                  <div id="error-ibu_bln_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              </div>
              <div class="col-sm-4" style="margin-left:-27px;">

                  <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lahir" name="ibu_thn_lahir" data-parsley-group="block3" data-parsley-errors-container='div[id="error-ibu_thn_lahir"]' required>
                      <option value="" selected>Pilih Tahun Lahir</option>
                      <?php
                      $thn_max=date('Y') - 2;
                      for ($i=1950; $i <= $thn_max; $i++) {?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php } ?>
                  </select>
                  <div id="error-ibu_thn_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              </div>

          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pekerjaan <span class="text-danger">*</span></label>
          <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pekerjaan Ibu" name="ibu_pekerjaan" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ibu_pekerjaan"]' required>
                  <option value="">Pilih Pekerjaan Ibu</option>
                  <?php foreach ($v_pekerjaan_ibu as $baris): ?>
                      <option value="<?php echo $baris->nama_pekerjaan; ?>"><?php echo $baris->nama_pekerjaan; ?></option>
                  <?php endforeach; ?>
              </select>
              <div id="error-ibu_pekerjaan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
      </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pendidikan <span class="text-danger">*</span></label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pendidikan Ibu" name="ibu_pendidikan" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ibu_pendidikan"]' required>
                  <option value="">Pilih Pendidikan Ibu</option>
                  <?php foreach ($v_pdd as $baris): ?>
                    <option value="<?php echo $baris->nama_pdd; ?>"><?php echo $baris->nama_pdd; ?></option>
                  <?php endforeach; ?>
              </select>
              <div id="error-ibu_pendidikan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

      <div class="form-group">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Agama <span class="text-danger">*</span></label>
          <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Agama yang dianut" name="ibu_agama" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ibu_agama"]' required>
                  <option value="">Pilih agama yang dianut</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Kristen Protestan">Kristen Protestan</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghucu">Konghucu</option>
                  <option value="lainnya">Lainnya</option>
              </select>
              <div id="error-ibu_agama" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
      </div>

      <div class="form-group" >
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat <span class="text-danger">*</span></label>
          <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="ibu_alamat" class="form-control bg-blue class" placeholder="Alamat Ibu" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ibu_alamat"]' required>
              <i class="fa fa-map-marker" style="margin-left:15px;"></i>
              <div id="error-ibu_alamat" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
      </div>
      <div class="form-group" >
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
          <div class="col-sm-9" style="margin-top:3px;">
              <div class="col-sm-4" style="padding:0px">
                  <select class="form-control bg-blue class"  name="ibu_kd_kabupaten" id="postKab3" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ibu_kd_kabupaten"]' required>
                      <option value="" selected>Pilih Kab/Kota</option>
                      <?php foreach ($v_kabupaten as $valueKabupaten) { ?>
                          <option value="<?php echo $valueKabupaten->kd_provinsi.'.'.$valueKabupaten->kd_kabupaten; ?>"><?php echo $valueKabupaten->nm_kabupaten; ?></option>
                      <?php } ?>
                  </select>
                  <div id="error-ibu_kd_kabupaten" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              </div>
              <div class="col-sm-4"  style="padding-left:3px;" id="list5">
                  <select class="form-control bg-blue class" name="ibu_kd_kecamatan" id="postKec3" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ibu_kd_kecamatan"]' required>
                      <option value="" selected>Pilih Kecamatan</option>
                  </select>
                  <div id="error-ibu_kd_kecamatan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              </div>
              <div class="col-sm-4" style="margin-left:-27px;" id="list6">

                  <select class="form-control bg-blue class" name="ibu_kd_kelurahan" id="postKel3" data-parsley-group="block2" data-parsley-errors-container='div[id="error-ibu_kd_kelurahan"]' required>
                      <option value="" selected>Pilih Kelurahan</option>
                  </select>
                  <div id="error-ibu_kd_kelurahan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
              </div>

          </div>
      </div>

<!--        <div class="form-group">-->
<!--            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penghasilan <span class="text-danger">*</span></label>-->
<!--            <div class="col-sm-9" style="margin-top:3px;">-->
<!--              <select class="form-control bg-blue class" data-placeholder="Pilih Penghasilan Ibu" name="penghasilan_ibu" data-parsley-group="block2" data-parsley-errors-container='div[id="error-penghasilan_ibu"]' required>-->
<!--                  <option value="">Pilih Penghasilan Ibu</option>-->
<!--                  --><?php //foreach ($v_penghasilan as $baris): ?>
<!--                    <option value="--><?php //echo $baris->nama_penghasilan; ?><!--">--><?php //echo $baris->nama_penghasilan; ?><!--</option>-->
<!--                  --><?php //endforeach; ?>
<!--              </select>-->
<!--              <div id="error-penghasilan_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form-group" >-->
<!--            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone <span class="text-danger">*</span></label>-->
<!--            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">-->
<!--              <input type="text" name="no_hp_ibu" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="14" placeholder="No. Handphone Ibu" data-parsley-group="block2" data-parsley-errors-container='div[id="error-no_hp_ibu"]' required>-->
<!--              <i class="fa fa-phone" style="margin-left:15px;"></i>-->
<!--              <div id="error-no_hp_ibu" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Data Wali</strong></h2>
  </div>
  <div class="panel-body">

        <div class="form-group" style="padding-bottom:30px;">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap</label>
            <div class="col-sm-9 prepend-icon">
              <input type="text" name="wali_nama" class="form-control bg-blue" placeholder="Nama lengkap Wali"  maxlength="100" data-parsley-group="block2" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-wali_nama"]'>
              <i class="fa fa-user" style="margin-left:15px;"></i>
<!--              <div id="error-wali_nama" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
            </div>
        </div>

      <div class="form-group">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pekerjaan</label>
          <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pekerjaan Wali" name="wali_pekerjaan" data-parsley-group="block2" data-parsley-errors-container='div[id="error-wali_pekerjaan"]'>
                  <option value="">Pilih Pekerjaan Wali</option>
                  <?php foreach ($v_pekerjaan_wali as $baris): ?>
                      <option value="<?php echo $baris->nama_pekerjaan; ?>"><?php echo $baris->nama_pekerjaan; ?></option>
                  <?php endforeach; ?>
              </select>
<!--              <div id="error-wali_pekerjaan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
          </div>
      </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pendidikan</label>
            <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Pendidikan Wali" name="wali_pendidikan" data-parsley-group="block2" data-parsley-errors-container='div[id="error-wali_pendidikan"]'>
                  <option value="">Pilih Pendidikan Wali</option>
                  <?php foreach ($v_pdd as $baris): ?>
                    <option value="<?php echo $baris->nama_pdd; ?>"><?php echo $baris->nama_pdd; ?></option>
                  <?php endforeach; ?>
              </select>
<!--              <div id="error-wali_pendidikan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
            </div>
        </div>

      <div class="form-group">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Agama</label>
          <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Agama yang dianut" name="wali_agama" data-parsley-group="block2" data-parsley-errors-container='div[id="error-wali_agama"]'>
                  <option value="">Pilih agama yang dianut</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Kristen Protestan">Kristen Protestan</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghucu">Konghucu</option>
                  <option value="lainnya">Lainnya</option>
              </select>
<!--              <div id="error-wali_agama" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
          </div>
      </div>

      <div class="form-group">
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Hubungan dengan Anak</label>
          <div class="col-sm-9" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Hubungan dengan Anak" name="hbg_dng_anak" data-parsley-group="block2" data-parsley-errors-container='div[id="error-hbg_dng_anak"]'>
                  <option value="">Pilih hubungan dengan anak</option>
                  <option value="1">Kakak</option>
                  <option value="2">Adik</option>
                  <option value="3">Saudara</option>
<!--                  <option value="Kristen Protestan">Kristen Protestan</option>-->
<!--                  <option value="Hindu">Hindu</option>-->
<!--                  <option value="Budha">Budha</option>-->
<!--                  <option value="Konghucu">Konghucu</option>-->
<!--                  <option value="lainnya">Lainnya</option>-->
              </select>
<!--              <div id="error-hbg_dng_anak" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
          </div>
      </div>

      <div class="form-group" >
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat</label>
          <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="wali_alamat" class="form-control bg-blue class" placeholder="Alamat Wali" data-parsley-group="block2" data-parsley-errors-container='div[id="error-wali_alamat"]'>
              <i class="fa fa-map-marker" style="margin-left:15px;"></i>
              <div id="error-wali_alamat" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          </div>
      </div>
      <div class="form-group" >
          <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px"></label>
          <div class="col-sm-9" style="margin-top:3px;">
              <div class="col-sm-4" style="padding:0px">
                  <select class="form-control bg-blue class"  name="wali_kd_kabupaten" id="postKab4" data-parsley-group="block2" data-parsley-errors-container='div[id="error-wali_kd_kabupaten"]'>
                      <option value="" selected>Pilih Kab/Kota</option>
                      <?php foreach ($v_kabupaten as $valueKabupaten) { ?>
                          <option value="<?php echo $valueKabupaten->kd_provinsi.'.'.$valueKabupaten->kd_kabupaten; ?>"><?php echo $valueKabupaten->nm_kabupaten; ?></option>
                      <?php } ?>
                  </select>
<!--                  <div id="error-wali_kd_kabupaten" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
              </div>
              <div class="col-sm-4"  style="padding-left:3px;" id="list7">
                  <select class="form-control bg-blue class" name="wali_kd_kecamatan" id="postKec4" data-parsley-group="block2" data-parsley-errors-container='div[id="error-wali_kd_kecamatan"]'>
                      <option value="" selected>Pilih Kecamatan</option>
                  </select>
<!--                  <div id="error-wali_kd_kecamatan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
              </div>
              <div class="col-sm-4" style="margin-left:-27px;" id="list8">

                  <select class="form-control bg-blue class" name="wali_kd_kelurahan" id="postKel4" data-parsley-group="block2" data-parsley-errors-container='div[id="error-wali_kd_kelurahan"]'>
                      <option value="" selected>Pilih Kelurahan</option>
                  </select>
<!--                  <div id="error-wali_kd_kelurahan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
              </div>

          </div>
      </div>

<!--        <div class="form-group">-->
<!--            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Penghasilan <span class="text-danger">*</span></label>-->
<!--            <div class="col-sm-9" style="margin-top:3px;">-->
<!--              <select class="form-control bg-blue class" data-placeholder="Pilih Penghasilan Wali" name="penghasilan_wali" data-parsley-group="block2" data-parsley-errors-container='div[id="error-penghasilan_wali"]' required>-->
<!--                  <option value="">Pilih Penghasilan Wali</option>-->
<!--                  --><?php //foreach ($v_penghasilan as $baris): ?>
<!--                    <option value="--><?php //echo $baris->nama_penghasilan; ?><!--">--><?php //echo $baris->nama_penghasilan; ?><!--</option>-->
<!--                  --><?php //endforeach; ?>
<!--              </select>-->
<!--              <div id="error-penghasilan_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form-group" >-->
<!--            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone <span class="text-danger">*</span></label>-->
<!--            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">-->
<!--              <input type="text" name="no_hp_wali" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="14" placeholder="No. Handphone Wali" data-parsley-group="block2" data-parsley-errors-container='div[id="error-no_hp_wali"]' required>-->
<!--              <i class="fa fa-phone" style="margin-left:15px;"></i>-->
<!--              <div id="error-no_hp_wali" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>-->
<!--            </div>-->
<!--        </div>-->

  </div>
</div>

<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b> Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
  </blockquote>
<div>
