<head>
<body>

     <title>Mathematical Methods </title>
     </head>
     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <?php
	include 'navigation.php';
	
	if (!isset($_SESSION['username']))
    header("Location: login.php");
	?>


     </section>
 <br></br>
 <br></br>

<center>Mathematical Methods</center>

<?php
include 'quiz_mathematicalmethods.php';
?>

</body>
