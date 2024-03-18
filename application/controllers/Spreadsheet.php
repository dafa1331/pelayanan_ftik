<?php

use Google\Client;
use Google\Service\Sheets;

class Spreadsheet extends CI_Controller{
  public function index(){
    $this->load->view('template_datatable/header');
    $this->load->view('template/sidebar');
    $this->load->view('tes');
    $this->load->view('template_datatable/footer');
  }

  public function insert_data() {
        // Load Google API client
        require_once APPPATH. 'third_party/google-api-php-client--PHP7.4/vendor/autoload.php';

        // Load data from POST request
        $data1 = $this->input->post('nama');
        $data2 = $this->input->post('pekerjaan');

        // Authenticate with Google Sheets API
        $client = new Client();
        $client->setAuthConfig('assets/client_secret_290281422272-gprkd40848h89jf4b9d8gg8ko29nvna6.apps.googleusercontent.com.json');
        $client->addScope(Sheets::SPREADSHEETS);
        $service = new Sheets($client);

        // Prepare data
        $values = [
            [$data1, $data2]
        ];

        // Spreadsheet ID and range
        $spreadsheetId = '19nS32ZY3KYGPHC3WkQNm0dD4aBJsrhYSGQMNOuTx98Q';
        $range = 'tes!A1:B';

        // Write data to Google Sheets
        $body = new Google_Service_Sheets_ValueRange(['values' => $values]);
        $params = ['valueInputOption' => 'RAW'];
        $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

        // Handle response
        if ($result->getUpdates()->getUpdatedCells() > 0) {
            echo "Data berhasil dimasukkan ke Google Spreadsheet.";
        } else {
            echo "Gagal memasukkan data ke Google Spreadsheet.";
        }
    }
}
 ?>
