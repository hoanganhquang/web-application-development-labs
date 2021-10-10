<?php require('../../../layout/header.php') ?>

<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card card-default">
      <div class="card-header">THUỘC TÍNH CỦA TẬP TIN</div>

      <div class="card-body">
        <form action="./result.php" method="POST" enctype="multipart/form-data">
          <div class="mb-1">
            <label class="form-label">Tập tin</label>
          </div>
         
          <input type="FILE" class="upload-box" name="file_upload" accept="image/*" style="margin-bottom: 20px;"><br>
         
          <button type="submit" name="submit" class="btnsub">Thuộc tính của tập tin</button>
        </form>
      </div>
    </div>
  </div>

</div>

<?php require('../../../layout/footer.php') ?>