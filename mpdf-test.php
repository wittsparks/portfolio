<?php

require_once __DIR__ . '/vendor/autoload.php';

$content = file_get_contents('content.html');
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($content);
$mpdf->Output();

?>
