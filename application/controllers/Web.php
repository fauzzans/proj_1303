<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

	public function index()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$this->load->view('web/index', $data);
	}

	public function sejarah()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$this->load->view('web/sejarah', $data);
	}

	public function pimpinan()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$this->load->view('web/pimpinan', $data);
	}

	public function visimisi()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$this->load->view('web/visimisi', $data);
	}

	public function berita()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$this->load->view('web/berita', $data);
	}

	public function berita_post()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$this->load->view('web/berita_post', $data);
	}

	public function kegiatan()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$this->load->view('web/kegiatan', $data);
	}

	public function kegiatan_post()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$this->load->view('web/kegiatan_post', $data);
	}

	public function galeri()
	{
		$this->load->helper('url');
		$this->load->helper('directory');

		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$this->load->view('web/galeri', $data);
	}

	public function dinniyah()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$this->load->view('web/dinniyah', $data);
	}

	public function mts()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$this->load->view('web/mts', $data);
	}

	public function ma()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$this->load->view('web/ma', $data);
	}

	public function sma()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$this->load->view('web/sma', $data);
	}

	public function informasi()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$this->load->view('web/informasi', $data);
	}

	public function pendaftaran()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		if ($data['web_ppdb']->status_ppdb == 'tutup') {
			redirect('404');
		}

		$this->db->order_by('id_pdd', 'ASC');
		$data['v_pdd'] = $this->db->get('tbl_pdd')->result();

		$this->db->order_by('id_penghasilan', 'ASC');
		$data['v_penghasilan'] = $this->db->get('tbl_penghasilan')->result();

		$this->db->where('ket_pekerjaan', 'ayah');
		$this->db->order_by('id_pekerjaan', 'ASC');
		$data['v_pekerjaan_ayah'] = $this->db->get('tbl_pekerjaan')->result();

		$this->db->where('ket_pekerjaan', 'ibu');
		$this->db->order_by('id_pekerjaan', 'ASC');
		$data['v_pekerjaan_ibu'] = $this->db->get('tbl_pekerjaan')->result();

		$this->db->order_by('id_pekerjaan', 'ASC');
		$this->db->group_by('nama_pekerjaan');
		$data['v_pekerjaan_wali'] = $this->db->get('tbl_pekerjaan')->result();

        $this->db->where('kd_provinsi', '32');
        $this->db->order_by('kd_provinsi', 'ASC');
        $data['v_kabupaten'] = $this->db->get('ref_kabupaten')->result();

		$this->load->view('web/pendaftaran', $data);

		if (isset($_POST['btndaftar'])) {
			$this->db->order_by('id_cln_siswa', 'DESC');
			$sql 		= $this->db->get('calon_siswa');
			if ($sql->num_rows() == 0) {
				$no_pendaftaran   = "PSB18004001";
			} else {
				$noUrut 	 	= substr($sql->row()->no_pendaftaran, 8, 3);
				$noUrut++;
				$no_pendaftaran	  = "PSB18004" . sprintf("%03s", $noUrut);
			}

			$nisn					= $this->input->post('nisn');
			$nama_lengkap			= $this->input->post('nama_lengkap');
            $jenis_kelamin			= $this->input->post('jenis_kelamin');
			$tempat_lahir			= $this->input->post('tempat_lahir');
			$tgl_lahir				= $this->input->post('thn_lahir') . "-" . $this->input->post('bln_lahir') . "-" . $this->input->post('tgl_lahir');
			$anak_ke				= $this->input->post('anak_ke');
            $jml_saudara_knd     	= $this->input->post('jml_saudara_knd');
			$jml_saudara_tiri		= $this->input->post('jml_saudara_tiri');
			$alamat_siswa			= $this->input->post('alamat_siswa');
			$get        			= explode(".", $this->input->post('kd_kelurahan'));
			$kd_provinsi            = $get[0];
			$kd_kabupaten           = $get[1];
			$kd_kecamatan           = $get[2];
			$kd_kelurahan           = $get[3];
			$no_telp				= $this->input->post('no_telp');
			$ket_siswa      		= $this->input->post('ket_siswa');


			$ayah_nama          	= $this->input->post('ayah_nama');
			$ayah_tmp_lahir			= $this->input->post('ayah_tmp_lahir');
            $ayah_tgl_lahir			= $this->input->post('ayah_thn_lahir') . "-" . $this->input->post('ayah_bln_lahir') . "-" . $this->input->post('ayah_tgl_lahir');
			$ayah_pekerjaan			= $this->input->post('ayah_pekerjaan');
			$ayah_pendidikan		= $this->input->post('ayah_pendidikan');
			$ayah_agama     		= $this->input->post('ayah_agama');
			$ayah_alamat        	= $this->input->post('ayah_alamat');
			$get2           		= explode(".", $this->input->post('ayah_kd_kelurahan'));
			$ayah_kd_provinsi       = $get2[0];
			$ayah_kd_kabupaten      = $get2[1];
			$ayah_kd_kecamatan      = $get2[2];
			$ayah_kd_kelurahan      = $get2[3];


			$ibu_nama				= $this->input->post('ibu_nama');
			$ibu_tmp_lahir			= $this->input->post('ibu_tmp_lahir');
            $ibu_tgl_lahir			= $this->input->post('ibu_thn_lahir') . "-" . $this->input->post('ibu_bln_lahir') . "-" . $this->input->post('ibu_tgl_lahir');
			$ibu_pekerjaan  		= $this->input->post('ibu_pekerjaan');
			$ibu_pendidikan     	= $this->input->post('ibu_pendidikan');
			$ibu_agama				= $this->input->post('ibu_agama');
			$ibu_alamat				= $this->input->post('ibu_alamat');
			$get3           		= explode(".", $this->input->post('ibu_kd_kelurahan'));
			$ibu_kd_provinsi        = $get3[0];
			$ibu_kd_kabupaten       = $get3[1];
			$ibu_kd_kecamatan       = $get3[2];
			$ibu_kd_kelurahan       = $get3[3];


			$wali_nama      		= $this->input->post('wali_nama');
			$wali_pekerjaan			= $this->input->post('wali_pekerjaan');
			$wali_pendidikan		= $this->input->post('wali_pendidikan');
			$wali_agama				= $this->input->post('wali_agama');
			$hbg_dng_anak			= $this->input->post('hbg_dng_anak');
			$wali_alamat			= $this->input->post('wali_alamat');
            $get4       			= explode(".", $this->input->post('wali_kd_kelurahan'));

			if (!isset($get4)) {
                $wali_kd_provinsi       = $get4[0];
                $wali_kd_kabupaten      = $get4[1];
                $wali_kd_kecamatan      = $get4[2];
                $wali_kd_kelurahan      = $get4[3];
            } else {
			    $wali_kd_provinsi = '00';
			    $wali_kd_kabupaten = '00';
			    $wali_kd_kecamatan = '00';
			    $wali_kd_kelurahan = '00';
            }


            $jenjang         		= $this->input->post('jenjang');
            $nama_sekolah			= $this->input->post('nama_sekolah');
            $no_ijazah	        	= $this->input->post('no_ijazah');
            $thn_ijazah             = $this->input->post('thn_ijazah');
            $no_ujian				= $this->input->post('no_ujian');
            $alamat_sekolah			= $this->input->post('alamat_sekolah');
            $get5           		= explode(".", $this->Model_data->date('skl_kd_kelurahan'));

            if (!isset($get5)) {
                $skl_kd_provinsi = $get5[0];
                $skl_kd_kabupaten = $get5[1];
                $skl_kd_kecamatan = $get5[2];
                $skl_kd_kelurahan = $get5[3];
            } else {
                $skl_kd_provinsi = '00';
                $skl_kd_kabupaten = '00';
                $skl_kd_kecamatan = '00';
                $skl_kd_kelurahan = '00';
            }
            $tgl_masuk  			= $this->input->post('tgl_masuk') . "-" . $this->input->post('bln_masuk') . "-" . $this->input->post('thn_masuk');
            $thn_lulus      		= $this->Model_data->date('thn_lulus');

            $user = array( 'username' => $no_pendaftaran,
                            'password' => $nisn,
                            'kd_role' => '3',
                            'nama_lengkap' => $nama_lengkap,
                            'created_date' => date('Y-m-d'),
                            'created_by' => '99',
                            'updated_date' => date('Y-m-d'),
                            'updated_by' => '99'
                        );

            $this->db->select_max('id_user');
            $max_idUser = $this->db->get('user')->row_array();

            $calon_siswa = array( 'id_user' => $max_idUser['id_user'] + 1,
                                    'no_pendaftaran' => $no_pendaftaran,
                                    'nisn' => $nisn,
                                    'nama_lengkap' => $nama_lengkap,
                                    'jenis_kelamin' => $jenis_kelamin,
                                    'tempat_lahir' => $tempat_lahir,
                                    'tgl_lahir' => $tgl_lahir,
                                    'anak_ke' => $anak_ke,
                                    'jml_saudara_knd' => $jml_saudara_knd,
                                    'jml_saudara_tiri' => $jml_saudara_tiri,
                                    'alamat_siswa' => $alamat_siswa,
                                    'kd_provinsi' => $kd_provinsi,
                                    'kd_kabupaten' => $kd_kabupaten,
                                    'kd_kecamatan' => $kd_kecamatan,
                                    'kd_kelurahan' => $kd_kelurahan,
//                                    'kd_pos' => $kd_pos,
                                    'no_telp' => $no_telp,
                                    'ket_siswa' => $ket_siswa,
                                    'tgl_siswa' => date('Y-m-d H:i:s'),
                                    'created_date' => date('Y-m-d'),
                                    'created_by' => '99',
                                    'updated_date' => date('Y-m-d'),
                                    'updated_by' => '99'
                                );

            $this->db->select_max('id_cln_siswa');
            $max_idSiswa = $this->db->get('calon_siswa')->row_array();

            $orang_tua = array( 'id_cln_siswa' => $max_idSiswa['id_cln_siswa'] + 1,
                                'ayah_nama' => $ayah_nama,
                                'ayah_tmp_lahir' => $ayah_tmp_lahir,
                                'ayah_tgl_lahir' => $ayah_tgl_lahir,
                                'ayah_pekerjaan' => $ayah_pekerjaan,
                                'ayah_pendidikan' => $ayah_pendidikan,
                                'ayah_agama' => $ayah_agama,
                                'ayah_alamat' => $ayah_alamat,
                                'ayah_kd_provinsi' => $ayah_kd_provinsi,
                                'ayah_kd_kabupaten' => $ayah_kd_kabupaten,
                                'ayah_kd_kecamatan' => $ayah_kd_kecamatan,
                                'ayah_kd_kelurahan' => $ayah_kd_kelurahan,
                                'ibu_nama' => $ibu_nama,
                                'ibu_tmp_lahir' => $ibu_tmp_lahir,
                                'ibu_tgl_lahir' => $ibu_tgl_lahir,
                                'ibu_pekerjaan' => $ibu_pekerjaan,
                                'ibu_pendidikan' => $ibu_pendidikan,
                                'ibu_agama' => $ibu_agama,
                                'ibu_alamat' => $ibu_alamat,
                                'ibu_kd_provinsi' => $ibu_kd_provinsi,
                                'ibu_kd_kabupaten' => $ibu_kd_kabupaten,
                                'ibu_kd_kecamatan' => $ibu_kd_kecamatan,
                                'ibu_kd_kelurahan' => $ibu_kd_kelurahan,
                                'wali_nama' => $wali_nama,
                                'wali_pekerjaan' => $wali_pekerjaan,
                                'wali_pendidikan' => $wali_pendidikan,
                                'wali_agama' => $wali_agama,
                                'hbg_dng_anak' => $hbg_dng_anak,
                                'wali_alamat' => $wali_alamat,
                                'wali_kd_provinsi' => $wali_kd_provinsi,
                                'wali_kd_kabupaten' => $wali_kd_kabupaten,
                                'wali_kd_kecamatan' => $wali_kd_kecamatan,
                                'wali_kd_kelurahan' => $wali_kd_kelurahan,
                                'created_date' => date('Y-m-d'),
                                'created_by' => '99',
                                'updated_date' => date('Y-m-d'),
                                'updated_by' => '99'
                                );

            $sekolah = array( 'id_cln_siswa' => $max_idSiswa['id_cln_siswa'] + 1,
                                'nama_sekolah' => $nama_sekolah,
                                'no_ijazah' => $no_ijazah,
                                'thn_ijazah' => $thn_ijazah,
                                'no_ujian' => $no_ujian,
                                'alamat' => $alamat_sekolah,
                                'kd_kelurahan' => $skl_kd_kelurahan,
                                'kd_kecamatan' => $skl_kd_kecamatan,
                                'kd_kabupaten' => $skl_kd_kabupaten,
                                'kd_provinsi' => $skl_kd_provinsi,
                                'tgl_masuk' => $tgl_masuk,
                                'jenjang' => $jenjang,
                                'created_date' => date('Y-m-d'),
                                'created_by' => '99',
                                'updated_date' => date('Y-m-d'),
                                'updated_by' => '99'
                            );

//            print_r($user);
//            echo "<br />";
//            echo "<br />";
//            print_r($calon_siswa);
//            echo "<br />";
//            echo "<br />";
//            print_r($orang_tua);
//            echo "<br />";
//            echo "<br />";
//            print_r($sekolah);
//            die();



            if ($this->db->insert('calon_siswa', $calon_siswa) && $this->db->insert('orng_tua_siswa', $orang_tua) && $this->db->insert('sekolah_asal', $sekolah) && $this->db->insert('user', $user)) {

                 $this->session->set_flashdata('msg',
                 	'
                 	<div class="alert alert-success alert-dismissible" role="alert">
                 		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 			 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
                 		 </button>
                 		 <strong>Sukses!</strong> Berhasil ditambahkan.
                 	</div>'
                 );
            }


			$this->session->set_userdata('no_pendaftaran', "$no_pendaftaran");
			redirect('panel_siswa');
		}
	}

	public function logcs()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		if ($data['web_ppdb']->status_ppdb == 'tutup') {
			redirect('404');
		}
		$ceks = $this->session->userdata('no_pendaftaran');
		if (isset($ceks)) {
			redirect('panel_siswa');
		} else {
			$this->load->view('web/index', $data);

			if (isset($_POST['btnlogin'])) {
				$username = $_POST['username'];
				$pass	   = $_POST['password'];

				$this->db->like('tgl_siswa', date('Y'), "after");
				$query  = $this->db->get_where('calon_siswa', "no_pendaftaran='$username'");
				$cek    = $query->result();
				$cekun  = $cek[0]->no_pendaftaran;
				$jumlah = $query->num_rows();

				if ($jumlah == 0) {
					$this->session->set_flashdata(
						'msg',
						'
									 <div class="alert alert-danger alert-dismissible" role="alert">
									 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;&nbsp;</span>
											</button>
											<strong>No. Pendaftaran "' . $username . '"</strong> belum terdaftar.
									 </div>'
					);
					redirect('logcs');
				} else {
					$row = $query->row();
					$cekpass = $row->password;
					if ($cekpass <> $pass) {
						$this->session->set_flashdata(
							'msg',
							'<div class="alert alert-warning alert-dismissible" role="alert">
													 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;&nbsp;</span>
															</button>
															<strong>No. Pendaftaran atau NISN Salah!</strong>.
													 </div>'
						);
						redirect('logcs');
					} else {

						$this->session->set_userdata('no_pendaftaran', "$cekun");

						redirect('panel_siswa');
					}
				}
			}
		}
	}


	function error_not_found()
	{
		$this->load->view('404_content');
	}

    function getKecamatan(){
        $kd_provinsi = $this->input->post('kd_provinsi');
        $kd_kabupaten = $this->input->post('kd_kabupaten');

        $this->db->where('kd_provinsi', $kd_provinsi);
        $this->db->where('kd_kabupaten', $kd_kabupaten);
        $this->db->order_by('nm_kecamatan', 'ASC');
        $data = $this->db->get('ref_kecamatan')->result();

        echo json_encode($data);
    }

    function getKelurahan(){
        $kd_provinsi = $this->input->post('kd_provinsi');
        $kd_kabupaten = $this->input->post('kd_kabupaten');
        $kd_kecamatan = $this->input->post('kd_kecamatan');

        $this->db->where('kd_provinsi', $kd_provinsi);
        $this->db->where('kd_kabupaten', $kd_kabupaten);
        $this->db->where('kd_kecamatan', $kd_kecamatan);
        $this->db->order_by('nm_kelurahan', 'ASC');
        $data = $this->db->get('ref_kelurahan')->result();

        echo json_encode($data);
    }
}
