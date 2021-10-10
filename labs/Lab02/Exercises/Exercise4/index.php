<?php require('../../../layout/header.php') ?>

<?php 
    $total = 0;
    $err = "";

    if(isset($_POST['submit'])){
        $startTime = $_POST['startTime'];
        $endTime = $_POST['endTime'];

        if($startTime < 10) {
            $err = "Thời gian đóng cửa";
        } else {
            if($endTime <= 17) {
                $total = ($endTime - $startTime) * 20000;  
            } else {
                if($startTime >= 17) {
                    $total = ($endTime - $startTime) * 45000;
                } else {
                    $total = ((17 - $startTime) * 20000) + (($endTime - 17) * 45000);
                }
            }
        }
    }

?>

<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card card-default">
      <div class="card-header">TÍNH TIỀN KARAOKE</div>

      <div class="card-body">
        <form action="./index.php" method="POST"> 
          <div class="mb-1">
            <label class="form-label">Giờ bắt đầu (h)</label>
            <input type="text" class="form-control" name="startTime" />
          </div>
          <?php
            if($err != ""){
                echo <<<CONTENT
                <div class="alert alert-danger" role="alert">
                    Giờ đóng cửa!
                </div> 
                CONTENT;
            }          
          ?>
          <div class="mb-1">
            <label class="form-label">Giờ kết thúc (h)</label>
            <input type="text" class="form-control" name="endTime" />
          </div>

          <div class="mb-3">
            <label class="form-label">Tiền thanh toán (VNĐ)</label>
            <?php echo "<input type='text' class='form-control' name='total' value='$total'/>" ?>
          </div>

          <button type="submit" class="btn btn-primary" name="submit">Tính tiền</button>
        </form>
      </div>
    </div>
  </div>

</div>

<?php require('../../../layout/footer.php') ?>