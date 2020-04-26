<head>
<body>

     <title>Linear Algebra </title>
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

<center>Linear Algebra</center>

<?php
include 'quiz_linearalgebra.php';
?>

</body>
