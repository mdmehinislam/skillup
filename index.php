<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body style="background:#e8e6df">
    
    <div class="global-container  position-absolute top-50 start-50 translate-middle"style="width:30%;">
        <div class="row" >
        <div class="card login-form shadow ">
            <div class="card-body" >
                <h3 class="card-title text-center"style="letter-spacing: 3px;font-family:algerian;background: -webkit-linear-gradient(90deg,rgb(201, 77, 250),rgba(247, 7, 87, 0.363));-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Sign in to Skillup</h3>
                <div class="card-text">
                    <form name="myForm">
                        <div class="form-group">
                            <label for="exampleInputEmail">User Name</label>
                            <input type="email" class="form-control form-control-md mt-1" name="usernames" placeholder="Enter user name">
                        </div>
                        <div class="form-group">
                            <label for="examplePassword1">Password</label>
                            <input type="password" class="form-control form-control-md mt-1"placeholder="password" name="passwords">
                        </div>
                        <input type="button"name="log" class="btn btn-primary btn-block mt-3 mb-1" id="btnn" value="Login" onclick="signin()" style="letter-spacing:2px;font-family:algerian;width:100%;background-image: linear-gradient(270deg,rgb(201, 77, 250),rgba(247, 7, 87, 0.363));border:none">
                        <div class="signup">
                            Don't have account?<a href="register.php">Register Now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
  
    <script>
      function signin()
      {
       
        var un = document.forms["myForm"]["usernames"].value;
        var up = document.forms["myForm"]["passwords"].value;
          if(un=="skillup" && up=="12345"){
              window.location.href="home.php";
          }else if(un=="null" && up=="12345"){
            alert("please input user name");
          }
         else if(un=="sheikh" && up=="null"){
            alert("input password");
          }
          else{
              alert("Invalid User name or Password");
          }
      }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>