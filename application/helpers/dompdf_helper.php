<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'third_party/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

if (!function_exists('generate_pdf')) {
    function generate_pdf($html, $filename='', $stream=TRUE) {
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();
        if ($stream) {
            $dompdf->stream($filename.'.pdf');
        } else {
            return $dompdf->output();
        }
    }
}
?>
