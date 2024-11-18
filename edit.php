<?php
require_once('config.php');

if (isset($_REQUEST['update_id'])) {
    try {
        $id = $_REQUEST['update_id'];
        $select_stmt = $db->prepare("SELECT * FROM aviation WHERE id = :id");
        $select_stmt->bindParam(':id', $id);
        $select_stmt->execute();
        $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } catch (PDOException $e) {
        $e->getMessage();
    }
}

if (isset($_REQUEST['btn_update'])) {
    $up_1 = $_REQUEST['txt_1'];
    $up_2 = $_REQUEST['txt_2'];
    $up_3 = $_REQUEST['txt_3'];
    $up_4 = $_REQUEST['txt_4'];
    $up_5 = $_REQUEST['txt_5'];
    $up_6 = $_REQUEST['txt_6'];
    $up_7 = $_REQUEST['txt_7'];
    $up_8 = $_REQUEST['txt_8'];
    $up_9 = $_REQUEST['txt_9'];
    $up_10 = $_REQUEST['txt_10'];
    $up_11 = $_REQUEST['txt_11'];
    $up_12 = $_REQUEST['txt_12'];
    $up_13 = $_REQUEST['txt_13'];
    $up_14 = $_REQUEST['txt_14'];
    $up_15 = $_REQUEST['txt_15'];
    $up_16 = $_REQUEST['txt_16'];

    if (empty($up_1)) {
        $errorMsg = "Please Enter Fisrtname";
    } else if (empty($up_2)) {
        $errorMsg = "Please Enter Lastname";
    } else if (empty($up_3)) {
        $errorMsg = "Please Enter day";
    } else if (empty($up_4)) {
        $errorMsg = "Please Enter time";
    } else if (empty($up_5)) {
        $errorMsg = "Please Enter time";
    } else if (empty($up_6)) {
        $errorMsg = "Please Enter time";
    } else if (empty($up_7)) {
        $errorMsg = "Please Enter time";
    } else if (empty($up_8)) {
        $errorMsg = "Please Enter time";
    } else if (empty($up_9)) {
        $errorMsg = "Please Enter time";
    } else if (empty($up_10)) {
        $errorMsg = "Please Enter time";
    } else if (empty($up_11)) {
        $errorMsg = "Please Enter time";
    } else if (empty($up_12)) {
        $errorMsg = "Please Enter time";
    } else if (empty($up_13)) {
        $errorMsg = "Please Enter time";
    } else if (empty($up_14)) {
        $errorMsg = "Please Enter time";
    } else if (empty($up_15)) {
        $errorMsg = "Please Enter time";
    } else if (empty($up_16)) {
        $errorMsg = "Please Enter time";
    } else {
        try {
            if (!isset($errorMsg)) {
                $update_stmt = $db->prepare("UPDATE aviation SET id = :up_1, name = :up_2, name_l = :up_3, phone = :up_4, message = :up_5, date = :up_6, name_2 = :up_7, name_l2 = :up_8, phone2 = :up_9, province = :up_10, district = :up_11, sub_district = :up_12, house_number = :up_13, zip_code = :up_14, address_details = :up_15, date2 = :up_16  WHERE id = :id");
                $update_stmt->bindParam(':up_1', $up_1);
                $update_stmt->bindParam(':up_2', $up_2);
                $update_stmt->bindParam(':up_3', $up_3);
                $update_stmt->bindParam(':up_4', $up_4);
                $update_stmt->bindParam(':up_5', $up_5);
                $update_stmt->bindParam(':up_6', $up_6);
                $update_stmt->bindParam(':up_7', $up_7);
                $update_stmt->bindParam(':up_8', $up_8);
                $update_stmt->bindParam(':up_9', $up_9);
                $update_stmt->bindParam(':up_10', $up_10);
                $update_stmt->bindParam(':up_11', $up_11);
                $update_stmt->bindParam(':up_12', $up_12);
                $update_stmt->bindParam(':up_13', $up_13);
                $update_stmt->bindParam(':up_14', $up_14);
                $update_stmt->bindParam(':up_15', $up_15);
                $update_stmt->bindParam(':up_16', $up_16);
                $update_stmt->bindParam(':id', $id);

                if ($update_stmt->execute()) {
                    $updateMsg = "Record update successfully...";
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
    <title>เเก้ไขข้อมูล</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="display-3 text-center">แก้ไขข้อมูล
        </div>

        <?php
        if (isset($errorMsg)) {
        ?>
            <div class="alert alert-danger">
                <strong>Wrong! <?php echo $errorMsg; ?></strong>
            </div>
        <?php } ?>


        <?php
        if (isset($updateMsg)) {
        ?>
            <div class="alert alert-success">
                <strong>Success! <?php echo $updateMsg; ?></strong>
            </div>
        <?php } ?>

        <form method="post" class="form-horizontal mt-5">

<div class="form-group text-center">
        <div class="row">
            <label for="firstname" class="col-sm-3 control-label">id</label>
            <div class="col-sm-9">
                <input type="text" name="txt_1" class="form-control" value="<?php echo $id; ?>">
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <div class="row">
            <label for="firstname" class="col-sm-3 control-label">ชื่อผู้ส่ง</label>
            <div class="col-sm-9">
                <input type="text" name="txt_2" class="form-control" value="<?php echo $name; ?>">
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <div class="row">
            <label for="lastname" class="col-sm-3 control-label">นามสกุลผู้ส่ง</label>
            <div class="col-sm-9">
                <input type="text" name="txt_3" class="form-control" value="<?php echo $name_l; ?>">
            </div>
        </div>
        <div class="form-group text-center">
            <div class="row">
                <label for="day" class="col-sm-3 control-label">เบอร์โทรผู้ส่ง</label>
                <div class="col-sm-9">
                    <input type="text" name="txt_4" class="form-control" value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="form-group text-center">
                <div class="row">
                    <label for="time" class="col-sm-3 control-label">ข้อความ</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_5" class="form-control" value="<?php echo $message; ?>">
                    </div>
                </div>
                <div class="form-group text-center">
                <div class="row">
                    <label for="time" class="col-sm-3 control-label">วันที่ส่ง</label>
                    <div class="col-sm-9">
                        <input type="date" name="txt_6" class="form-control" value="<?php echo $date; ?>">
                    </div>
                </div>
                <div class="form-group text-center">
                <div class="row">
                    <label for="time" class="col-sm-3 control-label">ชื่อผู้รับ</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_7" class="form-control" value="<?php echo $name_2; ?>">
                    </div>
                </div>
                <div class="form-group text-center">
                <div class="row">
                    <label for="time" class="col-sm-3 control-label">นามสกุลผู้รับ</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_8" class="form-control" value="<?php echo $name_l2; ?>">
                    </div>
                </div>
                <div class="form-group text-center">
                <div class="row">
                    <label for="time" class="col-sm-3 control-label">เบอร์โทรผู้รับ</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_9" class="form-control" value="<?php echo $phone2; ?>">
                    </div>
                </div>
                <div class="form-group text-center">
                <div class="row">
        <label for="province" class="col-sm-3 control-label">จังหวัด</label>
        <div class="col-sm-9">
        <select class="form-select" name="txt_10"  required onchange="updateDistricts()" value="<?php echo $province; ?>">
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
        <select class="form-select" name="txt_11"  required onchange="updateDistricts()" value="<?php echo $district; ?>">
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
        <select class="form-select" name="txt_12"  required onchange="updateDistricts() "value="<?php echo $sub_district; ?>">
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
                        <input type="text" name="txt_13" class="form-control" value="<?php echo $house_number; ?>">
                    </div>
                </div>
                <div class="form-group text-center">
                <div class="row">
                    <label for="time" class="col-sm-3 control-label">รหัสไปษณีย์</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_14" class="form-control" value="<?php echo $zip_code; ?>">
                    </div>
                </div>
                <div class="form-group text-center">
                <div class="row">
                    <label for="time" class="col-sm-3 control-label">รายละเอียดที่อยู่</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_15" class="form-control" value="<?php echo $address_details; ?>">
                    </div>
                </div>
                <div class="form-group text-center">
                <div class="row">
                    <label for="time" class="col-sm-3 control-label">วันที่รับ</label>
                    <div class="col-sm-9">
                        <input type="date" name="txt_16" class="form-control" value="<?php echo $date2; ?>">
                    </div>
                </div>
            <div class="form-group text-center">
                <div class="col-md-12 mt-3">
                    <input type="submit" name="btn_update" class="btn btn-success" value="Update">
                    <a href="index2.php" class="btn btn-danger">ยกเลิก</a>
                </div>
            </div>


        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>