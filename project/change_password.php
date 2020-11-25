<?php
include("db.php");
include("header.php");

// print_r($data);


?>
  <div class="latest-products">
      <div class="container" style="min-height: 400px">
        
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <form action="update_password.php" method="post">
            <div class="card">
              <div class="card-header">
                <h5>Update/Change Your Password</h5>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Current Password</label>
                  <input name="current_password" type="password" class="form-control">
                </div>
                <div class="form-group">
                  <label>New Password</label>
                  <input name="new_password" type="password" class="form-control">
                </div>
                <div class="form-group">
                  <label>Confirm New Password</label>
                  <input name="confirm_new_password" type="password" class="form-control">
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
                <input type="submit" value="Change" class="btn btn-primary">
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    

   
    
    <?php
    include("footer.php");
    ?>