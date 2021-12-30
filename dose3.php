<?php
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
$namevaccine3 = $_GET["namevaccine3"];
$namevaccine2_3 = $_GET["namevaccineL2_3"];
$namevaccine3_3 = $_GET["namevaccineL3_3"];
$datevaccine3 = $_GET["datevaccine3"];
if (!empty($datevaccine3)) {
  $fdatevaccine3 = date_create($datevaccine3);
  $fdatevaccine3 = date_format($fdatevaccine3, "d/m/Y");
}
$manufacturer3 = $_GET["manufacturer3"];
$manufacturerL2_3 = $_GET["manufacturerL2_3"];
$manufacturerL3_3 = $_GET["manufacturerL3_3"];
$cer_date3 = $_GET["cer_date3"];
if (!empty($cer_date3)) {
  $fcer_date3 = date_create($cer_date3);
  $fcer_date3 = date_format($fcer_date3, "d/m/Y");
}

$namevaccine4 = $_GET["namevaccine4"];
$namevaccine2_4 = $_GET["namevaccineL2_4"];
$namevaccine3_4 = $_GET["namevaccineL3_4"];
$datevaccine4 = $_GET["datevaccine4"];
if (!empty($datevaccine4)) {
  $fdatevaccine4 = date_create($datevaccine4);
  $fdatevaccine4 = date_format($fdatevaccine4, "d/m/Y");
}
$manufacturer4 = $_GET["manufacturer4"];
$manufacturerL2_4 = $_GET["manufacturerL2_4"];
$manufacturerL3_4 = $_GET["manufacturerL3_4"];
$cer_date4 = $_GET["cer_date4"];
if (!empty($cer_date4)) {
  $fcer_date4 = date_create($cer_date4);
  $fcer_date4 = date_format($fcer_date4, "d/m/Y");
}

require('fpdf.php');

//หน้าปก จากซ้าย,จากบน ::จากซ้าย +1
$pdf = new FPDF('P', 'mm', [180, 180]);
//$pdf->AddFont('angsana','','angsa.php');
$pdf->AddFont('THSarabunNew_b', '', 'THSarabunNew_b.php');
$pdf->SetAutoPageBreak(false);
$pdf->AddPage();
//$pdf->SetFont('angsana','',15);
$pdf->SetFont('THSarabunNew_b', '', 12);

$pdf->setXY(11, 47);
$pdf->Cell(0, 0, iconv('UTF-8', 'cp874', "เข็ม 3"));
$pdf->setXY(8, 50);
$pdf->Cell(0, 0, iconv('UTF-8', 'cp874', "(3th Dose)"));
$pdf->setXY(26, 47);
$pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $namevaccine3));
$pdf->setXY(26, 50);
$pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $namevaccine2_3));
$pdf->setXY(26, 53);
$pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $namevaccine3_3));
$pdf->setXY(53, 47);
$pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $fdatevaccine3));
$pdf->setXY(75, 47);
$pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $manufacturer3));
$pdf->setXY(75, 50);
$pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $manufacturerL2_3));
$pdf->setXY(75, 53);
$pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $manufacturerL3_3));
$pdf->setXY(101, 47);
$pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $fcer_date3));
$pdf->setXY(123, 53);
$pdf->Cell(0, 0, iconv('UTF-8', 'cp874', "Medical Doctor"));

if (!empty($namevaccine4)) {
  $pdf->setXY(11, 64);
  $pdf->Cell(0, 0, iconv('UTF-8', 'cp874', "เข็ม 4"));
  $pdf->setXY(8, 67);
  $pdf->Cell(0, 0, iconv('UTF-8', 'cp874', "(4th Dose)"));
  $pdf->setXY(26, 64);
  $pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $namevaccine4));
  $pdf->setXY(26, 67);
  $pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $namevaccine2_4));
  $pdf->setXY(26, 70);
  $pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $namevaccine3_4));
  $pdf->setXY(53, 64);
  $pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $fdatevaccine4));
  $pdf->setXY(75, 64);
  $pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $manufacturer4));
  $pdf->setXY(75, 67);
  $pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $manufacturerL2_4));
  $pdf->setXY(75, 70);
  $pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $manufacturerL3_4));
  $pdf->setXY(101, 64);
  $pdf->Cell(0, 0, iconv('UTF-8', 'cp874', $fcer_date4));
  $pdf->setXY(123, 70);
  $pdf->Cell(0, 0, iconv('UTF-8', 'cp874', "Medical Doctor"));
}
$pdf->Output();
