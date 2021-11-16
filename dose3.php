<?php 
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
$namevaccine3 =$_GET["namevaccine3"];
$namevaccine2_3 =$_GET["namevaccineL2_3"];
$namevaccine3_3 =$_GET["namevaccineL3_3"];
$datevaccine3=$_GET["datevaccine3"];

if(!empty($datevaccine3)){
$fdatevaccine3 = date_create($datevaccine3);
$fdatevaccine3 = date_format($fdatevaccine3,"d/m/Y");
}

$manufacturer3=$_GET["manufacturer3"];
$cer_date3=$_GET["cer_date3"];
if(!empty($cer_date3)){
$fcer_date3 = date_create($cer_date3);
$fcer_date3 = date_format($fcer_date3,"d/m/Y");
}
require('fpdf.php');

//หน้าปก จากซ้าย,จากบน ::จากซ้าย +1
$pdf = new FPDF('P','mm',[180,180]);
//$pdf->AddFont('angsana','','angsa.php');
$pdf->AddFont('THSarabunNew','','THSarabunNew.php');
$pdf->SetAutoPageBreak(false);
$pdf->AddPage();
//$pdf->SetFont('angsana','',15);
$pdf->SetFont('THSarabunNew','',12);

$pdf->setXY(11,45);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , "เข็ม 3" ) );
$pdf->setXY(8,48);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , "(3th Dose)" ) );
$pdf->setXY(26,45);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $namevaccine3 ) );
$pdf->setXY(26,48);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $namevaccine2_3 ) );
$pdf->setXY(26,51);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $namevaccine3_3 ) );
$pdf->setXY(53,45);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $fdatevaccine3 ) );
$pdf->setXY(75,45);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $manufacturer3 ) );
$pdf->setXY(101,45);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $fcer_date3 ) );

$pdf->Output();
?>