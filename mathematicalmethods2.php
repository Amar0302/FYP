<head>
<body>

     <title>Mathematical Methods 2 </title>
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

<center>Mathematical Methods 2</center>

<?php
include 'quiz_mathematicalmethods2.php';
?>

</body>
