<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content= "width=device-width, initial-scale=1">
        <title>THIS IS ASSINGMENT</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet"/>

    </head>
    <body>
      
        <nav class=" bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="home_page.html"><img id="A" src="C:\xampp\htdocs\projects\PGlife\img\logo.png"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              </div>
            </div>
           <div class="navbar justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a clas="nav-link"  href="#" data-toggle="modal" data-target="#signup-modal">
                  <i style="font-size:24px" class="fa">&#xf007;</i>signup  
                </a>

                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                  <i style="font-size:24px" class="fa">&#xf090;</i>Login
                </a>
            </li>
            </ul>

            
           </div>
        </nav>
       
      <div class="box">
        <div>
          <h3 class="h"><center>Happiness Per Square Foot</center></h3>
        </div>
        <div class="container-1">
          
          <input type="text" name="search" id="search" placeholder="enter your city for find new PG">
          <button type="SUBMIT"> <i style="font-size:24px" class="fa">&#xf002;</i></button>
        </div>
      </div>
    <div class="c">
      <h1 class="city"><center>Major Cities</center></h1>
      <div class="al">
        <a href="property_list.html"><img class="d" src="delhi.png" href=""></a>
        <a href="property_list.html"><img class="d" src="mumbai.png"></a>
        <a href="property_list.html"><img class="d" src="bangalore.png"></a>
        <a href="property_list.html"><img class="d" src="hyderabad.png"></a>
        
      </div>
    </div>
    <div>
      <nav class="bl">
        <div class="cl">
          <a class="dl" href="property_list.html">PG IN DELHI</a>
          <a class="dl" href="property_list.html">PG IN MUMBAI</a>
          <a class="dl" href="property_list.html">PG IN BANGLORE</a>
          <a class="dl" href="property_list.html">PG IN HYDERABAD</a>
        </div>
      </nav>
    </div>
    <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="signup-heading">Signup with PGLife</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              
              </div>

              <div class="modal-body">
                  <form id="signup-form" class="form" role="form">
                      <div class="input-group form-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <i class="fa fa-user"></i>
                              </span>
                            </div>
                          <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
                      </div>

                      <div class="input-group form-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa fa-phone"></i>
                              </span>
                          </div>
                          <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required>
                      </div>

                      <div class="input-group form-group">
                          <div class="input-group-prepend" style="width:30px;height:30px;">
                            <span class="input-group-text">
                            <i class="fa fa-envelope"></i>
                            </span>
                          </div>
                          <input type="email" class="form-control" name="email" placeholder="Email" required>
                      </div>

                      <div class="input-group form-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <i class="fa fa-lock"></i>
                              </span>
                          </div>
                          <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                      </div>

                      <div class="input-group form-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <i class="fa fa-university"></i>
                              </span>
                          </div>
                          <input type="text" class="form-control" name="college_name" placeholder="College Name" maxlength="150" required>
                      </div>

                      <div class="form-group">
                          <span>I'm a</span>
                          <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> Male
                          <label for="gender-male">
                          </label>
                          <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                          <label for="gender-female">
                              Female
                          </label>
                      </div>

                      <div class="form-group">
                          <button type="submit" class="btn btn-block btn-primary">Create Account</button>
                      </div>
                  </form>
              </div>

              <div class="modal-footer">
                  <span>Already have an account?
                      <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                  </span>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signup-heading">Login with PGLife</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>    
            <div class="modal-body">
              <span class="input-group-text">
              <i style="font-size:24px" class="fa">&#xf045;</i>
              <input type="email" class="form-control" name="email" placeholder="Email" required>
              </span>
            </div>
            <div class="modal-body">
              <span class="input-group-text">
                <i style='font-size:24px' class="fa fa-user"></i>
                <input type="password" class="form-control" name="password" placeholder="password"  required>
              </span>
              <div class="form-group">
                <button type="submit" class="btn btn-success" >Login</button>
              </div>
            </div>
            <div class="modal-footer">
              <h5>Dont have a account<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">signup</a></h5>
            </div>
  
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

    
    </body>
</html>