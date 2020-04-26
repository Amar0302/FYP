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
                
                    <h1>Dictionaries</h1>
                    <hr>
                
                <p>Dictionaries are special lists, whereas every value in the list has a key which is also a variable. A good example
for a dictionary is a phone book.</p>
<pre class="  language-csharp"><code class="  language-csharp">Dictionary<span class="token operator">&lt;</span><span class="token keyword">string</span><span class="token punctuation">,</span> <span class="token keyword">long</span><span class="token operator">&gt;</span> phonebook <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">Dictionary</span><span class="token operator">&lt;</span><span class="token keyword">string</span><span class="token punctuation">,</span> <span class="token keyword">long</span><span class="token operator">&gt;</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
phonebook<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"Alex"</span><span class="token punctuation">,</span> <span class="token number">4154346543</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
phonebook<span class="token punctuation">[</span><span class="token string">"Jessica"</span><span class="token punctuation">]</span> <span class="token operator">=</span> <span class="token number">4159484588</span><span class="token punctuation">;</span>
</code></pre>
<p>Notice that when defining a dictionary, we need to provide a generic definition with two types - the type of
the key and the type of the value. In this case, the key is a string whereas the value is an integer.</p>
<p>There are also two ways of adding a single value to the dictionary, either using the brackets operator
or using the <code class="  language-csharp">Add</code> method.</p>
<p>To check whether a dictionary has a certain key in it, we can use the <code class="  language-csharp">ContainsKey</code> method:</p>
<pre class="  language-csharp"><code class="  language-csharp">Dictionary<span class="token operator">&lt;</span><span class="token keyword">string</span><span class="token punctuation">,</span> <span class="token keyword">long</span><span class="token operator">&gt;</span> phonebook <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">Dictionary</span><span class="token operator">&lt;</span><span class="token keyword">string</span><span class="token punctuation">,</span> <span class="token keyword">long</span><span class="token operator">&gt;</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
phonebook<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"Alex"</span><span class="token punctuation">,</span> <span class="token number">415434543</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
phonebook<span class="token punctuation">[</span><span class="token string">"Jessica"</span><span class="token punctuation">]</span> <span class="token operator">=</span> <span class="token number">415984588</span><span class="token punctuation">;</span>

<span class="token keyword">if</span> <span class="token punctuation">(</span>phonebook<span class="token punctuation">.</span><span class="token function">ContainsKey</span><span class="token punctuation">(</span><span class="token string">"Alex"</span><span class="token punctuation">)</span><span class="token punctuation">)</span>
<span class="token punctuation">{</span>
    Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span><span class="token string">"Alex's number is "</span> <span class="token operator">+</span> phonebook<span class="token punctuation">[</span><span class="token string">"Alex"</span><span class="token punctuation">]</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token punctuation">}</span>
</code></pre>
<p>To remove an item from a dictionary, we can use the <code class="  language-csharp">Remove</code> method. Removing an item from
a dictionary by its key is fast and very efficient. When removing an item from a <code class="  language-csharp">List</code> using its value,
the process is slow and inefficient, unlike the dictionary <code class="  language-csharp">Remove</code> function.</p>
<pre class="  language-csharp"><code class="  language-csharp">Dictionary<span class="token operator">&lt;</span><span class="token keyword">string</span><span class="token punctuation">,</span> <span class="token keyword">long</span><span class="token operator">&gt;</span> phonebook <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">Dictionary</span><span class="token operator">&lt;</span><span class="token keyword">string</span><span class="token punctuation">,</span> <span class="token keyword">long</span><span class="token operator">&gt;</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
phonebook<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"Alex"</span><span class="token punctuation">,</span> <span class="token number">415434543</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
phonebook<span class="token punctuation">[</span><span class="token string">"Jessica"</span><span class="token punctuation">]</span> <span class="token operator">=</span> <span class="token number">415984588</span><span class="token punctuation">;</span>

phonebook<span class="token punctuation">.</span><span class="token function">Remove</span><span class="token punctuation">(</span><span class="token string">"Jessica"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span>phonebook<span class="token punctuation">.</span>Count<span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<h2>Exercise</h2>
<p>Create a new dictionary called <code class="  language-csharp">inventory</code> that holds 3 names of fruits, and the amount they are in stock.</p>
<p>Here is the inventory specification:</p>
<ul>
<li>3 of type <code class="  language-csharp">apple</code></li>
<li>5 of type <code class="  language-csharp">orange</code></li>
<li>2 of type <code class="  language-csharp">banana</code></li>
</ul>
            </div>

</center>


<iframe width="100%" height="475" src="https://dotnetfiddle.net/Widget/CsScript" frameborder="0"></iframe>