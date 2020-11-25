<?php
include("db.php");
include("header.php");
$id = $_SESSION['id'];
$query = "SELECT * FROM user_tbl WHERE id = $id";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
// print_r($data);


?>
  <div class="latest-products">
      <div class="container" style="min-height: 400px">
        
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <form action="update.php" method="post">
            <div class="card">
              <div class="card-header">
                <h5>Update Profile</h5>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Full Name</label>
                  <input name="full_name" type="text" class="form-control" placeholder="Full Name" value="<?= $data['fullname'] ?>">
                </div>
                <div class="form-group">
                  <label>Username/Email</label>
                  <input disabled="disabled" name="email" type="text" class="form-control" placeholder="Username/Email" value="<?= $data['email'] ?>">
                </div>
                
                <div class="form-group">
                  <label>Address</label>
                  <textarea name="address" class="form-control" placeholder="Address"><?= $data['address'] ?></textarea>
                </div>
                <div class="form-group">
                  <label>City</label>
                  <select name="city" class="form-control">
                    <option>Select</option>
                    <option <?php if($data['city']=="Indore") echo "selected='selected'"; ?>>Indore</option>
                    <option <?php if($data['city']=="Ujjain") echo "selected='selected'"; ?>>Ujjain</option>
                    <option <?php if($data['city']=="Bhopal") echo "selected='selected'"; ?>>Bhopal</option>
                    <option <?php if($data['city']=="Mumbai") echo "selected='selected'"; ?>>Mumbai</option>
                    <option <?php if($data['city']=="Pune") echo "selected='selected'"; ?>>Pune</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <br />
                  Male : <input type="radio" <?php if($data['gender']=='male') echo "checked='checked'"; ?> value="male" name="gender" />
                  Female : <input type="radio" <?php if($data['gender']=='female') echo "checked='checked'"; ?> value="female" name="gender" />
                </div>
                <div class="form-group">
                  <label>Contact</label>
                  <input type="text" value="<?= $data['contact'] ?>" name="contact" class="form-control" placeholder="Contact">
                </div>
              </div>
              <div class="card-footer">
                <input type="submit" value="Update" class="btn btn-primary">
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