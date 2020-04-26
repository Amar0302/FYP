<head>
<body>

     <title>My Account </title>
     </head>
     <!-- MENU -->

<?php
require_once('globals.php');

?>

 <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
	    <?php
	include 'navigation.php';
	
	if (!isset($_SESSION['username']))
    header("Location: login.php");
	?>

  </section>
 <br></br>
 <br></br>


</body>

<br></br>
<br></br>
  	<?php
        $useridq = '';
        if(isset($_SESSION["userid"])) {
            $useridq = $_SESSION['userid'];
        }
      

       $sql = "SELECT * FROM userscores WHERE userId = $useridq";

	   include 'getdata.php';
	?>
  
