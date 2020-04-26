<head>
<body>

     <title>Complex Variables </title>
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

<center>Complex Variables</center>
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
            <td>The aim of this module is:<br>- to introduce students to the classical results in the theory of analytic functions of a complex variable.</td>
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
            <td>On completion of this module, students should be able to:<br>Knowledge and Understanding<br>- Contrast the basic properties of complex-valued functions and their<br>real-valued counterparts;<br>- Recall some of the main theorems in the theory of analytic<br>functions;<br>- Identify applications of the residue theorem.<br><br>Subject-specific Skills<br>- solve straightforward problems in the theory of complex-valued functions from first principles;<br>- decide whether a power series is convergent or not and find its radius of convergence;<br>- evaluate complex-valued integrals;<br>- apply the residue theorem to evaluate real-valued integrals.<br><br>Key/transferable Skills<br>- manage time effectively;<br>- construct logical arguments;<br>- break down involved calculations into their logical units.</td>
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
            <td>Analytic functions of a complex variable. Contour integration, Cauchy&#39;s theorem and integral formula. Convergence of power series. Taylor and Laurent series. Theory of residues.</td>
        </tr>
    </tbody>
</table>
<p><br></p>
<br></br>
<center><h1><a href="/modules/complexvariables/">Find All Complex Variables Content Here</a></h1></center>

<?php
include 'quiz_complexvariables.php';
?>

</body>
