<?php require('../../../layout/header.php') ?>

<?php
  
  $total = 0;
  $result = "";

  if(isset($_POST['submit'])){

    $total = $_POST['math'] + $_POST['physics'] + $_POST['chemistry'];

    if ($total >= $_POST['point']){
      $result = "Đậu";
    } else {
      $result = "Rớt";      
    }
  }

?>

<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card card-default">
      <div class="card-header">KẾT QUẢ THI ĐẠI HỌC</div>

      <div class="card-body">
        <form action="./index.php" method="POST"> 
          <div class="mb-1">
            <label class="form-label">Toán</label>
            <input type="text" class="form-control" name="math" />
          </div>
          
          <div class="mb-1">
            <label class="form-label">Lý</label>
            <input type="text" class="form-control" name="physics" />
          </div>

          <div class="mb-1">
            <label class="form-label">Hóa</label>
            <input type="text" class="form-control" name="chemistry" />
          </div>

          <div class="mb-1">
            <label class="form-label">Điểm chuẩn</label>
            <input type="text" class="form-control" name="point" value="20"/>
          </div>

          <div class="mb-1">
            <label class="form-label">Tổng điểm</label>
            <?php echo "<input type='text' class='form-control' name='total' value='$total' />";?>
          </div>

          <div class="mb-3">
            <label class="form-label">Kết quả thi</label>
            <?php echo "<input type='text' class='form-control' name='result' value='$result'/>";?>
          </div>

          <button type="submit" class="btn btn-primary" name="submit">Xem kết quả</button>
        </form>
      </div>
    </div>
  </div>

</div>

<?php require('../../../layout/footer.php') ?>