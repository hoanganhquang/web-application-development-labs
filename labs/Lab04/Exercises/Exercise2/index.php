<?php
class VanDongVien
{
    public $hoten;
    public $tuoi;
    public $monthidau;
    public $cannang;
    public $chieucao;

    public function nhap($hoten, $tuoi, $monthidau, $cannang, $chieucao)
    {
        $this->hoten = $hoten;
        $this->tuoi = $tuoi;
        $this->monthidau = $monthidau;
        $this->cannang = $cannang;
        $this->chieucao = $chieucao;
    }

    public function xuat()
    {
        echo <<<info
            Họ tên: $this->hoten <br>
            Tuổi: $this->tuoi <br>
            Môn thi đấu: $this->monthidau <br>
            Cân nặng: $this->cannang kg<br>
            Chiều cao: $this->chieucao cm<br>
        info;
    }
}

function cmp($a, $b)
{
    if ($a->chieucao > $b->chieucao) {
        return true;
    } elseif ($a->chieucao < $b->chieucao) {
        return false;
    } elseif ($a->cannang > $b->cannang) {
        return true;
    } else {
        return false;
    }
}


$p = new VanDongVien();
$p1 = new VanDongVien();
$p2 = new VanDongVien();
$p3 = new VanDongVien();
$p4 = new VanDongVien();
$p5 = new VanDongVien();

$p->nhap("Nguyễn Văn A", 20, "Bơi lội", 61, 170);
$p1->nhap("Nguyễn Văn B", 20, "Bơi lội", 80, 173);
$p2->nhap("Nguyễn Văn C", 20, "Bơi lội", 64, 173);
$p3->nhap("Nguyễn Văn D", 20, "Bơi lội", 66, 168);
$p4->nhap("Nguyễn Văn E", 20, "Bơi lội", 69, 182);
$p5->nhap("Nguyễn Văn F", 20, "Bơi lội", 72, 181);

$arr = array($p1, $p2, $p3, $p4, $p5);

usort($arr, "cmp");

echo "Vận động viên p: " . "<br>";
$p->xuat();
echo "<br>";

echo "Danh sách sinh viên: ";
echo "<br>";
echo "<br>";
foreach ($arr as $value) {
    echo $value->xuat();
    echo "<br>";
}
