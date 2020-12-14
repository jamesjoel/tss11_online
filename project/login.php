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
            <!-- <form action="auth.php" method="post"> -->
            <div class="alert alert-danger" style="display: none;">
                <p>
                  <span id="msg"></span>
                <a data-dismiss="alert" href="#" class="close">x</a>
                </p>
            </div>
            <div class="card">
              <div class="card-header">
                <h5>Login</h5>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Username/Email</label>
                  <input type="text" name="email" class="form-control" placeholder="Username/Email">
                  <small id="email_msg" class="text-danger"></small>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="pass" class="form-control" placeholder="Password">
                  <small id="pass_msg" class="text-danger"></small>
                </div>
               
              </div>
              <div class="card-footer">
                <input type="button" value="Login" class="btn btn-primary">
              </div>
            </div>
          <!-- </form> -->
          </div>
        </div>
      </div>
    </div>

    

    <script type="text/javascript">
      $(document).ready(function(){
        $("[type='button']").click(function(){
            var u = $("[name='email']").val();
            var p = $("[name='pass']").val();
            if(u == "")
            {
              $("#email_msg").html("Enter Your Email/Username");
            }
            if(p=="")
            {

              $("#pass_msg").html("Enter Your Password");
            }

            if(u != "" && p != "")
            {
              $.ajax({
                url : "ajax_auth.php",
                type : "post",
                data : { email : u, pass : p},
                success : function(res){
                  // alert(res);
                  if(res=="0")
                  {
                    $(".alert").show();
                    $("#msg").html("Email/Username and Password is Icorrect");
                  }
                  if(res=="1")
                  {
                    $(".alert").show();
                    $("#msg").html("Password is Icorrect");
                  }
                  if(res=="2")
                  {
                    $(".alert").removeClass("alert-danger");
                    $(".alert").addClass("alert-success");
                    $("#msg").html("Sucessfull Login");
                    setTimeout("redirect()", 1500);
                  }
                }
              })
            }

        });

        $("[name='email']").keydown(function(){
          $("#email_msg").html("");
        })
        $("[name='pass']").keydown(function(){
          $("#pass_msg").html("");
        })

      });

      function redirect()
      {
        // header("location:");
        window.location.href="index.php";
      }

    </script>


   
    
    <?php
    include("footer.php");
    ?>