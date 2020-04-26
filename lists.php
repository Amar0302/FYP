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
                
                    <h1>Lists</h1>
                    <hr>
                
                <p>Lists in C# are very similar to lists in Java. A list is an object which holds variables in a specific order.
The type of variable that the list can store is defined using the generic syntax. Here is an example of
defining a list called <code class="  language-csharp">numbers</code> which holds integers.</p>
<pre class="  language-csharp"><code class="  language-csharp">List<span class="token operator">&lt;</span><span class="token keyword">int</span><span class="token operator">&gt;</span> numbers <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">List</span><span class="token operator">&lt;</span><span class="token keyword">int</span><span class="token operator">&gt;</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<p>The difference between a list and an array is that lists are dynamic sized, while arrays have a fixed size. When
you do not know the amount of variables your array should hold, use a list instead.</p>
<p>Once the list is initialized, we can begin inserting numbers into the list.</p>
<pre class="  language-csharp"><code class="  language-csharp">List<span class="token operator">&lt;</span><span class="token keyword">int</span><span class="token operator">&gt;</span> numbers <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">List</span><span class="token operator">&lt;</span><span class="token keyword">int</span><span class="token operator">&gt;</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
numbers<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token number">1</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
numbers<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token number">2</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
numbers<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token number">3</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<p>We can also add a whole array to a list using the <code class="  language-csharp">AddRange</code> function:</p>
<pre class="  language-csharp"><code class="  language-csharp">List<span class="token operator">&lt;</span><span class="token keyword">int</span><span class="token operator">&gt;</span> numbers <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">List</span><span class="token operator">&lt;</span><span class="token keyword">int</span><span class="token operator">&gt;</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token keyword">int</span><span class="token punctuation">[</span><span class="token punctuation">]</span> array <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">int</span><span class="token punctuation">[</span><span class="token punctuation">]</span> <span class="token punctuation">{</span> <span class="token number">1</span><span class="token punctuation">,</span> <span class="token number">2</span><span class="token punctuation">,</span> <span class="token number">3</span> <span class="token punctuation">}</span><span class="token punctuation">;</span>
numbers<span class="token punctuation">.</span><span class="token function">AddRange</span><span class="token punctuation">(</span>array<span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<h3>Removing from a list</h3>
<p>We can use <code class="  language-csharp">Remove</code> to remove an item from a list by specifying the item we want to remove.</p>
<pre class="  language-csharp"><code class="  language-csharp">List<span class="token operator">&lt;</span><span class="token keyword">string</span><span class="token operator">&gt;</span> fruits <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">List</span><span class="token operator">&lt;</span><span class="token keyword">string</span><span class="token operator">&gt;</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token comment" spellcheck="true">// add fruits</span>
fruits<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"apple"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
fruits<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"banana"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
fruits<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"orange"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token comment" spellcheck="true">// now remove the banana</span>
fruits<span class="token punctuation">.</span><span class="token function">Remove</span><span class="token punctuation">(</span><span class="token string">"banana"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span>fruits<span class="token punctuation">.</span>Count<span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<p>We can also use <code class="  language-csharp">RemoveAt</code> to specify an index of an item to remove. In our case, to remove
the banana, we will use the index 1.</p>
<pre class="  language-csharp"><code class="  language-csharp">List<span class="token operator">&lt;</span><span class="token keyword">string</span><span class="token operator">&gt;</span> fruits <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">List</span><span class="token operator">&lt;</span><span class="token keyword">string</span><span class="token operator">&gt;</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
<span class="token comment" spellcheck="true">// add fruits</span>
fruits<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"apple"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
fruits<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"banana"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
fruits<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"orange"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token comment" spellcheck="true">// now remove the banana</span>
fruits<span class="token punctuation">.</span><span class="token function">RemoveAt</span><span class="token punctuation">(</span><span class="token number">1</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span>fruits<span class="token punctuation">.</span>Count<span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<h3>Concatenating lists</h3>
<p>We can use <code class="  language-csharp">AddRange</code> to join between lists.</p>
<pre class="  language-csharp"><code class="  language-csharp">List<span class="token operator">&lt;</span><span class="token keyword">string</span><span class="token operator">&gt;</span> food <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">List</span><span class="token operator">&lt;</span><span class="token keyword">string</span><span class="token operator">&gt;</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
food<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"apple"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
food<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"banana"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

List<span class="token operator">&lt;</span><span class="token keyword">string</span><span class="token operator">&gt;</span> vegetables <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">List</span><span class="token operator">&lt;</span><span class="token keyword">string</span><span class="token operator">&gt;</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
vegetables<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"tomato"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
vegetables<span class="token punctuation">.</span><span class="token function">Add</span><span class="token punctuation">(</span><span class="token string">"carrot"</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

food<span class="token punctuation">.</span><span class="token function">AddRange</span><span class="token punctuation">(</span>vegetables<span class="token punctuation">)</span><span class="token punctuation">;</span>
Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span>food<span class="token punctuation">.</span>Count<span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<h2>Exercise</h2>
<p>Construct a list of the first 5 prime numbers (2, 3, 5, 7, 11) called <code class="  language-csharp">primeNumbers</code>.</p>
            </div>

</center>


<iframe width="100%" height="475" src="https://dotnetfiddle.net/Widget/CsScript" frameborder="0"></iframe>