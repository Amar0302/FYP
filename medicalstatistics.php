<head>
<body>

     <title>Medical Statistics </title>
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

<center>Medical Statistics</center>
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
            <td>The aims of this module are to reinforce students&#39; skills in interpreting statistical tests and using statistical software and to introduce the methods and theory for the design and analysis of medical trials.</td>
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
            <td>On completion of this module, students should be able to:<br><br>Knowledge and Understanding<br>- apply the underlying principles and methods to the organisation and analysis of clinical data;<br>- use the statistical tools to interpret data from a medical trial;<br><br>Practical Subject-specific Skills<br>- create an appropriate trial design for a given research question;<br>- conduct statistical analysis of data using R;<br><br>Cognitive Subject-specific Skills<br>- determine the correct statistical tools to use in interpreting data from a trial;<br>- interpret results from calculated statistics;<br><br>Key/transferable Skills<br>- manage time effectively;<br>- work independently;<br>- assess problems logically;<br>- prepare a written report.</td>
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
            <td>Introduction to the history, goals and regulations governing research in the pharmaceutical industry, epidemiological research and clinical research in medical and health related fields. Elements of design for clinical trials, sample size determination, binary medical data analysis, crossover trials, Bayesian approach and mortality rate analysis. Analysis of time to event (survival) data using nonparametric and parametric methods. Statistical analysis using the statistical package R, report writing in medical research.</td>
        </tr>
    </tbody>
</table>
<br></br>

<center><h1><a href="/modules/medicalstatistics/">Find All Medical Statistics Content Here</a></h1></center>


<?php
include 'quiz_medicalstatistics.php';
?>

</body>
