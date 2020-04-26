<head>
<body>

     <title>Graph Theory </title>
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

<center>Graph Theory</center>
<br></br>

<table align="center" style="color: rgb(51, 51, 51); font-size: 12.8px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-family: verdana, arial, serif;" width="85%">
    <tbody>
        <tr>
            <td><strong>Aims:</strong></td>
        </tr>
    </tbody>
</table>
<table align="center" style="color: rgb(51, 51, 51); font-size: 12.8px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-family: verdana, arial, serif;" width="80%">
    <tbody>
        <tr>
            <td>The aims of this module are to:<br><br>- introduce students to modern concepts and methods of combinatorics and graph theory;<br>- provide powerful advanced tools to students in probability, number theory, optimal control, algorithmic complexity etc, applicable to modelling of a wide range of phenomena (physical, biological, social etc).</td>
        </tr>
    </tbody>
</table>
<p><br style="color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12.8px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;"></p>
<p><a name="outcomes" style="color: rgb(51, 0, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12.8px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;"></a></p>
<table align="center" style="color: rgb(51, 51, 51); font-size: 12.8px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-family: verdana, arial, serif;" width="85%">
    <tbody>
        <tr>
            <td><strong>Intended Learning Outcomes:</strong></td>
        </tr>
    </tbody>
</table>
<table align="center" style="color: rgb(51, 51, 51); font-size: 12.8px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-family: verdana, arial, serif;" width="80%">
    <tbody>
        <tr>
            <td>On completion of this module students should be able to:<br><br>Knowledge and Understanding:<br>- Recall the main concepts and quantities in general graph theory;<br>- explain the construction and the properties of random graphs;<br>- Explain the occurence of phase-transitions in random graphs;<br>- Identify some of the diverse applications of graph theory in science.<br><br>Subject-Specific Skills:<br>- Use methods of enumeration and specific algorithms;<br>- Solve some extremal problems of graph theory.<br><br>Key/Transferable Skills:<br>- Work independently in solving problems;<br>- Construct sound mathematical arguments.</td>
        </tr>
    </tbody>
</table>
<p><br style="color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12.8px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;"></p>
<p><a name="contents" style="color: rgb(51, 0, 102); font-family: Arial, Helvetica, sans-serif; font-size: 12.8px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;"></a></p>
<table align="center" style="color: rgb(51, 51, 51); font-size: 12.8px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-family: verdana, arial, serif;" width="85%">
    <tbody>
        <tr>
            <td><strong>Content:</strong></td>
        </tr>
    </tbody>
</table>
<table align="center" style="color: rgb(51, 51, 51); font-size: 12.8px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-family: verdana, arial, serif;" width="80%">
    <tbody>
        <tr>
            <td>Basic definitions and properties: paths, connected graphs, connectivity.<br>Trees: definition and structure, counting methods, Pr&uuml;fer code, spanning trees, greedy algorithms.<br>Eulerian and Hamiltonian graphs. Planar graphs. Colourings and matchings. Extremal graph theory and Ramsey theory. Basic models of random graphs and complex networks.</td>
        </tr>
    </tbody>
</table>

<br></br>
<center><h1><a href="/modules/graphtheory/">Find All Graph Theory Content Here</a></h1></center>


<?php
include 'quiz_graphtheory.php';
?>

</body>
