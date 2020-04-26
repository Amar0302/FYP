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
                
                    <h1>Methods</h1>
                    <hr>
                
                <p>Methods in C# are portions of a larger program that perform specific tasks. They can be used to keep code clean by separating it into separate pieces. They can also be used in more than one place allowing you to reuse previous code.</p>
<p>In C# methods can be in the main program or can be in libraries, which are external files, containing classes and subroutines which can be imported into a program. This allows them to be distributed easily and used by multiple programs.</p>
<p>Methods in C# are defined like this:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token punctuation">[</span>Modifiers <span class="token punctuation">(</span>E<span class="token punctuation">.</span>G <span class="token keyword">public</span> or <span class="token keyword">static</span><span class="token punctuation">)</span><span class="token punctuation">]</span> <span class="token punctuation">[</span>Type of output<span class="token punctuation">]</span> <span class="token punctuation">[</span>Name<span class="token punctuation">]</span> <span class="token punctuation">(</span> <span class="token punctuation">[</span>parameter <span class="token number">1</span><span class="token punctuation">]</span><span class="token punctuation">,</span><span class="token punctuation">[</span>parameter <span class="token number">2</span><span class="token punctuation">]</span> <span class="token punctuation">.</span><span class="token punctuation">.</span><span class="token punctuation">.</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>

<span class="token punctuation">}</span>
</code></pre>
<p>E.G:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">public</span> <span class="token keyword">static</span> <span class="token keyword">int</span> <span class="token function">Multiply</span><span class="token punctuation">(</span><span class="token keyword">int</span> a<span class="token punctuation">,</span> <span class="token keyword">int</span> b<span class="token punctuation">)</span>
<span class="token punctuation">{</span>

    <span class="token keyword">return</span> a <span class="token operator">*</span> b<span class="token punctuation">;</span>

<span class="token punctuation">}</span>
</code></pre>
<p>This method has been passed two parameters, integer a and integer b, this is how you provide input for a subroutine (method). </p>
<p>The return statement stops the subroutine and (depending on the output type) can output a value of the same type as the output type you put at the top E.G:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token comment" spellcheck="true">//int is the output type</span>

<span class="token keyword">int</span> <span class="token function">Foo</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>

    <span class="token comment" spellcheck="true">//So you return an integer</span>
    <span class="token keyword">return</span> <span class="token number">0</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>
</code></pre>
<p>That is how you can receive output from a subroutine.
But in some cases you do not need to return a value, for instance:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">void</span> <span class="token function">Foo</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>

    <span class="token comment" spellcheck="true">//the output type is void, so you don't return a value</span>
    <span class="token keyword">return</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>
</code></pre>
<p>In this case the return statement simply stops the subroutine and does not give any output, so if you assigned a variable to the output of a void, the variables value would be null, E.G:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">public</span> <span class="token keyword">static</span> <span class="token keyword">int</span> <span class="token function">Main</span><span class="token punctuation">(</span><span class="token keyword">string</span><span class="token punctuation">[</span><span class="token punctuation">]</span> args<span class="token punctuation">)</span>
<span class="token punctuation">{</span>

    <span class="token comment" spellcheck="true">// a = null</span>
    <span class="token keyword">int</span> a <span class="token operator">=</span> <span class="token function">Foo</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>

<span class="token keyword">void</span> <span class="token function">Foo</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>

    <span class="token keyword">return</span><span class="token punctuation">;</span>

<span class="token punctuation">}</span>
</code></pre>
<h2>Exercise</h2>
<p>Write a method that divides two numbers (provided as parameters). Tip: you will need to use the modifiers <code class="  language-csharp"><span class="token keyword">public</span></code> and <code class="  language-csharp"><span class="token keyword">static</span></code>.</p>
            </div>

</center>


<iframe width="100%" height="475" src="https://dotnetfiddle.net/Widget/CsScript" frameborder="0"></iframe>