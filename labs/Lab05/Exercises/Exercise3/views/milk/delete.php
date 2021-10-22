<?php
require('../../db/db.php');
require('../../Models/milk.php');

$milk = new Milk();

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $result = $conn->query($milk->delete($id));

    if (!$result) {
        die($conn->error);
    }

    header("location: milk.php");
}
