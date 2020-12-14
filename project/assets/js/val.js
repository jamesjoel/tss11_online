$(document).ready(function(){

  $("#email").blur(function(){
    var a = $(this).val();
    var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(a != "" && reg.test(a)==true)
    {
      $.ajax({
        url : "check_username.php",
        type : "post",
        data : { username : a },
        success : function(res){
          // alert(res);
          $("#email_msg").html(res);
        }
      })
    }

  });



    $("#signup").click(function(){
      
      var a = $("#full_name").val();
      var b = $("#email").val();
      var c = $("#pass").val();
      var d = $("#re_pass").val();
      var e = $("#address").val();
      var f = $("#contact").val();
      var g = $("#city").val();

      // if male radio button is checked then h=true, otherwise h=false
      // h = false
      var h = $("#male").is(":checked");
      // if female radio button is checked then i=true, otherwise i=false
      var i = $("#female").is(":checked");
      // i = false

      var check = true;


      if(h==false && i==false) // male not checked AND female not checked
      {
        check = false;
        $("#gender_msg").html("Select Gender");
      }
      else
      {

        $("#gender_msg").html("");
      }

      if(a=="")
      {
        check = false;
        $("#full_name_msg").html("Insert Full Name");
      }
      else
      {

        $("#full_name_msg").html("");
      }
      if(b=="")
      {
        check = false;
        $("#email_msg").html("Insert Email Id");
      }
      else
      {
        var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if(reg.test(b)==false)
        {
          check = false;
          $("#email_msg").html("Insert Correct Email Id");
        }
        else{
          $("#email_msg").html("");
        }
      }
      if(c=="")
      {
        check = false;
        $("#pass_msg").html("Insert Password");
      }
      else
      {
        $("#pass_msg").html("");
      }
      if(d=="")
      {
        check = false;
        $("#re_pass_msg").html("Insert Re-Password");
      }
      else
      {
        if(c != d)
        {
          check = false;
          $("#re_pass_msg").html("Password and Re-Password not matced");
        }
        else
        {
          $("#re_pass_msg").html("");

        }
        

      }
      if(e=="")
      {
        check = false;
        $("#address_msg").html("Insert Address");
      }
      else
      {

        $("#address_msg").html("");
      }
      if(g=="Select")
      {
        check = false;
        $("#city_msg").html("Select City");
      }
      else
      {

        $("#city_msg").html("");
      }

      if(f=="")
      {
        check = false;
        $("#contact_msg").html("Insert Contact Number");
      }
      else
      {
        // isNaN() --- this function is check given variable is Not A Number or not.
        if(isNaN(f)==true)
        {
          check = false;
          $("#contact_msg").html('Insert Numbers Only');
        }
        else
        {
          // strlen()
          if(f.length != 10)
          {
            check = false;
            $("#contact_msg").html("Insert 10 Digit in Contact Number");
          }
          else{
            $("#contact_msg").html("");
          }
        }

      }

      return check;
      /*
      if we want stop submission of form then return false on submit button click.
      */
    });
  });