<?php

class Backup extends CI_Controller
{

    function __construct() {
        parent::__construct();
        // Periksa status login saat konstruktor dijalankan
        if (!$this->session->userdata('logged_in')) {
            redirect('auth'); // Redirect ke halaman login jika tidak login
        }
  }

  public function backup_db()
  {
    $this->load->dbutil();

    $db_name = 'backup-db' . $this->db->database . 'on' . date("Y-m-d-H-i-s") . '.sql';

    $pref = array(
      'format' => 'zip',
      'filename' => $db_name,
      'add_insert' => TRUE,
      'foregn_key_checks' => FALSE,
    );

    $backup = $this->dbutil->backup($pref);

    $save = 'db/' .$db_name;

    $this->load->helper('file');
    write_file($save, $backup);

    $this->load->helper('download');
    force_download($db_name, $backup);
  }
}
?>