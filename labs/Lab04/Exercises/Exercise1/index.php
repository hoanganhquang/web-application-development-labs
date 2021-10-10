<?php

class PhanSo
{
    private $tuso;
    private $mauso;

    public function __construct()
    {
    }

    public function nhap($tuso, $mauso)
    {
        $this->tuso = $tuso;
        $this->mauso = $mauso;
    }

    public function xuat()
    {
        echo $this->tuso . "/" . $this->mauso;;
    }

    public function cong($obj)
    {
        $tuso = ($this->tuso * $obj->mauso) + ($this->mauso * $obj->tuso);
        $mauso =  $this->mauso * $obj->mauso;
        echo $tuso . "/" . $mauso;
    }

    public function tru($obj)
    {
        $tuso = ($this->tuso * $obj->mauso) - ($this->mauso * $obj->tuso);
        $mauso =  $this->mauso * $obj->mauso;
        echo $tuso . "/" . $mauso;
    }

    public function nhan($obj)
    {
        $tuso = $this->tuso * $obj->tuso;
        $mauso =  $this->mauso * $obj->mauso;
        echo $tuso . "/" . $mauso;
    }

    public function chia($obj)
    {
        $tuso = $this->tuso * $obj->mauso;
        $mauso =  $this->mauso * $obj->tuso;
        echo $tuso . "/" . $mauso;
    }
}

$obj1 = new PhanSo();
$obj2 = new PhanSo();

$obj1->nhap(1, 3);
$obj2->nhap(3, 5);

echo "Phân số 1: ";
$obj1->xuat();
echo "<br>";
echo "Phân số 2: ";
$obj2->xuat();
echo "<br>";

echo "Cộng: ";
$obj1->cong($obj2);
echo "<br>";

echo "Trừ: ";
$obj1->tru($obj2);
echo "<br>";

echo "Nhân: ";
$obj1->nhan($obj2);
echo "<br>";

echo "Chia: ";
$obj1->chia($obj2);
