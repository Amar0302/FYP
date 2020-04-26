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
                
                    <h1>Arrays</h1>
                    <hr>
                
                <p>Arrays in C# are very similar to arrays in C. They are defined using the brackets operator <code class="  language-csharp"><span class="token punctuation">[</span><span class="token punctuation">]</span></code>, and
they are initialized using a list defined with curly braces. For example:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">int</span><span class="token punctuation">[</span><span class="token punctuation">]</span> nums <span class="token operator">=</span> <span class="token punctuation">{</span> <span class="token number">1</span><span class="token punctuation">,</span> <span class="token number">2</span><span class="token punctuation">,</span> <span class="token number">3</span><span class="token punctuation">,</span> <span class="token number">4</span><span class="token punctuation">,</span> <span class="token number">5</span> <span class="token punctuation">}</span><span class="token punctuation">;</span>
</code></pre>
<p>We can also define an empty array like this:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">int</span><span class="token punctuation">[</span><span class="token punctuation">]</span> nums <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">int</span><span class="token punctuation">[</span><span class="token number">10</span><span class="token punctuation">]</span><span class="token punctuation">;</span>
</code></pre>
<p>To get the size of the array, use the <code class="  language-csharp">Length</code> method.</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">int</span><span class="token punctuation">[</span><span class="token punctuation">]</span> nums <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">int</span><span class="token punctuation">[</span><span class="token number">10</span><span class="token punctuation">]</span><span class="token punctuation">;</span>
Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span>nums<span class="token punctuation">.</span>Length<span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<p>To access a specific item in the array, we use the brackets operator:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">int</span><span class="token punctuation">[</span><span class="token punctuation">]</span> nums <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">int</span><span class="token punctuation">[</span><span class="token number">10</span><span class="token punctuation">]</span><span class="token punctuation">;</span>
<span class="token keyword">int</span> firstNumber <span class="token operator">=</span> nums<span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">]</span><span class="token punctuation">;</span>
<span class="token keyword">int</span> secondNumber <span class="token operator">=</span> nums<span class="token punctuation">[</span><span class="token number">1</span><span class="token punctuation">]</span><span class="token punctuation">;</span>
nums<span class="token punctuation">[</span><span class="token number">2</span><span class="token punctuation">]</span> <span class="token operator">=</span> <span class="token number">10</span><span class="token punctuation">;</span>
</code></pre>
<p>Notice that C# uses zero based indices.</p>
<h3>Multidimensional arrays</h3>
<p>C# supports multidimensional arrays, defined in the following manner:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">int</span><span class="token punctuation">[</span><span class="token punctuation">,</span><span class="token punctuation">]</span> matrix <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">int</span><span class="token punctuation">[</span><span class="token number">2</span><span class="token punctuation">,</span><span class="token number">2</span><span class="token punctuation">]</span><span class="token punctuation">;</span>

matrix<span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">,</span><span class="token number">0</span><span class="token punctuation">]</span> <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">;</span>
matrix<span class="token punctuation">[</span><span class="token number">0</span><span class="token punctuation">,</span><span class="token number">1</span><span class="token punctuation">]</span> <span class="token operator">=</span> <span class="token number">2</span><span class="token punctuation">;</span>
matrix<span class="token punctuation">[</span><span class="token number">1</span><span class="token punctuation">,</span><span class="token number">0</span><span class="token punctuation">]</span> <span class="token operator">=</span> <span class="token number">3</span><span class="token punctuation">;</span>
matrix<span class="token punctuation">[</span><span class="token number">1</span><span class="token punctuation">,</span><span class="token number">1</span><span class="token punctuation">]</span> <span class="token operator">=</span> <span class="token number">4</span><span class="token punctuation">;</span>

<span class="token keyword">int</span><span class="token punctuation">[</span><span class="token punctuation">,</span><span class="token punctuation">]</span> predefinedMatrix <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">int</span><span class="token punctuation">[</span><span class="token number">2</span><span class="token punctuation">,</span><span class="token number">2</span><span class="token punctuation">]</span> <span class="token punctuation">{</span> <span class="token punctuation">{</span> <span class="token number">1</span><span class="token punctuation">,</span> <span class="token number">2</span> <span class="token punctuation">}</span><span class="token punctuation">,</span> <span class="token punctuation">{</span> <span class="token number">3</span><span class="token punctuation">,</span> <span class="token number">4</span> <span class="token punctuation">}</span> <span class="token punctuation">}</span><span class="token punctuation">;</span>
</code></pre>
<h2>Exercise</h2>
<p>Define an array called <code class="  language-csharp">fruits</code> that holds the following strings: "apple", "banana", and "orange".</p>
            </div>

</center>


<iframe width="100%" height="475" src="https://dotnetfiddle.net/Widget/CsScript" frameborder="0"></iframe>