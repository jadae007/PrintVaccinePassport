
<?php
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
$name = $_GET['name'];
$passport_id=$_GET['passport_id'];
$idcard=$_GET['idcard'];
require('fpdf.php');


//หน้าปก
$pdf = new FPDF('P','mm',[88,117]);
$pdf->AddFont('angsana','','angsa.php');
$pdf->SetAutoPageBreak(false);
$pdf->AddPage();
$pdf->SetFont('angsana','',15);
$pdf->setXY(23,91);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $name ) );
$pdf->Cell(0,0);
$pdf->setXY(28,101);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $passport_id ) );
$pdf->setXY(40,111);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $idcard ) );
$pdf->Output();
?>


