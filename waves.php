<head>
<body>

     <title>Vibrations & Waves </title>
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

<center>Vibrations & Waves</center>
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
            <td>The aim of this module is to:<br>- investigate physical phenomena that involve vibrations and waves using appropriate mathematical tools.</td>
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
            <td>On completion of this module, students should be able to:<br><br>Knowledge and Understanding<br>- analyse differential equations which describe vibrations and waves in a number of different contexts;<br><br>Subject-specific Skills<br>- use perturbation methods to solve ordinary differential equations;<br>- use separation of variables to solve the wave equation in one and two dimensions;<br>- use the method of characteristics to solve first-order partial differential equations;<br>- use the method of asymptotic multiple-scales expansions to derive the Korteweg - de Vries equation.<br><br>Key/transferable Skills<br>- manage time effectively by completing and submitting coursework by deadline;<br>- think logically by being able to decide which techniques to use to solve various mathematical problems;<br>- work independently by producing the coursework and sitting the exam;<br>- prepare and present a short report for the coursework.</td>
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
            <td>Review of the linear oscillator in one dimension: free, forced, undamped, and damped oscillations. Nonlinear oscillator with damping and forcing: solution using a variety of perturbation methods. Waves on a string: free and forced oscillations, the d&#39;Alembert solution, reflection from a discontinuity. Circular waves: Bessel functions, waves on a membrane, scattering of water waves by a circular cylinder. Waves in traffic: solution by method of characteristics. Nonlinear waves in a chain of particles: Korteweg - de Vries equation and solitons.</td>
        </tr>
    </tbody>
</table>
<br></br>

<center><h1><a href="/modules/vibrations/">Find All Vibrations & Waves Content Here</a></h1></center>

<?php
include 'quiz_waves.php';
?>

</body>
