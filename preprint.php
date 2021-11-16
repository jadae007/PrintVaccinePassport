<?php
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
$name = $_GET["name"];
$birthday = $_GET["birthday"];
$nationality = $_GET["nationality"];
$passport_id = $_GET["passport_id"];
$idcard = $_GET["idcard"];
$sex = $_GET["sex"];
$namevaccine1 = $_GET["namevaccine1"];
$namevaccineL2_1 =$_GET["namevaccineL2_1"];
$namevaccineL3_1 =$_GET["namevaccineL3_1"];
$namevaccine2 = $_GET["namevaccine2"];
$namevaccineL2_2 =$_GET["namevaccineL2_2"];
$namevaccineL3_2 =$_GET["namevaccineL3_2"];
$namevaccine3 = $_GET["namevaccine3"];
$namevaccineL2_3 =$_GET["namevaccineL2_3"];
$namevaccineL3_3 =$_GET["namevaccineL3_3"];

$datevaccine1 = $_GET["datevaccine1"];
$datevaccine2 = $_GET["datevaccine2"];
$datevaccine3 = $_GET["datevaccine3"];

$manufacturer1 = $_GET["manufacturer1"];
$manufacturer2 = $_GET["manufacturer2"];
$manufacturer3 = $_GET["manufacturer3"];

$cer_date1 = $_GET["cer_date1"];
$cer_date2 = $_GET["cer_date2"];
$cer_date3 = $_GET["cer_date3"];

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="function.js"></script>
    <title>VaccinePassportKHN</title>
</head>

<body>
    <?php
    include_once('navbar.php');
    ?>
    <div class="container">
        <form action="preprint.php" method="GET">
            <div class="row">
                <div class="col-8">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">ชื่อ นามสกุล</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" autofocus>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="birthday" class="col-sm-2 col-form-label">วันเกิด</label>
                        <div class="col-auto">
                            <input type="date" class="form-control" name="birthday" id="birthday" value="<?php echo $birthday; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="birthday" class="col-sm-2 col-form-label">เพศ</label>
                        <div class="col-sm-6">
                            <input type="radio" name="sex" value="Male" <?php if ($sex == "Male") echo "checked" ?>> ชาย
                            <input type="radio" name="sex" value="Female" <?php if ($sex == "Female") echo "checked" ?>> หญิง
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nationality" class="col-sm-2 col-form-label">สัญชาติ</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nationality" id="nationality" value="<?php echo $nationality; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="passport_id" class="col-sm-2 col-form-label">Passport No.</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="passport_id" id="passport_id" value="<?php echo $passport_id; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="idcard" class="col-sm-2 col-form-label">เลขบัตรประจำตัวประชาชน</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="idcard" id="idcard" value="<?php echo $idcard; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <HR>
            <?php
            function checknumbe($num)
            {
                if ($num == 1)
                    return $num . "st";
                elseif ($num == 2) {
                    return $num . "nd";
                } else
                    return $num . "th";
            }
            ?>

            <table class="table table-bordered">
                <thead>
                    <tr align="center">
                        <th scope="col" class="th1">Dose</th>
                        <th scope="col" class="th2">Name of Vaccine</th>
                        <th scope="col" class="th3">Date of Vaccination</th>
                        <th scope="col" class="th4">Manufacturer and batch No. of vaccine</th>
                        <th scope="col" class="th5">Certificate issued date</th>
                        <th scope="col" class="th6">Signature and professional status of authorized officer</th>
                        <th scope="col" class="th7">Official stamp of issued center</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $vacc ?>
                <?php for ($j = 1; $j <=3; $j++) { ?>
                            <tr>
                            <th scope="row"><?php echo checknumbe($j) ?></th>
                                <td><input type="text" name="namevaccine<?php echo $j ?>" value="<?php echo ${"namevaccine".$j}  ;  ?>" class="form-control">
                                <input style="margin-top: 3px;" type="text" name="namevaccineL2_<?php echo $j ?>" value="<?php echo ${"namevaccineL2_".$j}  ;  ?>" class="form-control">
                                <input style="margin-top: 3px;" type="text" name="namevaccineL3_<?php echo $j ?>" value="<?php echo ${"namevaccineL3_".$j}  ;  ?>" class="form-control"></td>
                                <td><input type="date" name="datevaccine<?php echo $j ?>"  value="<?php echo ${"datevaccine".$j} ;  ?>" class="form-control"></td>
                                <td><input type="text" name="manufacturer<?php echo $j ?>"  value="<?php echo ${"manufacturer".$j} ;  ?>" class="form-control"></td>
                                <td><input type="date" name="cer_date<?php echo $j ?>"  value="<?php echo ${"cer_date".$j} ;  ?>" class="form-control"></td>
                                <td></td>
                                <td></td>
                            </tr>

                        <?php
                        }
                        ?>
                </tbody>
            </table>
            <input type="submit" class="btn btn-secondary" value="บันทึกฟอร์ม">
            <hr>
        </form>
        <a class="btn btn-primary" href="cover.php?name=<?php echo $name .
                                                            "&passport_id=" .
                                                            $passport_id .
                                                            "&idcard=" . $idcard;
                                                        ?>" role="button" target="_blank">พิมพ์หน้าปก</a>
        <a class="btn btn-success" href="dose1and2.php?name=<?php echo $name .
                                                                "&passport_id=" . $passport_id .
                                                                "&sex=" . $sex .
                                                                "&birthday=" . $birthday .
                                                                "&nationality=" . $nationality .
                                                                "&namevaccine1=" . $namevaccine1 .
                                                                "&namevaccineL2_1=" . $namevaccineL2_1 .
                                                                "&namevaccineL3_1=" . $namevaccineL3_1 .
                                                                "&namevaccine2=" . $namevaccine2 .
                                                                "&namevaccineL2_2=" . $namevaccineL2_2 .
                                                                "&namevaccineL3_2=" . $namevaccineL3_2 .
                                                                "&datevaccine1=" . $datevaccine1 .
                                                                "&datevaccine2=" . $datevaccine2 .
                                                                "&manufacturer1=" . $manufacturer1 .
                                                                "&manufacturer2=" . $manufacturer2 .
                                                                "&cer_date1=" . $cer_date1 .
                                                                "&cer_date2=" . $cer_date2;
                                                            ?>" role="button" target="_blank">พิมพ์เข็มที่ 1-2</a>
        
        <?php if((!empty($namevaccine3))&&(!empty($manufacturer3))){ ?>
        <a class="btn btn-success" href="dose3.php?namevaccine3=<?php echo $namevaccine3.
         "&namevaccineL2_3=".$namevaccineL2_3.
         "&namevaccineL3_3=".$namevaccineL3_3.
        "&datevaccine3=".$datevaccine3.
        "&manufacturer3=".$manufacturer3.
        "&cer_date3=" . $cer_date3;
        ?>" role="button" target="_blank">พิมพ์เข็มที่ 3</a>
        <?php } ?>
        <div class="col-4"></div>
    </div>

    <?php
include('modal.php');
?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>