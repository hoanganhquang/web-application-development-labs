<?php

class Milk
{
    public function getAll()
    {
        return "select * from milks";
    }

    public function count()
    {
        return "select count(*) as total from milks";
    }

    public function add($id, $name, $nameBranch, $type, $weight, $price, $nutrition, $benefit, $image)
    {
        return "insert into milks values ('$id', '$name', '$nameBranch', '$type', '$weight', '$price', '$nutrition', '$benefit', '$image')";
    }

    public function delete($id)
    {
        return "delete from milks where id='$id'";
    }

    public function edit($old_id, $new_id, $name, $nameBranch, $type, $weight, $price, $nutrition, $benefit, $image)
    {
        return "update milks set id='$new_id', name='$name', nameBranch='$nameBranch', type='$type', 
        weight='$weight', price='$price', nutrition='$nutrition', benefit='$benefit', image='$image' where id='$old_id'";
    }

    public function paginator($page)
    {
        $start = ($page - 1) * 6;
        return "select * from milks limit $start, 6";
    }
}
