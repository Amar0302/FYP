<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
	    <?php
	include 'navigation.php';
	
	if (!isset($_SESSION['username']))
    header("Location: login.php");
	?>

  </section>

<div id="inner-text">
<center>                

<div id="inner-text">
                
                    <h1>Hello, World!</h1>
                    <hr>
                
                <p>C# is a static programming language which lets us write code that runs atop Microsoft's .NET framework.
C# has more features and capabilities than Java, but since it is owned by Microsoft, it means that
you may find yourself paying money for your IDE, server operating system, etc.</p>
<p>C# is object oriented and its syntax is very similar to Java.</p>
<p>In our tutorial, we will be using the <code class="  language-csharp">System<span class="token punctuation">.</span>Console<span class="token punctuation">.</span>WriteLine</code> function to write lines to the output
console. When writing a C# command line application, the same function can also be used to print to the
console.</p>
<p><strong>Note:</strong> Writing web applications using C# is possible using the ASP.NET framework.</p>
<h2>Exercise</h2>
<p>Print "Hello, World!" to the console.</p>
            </div>

</center>


<iframe width="100%" height="475" src="https://dotnetfiddle.net/Widget/CsScript" frameborder="0"></iframe>