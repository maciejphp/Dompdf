<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "../vendor/autoload.php";


use Dompdf\Dompdf;

$html = file_get_contents('html.html');



$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->set_paper("a4", "portrait");
$dompdf->render();
$dompdf->stream();
?>