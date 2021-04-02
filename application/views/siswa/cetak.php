<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title><?php echo $judul_web; ?></title>
  <base href="<?php echo base_url(); ?>" />
  <link rel="icon" type="image/png" href="assets/images/favicon.png" />
  <style>
    table {
      border-collapse: collapse;
    }

    thead>tr {
      background-color: #0070C0;
      color: #f1f1f1;
    }

    thead>tr>th {
      background-color: #0070C0;
      color: #fff;
      padding: 10px;
      border-color: #fff;
    }

    th,
    td {
      padding: 2px;
    }

    th {
      color: #222;
    }

    body {
      font-family: Calibri;
    }
  </style>
</head>

<body onload="window.print();">
  <?php $this->load->view('kop_lap'); ?>
  <h4 align="center" style="margin-top:0px;"><u>BUKTI PENDAFTARAN</u></h4>
  <center>
    PANITIA PENERIAMAAN PESERTA DIDIK BARU (PPDB) <br>
    MADRASAH TSANAWIYAH (MTS) DARUT TAFSIR <br>
    TAHUN PELAJARAN <?php echo $thn_ppdb; ?> / <?php echo $thn_ppdb + 1; ?></center>
  <table width="100%" border="0">
    <tr>
      <td style="width: 150px;">SISWA</td>
    </tr>
    <tr>
      <td>No.Pendaftaran</td>
      <td>:</td>
      <td><?php echo $user->no_pendaftaran; ?></td>
    </tr>
    <tr>
      <td>Tanggal Pendaftaran</td>
      <td>:</td>
      <td><?php echo $this->Model_data->tgl_id(date('d-m-Y', strtotime($user->tgl_siswa))); ?></td>
    </tr>
    <tr>
      <td>Tanggal Cetak</td>
      <td>:</td>
      <td><?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?></td>
    </tr>
    <tr>
    <tr>
      <td>NIK</td>
      <td>:</td>
      <td><?php echo $user->nik; ?></td>
    </tr>
    <tr>
      <td>Nama Lengkap</td>
      <td>:</td>
      <td><?php echo ucwords($user->nama_lengkap); ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td><?php echo $user->jk; ?></td>
    </tr>
    <tr>
      <td>Tempat Tanggal Lahir</td>
      <td>:</td>
      <td><?php echo "$user->tempat_lahir, " . $this->Model_data->tgl_id($user->tgl_lahir); ?></td>
    </tr>
    <tr>
      <td>Anak Ke (berapa)</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td>Jumlah Saudara</td>
      <td>:</td>
      <td>Kandung </td>
      <td>Berat Badan</td>
    </tr>
    <tr>
      <td></td>
      <td>:</td>
      <td>Tiri</td>
      <td>Tinggi</td>
    </tr>
    <tr>
      <td>Alamat Lengkap</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>Desa/Kelurahan</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>Kab/Kota</td>
      <td></td>
      <td>Kode Pos</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>Telp/HP</td>
      <td></td>
    </tr>
    <tr>
      <!-- hubungan keluarga -->
      <td>Keterangan</td>
      <td>:</td>
      <td></td>
    </tr>
  </table>
  <br>
  <table style="page-break-after: always;">
    <tr>
      <td>ORANG TUA / WALI</td>
    </tr>
    <tr>
      <td>Orang Tua</td>
      <td>:</td>
      <td>Ayah</td>
      <td><?php echo ucwords($user->nama_ayah); ?></td>
      <td>Ibu</td>
      <td><?php echo ucwords($user->nama_ibu); ?></td>
    </tr>
    <tr>
      <td>Tempat Tanggal Lahir</td>
      <td>:</td>
      <td>Ayah</td>
      <td></td>
      <td>Ibu</td>
      <td></td>
    </tr>
    <tr>
      <td>Pekerjaan</td>
      <td>:</td>
      <td>Ayah</td>
      <td></td>
      <td>Ibu</td>
      <td></td>
    </tr>
    <tr>
      <td>Pendidikan</td>
      <td>:</td>
      <td>Ayah</td>
      <td></td>
      <td>Ibu</td>
      <td></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td>:</td>
      <td>Ayah</td>
      <td></td>
      <td>Ibu</td>
      <td></td>
    </tr>
    <tr>
      <td>Penghasilan</td>
      <td>:</td>
      <td>Ayah</td>
      <td>Rp</td>
      <td>Ibu</td>
      <td>Rp</td>
    </tr>
    <!-- WALI -->
    <tr>
      <td>Nama Wali</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td>Pekerjaan</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td>Pendidikan</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td>Hubungan dengan anak</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td>Alamat Lengkap</td>
      <td>:</td>
      <td></td>
    </tr>
  </table>

  <table style="page-break-before:always">
    <tr>
      <td>Asal Sekolah</td>
    </tr>
    <tr>
      <td>Nama Sekolah/Madrasah</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td>Ijazah Nomor</td>
      <td>:</td>
      <td></td>
      <td>Tahun</td>
      <td></td>
    </tr>
    <tr>
      <td>Nomor Ujian</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td>NISN</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td>Alamat Sekolah</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td>Tanggal Masuk</td>
      <td>:</td>
      <td></td>
    </tr>
  </table>

  <table>
    <tr style="width: 300px;height: 150px;">
      <td style="width: 300px;"><br>
        Tanda Tangan Orang Tua,
      </td>
      <td style="width: 300px;"></td>
      <td style="width: 300px;">Bogor, <?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?> <br>
        Tanda Tangan Calon Siswa/Santri,
      </td>
    </tr>
    <tr>
      <td style="border-top:solid;width: 300px;">
        Nama
      </td>
      <td style="width: 300px;"></td>
      <td style="border-top:solid;width: 300px;">
        Nama
      </td>
    </tr>
  </table>

  <br><br>

  <b><u>Siapkan Berkas Berikut Ketika anda melakukan verifikasi :</u></b>
  <br>
  <table width="100%" border="0" style="margin-left:5px;">
    <tr>
      <td width="1">1.</td>
      <td>Cetak bukti pendaftaran</td>
      <td width="1">:</td>
      <td>1 lembar</td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Photo Copy Ijazah</td>
      <td>:</td>
      <td>3 lembar</td>
    </tr>
    <tr>
      <td>3.</td>
      <td>Surat Keterangan Hasil Ujian (SKHUN)</td>
      <td>:</td>
      <td>ASLI</td>
    </tr>
    <tr>
      <td>4.</td>
      <td>Buku Raport</td>
      <td>:</td>
      <td>ASLI</td>
    </tr>
    <tr>
      <td>5.</td>
      <td>NISN</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>6.</td>
      <td>Pas Photo Ukuran 3 x 4</td>
      <td>:</td>
      <td>6 lembar</td>
    </tr>
    <tr>
      <td>7.</td>
      <td>Pas Photo Ukuran 2 x 3</td>
      <td>:</td>
      <td>3 lembar</td>
    </tr>
  </table>

</body>

</html>