<?php
include("db.php");
include("header.php");
?>

    <div class="latest-products">
      <div class="container" style="min-height: 400px">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>User Login</h2>
              
            </div>
          </div>
         
        </div>
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <form action="auth.php" method="post">
            <div class="card">
              <div class="card-header">
                <h5>Login</h5>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Username/Email</label>
                  <input type="text" name="email" class="form-control" placeholder="Username/Email">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="pass" class="form-control" placeholder="Password">
                </div>
                <p class="text-danger">
                  <?php
                  if(isset($_SESSION['msg']))
                  {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);

                  }
                  ?>
                </p>
              </div>
              <div class="card-footer">
                <input type="submit" value="Login" class="btn btn-primary">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    

   
    
    <?php
    include("footer.php");
    ?>