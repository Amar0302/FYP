<head>
<body>

     <title>Applied Statistics </title>
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

<center>Applied Statistics</center>
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
            <td>The aims of this module are:<br><br>- to introduce fundamental statistical concepts;<br>- to introduce statistical methods and associated theory for design and analysis of studies and experiments;<br>- to develop statistical software skills;<br>- to reinforce skills regarding the interpretation of statistical analyses.</td>
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
            <td>On completion of this module, students should be able to:<br>Knowledge and Understanding<br>- define fundamental statistical concepts;<br>Practical Subject-specific Skills<br>- critique the design of an experiment;<br>- design an appropriate experiment for a given research question;<br>- carry out basic or partial statistical procedures by hand;<br>- conduct statistical analysis of data using R;<br>Cognitive Subject-specific Skills<br>- determine an appropriate statistical analysis for data for a given experiment;<br>- interpret the results of a statistical analysis;<br>Key/transferable Skills<br>- manage time effectively in the completion of coursework;<br>- work independently on problem sheets, labs and coursework;<br>- assess problems logically.</td>
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
            <td>Data description: formats, class;<br>Data visualisation: univariate and bivariate visualisation techniques;<br>Data sampling: simple random sampling and related distributions;<br>Data modelling: parametric, non-parametric approaches;<br>Statistical principles: hypothesis tests and related distributions;<br>Statistical analysis using R.</td>
        </tr>
    </tbody>
</table>
<br></br>
<center><h1><a href="/modules/appliedstatistics/">Find All Applied Statistics Content Here</a></h1></center>

<?php
include 'quiz_appliedstatistics.php';
?>

</body>
