<?php
include("header.php");
?>
  <div class="latest-products">
      <div class="container" style="min-height: 400px">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>New User Registration</h2>
              
            </div>
          </div>
         
        </div>
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <form action="save.php" method="post">
            <div class="card">
              <div class="card-header">
                <h5>Signup</h5>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Full Name</label>
                  <input name="full_name" type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="form-group">
                  <label>Username/Email</label>
                  <input name="email" type="text" class="form-control" placeholder="Username/Email">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <label>Re-Password</label>
                  <input name="re_pass" type="password" class="form-control" placeholder="Re-Password">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <textarea name="address" class="form-control" placeholder="Address"></textarea>
                </div>
                <div class="form-group">
                  <label>City</label>
                  <select name="city" class="form-control">
                    <option>Select</option>
                    <option>Indore</option>
                    <option>Ujjain</option>
                    <option>Bhopal</option>
                    <option>Mumbai</option>
                    <option>Pune</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <br />
                  Male : <input type="radio" value="male" name="gender" />
                  Female : <input type="radio" value="female" name="gender" />
                </div>
                <div class="form-group">
                  <label>Contact</label>
                  <input type="text" name="contact" class="form-control" placeholder="Contact">
                </div>
              </div>
              <div class="card-footer">
                <input type="submit" value="Signup" class="btn btn-primary">
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