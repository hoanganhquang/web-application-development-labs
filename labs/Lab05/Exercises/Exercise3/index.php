<?php require('../../../layout/header.php') ?>

<div class="container">
    <h1 class="text-center my-5">Exercise 3 - Milk Shop</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Detail</div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Thông tin hãng sữa
                            <a class="btn btn-primary btn-sm float-end" href="./views/milkbranch/milkbranch.php">View</a>
                        </li>
                        <li class="list-group-item">
                            Thông tin khách hàng
                            <a class="btn btn-primary btn-sm float-end" href="./views/customers/customers.php">View</a>
                        </li>
                        <li class="list-group-item">
                            Thông tin sữa
                            <a class="btn btn-primary btn-sm float-end" href="./views/milk/milk.php">View</a>
                        </li>
                        <li class="list-group-item">
                            Thông tin các loại sản phẩm
                            <a class="btn btn-primary btn-sm float-end" href="./views/milk/listprod.php?page=1">View</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require('../../../layout/footer.php') ?>