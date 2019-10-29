<head>

     <title>Easy As Pi </title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/mainstylesheet.css">

</head>
 
 <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <?php
	include 'navigation.php';
	?>
     </section>
 <br></br>
 <br></br>
 <br></br>

 
 
 <div class="col-md-offset-4 col-md-3 col-sm-12">
                         <div class="entry-form">
                              <form action="userlogin.php" method="GET">
                                   <h2>Login</h2>
                                   <input type="text" name="email" class="form-control" placeholder="Email" required="">


                                   <input type="password" name="password" class="form-control" placeholder="Your password" required="">
								   

                                   <button class="submit-btn form-control" type="submit" name="login-submit">Login</button>
								   
								   <p id="two">Don't have account? <a class="signup" href="signup.php" id="signup"><font color = "white">Sign up here</font></a></p>
                              </form>
                         </div>
                    </div>