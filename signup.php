<head>

     <title>Sign Up Now </title>

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
                              <form action="upload_member.php" method="post">
                                   <h2>Register</h2>
                                   <input type="text" name="username" class="form-control" placeholder="Username" required="">
								   <input type="text" name="email" class="form-control" placeholder="E-mail Address" required="">

                                   <input type="password" name="password" class="form-control" placeholder="Your password" required="">
								   

                                   <button class="submit-btn form-control" id="form-submit">Register</button>
                              </form>
                         </div>
                    </div>