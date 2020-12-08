<?php
include("db.php");
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
                  <input name="full_name" id="full_name" type="text" class="form-control" placeholder="Full Name">
                  <small id="full_name_msg" class="text-danger"></small>
                </div>
                <div class="form-group">
                  <label>Username/Email</label>
                  <input name="email" type="text" id="email" class="form-control" placeholder="Username/Email">
                  <small id="email_msg" class="text-danger"></small>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input name="password" type="password" id="pass" class="form-control" placeholder="Password">
                  <small id="pass_msg" class="text-danger"></small>
                </div>
                <div class="form-group">
                  <label>Re-Password</label>
                  <input name="re_pass" type="password" id="re_pass" class="form-control" placeholder="Re-Password">
                  <small id="re_pass_msg" class="text-danger"></small>
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <textarea name="address" id="address" class="form-control" placeholder="Address"></textarea>
                  <small id="address_msg" class="text-danger"></small>
                </div>
                <div class="form-group">
                  <label>City</label>
                  <select name="city" id="city" class="form-control">
                    <option>Select</option>
                    <option>Indore</option>
                    <option>Ujjain</option>
                    <option>Bhopal</option>
                    <option>Mumbai</option>
                    <option>Pune</option>
                  </select>
                  <small id="city_msg" class="text-danger"></small>
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <br />
                  Male : <input type="radio" id="male" value="male" name="gender" />
                  Female : <input type="radio" id="female" value="female" name="gender" />
                  <br />
                  <small id="gender_msg" class="text-danger"></small>
                </div>
                <div class="form-group">
                  <label>Contact</label>
                  <input type="text" name="contact" id="contact" class="form-control" placeholder="Contact">
                  <small id="contact_msg" class="text-danger"></small>
                </div>
              </div>
              <div class="card-footer">
                <input type="submit" id="signup" value="Signup" class="btn btn-primary">
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    
<script type="text/javascript" src="assets/js/val.js"></script>
   
    
    <?php
    include("footer.php");
    ?>