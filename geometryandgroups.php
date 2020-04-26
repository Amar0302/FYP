<head>
<body>

     <title>Geometry & Groups </title>
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

<center>Geometry & Groups</center>

<?php
include 'quiz_geometryandgroups.php';
?>

</body>
