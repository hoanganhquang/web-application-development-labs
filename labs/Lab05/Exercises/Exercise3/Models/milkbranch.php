<?php

class MilkBranch
{
    public function getAll()
    {
        return "select * from milkbranch";
    }

    public function add($code, $name, $address, $phone, $email)
    {
        return "insert into milkbranch values ('$code', '$name', '$address', '$phone', '$email')";
    }

    public function delete($code)
    {
        return "delete from milkbranch where code='$code'";
    }

    public function edit($old_code, $new_code, $name, $address, $phone, $email)
    {
        return "update milkbranch set code='$new_code', name='$name', address='$address', 
        phone='$phone', email='$email' where code='$old_code'";
    }
}
