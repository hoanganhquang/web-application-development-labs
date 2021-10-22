<?php
require_once 'entity.php';
class Lop extends Entity
{
    public function GetAll()
    {
        return $this->mysql->GetAll("lop");
    }
    public function GetByID($malop)
    {
        $query = "select * from lop where malop=$malop";
        return $this->mysql->MyQuery($query);
    }

    public function Insert($malop, $tenlop)
    {
        $query = "insert into lop values ('" . $malop . "','" . $tenlop . "')";
        return $this->mysql->MyQuery($query);
    }
    public function Delete($malop)
    {
        $query = "delete from lop where malop = '" . $malop . "'";
        return $this->mysql->MyQuery($query);
    }
    public function Update($malop, $tenlop)
    {
        $query = "update lop set malop = '" . $malop
            . "', tenlop = '" . $tenlop
            . "' where malop= '" . $malop . "'";
        echo $query;
        return $this->mysql->MyQuery($query);
    }
}
