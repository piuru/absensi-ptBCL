<?php
defined('BASEPATH') OR die('No direct script access allowed!');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('User_model');
        $this->load->model('Absensi_model');
        $this->load->model('Jam_model', 'jam');
    }

    public function index()
    {
        $data['jumlah_pegawai'] = $this->User_model->count_all();
        $data['jumlah_karyawan'] = $this->User_model->count_by_level('Karyawan');
        $data['jumlah_manager'] = $this->User_model->count_by_level('Manager');

        $data['jumlah_divisi'] = $this->User_model->count_divisi();

        $data['jam_masuk'] = $this->jam->get_jam_masuk();
        $data['jam_pulang'] = $this->jam->get_jam_pulang();

        $data['absensi_hari_ini'] = $this->Absensi_model->get_absen_hari_ini();
        $data['jumlah_karyawan_hadir'] = 0;
        $data['jumlah_karyawan_tidak_hadir'] = 0;

        foreach ($data['absensi_hari_ini'] as $absen){
            if (!empty($absen->waktu_masuk)){
                $data['jumlah_karyawan_hadir']++;
            } else {
                $data['jumlah_karyawan_tidak_hadir']++;
            }
        }

        return $this->template->load('template', 'dashboard', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        session_destroy();
        redirect(base_url());
    }
}



/* End of File: d:\Ampps\www\project\absen-pegawai\application\controllers\Dashboard.php */