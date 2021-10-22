<?php
include 'database.php';
if (count($_POST) > 0) {
    if ($_POST['type'] == 1) {
        $name = $_POST['HoTen'];
        $mssv = $_POST['MSSV'];
        $malop = $_POST['MaLop'];
        $tuoi = $_POST['Tuoi'];
        $sql = "INSERT INTO sinhvien
		VALUES ('$mssv', '$name', '$malop', '$tuoi')";
        if ($conn->query($sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        $conn->close();
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 2) {
        $name = $_POST['HoTen'];
        $mssv = $_POST['MSSV'];
        $malop = $_POST['MaLop'];
        $tuoi = $_POST['Tuoi'];
        $sql = "UPDATE sinhvien SET hoten='$name', malop='$malop', tuoi='$tuoi' WHERE mssv='$mssv'";
        if ($conn->query($sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        $conn->close();
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 3) {
        $id = $_POST['id'];
        $sql = "DELETE FROM `sinhvien` WHERE mssv='$id' ";
        if ($conn->query($sql)) {
            echo $id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        $conn->close();
    }
}
if (count($_POST) > 0) {
    if ($_POST['type'] == 4) {
        $id = $_POST['id'];
        $sql = "DELETE FROM sinhvien WHERE mssv in ($id)";
        if ($conn->query($sql)) {
            echo $id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        $conn->close();
    }
}
