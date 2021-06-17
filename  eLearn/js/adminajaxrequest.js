function checkAdminLogin(){
  // Ajax call for admin login verification
    // console.log("Buttom clicked");
    
    // capture data
        var adminLogEmail = $("#adminLogemail").val();
        var adminLogPass = $("#adminLogpass").val();
    
      // send data to server call ajax
    
      $.ajax({
        url: "Admin/admin.php",
        method: 'POST',
        data:{
          checkLogemail: "checkLogemail",
          adminLogEmail: 'adminLogEmail',
          adminLogPass: 'adminLogPass'
    
        },
        success: function(data){
          // console.log(data);
          if(data == 0){
            $("#statusAdminLogMsg").html('<small class="alert alert-danger">Invalid Email Id or Password !</small>');
          } else if( data == 1){
            $("#statusAdminLogMsg").html('<small class="alert alert-success">Success Loading...</small>');
            setTimeout(()=>{
              window.location.href = "Admin/adminDashboard.php";
            }, 1000);
          };
        },
      });
    
    }