<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
	    <?php
	include 'navigation.php';
	
	if (!isset($_SESSION['username']))
    header("Location: login.php");
	?>

  </section>

<div id="inner-text">
<center>                
                <h1>Learn To Code</h1>
<p>Welcome to the EasyAsPi free interactive C# tutorial.</p>
<p>Whether you are an experienced programmer or not, this website is intended for everyone who wishes to learn the C# programming language.</p>
<p>There is no need to download anything - Just click on the chapter you wish to begin from, and follow the instructions. Good luck!</p>

<h3>Learn the Basics</h3>
<p><a href="helloworld.php">1. Hello, World!</a></p>
<p><a href="variabletypes.php">2. Variables and Types</a></p>
<p><a href="conditionals.php">3. Conditionals</a></p>
<p><a href="arrays.php">4. Arrays</a></p>
<p><a href="lists.php">5. Lists</a></p>
<p><a href="dictionaries.php">6. Dictionaries</a></p>
<p><a href="strings.php">7. Strings</a></p>
<p><a href="forloops.php">8. For loops</a></p>
<p><a href="whileloops.php">9. While loops</a></p>
<p><a href="methods.php">10. Methods</a></p>
<p><a href="classes.php">11. Basic Classes</a></p>
<p><a href="classproperties.php">12. Class Properties</a></p>
</center>
