<?php 

  // include
  include "_header.php"; // only warning
  include "_sidebar.php";

  include "../controllers/productController.php";

  $data = getAllProducts();

  // print_r($data);die;
// echo "<pre>";
//   while ($product = $data->fetch_assoc()) {
//     print_r($product);
//     echo "<br>";
//   }
//   die;

  // require
  // require "_header.php"; // fatal error if not found

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Products</h3>
                <a href="product_add.php" class="btn btn-primary">Add Product</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#ID</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Description</th>
                      <th>Qunatity</th>
                      <th>Created On</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    while($product = $data->fetch_assoc()) {
                  ?>
                  <tr>
                      <td><?php echo $product['id'] ?></td>
                      <td><?php echo $product['name'] ?></td>
                      <td><?php echo $product['price'] ?></td>
                      <td><?php echo $product['description'] ?></td>
                      <td><?php echo $product['quantity'] ?></td>
                      <td><?php echo $product['created_on'] ?></td>
                      <td><button class="btn btn-success">Edit</button></td>
                      <td><button class="btn btn-danger">Delete</button></td>
                  </tr>
                  <?php
                    }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  
  include "_footer.php";
?>
