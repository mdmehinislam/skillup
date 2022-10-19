<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body style="background:#e8e6df">
    
    <div class="global-container  position-absolute top-50 start-50 translate-middle"style="width:30%;">
        <div class="row" >
        <div class="card login-form shadow ">
            <div class="card-body" >
                <h3 class="card-title text-center"style="letter-spacing:2px;font-family:algerian;background: -webkit-linear-gradient(90deg,rgb(201, 77, 250),rgba(247, 7, 87, 0.363));-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Sign Up to Skillup</h3>
                <div class="card-text">
                    <form name="myForm">
                            <div class="row">
                            <div class="col-md-6 ">

                            <div class="form-outline">
                                <input type="text" id="firstName" class="form-control form-control-md mb-2" placeholder="First Name" />
                            </div>

                            </div>
                            <div class="col-md-6 ">

                            <div class="form-outline">
                                <input type="text" id="lastName" class="form-control form-control-md mb-2" placeholder="Last Name" />
                            </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-md mb-2"placeholder="Email or Mobile Number" name="usernames">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-md mb-2"placeholder="New Password" name="passwords">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDate">Date Of Birth?</label>
                            <input type="date" class="form-control form-control-md mb-2">
                        </div>
                        <div class="form-group mb-2">
                            <label for="exampleInputGender">Gender: </label>
                            <input type="radio" name="gender" value="male" class="text-center" > Male
                            <input type="radio" name="gender" value="Female" class="text-center"> Female
                            <input type="radio" name="gender" value="others" class="text-center"> Custom
                        </div>
                       
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            By clicking, you agree to our Terms and condition
                            </label>
                        </div>
                        <button type="btn" class="btn btn-primary btn-block mt-2" onclick="register()" style="letter-spacing:2px;font-family:algerian;width:100%;background-image: linear-gradient(45deg,rgb(201, 77, 250),rgba(247, 7, 87, 0.363));border:none">Register</button>
                        <div class="signup mt-2">
                            already have an account?<a href="index.php">Signin</a>
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