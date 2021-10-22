<?php
require('../../db/db.php');
require('../../Models/customers.php');

$Customers = new Customers();

if (isset($_GET["code"])) {
    $code = $_GET["code"];

    $result = $conn->query($Customers->delete($code));

    if (!$result) {
        die($conn->error);
    }

    header("location: customers.php");
}
