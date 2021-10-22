<?php

class Customers
{
    public function getAll()
    {
        return "select * from customers";
    }

    public function add($code, $name, $gender, $address, $phone)
    {
        return "insert into customers values ('$code', '$name', '$gender', '$address', '$phone')";
    }

    public function delete($code)
    {
        return "delete from customers where code='$code'";
    }

    public function edit($old_code, $new_code, $name, $gender, $address, $phone)
    {
        return "update customers set code='$new_code', name='$name', gender='$gender', address='$address', 
        phone='$phone' where code='$old_code'";
    }
}
