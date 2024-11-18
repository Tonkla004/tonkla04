<?php
require_once('config.php');

if (isset($_REQUEST['btn_insert'])) {
    $fname1 = $_REQUEST['txt_name1'];
    $fname2 = $_REQUEST['txt_name2'];
    $lname = $_REQUEST['txt_name3'];
    $day = $_REQUEST['txt_name4'];
    $time1 = $_REQUEST['txt_name5'];
    $time2 = $_REQUEST['txt_name6'];
    $time3 = $_REQUEST['txt_name7'];
    $time4 = $_REQUEST['txt_name8'];
    $time5 = $_REQUEST['txt_name9'];
    $time6 = $_REQUEST['txt_name10'];
    $time7 = $_REQUEST['txt_name11'];
    $time8 = $_REQUEST['txt_name12'];
    $time9 = $_REQUEST['txt_name13'];
    $time10 = $_REQUEST['txt_name14'];
    $time11 = $_REQUEST['txt_name15'];
    $time12 = $_REQUEST['txt_name16'];

    if (empty($fname1)) {
        $errorMsg = "Please enter id";
    } else if (empty($fname2)) {
        $errorMsg = "please Enter name";
    } else if (empty($lname)) {
        $errorMsg = "please Enter l name";
    } else if (empty($day)) {
        $errorMsg = "please Enter phone";
    } else if (empty($time1)) {
        $errorMsg = "please Enter time";
    } else if (empty($time2)) {
        $errorMsg = "please Enter time";
    } else if (empty($time3)) {
        $errorMsg = "please Enter time";
    } else if (empty($time4)) {
        $errorMsg = "please Enter time";
    } else if (empty($time5)) {
        $errorMsg = "please Enter time";
    } else if (empty($time6)) {
        $errorMsg = "please Enter time";
    } else if (empty($time7)) {
        $errorMsg = "please Enter time";
    } else if (empty($time8)) {
        $errorMsg = "please Enter time";
    } else if (empty($time9)) {
        $errorMsg = "please Enter time";
    } else if (empty($time10)) {
        $errorMsg = "please Enter time";
    } else if (empty($time11)) {
        $errorMsg = "please Enter time";
    } else if (empty($time12)) {
        $errorMsg = "please Enter time";
    } else {
        try {
            if (!isset($errorMsg)) {
                $insert_stmt = $db->prepare("INSERT INTO aviation(id, name, name_l, phone, message, date, name_2, name_l2, phone2, province, district, sub_district, house_number, zip_code, address_details, date2) 
                                             VALUES (:fname1, :fname2, :lname, :day, :time1, :time2, :time3, :time4, :time5, :time6, :time7, :time8, :time9, :time10, :time11, :time12)");
                $insert_stmt->bindParam(':fname1', $fname1);
                $insert_stmt->bindParam(':fname2', $fname2);
                $insert_stmt->bindParam(':lname', $lname);
                $insert_stmt->bindParam(':day', $day); 
                $insert_stmt->bindParam(':time1', $time1);
                $insert_stmt->bindParam(':time2', $time2);
                $insert_stmt->bindParam(':time3', $time3);
                $insert_stmt->bindParam(':time4', $time4);
                $insert_stmt->bindParam(':time5', $time5);
                $insert_stmt->bindParam(':time6', $time6);
                $insert_stmt->bindParam(':time7', $time7);
                $insert_stmt->bindParam(':time8', $time8);
                $insert_stmt->bindParam(':time9', $time9);
                $insert_stmt->bindParam(':time10', $time10);
                $insert_stmt->bindParam(':time11', $time11);
                $insert_stmt->bindParam(':time12', $time12);


                if ($insert_stmt->execute()) {
                    $insertMsg = "Insert Successfully...";
                    header("refresh:2;index2.php");
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กรอกข้อมูล</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="display-3 text-center">กรอกข้อมูล
        </div>

        <?php
        if (isset($errorMsg)) {
        ?>
            <div class="alert alert-danger">
                <strong>โปรดใส่ข้อมูลให้ครบ <?php echo $errorMsg; ?></strong>
            </div>
        <?php } ?>


        <?php
        if (isset($insertMsg)) {
        ?>
            <div class="alert alert-success">
                <strong>Success! <?php echo $insertMsg; ?></strong>
            </div>
        <?php } ?>

        <form method="post" class="form-horizontal mt-5">

        <div class="form-group text-center">
                <div class="row">
                    <label for="firstname" class="col-sm-3 control-label">id</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_name1" class="form-control" placeholder="กรอกเลขid">
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <div class="row">
                    <label for="firstname" class="col-sm-3 control-label">ชื่อผู้ส่ง</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_name2" class="form-control" placeholder="กรอกชื่อจริง">
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <div class="row">
                    <label for="lastname" class="col-sm-3 control-label">นามสกุลผู้ส่ง</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_name3" class="form-control" placeholder="กรอกนามสกุล">
                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="row">
                        <label for="day" class="col-sm-3 control-label">เบอร์โทรผู้ส่ง</label>
                        <div class="col-sm-9">
                            <input type="text" name="txt_name4" class="form-control" placeholder="กรอกเบอร์โทร">
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="row">
                            <label for="time" class="col-sm-3 control-label">ข้อความ</label>
                            <div class="col-sm-9">
                                <input type="text" name="txt_name5" class="form-control" placeholder="กรอกข้อความที่ต้องการส่ง">
                            </div>
                        </div>
                        <div class="form-group text-center">
                        <div class="row">
                            <label for="time" class="col-sm-3 control-label">วันที่ส่ง</label>
                            <div class="col-sm-9">
                                <input type="date" name="txt_name6" class="form-control" placeholder="กรอกวันที่">
                            </div>
                        </div>
                        <div class="form-group text-center">
                        <div class="row">
                            <label for="time" class="col-sm-3 control-label">ชื่อผู้รับ</label>
                            <div class="col-sm-9">
                                <input type="text" name="txt_name7" class="form-control" placeholder="กรอกชื่อจริงของผู้ที่รับ">
                            </div>
                        </div>
                        <div class="form-group text-center">
                        <div class="row">
                            <label for="time" class="col-sm-3 control-label">นามสกุลผู้รับ</label>
                            <div class="col-sm-9">
                                <input type="text" name="txt_name8" class="form-control" placeholder="กรอกนามสกุลผู้รับ">
                            </div>
                        </div>
                        <div class="form-group text-center">
                        <div class="row">
                            <label for="time" class="col-sm-3 control-label">เบอร์โทรผู้รับ</label>
                            <div class="col-sm-9">
                                <input type="text" name="txt_name9" class="form-control" placeholder="กรอกเบอร์โทรผู้ที่รับ">
                            </div>
                        </div>
                        <div class="form-group text-center">
                        <div class="row">
                <label for="province" class="col-sm-3 control-label">จังหวัด</label>
                <div class="col-sm-9">
                <select class="form-select" name="txt_name10"  required onchange="updateDistricts()">
                    <option selected disabled value="">เลือกจังหวัด</option>
      <option>ราชบุรี</option>
      <option>เชียงใหม่</option>
      <option>นครราชสีมา</option>
      <option>กาญจนบุรี</option>
      <option>ตาก</option>
      <option>อุบลราชธานี</option>
      <option>สุราษฎร์ธานี</option>
      <option>ชัยภูมิ</option>
      <option>แม่ฮ่องสอน</option>
      <option>เพชรบูรณ์</option>
      <option> ลำปาง	</option>
      <option>อุดรธานี	</option>
      <option>เชียงราย	</option>
      <option>น่าน	</option>
      <option>เลย	</option>
      <option>ขอนแก่น	</option>
      <option>	พิษณุโลก	</option>
      <option>	บุรีรัมย์	</option>
      <option>นครศรีธรรมราช	</option>
      <option>สกลนคร	</option>
      <option>นครสวรรค์</option>
      <option>ศรีสะเกษ	</option>
      <option>กำแพงเพชร	</option>
      <option>ร้อยเอ็ด	</option>
      <option>สุรินทร์</option>
      <option>อุตรดิตถ์	</option>
      <option>สงขลา	</option>
      <option>สระแก้ว	</option>
      <option>กาฬสินธุ์	</option>
      <option>อุทัยธานี	</option>
      <option>สุโขทัย	</option>
      <option>	แพร่	</option>
      <option>ประจวบคีรีขันธ์	</option>
      <option>จันทบุรี	</option>
      <option>พะเยา	</option>
      <option>เพชรบุรี</option>
      <option>ลพบุรี	</option>
      <option>ชุมพร	</option>
      <option>นครพนม	</option>
      <option>	สุพรรณบุรี	</option>
      <option>มหาสารคาม	</option>
      <option>ฉะเชิงเทรา	</option>
      <option>ตรัง	</option>
      <option>	ปราจีนบุรี	</option>
      <option>	กระบี่</option>
      <option>พิจิตร	</option>
      <option>ยะลา	</option>
      <option>อลำพูน	</option>
      <option>นราธิวาส	</option>
      <option>ชลบุรีอ</option>
      <option>มุกดาหาร	</option>
      <option>	บึงกาฬ	</option>
      <option>	พังงา	</option>
      <option>	ยโสธร</option>
      <option>	หนองบัวลำภู	</option>
      <option>	สระบุรี	</option>
      <option>	ระยอง	</option>
      <option>	พัทลุง	</option>
      <option>	ระนอง	</option>
      <option>	อำนาจเจริญ	</option>
      <option>	หนองคาย</option>
      <option>	ตราด	</option>
      <option>	พระนครศรีอยุธยา	</option>
      <option>	สตูล</option>
	    <option>ชัยนาท	</option>
      <option>	นครปฐม	</option>
	    <option>นครนายก	</option>
	    <option>ปัตตานี	</option>
	    <option>กรุงเทพมหานคร	</option>
      <option>	ปทุมธานี	</option>
	    <option>สมุทรปราการ	</option>
	    <option>อ่างทอง</option>
      <option>	สมุทรสาคร	</option>
	    <option>สิงห์บุรี	</option>
	    <option>นนทบุรี	</option>
      <option>	ภูเก็ต	</option>
	    <option>สมุทรสงคราม</option>
                </select>
            </div>
            </div>
            <div class="form-group text-center">
                        <div class="row">
                <label for="province" class="col-sm-3 control-label">อำเภอ</label>
                <div class="col-sm-9">
                <select class="form-select" name="txt_name11"  required onchange="updateDistricts()">
                <option selected disabled value="">เลือกอำเภอ</option>
                    <option>อำเภอเมืองราชบุรี</option>
                    <option> อำเภอจอมบึง</option>
                    <option> อำเภอสวนผึ้ง</option>
                    <option> อำเภอดำเนินสะดวก</option>
                    <option> อำเภอบ้านโป่ง</option>
                    <option> อำเภอบางแพ</option>
                    <option>อำเภอโพธาราม</option>
                    <option> อำเภอปากท่อ</option>
                    <option> อำเภอวัดเพลง</option>
                    <option> อำเภอบ้านคา</option>
                </select>
            </div>
            </div>
            <div class="form-group text-center">
                        <div class="row">
                <label for="province" class="col-sm-3 control-label">อำเภอ</label>
                <div class="col-sm-9">
                <select class="form-select" name="txt_name12"  required onchange="updateDistricts()">
                <option selected disabled value="">เลือกตำบล</option>
                <option>เเพงพวย</option>
                    <option>ดอนกรวย</option>
                    <option>ท่านัด</option>
                    <option>บัวงาม</option>
                    <option>ตาหลวง</option>
                    <option>ดำเนินสะดวก</option>
                    <option>บ้านไร่</option>
                    <option>ประสาทสิทธฺ์</option>
                    <option>ศรีสุราษฎร์</option>
                    <option>สี่หมื่น</option>
                    <option>ขุนพิทักษ์</option>
                    <option>ดอนคลัง</option>
                    <option>ดอนไผ่</option>
                </select>
            </div>
            </div>
                        <div class="form-group text-center">
                        <div class="row">
                            <label for="time" class="col-sm-3 control-label">บ้านเลขที่</label>
                            <div class="col-sm-9">
                                <input type="text" name="txt_name13" class="form-control" placeholder="กรอกเลขที่บ้านผู้รับ">
                            </div>
                        </div>
                        <div class="form-group text-center">
                        <div class="row">
                            <label for="time" class="col-sm-3 control-label">รหัสไปษณีย์</label>
                            <div class="col-sm-9">
                                <input type="text" name="txt_name14" class="form-control" placeholder="กรอกรหัสไปษณีย์">
                            </div>
                        </div>
                        <div class="form-group text-center">
                        <div class="row">
                            <label for="time" class="col-sm-3 control-label">รายละเอียดที่อยู่</label>
                            <div class="col-sm-9">
                                <input type="text" name="txt_name15" class="form-control" placeholder="กรอกรายละเอียดที่อยู่ของผู้รับ">
                            </div>
                        </div>
                        <div class="form-group text-center">
                        <div class="row">
                            <label for="time" class="col-sm-3 control-label">วันที่รับ</label>
                            <div class="col-sm-9">
                                <input type="date" name="txt_name16" class="form-control" placeholder="กรอกวันที่ผู้รับที่จะได้ข้อความที่ส่งไป">
                            </div>
                        </div>

                    <div class="form-group text-center">
                        <div class="col-md-12 mt-3">
                            <input type="submit" name="btn_insert" class="btn btn-success" value="กดตกลง">
                            <a href="index2.php" class="btn btn-danger">ยกเลิก</a>
                        </div>
                    </div>


        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>