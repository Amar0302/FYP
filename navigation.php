<head>

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
 



<?php 
    session_start();
     

if (isset($_SESSION['username'])){ 
?>


<div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand">easyasπ</a>
               </div>

               <!-- MENU LINKS -->
			   
			   
			   
			   
			   
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Reviews</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
				     <li><a href="">My Account</a></li>
                         <li><a href="modules.php">My Modules</a></li>
						 
            
           

						 
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="logout.php"><i class="fa fa-sign-in"></i>Logout <?php echo "{$_SESSION['username']}" ?></a></li>
                    </ul>
               </div>
			   
			   


          </div>

  
<?php } else { ?>
<div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand">easyasπ</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Reviews</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="login.php"><i class="fa fa-sign-in"></i>Login</a></li>
                    </ul>
               </div>

          </div>
  
<?php }
?> 
 