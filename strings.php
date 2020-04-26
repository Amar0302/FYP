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
                
                    <h1>Strings</h1>
                    <hr>
                
                <p>To define a string, use quotes:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">string</span> myString <span class="token operator">=</span> <span class="token string">"A string."</span><span class="token punctuation">;</span>
</code></pre>
<p>We can also use a Java object approach to create a string. In C#, a <code class="  language-csharp"><span class="token keyword">string</span></code> is an alias for the <code class="  language-csharp">String</code> object.</p>
<pre class="  language-csharp"><code class="  language-csharp">String myString <span class="token operator">=</span> <span class="token string">"A string."</span><span class="token punctuation">;</span>
</code></pre>
<p>To create an empty string, we can either define an empty string or use <code class="  language-csharp">String<span class="token punctuation">.</span>Empty</code>, which is preferred.</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">string</span> emptyString <span class="token operator">=</span> String<span class="token punctuation">.</span>Empty<span class="token punctuation">;</span>
<span class="token keyword">string</span> anotherEmptyString <span class="token operator">=</span> <span class="token string">""</span><span class="token punctuation">;</span>
</code></pre>
<p>To concatenate between strings, use the plus operator:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">string</span> firstName <span class="token operator">=</span> <span class="token string">"Eric"</span><span class="token punctuation">;</span>
<span class="token keyword">string</span> lastName <span class="token operator">=</span> <span class="token string">"Smith"</span><span class="token punctuation">;</span>
<span class="token keyword">string</span> fullName <span class="token operator">=</span> firstName <span class="token operator">+</span> <span class="token string">" "</span> <span class="token operator">+</span> lastName<span class="token punctuation">;</span>
</code></pre>
<p>To add one string to another, use the <code class="  language-csharp"><span class="token operator">+</span><span class="token operator">=</span></code> operator:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">string</span> sentence <span class="token operator">=</span> <span class="token string">"I like to play "</span><span class="token punctuation">;</span>
sentence <span class="token operator">+</span><span class="token operator">=</span> <span class="token string">"chess."</span><span class="token punctuation">;</span>
Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span>sentence<span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<h3>ToString function</h3>
<p>To cast a non-string object into a string, use the built in 'object.ToString()' function. Casting with '(string)' will only work on objects that are already strings, so the ToString function is necessary when turning something like an int into a string.</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">int</span> integer <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">;</span>
<span class="token keyword">string</span> ourString <span class="token operator">=</span> <span class="token string">"Something to be replaced by an int"</span><span class="token punctuation">;</span>
ourString <span class="token operator">=</span> integer<span class="token punctuation">.</span><span class="token function">ToString</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
System<span class="token punctuation">.</span>Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span>ourString<span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<h3>String formatting</h3>
<p>To format a string, use the <code class="  language-csharp">String<span class="token punctuation">.</span>Format</code> function. Each additional argument to the function
can be referred to in the string using the brackets operator with the index number. For example,
<code class="  language-csharp"><span class="token punctuation">{</span><span class="token number">1</span><span class="token punctuation">}</span></code> refers to the second argument provided for the format function.</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">int</span> x <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">,</span> y <span class="token operator">=</span> <span class="token number">2</span><span class="token punctuation">;</span>
<span class="token keyword">int</span> sum <span class="token operator">=</span> x <span class="token operator">+</span> y<span class="token punctuation">;</span>
<span class="token keyword">string</span> sumCalculation <span class="token operator">=</span> String<span class="token punctuation">.</span><span class="token function">Format</span><span class="token punctuation">(</span><span class="token string">"{0} + {1} = {2}"</span><span class="token punctuation">,</span> x<span class="token punctuation">,</span> y<span class="token punctuation">,</span> sum<span class="token punctuation">)</span><span class="token punctuation">;</span>
Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span>sumCalculation<span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<h3>Substring</h3>
<p>The <code class="  language-csharp">Substring</code> string method returns a part of the string, beginning from the index
specified as the argument. Substring also accepts a maximum length for the substring.</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">string</span> fullString <span class="token operator">=</span> <span class="token string">"full string"</span><span class="token punctuation">;</span>
<span class="token keyword">string</span> partOfString <span class="token operator">=</span> fullString<span class="token punctuation">.</span><span class="token function">Substring</span><span class="token punctuation">(</span><span class="token number">5</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token keyword">string</span> shorterPart <span class="token operator">=</span> fullString<span class="token punctuation">.</span><span class="token function">Substring</span><span class="token punctuation">(</span><span class="token number">5</span><span class="token punctuation">,</span> <span class="token number">3</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span>partOfString<span class="token punctuation">)</span><span class="token punctuation">;</span>
Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span>shorterPart<span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<h3>Search and replace</h3>
<p>The <code class="  language-csharp">Replace</code> string method replaces an occurrence of a string with another string.</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">string</span> name <span class="token operator">=</span> <span class="token string">"John Doe"</span><span class="token punctuation">;</span>
<span class="token keyword">string</span> newName <span class="token operator">=</span> name<span class="token punctuation">.</span><span class="token function">Replace</span><span class="token punctuation">(</span><span class="token string">"John"</span><span class="token punctuation">,</span> <span class="token string">"Eric"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span>newName<span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<h3>Index of</h3>
<p>The <code class="  language-csharp">IndexOf</code> string method finds the first occurrence of a string in a larger string. If
the string is not found, -1 is returned.</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">string</span> fruit <span class="token operator">=</span> <span class="token string">"apple,orange,banana"</span><span class="token punctuation">;</span>
Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span><span class="token string">"Found orange in position: "</span> <span class="token operator">+</span> fruit<span class="token punctuation">.</span><span class="token function">IndexOf</span><span class="token punctuation">(</span><span class="token string">"orange"</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span><span class="token string">"Found lemon in position: "</span> <span class="token operator">+</span> fruit<span class="token punctuation">.</span><span class="token function">IndexOf</span><span class="token punctuation">(</span><span class="token string">"lemon"</span><span class="token punctuation">)</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<h2>Exercise</h2>
<p>Use string formatting to format the variables <code class="  language-csharp">firstName</code>, <code class="  language-csharp">lastName</code> and <code class="  language-csharp">age</code> to form
the following sentence into the string <code class="  language-csharp">sentence</code>:</p>
<p><code class="  language-csharp">John Doe <span class="token keyword">is</span> <span class="token number">27</span> years old<span class="token punctuation">.</span></code></p>
            </div>

</center>


<iframe width="100%" height="475" src="https://dotnetfiddle.net/Widget/CsScript" frameborder="0"></iframe>