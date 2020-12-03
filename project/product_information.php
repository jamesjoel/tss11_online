<?php
include("db.php");

// print_r($_SESSION);
include("header.php");

$id = $_GET['id'];
$query = "SELECT * FROM product_tbl WHERE id = $id";
$result = mysqli_query($con, $query);

$data = mysqli_fetch_assoc($result);
// print_r($data);
$p = $data['product_price'];
$d = $data['discount'];

$new_price = $p-($p*$d/100);



?>

<div class="best-features about-features">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Product Details</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="right-image">
          <img src="admin/product_images/<?= $data['product_img'] ?>" alt="" style="height: 450px !important;">
          <div class="mt-4 text-center">
          	<a href="add_to_cart.php?id=<?= $data['id'] ?>" class="btn btn-dark">Add To Cart</a>
          	<a href="#" class="btn btn-dark">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="left-content">
          <h4><?= $data['product_name'] ?></h4>
          <h3>&#8377; <?= $new_price ?>.00</h3>
          <p class="mt-4"><del><?= $data['product_price'] ?></del>&nbsp;&nbsp;&nbsp;<span class="badge badge-info" style="font-size: 16px;"><?= $data['discount'] ?>% off</span></p>
          <p><?= $data['detail'] ?></p>
          
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    include("footer.php");
?>