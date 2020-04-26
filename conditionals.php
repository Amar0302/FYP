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
                
                    <h1>Conditionals</h1>
                    <hr>
                
                <p>C# uses Boolean variables to evaluate conditions. The Boolean values <code class="  language-csharp"><span class="token keyword">true</span></code> and <code class="  language-csharp"><span class="token keyword">false</span></code> are returned when an expression is compared or evaluated.
For example:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">int</span> a <span class="token operator">=</span> <span class="token number">4</span><span class="token punctuation">;</span>
<span class="token keyword">bool</span> b <span class="token operator">=</span> a <span class="token operator">==</span> <span class="token number">4</span><span class="token punctuation">;</span>

<span class="token keyword">if</span> <span class="token punctuation">(</span>b<span class="token punctuation">)</span> <span class="token punctuation">{</span>
    Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span><span class="token string">"It's true!"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token punctuation">}</span>
</code></pre>
<p>Of course we don't normally assign a conditional expression to a bool, we just use the short version:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">int</span> a <span class="token operator">=</span> <span class="token number">4</span><span class="token punctuation">;</span>

<span class="token keyword">if</span> <span class="token punctuation">(</span>a <span class="token operator">==</span> <span class="token number">4</span><span class="token punctuation">)</span> <span class="token punctuation">{</span>
    Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span><span class="token string">"Ohhh! So a is 4!"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token punctuation">}</span>
</code></pre>
<h3>Boolean operators</h3>
<p>There aren't that many operators to use in conditional statements and most of them are pretty straight forward:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">int</span> a <span class="token operator">=</span> <span class="token number">4</span><span class="token punctuation">;</span>
<span class="token keyword">int</span> b <span class="token operator">=</span> <span class="token number">5</span><span class="token punctuation">;</span>
<span class="token keyword">bool</span> result<span class="token punctuation">;</span>
result <span class="token operator">=</span> a <span class="token operator">&lt;</span> b<span class="token punctuation">;</span> <span class="token comment" spellcheck="true">// true</span>
result <span class="token operator">=</span> a <span class="token operator">&gt;</span> b<span class="token punctuation">;</span> <span class="token comment" spellcheck="true">// false</span>
result <span class="token operator">=</span> a <span class="token operator">&lt;=</span> <span class="token number">4</span><span class="token punctuation">;</span> <span class="token comment" spellcheck="true">// a smaller or equal to 4 - true</span>
result <span class="token operator">=</span> b <span class="token operator">&gt;=</span> <span class="token number">6</span><span class="token punctuation">;</span> <span class="token comment" spellcheck="true">// b bigger or equal to 6 - false</span>
result <span class="token operator">=</span> a <span class="token operator">==</span> b<span class="token punctuation">;</span> <span class="token comment" spellcheck="true">// a equal to b - false</span>
result <span class="token operator">=</span> a <span class="token operator">!=</span> b<span class="token punctuation">;</span> <span class="token comment" spellcheck="true">// a is not equal to b - true</span>
result <span class="token operator">=</span> a <span class="token operator">&gt;</span> b <span class="token operator">||</span> a <span class="token operator">&lt;</span> b<span class="token punctuation">;</span> <span class="token comment" spellcheck="true">// Logical or - true</span>
result <span class="token operator">=</span> <span class="token number">3</span> <span class="token operator">&lt;</span> a <span class="token operator">&amp;&amp;</span> a <span class="token operator">&lt;</span> <span class="token number">6</span><span class="token punctuation">;</span> <span class="token comment" spellcheck="true">// Logical and - true</span>
result <span class="token operator">=</span> <span class="token operator">!</span>result<span class="token punctuation">;</span> <span class="token comment" spellcheck="true">// Logical not - false</span>
</code></pre>
<h3>if - else and between</h3>
<p>The if, else statement in C# is pretty simple.</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">if</span> <span class="token punctuation">(</span>a <span class="token operator">==</span> b<span class="token punctuation">)</span> <span class="token punctuation">{</span>
    <span class="token comment" spellcheck="true">// a and b are equal, let's do something cool</span>
<span class="token punctuation">}</span>
</code></pre>
<p>And we can also add an else statement after an if, to do something if the condition is not true</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">if</span> <span class="token punctuation">(</span>a <span class="token operator">==</span> b<span class="token punctuation">)</span> <span class="token punctuation">{</span>
    <span class="token comment" spellcheck="true">// We already know this part</span>
<span class="token punctuation">}</span> <span class="token keyword">else</span> <span class="token punctuation">{</span>
    <span class="token comment" spellcheck="true">// a and b are not equal... :/</span>
<span class="token punctuation">}</span>
</code></pre>
<p>The if - else statements doesn't have to be in several lines with {}, if can be used in one line, or without the {}, for a single line statment.</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">if</span> <span class="token punctuation">(</span>a <span class="token operator">==</span> b<span class="token punctuation">)</span>
    Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span><span class="token string">"Another line Wow!"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token keyword">else</span>
    Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span><span class="token string">"Double rainbow!"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<p>Although this method might be useful for making your code shorter by using fewer lines, we strongly recommend for beginners not to use this short version of statements and always use the full version with {}. This goes to every statement that can be shorted to a single line (for, while, etc).</p>
<h2>Exercise</h2>
<p>In this exercise, you must construct an <code class="  language-csharp"><span class="token keyword">if</span></code> statement that checks if the number <code class="  language-csharp">guess</code> is equal to 500. If that is the case, use <code class="  language-csharp">Console<span class="token punctuation">.</span>WriteLine</code> to display "Success!".</p>
            </div>

</center>


<iframe width="100%" height="475" src="https://dotnetfiddle.net/Widget/CsScript" frameborder="0"></iframe>