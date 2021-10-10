<?php

if(isset($_GET['input2'])){
    $arr2 = explode(",",$_GET['input2']);
    $arr3 = explode(",", $_GET['input3']);

    $newArr = array("Array1"=>$arr2, "Array2"=>$arr3);
    echo "<h4>Xuất mảng</h4>";
    var_dump($newArr); echo "<br>";

    echo "<h4>Xuất các phần tử trên đường chéo chính, chéo phụ</h4>";
    foreach($newArr['Array1'] as $value){
        echo $value . " ";
    } echo "<br>";

    foreach($newArr['Array2'] as $value){
        echo $value . " ";
    } echo "<br>";

    echo "<h4>Sắp xếp mảng giảm dần theo chiều kim đồng hồ</h4>";
}

if(isset($_GET['arr2'])){
    $arr2 = $_GET['arr2'];
    $num = $_GET['num'];
    $arr2 = explode(",", $arr2);

    echo "Mảng cũ: " . "<br>";
    var_dump($arr2); echo "<br>";

    unset($arr2[array_search($num, $arr2)]);

    echo "Mảng mới: " . "<br>";
    var_dump($arr2);
}

if(isset($_GET['arr1'])){
    $arr1 = $_GET['arr1'];
    $num = $_GET['num'];
    $value = $_GET['value'];
    $arr1 = explode(",", $arr1);

    echo "Mảng cũ: " . "<br>";
    var_dump($arr1); echo "<br>";

    $arr1[array_search($num, $arr1)] = $value;

    echo "Mảng mới: " . "<br>";
    var_dump($arr1);
}

if(isset($_GET['arr'])){
    $arr = explode(",", $_GET['arr']) ;
    $x = $_GET['x'];

    if(in_array($x, $arr)){
        $index = array_search($x, $arr) + 1;
        echo "<h3>$x nằm tại vị trí $index </h3>";
    } else {
        echo "<h3>Không tìm thấy giá trị</h3>";
    }

}


