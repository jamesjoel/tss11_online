<?php
include("db.php");

// print_r($_SESSION);
include("header.php");
if(! isset($_COOKIE['cart']))
{
  header("location:index.php");
}
$a = $_COOKIE['cart']; // 18#3#7
$arr = explode("#", $a); // (18, 3, 7)
?>

    <div class="latest-products" style="min-height: 700px !important;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>My Cart(<?= $total; ?>)</h2>
              
            </div>
          </div>
          
        </div>

        <div class="row">
          <div class="col-md-8">
            <?php
            $total_price = 0;
            $total_dis = 0;
            $total_final_price = 0;
            foreach($arr as $id)
            {
              $query = "SELECT * FROM product_tbl WHERE id = $id";
              $result = mysqli_query($con, $query);
              $data = mysqli_fetch_assoc($result);
              // print_r($data);


              $d = $data['discount'];
              $p = $data['product_price'];

              $discount = $p*$d/100;

              $new_price = $p - $discount;

              $total_price += $p;
              $total_dis += $discount;
              $total_final_price += $new_price;
            ?>

            <div class="row mb-3">
              <div class="col-md-11 py-4 border">
                <div class="row">
                  <div class="col-md-4">
                    <img src="admin/product_images/<?= $data['product_img'] ?>" height="120"  />
                  </div>
                  <div class="col-md-8">
                    <h5><?= $data['product_name']; ?></h5>
                    <b>&#8377; <?php echo $new_price; ?>.00</b>
                    <br />
                    <small><del>&#8377; <?= $data['product_price'] ?></del></small>
                    <p><?= substr($data['detail'], 0, 100); ?>...</p>
                  </div>
                </div>
              </div>
            </div>

            <?php
            }
            ?>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h5>Price Details</h5>
              </div>
              <div class="card-body">
                <p class="mb-4">Price (<?= $total ?> items) <span class="float-right">&#8377; <?= $total_price; ?>.00</span></p>
                <p class="mb-4">Discount <span class="float-right">&#8377; <?= $total_dis ?>.00</span></p>
                <p class="mb-4">Delivery Free <span class="float-right text-success font-weight-bold">Free</span></p>
                <hr />
                <h5>Total Amount <span class="float-right">&#8377; <?= $total_final_price; ?>.00</span></h5>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary btn-block">Place Order</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Sixteen Clothing</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <?php
    include("footer.php");
    ?>