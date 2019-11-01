<title>Login</title>



     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <?php
	include 'navigation.php';
	?>
     </section>
 <br></br>
 <br></br>
 <br></br>
 
 <?php 
        $urlParameters = array();
        parse_str($_SERVER['QUERY_STRING'], $urlParameters);
        
        if (!empty($urlParameters) && $urlParameters['incorrectLogin'] == true){
        
          echo '<center><p style=color:red ;> <b>Incorrect details, please try again </b></p></center>' ;
        }
    ?>
 
 
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