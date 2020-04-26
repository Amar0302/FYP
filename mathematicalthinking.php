<head>
<body>

     <title>Mathematical Thinking </title>
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

<center>Mathematical Thinking</center>

<?php
include 'quiz_mathematicalthinking.php';
?>

</body>
