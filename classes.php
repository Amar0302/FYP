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
                
                    <h1>Basic Classes</h1>
                    <hr>
                
                <p>In C#, everything is an object, made from a class. Classes are defined with curly brackets, like this:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">class</span> <span class="token class-name">myClass</span><span class="token punctuation">{</span>
<span class="token punctuation">}</span>
</code></pre>
<p>The above example is a very basic class definition, containing no properties or methods. Now, we have a class, but how do we use it?
The answer is create an instance of that class. You can do this with the <code class="  language-csharp"><span class="token keyword">new</span></code> keyword, like this:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">class</span> <span class="token class-name">myClass</span><span class="token punctuation">{</span>
<span class="token punctuation">}</span>
<span class="token keyword">class</span> <span class="token class-name">MainClass</span><span class="token punctuation">{</span>
  <span class="token keyword">public</span> <span class="token keyword">static</span> <span class="token keyword">void</span> <span class="token function">Main</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span>
    myClass myObject <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">myClass</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
</code></pre>
<p>Now, the class doesn't do anything, so why use it? Next, we will give the class some properties like this:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">using</span> System<span class="token punctuation">;</span>
<span class="token keyword">class</span> <span class="token class-name">myClass</span><span class="token punctuation">{</span>
  <span class="token keyword">public</span> <span class="token keyword">string</span> test <span class="token operator">=</span> <span class="token string">"This works!"</span><span class="token punctuation">;</span>
<span class="token punctuation">}</span>
<span class="token keyword">class</span> <span class="token class-name">MainClass</span><span class="token punctuation">{</span>
  <span class="token keyword">public</span> <span class="token keyword">static</span> <span class="token keyword">void</span> <span class="token function">Main</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span>
    myClass myObject <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">myClass</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span>myObject<span class="token punctuation">.</span>test<span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
</code></pre>
<p>The above code will print "This works!" to the screen. First, in <code class="  language-csharp">myClass</code>, we declare a string variable named "test" with the <code class="  language-csharp"><span class="token keyword">public</span></code> modifier.
Until you learn more advanced programming, you will have to use to <code class="  language-csharp"><span class="token keyword">public</span></code> modifier in separate classes. Then we make an instance of <code class="  language-csharp">myClass</code>.
Finally, we write out the value of <code class="  language-csharp">test</code> using the dot operator on the instance of <code class="  language-csharp">myClass</code>.</p>
<h2>Exercise</h2>
<p>Make a class <code class="  language-csharp">car</code> with the properties <code class="  language-csharp">numTires <span class="token operator">=</span> <span class="token number">4</span></code>, <code class="  language-csharp">year <span class="token operator">=</span> <span class="token number">2000</span></code>, and <code class="  language-csharp">runs <span class="token operator">=</span> <span class="token keyword">true</span></code>, and create three instances of it: <code class="  language-csharp">car1</code>, <code class="  language-csharp">car2</code>, and <code class="  language-csharp">car3</code>.</p>
            </div>

</center>


<iframe width="100%" height="475" src="https://dotnetfiddle.net/Widget/CsScript" frameborder="0"></iframe>