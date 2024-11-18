<?php
require_once('config.php');

if (isset($_REQUEST['delete_id'])) {
    $id = $_REQUEST['delete_id'];

    $select_stmt = $db->prepare("SELECT * FROM aviation WHERE id = :id");
    $select_stmt->bindParam(':id', $id);
    $select_stmt->execute();
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

    // Delete an original record from db
    $delete_stmt = $db->prepare('DELETE FROM aviation WHERE id = :id');
    $delete_stmt->bindParam(':id', $id);
    $delete_stmt->execute();

    header('Location:index2.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เเสดงข้อมูล</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="display-3 text-center">ตารางเเสดงข้อมูลทางไปษณีย์
        </div>
        <a href="add.php" class="btn btn-success mb-3">เพิ่มข้อมูล</a>
        <table class="table table-striped table-bordered table-hover">
            <thead>

                <tr>
                    <th>
                        <center>id
                    </th>
                    <th>
                        <center>ชื่อผู้ส่ง
                    </th>
                    <th>
                        <center>นามสกุลผู้ส่ง
                    </th>
                    <th>
                        <center>เบอร์โทรผู้ส่ง
                    </th>
                    <th>
                        <center>ข้อความ
                    </th>
                    <th>
                        <center>วันที่ส่ง
                    </th>
                    <th>
                        <center>ชื่อผู้รับ
                    </th>
                    <th>
                        <center>นามสกุลผู้รับ
                    </th>
                    <th>
                        <center>เบอร์โทรผู้รับ
                    </th>
                    <th>
                        <center>จังหวัด
                    </th>
                    <th>
                        <center>อำเภอ
                    </th>
                    <th>
                        <center>ตำบล
                    </th>
                    <th>
                        <center>บ้านเลขที่
                    </th>
                    <th>
                        <center>รหัสไปษณีย์
                    </th>
                    <th>
                        <center>รายละเอียดที่อยู่
                    </th>
                    <th>
                        <center>วันที่รับ
                    </th>
                    <th>
                        <center>เเก้ไขข้อมูล
                    </th>
                    <th>
                        <center>ลบข้อมูล
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php
                $select_stmt = $db->prepare("SELECT * FROM aviation");
                $select_stmt->execute();

                while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>

                    <tr>
                    <td>
                            <center><?php echo $row["id"]; ?>
                        </td>
                        <td>
                            <center><?php echo $row["name"]; ?>
                        </td>
                        <td>
                            <center><?php echo $row["name_l"]; ?>
                        </td>
                        <td>
                            <center><?php echo $row["phone"]; ?>
                        </td>
                        <td>
                            <center><?php echo $row["message"]; ?>
                        </td>
                        <td>
                            <center><?php echo $row["date"]; ?>
                        </td>
                        <td>
                            <center><?php echo $row["name_2"]; ?>
                        </td>
                        <td>
                            <center><?php echo $row["name_l2"]; ?>
                        </td>
                        <td>
                            <center><?php echo $row["phone2"]; ?>
                        </td>
                        <td>
                            <center><?php echo $row["province"]; ?>
                        </td>
                        <td>
                            <center><?php echo $row["district"]; ?>
                        </td>
                        <td>
                            <center><?php echo $row["sub_district"]; ?>
                        </td>
                        <td>
                            <center><?php echo $row["house_number"]; ?>
                        </td>
                        <td>
                            <center><?php echo $row["zip_code"]; ?>
                        </td>
                        <td>
                            <center><?php echo $row["address_details"]; ?>
                        </td>
                        <td>
                            <center><?php echo $row["date2"]; ?>
                        </td>
                        <td>
                            <center><a href="edit.php?update_id=<?php echo $row["id"]; ?>" class="btn btn-warning">แก้ไขข้อมูล</a>
                        </td>
                        <td>
                            <center><a href="?delete_id=<?php echo $row["id"]; ?>" class="btn btn-danger">ลบข้อมูล</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
    <center> <img src="01.png" width="800" height="400">
             <img src="02.png" width="800" height="400">



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>