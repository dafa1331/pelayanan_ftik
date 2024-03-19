<?php

class Auth extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('session');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $this->load->view('login');
    }

    public function proses_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->user_model->check_login($username, $password);

        if ($user) {
            $session_data = array(
                'id_user' => $user->id_user,
                'username' => $user->username,
                'level' => $user->level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($session_data);

            // Redirect ke halaman dashboard atau halaman yang sesuai dengan role
            if ($user->level == 'superadmin' || $user->level == 'pegawai') {
                redirect('dashboard');
            } else if ($user->level == 'prodi'){
                redirect('prodi/pengajuan_layanan');
            } else {
                redirect('auth');
            }
        }else{
            echo 'password salah';
        }
    }

    function keluar() {
        $this->user_model->logout();
        redirect('auth');
    }
}
?>