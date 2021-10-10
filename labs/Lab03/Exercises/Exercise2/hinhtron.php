<?php require('../../../layout/header.php') ?>

<?php 
    $s = 0;
    $c = 0;

    if(isset($_POST['submit'])){
        $r = floatval($_POST['r']);

        $s = pow($r, 2) * 3.14;
        $c = $r * 2 * 3.14;
    }

?>

<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card card-default">
      <div class="card-header">DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</div>

      <div class="card-body">
        <form action="" method="POST"> 
          <div class="mb-1">
            <label class="form-label">Bán kính: </label>
            <input type="text" class="form-control" name="r" />
          </div>

          <div class="mb-1">
            <label class="form-label">Diện tích: </label>
            <?php echo "<input type='text' class='form-control' name='s' value='$s'/>" ?>
          </div>

          <div class="mb-3">
            <label class="form-label">Chu vi: </label>
            <?php echo "<input type='text' class='form-control' name='c' value='$c'/>" ?>
          </div>

          <button type="submit" class="btn btn-primary" name="submit">Tính tiền</button>
        </form>
      </div>
    </div>
  </div>

</div>

<?php require('../../../layout/footer.php') ?>