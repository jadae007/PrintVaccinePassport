
<?php 
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
header("Content-Type: application/pdf");
$dose = $_GET["dose"];
$namevaccine1 =$_GET["namevaccine1"];
$namevaccineL2_1 =$_GET["namevaccineL2_1"];
$namevaccineL3_1 =$_GET["namevaccineL3_1"];
$namevaccine2 =$_GET["namevaccine2"];
$namevaccineL2_2 =$_GET["namevaccineL2_2"];
$namevaccineL3_2 =$_GET["namevaccineL3_2"];


$datevaccine1=$_GET["datevaccine1"];
if(!empty($datevaccine1)){
$fdatevaccine1 = date_create($datevaccine1);
$fdatevaccine1 = date_format($fdatevaccine1,"d/m/Y");
}

$datevaccine2 =$_GET["datevaccine2"];
if(!empty($datevaccine2)){
$fdatevaccine2 = date_create($datevaccine2);
$fdatevaccine2 = date_format($fdatevaccine2,"d/m/Y");
}

$manufacturer1=$_GET["manufacturer1"];
$manufacturerL2_1 =$_GET["manufacturerL2_1"];
$manufacturerL3_1 =$_GET["manufacturerL3_1"];

$manufacturer2=$_GET["manufacturer2"];
$manufacturerL2_2 =$_GET["manufacturerL2_2"];
$manufacturerL3_2 =$_GET["manufacturerL3_2"];

$cer_date1=$_GET["cer_date1"];
if(!empty($cer_date1)){
$fcer_date1 = date_create($cer_date1);
$fcer_date1 = date_format($fcer_date1,"d/m/Y");
}
$cer_date2=$_GET["cer_date2"];
if(!empty($cer_date2)){
$fcer_date2 = date_create($cer_date2);
$fcer_date2 = date_format($fcer_date2,"d/m/Y");
}

$name = $_GET["name"];
$sex = $_GET["sex"];
$nationality = $_GET["nationality"];
$passport_id = $_GET["passport_id"];
$birthday = $_GET["birthday"];
if(!empty($birthday)){
$birthday = date_create($birthday);
$birthday = date_format($birthday, "d F Y");
}


require('fpdf.php');


//หน้าปก จากซ้าย,จากบน ::จากซ้าย +1
$pdf = new FPDF('P','mm',[180,180]);
//$pdf->AddFont('angsana','','angsa.php');
$pdf->AddFont('THSarabunNew_b','','THSarabunNew_b.php');
$pdf->SetAutoPageBreak(false);
$pdf->AddPage();
//$pdf->SetFont('angsana','',15);
$pdf->SetFont('THSarabunNew_b','',12);
$pdf->setXY(40,36);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $name ) );
$pdf->setXY(109,36);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $birthday ) );
$pdf->setXY(145,36);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $sex ) );
$pdf->setXY(23,42);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $nationality ) );
$pdf->setXY(23,48);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $passport_id ) );



if(!empty($namevaccine1)){
$pdf->setXY(11,92);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , "เข็ม 1" ) );
$pdf->setXY(8,95);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , "(1st Dose)" ) );
$pdf->setXY(26,92);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $namevaccine1 ) );
$pdf->setXY(26,95);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $namevaccineL2_1 ) );
$pdf->setXY(26,98);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $namevaccineL3_1 ) );
$pdf->setXY(54,92);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $fdatevaccine1 ) );
$pdf->setXY(75,92);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $manufacturer1 ) );
$pdf->setXY(75,95);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $manufacturerL2_1 ) );
$pdf->setXY(75,98);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $manufacturerL3_1 ) );
$pdf->setXY(101,92);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $fcer_date1 ) );
}


if(!empty($namevaccine2)){
$pdf->setXY(11,105);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , "เข็ม 2" ) );
$pdf->setXY(8,108);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , "(2nd Dose)" ) );
$pdf->setXY(26,105);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $namevaccine2 ) );
$pdf->setXY(26,108);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $namevaccineL2_2) );
$pdf->setXY(26,111);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $namevaccineL3_2) );
$pdf->setXY(54,105);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $fdatevaccine2 ) );
$pdf->setXY(75,105);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $manufacturer2 ) );
$pdf->setXY(75,108);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $manufacturerL2_2 ) );
$pdf->setXY(75,111);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $manufacturerL3_2 ) );
$pdf->setXY(101,105);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $fcer_date2 ) );
}
/*
$pdf->setXY(28,98);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $passport_id ) );
$pdf->setXY(40,108);
$pdf->Cell( 0  , 0 , iconv( 'UTF-8','cp874' , $idcard ) );
*/
$pdf->Output();
?>
