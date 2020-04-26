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
                
                    <h1>While loops</h1>
                    <hr>
                
                <p>While loops are very similar to For loops, They are defined like this:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">while</span><span class="token punctuation">(</span><span class="token punctuation">[</span>conditions to be <span class="token keyword">checked</span><span class="token punctuation">]</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>
<span class="token punctuation">[</span>Code to execute<span class="token punctuation">]</span>
<span class="token punctuation">}</span>
</code></pre>
<p>This allows you to continuously repeat a section of code while a condition is satisfied.</p>
<p>E.G:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">int</span> n <span class="token operator">=</span> <span class="token number">0</span><span class="token punctuation">;</span>

<span class="token keyword">while</span><span class="token punctuation">(</span> n <span class="token operator">==</span> <span class="token number">0</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span><span class="token string">"N is 0"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    n<span class="token operator">++</span><span class="token punctuation">;</span>
<span class="token punctuation">}</span>
</code></pre>
<p>This would execute once as N is changed from zero the first time it runs.
Unlike for loops, while loops do not allow you to declare or assign the variable used in the conditions.</p>
<p>The same control statements (break and continue) as are used in for loops can also be used in while loops.</p>
<h2>Exercise</h2>
<p>Print X to the console N time using a while loop</p>
            </div>

</center>


<iframe width="100%" height="475" src="https://dotnetfiddle.net/Widget/CsScript" frameborder="0"></iframe>