<?php
require 'student.php';

if (isset($_POST["submit"])) {
    $mssv = $_POST['mssv'];
    $sinhvien = new SinhVien('qlsinhvien');
    $sinhvien->Delete($mssv);
    header('location:index.php');
}

echo <<<form
<form action="" method="POST">
    <input type="text" name='mssv' placeholder="mssv">
    <input type="submit" name="submit" id="" value="Delete">
</form>
form;
