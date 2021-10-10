<?php

class VeMayBay
{
  public $tenchuyen;
  public $ngaybay;
  public $giave;

  public function nhap($tenchuyen, $ngaybay, $giave)
  {
    $this->tenchuyen = $tenchuyen;
    $this->ngaybay = $ngaybay;
    $this->giave = $giave;
  }

  public function xuat()
  {
    return <<<info
      Tên chuyến: $this->tenchuyen <br>
      Ngày bay: $this->ngaybay <br>
      Giá vé: $this->giave
    info;
  }

  public function getGiaVe()
  {
    return $this->giave;
  }
}

class Nguoi
{
  public $hoten;
  public $gioitinh;
  public $tuoi;

  public function nhap($hoten, $gioitinh, $tuoi)
  {
    $this->hoten = $hoten;
    $this->gioitinh = $gioitinh;
    $this->tuoi = $tuoi;
  }

  public function xuat()
  {
    return <<<info
      Họ tên: $this->hoten <br>
      Giới tính: $this->gioitinh <br>
      Tuổi $this->tuoi
    info;
  }
}

class HanhKhach extends Nguoi
{
  private $danhsachve;

  public function nhapVe($dsve)
  {
    $this->danhsachve = $dsve;
  }

  public function xuatVe()
  {
    return $this->danhsachve;
  }

  public function tongTien()
  {
    $tong = 0;
    foreach ($this->danhsachve as $item) {
      $tong += ($item[0]->giave * $item[1]);
    }

    return $tong;
  }
}

function cmp($a, $b)
{
  if ($a->tongTien() > $b->tongTien()) {
    return false;
  } else {
    return true;
  }
}

$ve = new VeMayBay();
$ve1 = new VeMayBay();
$ve2 = new VeMayBay();

$ve->nhap("VNAirline", "01/01/2020", 100000);
$ve1->nhap("VJet", "02/03/2020", 250000);
$ve2->nhap("Bboo", "05/04/2020", 190000);

$passenger = new HanhKhach();
$passenger1 = new HanhKhach();
$passenger2 = new HanhKhach();

$passenger->nhap("A", "Nam", 20);
$passenger1->nhap("B", "Nam", 20);
$passenger2->nhap("C", "Nam", 20);

$passenger->nhapVe([[$ve, 1], [$ve2, 2]]);
$passenger1->nhapVe([[$ve1, 1], [$ve2, 1]]);
$passenger2->nhapVe([[$ve, 3]]);

$passenger->tongTien();
$passenger1->tongTien();
$passenger2->tongTien();

$arr = array($passenger, $passenger1, $passenger2);

usort($arr, "cmp");

echo "Danh sách hành khách: " . "<br>";

foreach ($arr as $passenger) {
  $xuatInfo = $passenger->xuat();
  $total = $passenger->tongTien();
  echo <<<info
    $xuatInfo <br>
    Tổng tiền: 
    $total <br>
    <br>
  info;
}
