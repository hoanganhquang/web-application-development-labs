<?php require('../../layout/header.php') ?>

<div class="container">
  <h1 class="text-center my-5">Practical 2</h1>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">Detail</div>

        <div class="card-body">
          <ul class="list-group">
            <li class="list-group-item">
              All Students
              <a class="btn btn-primary btn-sm float-end" href="./exer4.php">View</a>
            </li>
            <li class="list-group-item">
              Add new student
              <a class="btn btn-primary btn-sm float-end" href="./addstudent.php">View</a>
            </li>
            <li class="list-group-item">
              Delete student
              <a class="btn btn-primary btn-sm float-end" href="./delstudent.php">View</a>
            </li>
            <li class="list-group-item">
              Update student
              <a class="btn btn-primary btn-sm float-end" href="./editstudent.php?mssv=001">View</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<?php require('../../layout/footer.php') ?>