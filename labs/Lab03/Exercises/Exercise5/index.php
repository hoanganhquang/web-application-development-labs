<?php require('../../../layout/header.php') ?>

<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="card card-default">
      <div class="card-header">THUỘC TÍNH CỦA TẬP TIN</div>

      <div class="card-body">
        <form action="./result.php" method="POST" enctype="multipart/form-data">
          <div class="mb-1">
            <label class="form-label">Chọn thư mục hình</label>
            <select name="folder" id="">
            <?php
                $fileList = "./listFol/";
                $lst = scandir($fileList, 1);
        
                foreach($lst as $folder){
                    echo "<option value='$folder'>$folder</option>";
                }
            ?>
                
            </select>


          </div>

          <div class="mb-1">
            <label class="form-label">Kích cỡ hiển thị</label>
            <select name="size" id="">
                <option value="volvo">3x3</option>
            </select>
          </div>         
          <button type="submit" name="submit" class="btnsub">Xem hình ảnh</button>
        </form>
      </div>
    </div>
  </div>

</div>

<?php require('../../../layout/footer.php') ?>