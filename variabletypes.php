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
                
                    <h1>Variables and Types</h1>
                    <hr>
                
                <p>C# is a statically-typed language. Therefore, we must define the types of variables before using them.</p>
<p>To define a variable in C#, we use the following syntax, which is similar to C / Java:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">int</span> myInt <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">;</span>
<span class="token keyword">float</span> myFloat <span class="token operator">=</span> <span class="token number">1f</span><span class="token punctuation">;</span>
<span class="token keyword">bool</span> myBoolean <span class="token operator">=</span> <span class="token keyword">true</span><span class="token punctuation">;</span>
<span class="token keyword">string</span> myName <span class="token operator">=</span> <span class="token string">"John"</span><span class="token punctuation">;</span>
<span class="token keyword">char</span> myChar <span class="token operator">=</span> <span class="token string">'a'</span><span class="token punctuation">;</span>
<span class="token keyword">double</span> myDouble <span class="token operator">=</span> <span class="token number">1.75</span><span class="token punctuation">;</span>
</code></pre>
<p>Notice that defining a floating point number requires an explicit <code class="  language-csharp">f</code> letter after the number.</p>
<p>C# supports type inference - which means that you don't always have to explicitly specify a type - you
can let the compiler try and understand the type of variable automatically. However, once the type of variable
has been determined, it cannot be assigned a different type.</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">var</span> x <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">;</span>
<span class="token keyword">var</span> y <span class="token operator">=</span> <span class="token number">2</span><span class="token punctuation">;</span>
<span class="token keyword">var</span> sum <span class="token operator">=</span> x <span class="token operator">+</span> y<span class="token punctuation">;</span>    <span class="token comment" spellcheck="true">// sum will also be defined as an integer</span>
</code></pre>
<h3>Enums</h3>
<p>Enums are integers that should be used when an integer is used to specify an option from a fixed amount of options.</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">public</span> <span class="token keyword">enum</span> CarType
<span class="token punctuation">{</span>
    Toyota <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">,</span>
    Honda <span class="token operator">=</span> <span class="token number">2</span><span class="token punctuation">,</span>
    Ford <span class="token operator">=</span> <span class="token number">3</span><span class="token punctuation">,</span>
<span class="token punctuation">}</span>

<span class="token keyword">public</span> <span class="token keyword">class</span> <span class="token class-name">Tutorial</span>
<span class="token punctuation">{</span>
    <span class="token keyword">public</span> <span class="token keyword">static</span> <span class="token keyword">void</span> <span class="token function">Main</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token punctuation">{</span>
        CarType myCarType <span class="token operator">=</span> CarType<span class="token punctuation">.</span>Toyota<span class="token punctuation">;</span>
    <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
</code></pre>
<h2>Exercise</h2>
<p>Define three variables:</p>
<ul>
<li>A string named <code class="  language-csharp">productName</code> equal to <code class="  language-csharp">TV</code>.</li>
<li>An integer named <code class="  language-csharp">productYear</code> equal to 2012.</li>
<li>A float named <code class="  language-csharp">productPrice</code> equal to 279.99f.</li>
</ul>
            </div>

</center>


<iframe width="100%" height="475" src="https://dotnetfiddle.net/Widget/CsScript" frameborder="0"></iframe>