<?php require('../../../layout/header.php') ?>

<?php 
    $s = 0;

    if(isset($_POST['submit'])){
        $d = floatval($_POST['d']);
        $r = floatval($_POST['r']);

        $s = $d * $r;
    }

?>

<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card card-default">
      <div class="card-header">DIỆN TÍCH HÌNH CHỮ NHẬT</div>

      <div class="card-body">
        <form action="" method="POST"> 
          <div class="mb-1">
            <label class="form-label">Chiều dài: </label>
            <input type="text" class="form-control" name="d" />
          </div>

          <div class="mb-1">
            <label class="form-label">Chiều rộng: </label>
            <input type="text" class="form-control" name="r" />
          </div>

          <div class="mb-3">
            <label class="form-label">Diện tích: </label>
            <?php echo "<input type='text' class='form-control' name='c' value='$s'/>" ?>
          </div>

          <button type="submit" class="btn btn-primary" name="submit">Tính tiền</button>
        </form>
      </div>
    </div>
  </div>

</div>

<?php require('../../../layout/footer.php') ?>