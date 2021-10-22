<?php
require('../../db/db.php');
require('../../Models/milkbranch.php');

$milkBranch = new MilkBranch();

if (isset($_GET["code"])) {
    $code = $_GET["code"];

    $result = $conn->query($milkBranch->delete($code));

    if (!$result) {
        die($conn->error);
    }

    header("location: milkbranch.php");
}
