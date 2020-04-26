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
                
                    <h1>For loops</h1>
                    <hr>
                
                <p>For loops are very similar to for loops in C, They are defined like this:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">for</span><span class="token punctuation">(</span> <span class="token punctuation">[</span>variable to count iterations<span class="token punctuation">]</span> <span class="token punctuation">;</span> <span class="token punctuation">[</span>conditions <span class="token keyword">checked</span> <span class="token keyword">for</span><span class="token punctuation">]</span> <span class="token punctuation">;</span> <span class="token punctuation">[</span>code to execute every loop<span class="token punctuation">]</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>

<span class="token punctuation">}</span>
</code></pre>
<p>E.G:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">int</span> i<span class="token punctuation">;</span>

<span class="token keyword">for</span><span class="token punctuation">(</span> i <span class="token operator">=</span> <span class="token number">0</span><span class="token punctuation">;</span> i <span class="token operator">&lt;</span> <span class="token number">10</span><span class="token punctuation">;</span> i<span class="token operator">++</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>

<span class="token punctuation">}</span>
</code></pre>
<p>This would loop until i is no longer less than ten, increasing i by one each time.
However unlike C, C# does allow you to declare the variable you are using as to count iterations in the for loop:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">for</span><span class="token punctuation">(</span> <span class="token keyword">int</span> i <span class="token operator">=</span> <span class="token number">0</span><span class="token punctuation">;</span> i <span class="token operator">&lt;</span> <span class="token number">10</span><span class="token punctuation">;</span> i<span class="token operator">++</span><span class="token punctuation">)</span>
</code></pre>
<p>For loops are used to allow you to repeat sections of code a fixed, or variable amount of times.
This allows you to make your code more compact and clean.</p>
<p>There are several statements you can use to control a loop:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">break</span><span class="token punctuation">;</span>
</code></pre>
<p>This allows you to exit a loop without finishing the loop.</p>
<p>E.G</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">for</span><span class="token punctuation">(</span><span class="token keyword">int</span> i <span class="token operator">=</span> <span class="token number">0</span><span class="token punctuation">;</span> i <span class="token operator">&lt;</span> <span class="token number">16</span><span class="token punctuation">;</span> i<span class="token operator">++</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>

    <span class="token keyword">if</span><span class="token punctuation">(</span>i <span class="token operator">==</span> <span class="token number">12</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">break</span><span class="token punctuation">;</span>    
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
</code></pre>
<p>Exit the loop when i is 12, not when the loop would usually finish</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">continue</span><span class="token punctuation">;</span>
</code></pre>
<p>This allows you to skip straight to the next iteration</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">for</span><span class="token punctuation">(</span><span class="token keyword">int</span> i <span class="token operator">=</span> <span class="token number">0</span><span class="token punctuation">;</span> i <span class="token operator">&lt;</span> <span class="token number">16</span><span class="token punctuation">;</span> i<span class="token operator">++</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>

    <span class="token keyword">if</span><span class="token punctuation">(</span>i <span class="token operator">%</span> <span class="token number">2</span> <span class="token operator">==</span> <span class="token number">1</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        <span class="token keyword">continue</span><span class="token punctuation">;</span>
    <span class="token punctuation">}</span>

    Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span>i<span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>
</code></pre>
<p>Print only the even numbers by skipping the interactions where i is odd.</p>
<h2>Exercise</h2>
<p>Print the value of variable X to the screen N number of times</p>
            </div>

</center>


<iframe width="100%" height="475" src="https://dotnetfiddle.net/Widget/CsScript" frameborder="0"></iframe>