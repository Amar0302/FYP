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
                
                    <h1>Class Properties</h1>
                    <hr>
                
                <p>Building off of what we learned about basic classes, we can start working with properties. We know we create an instance of a class using:</p>
<pre class="  language-csharp"><code class="  language-csharp">myClass myObject <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">myClass</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
</code></pre>
<p>Additionally we know these objects have properties or member variables defined like so:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">class</span> <span class="token class-name">Shape</span><span class="token punctuation">{</span>
  <span class="token keyword">public</span> <span class="token keyword">string</span> Type <span class="token operator">=</span> <span class="token string">"square"</span><span class="token punctuation">;</span>
  <span class="token keyword">public</span> <span class="token keyword">int</span> Sides <span class="token operator">=</span> <span class="token number">4</span><span class="token punctuation">;</span>
  <span class="token keyword">public</span> <span class="token keyword">int</span> Sidelength <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">;</span>
  <span class="token keyword">public</span> <span class="token keyword">double</span> Area <span class="token operator">=</span> <span class="token number">1</span><span class="token punctuation">;</span>
<span class="token punctuation">}</span>
</code></pre>
<p>The above code defines a class named Shape with 4 different properties. In this case our shape is a square with 4 sides of length 1 and an area of 1. What if we wanted a triangle instead of a square? We can do that by allowing our class to accept different values for its properties. Because we will be defining the values of the properties later, we don't have to assign them here. We give Shape properties without values like this:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">class</span> <span class="token class-name">Shape</span><span class="token punctuation">{</span>
  <span class="token keyword">public</span> <span class="token keyword">string</span> Type<span class="token punctuation">;</span>
  <span class="token keyword">public</span> <span class="token keyword">int</span> Sides<span class="token punctuation">;</span>
  <span class="token keyword">public</span> <span class="token keyword">int</span> Sidelength<span class="token punctuation">;</span>
  <span class="token keyword">public</span> <span class="token keyword">double</span> Area<span class="token punctuation">;</span>  
<span class="token punctuation">}</span>
</code></pre>
<p>Now to give those properties values we need to define something called a constructor in our class. Constructors use the same name of their class. Adding an empty constructor, our class looks like this:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">class</span> <span class="token class-name">Shape</span><span class="token punctuation">{</span>
  <span class="token keyword">public</span> <span class="token keyword">string</span> Type<span class="token punctuation">;</span>
  <span class="token keyword">public</span> <span class="token keyword">int</span> Sides<span class="token punctuation">;</span>
  <span class="token keyword">public</span> <span class="token keyword">int</span> Sidelength<span class="token punctuation">;</span>
  <span class="token keyword">public</span> <span class="token keyword">double</span> Area<span class="token punctuation">;</span>  
  <span class="token keyword">public</span> <span class="token function">Shape</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span><span class="token punctuation">}</span> 
<span class="token punctuation">}</span>
</code></pre>
<p>Let's give the constructor parameters and set the values of our properties to the passed in parameters:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">class</span> <span class="token class-name">Shape</span><span class="token punctuation">{</span>
  <span class="token keyword">public</span> <span class="token keyword">string</span> Type<span class="token punctuation">;</span>
  <span class="token keyword">public</span> <span class="token keyword">int</span> Sides<span class="token punctuation">;</span>
  <span class="token keyword">public</span> <span class="token keyword">int</span> Sidelength<span class="token punctuation">;</span>
  <span class="token keyword">public</span> <span class="token keyword">double</span> Area<span class="token punctuation">;</span>  
  <span class="token keyword">public</span> <span class="token function">Shape</span><span class="token punctuation">(</span><span class="token keyword">string</span> type<span class="token punctuation">,</span> <span class="token keyword">int</span> sides<span class="token punctuation">,</span> <span class="token keyword">int</span> sidelength<span class="token punctuation">,</span> <span class="token keyword">double</span> area<span class="token punctuation">)</span><span class="token punctuation">{</span>
    Type <span class="token operator">=</span> type<span class="token punctuation">;</span>
    Sides <span class="token operator">=</span> sides<span class="token punctuation">;</span>
    Sidelength <span class="token operator">=</span> sidelength<span class="token punctuation">;</span>
    Area <span class="token operator">=</span> area<span class="token punctuation">;</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
</code></pre>
<p>Now when we create an instance of Shape, we can give it parameters using the constructor! Putting it all together looks something like this:</p>
<pre class="  language-csharp"><code class="  language-csharp"><span class="token keyword">using</span> System<span class="token punctuation">;</span>
<span class="token keyword">class</span> <span class="token class-name">Shape</span><span class="token punctuation">{</span>
  <span class="token keyword">public</span> <span class="token keyword">string</span> Type<span class="token punctuation">;</span>
  <span class="token keyword">public</span> <span class="token keyword">int</span> Sides<span class="token punctuation">;</span>
  <span class="token keyword">public</span> <span class="token keyword">int</span> Sidelength<span class="token punctuation">;</span>
  <span class="token keyword">public</span> <span class="token keyword">double</span> Area<span class="token punctuation">;</span>  
  <span class="token keyword">public</span> <span class="token function">Shape</span><span class="token punctuation">(</span><span class="token keyword">string</span> type<span class="token punctuation">,</span> <span class="token keyword">int</span> sides<span class="token punctuation">,</span> <span class="token keyword">int</span> sidelength<span class="token punctuation">,</span> <span class="token keyword">double</span> area<span class="token punctuation">)</span><span class="token punctuation">{</span>
    Type <span class="token operator">=</span> type<span class="token punctuation">;</span>
    Sides <span class="token operator">=</span> sides<span class="token punctuation">;</span>
    Sidelength <span class="token operator">=</span> sidelength<span class="token punctuation">;</span>
    Area <span class="token operator">=</span> area<span class="token punctuation">;</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
<span class="token keyword">class</span> <span class="token class-name">MainClass</span><span class="token punctuation">{</span>
  <span class="token keyword">public</span> <span class="token keyword">static</span> <span class="token keyword">void</span> <span class="token function">Main</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">{</span>
    Shape square <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">Shape</span><span class="token punctuation">(</span><span class="token string">"square"</span><span class="token punctuation">,</span> <span class="token number">4</span><span class="token punctuation">,</span> <span class="token number">1</span><span class="token punctuation">,</span> <span class="token number">1</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    Shape bigsquare <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">Shape</span><span class="token punctuation">(</span><span class="token string">"square"</span><span class="token punctuation">,</span> <span class="token number">4</span><span class="token punctuation">,</span> <span class="token number">2</span><span class="token punctuation">,</span> <span class="token number">4</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    Shape triangle <span class="token operator">=</span> <span class="token keyword">new</span> <span class="token class-name">Shape</span><span class="token punctuation">(</span><span class="token string">"triangle"</span><span class="token punctuation">,</span> <span class="token number">3</span><span class="token punctuation">,</span> <span class="token number">3</span><span class="token punctuation">,</span> <span class="token number">3.9</span><span class="token punctuation">)</span><span class="token punctuation">;</span>
    Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span><span class="token string">"A {0} with {1} sides of length {2} has an area of {3}"</span><span class="token punctuation">,</span> square<span class="token punctuation">.</span>Type<span class="token punctuation">,</span> square<span class="token punctuation">.</span>Sides<span class="token punctuation">,</span> square<span class="token punctuation">.</span>Sidelength<span class="token punctuation">,</span> square<span class="token punctuation">.</span>Area<span class="token punctuation">)</span><span class="token punctuation">;</span>
    Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span><span class="token string">"A {0} with {1} sides of length {2} has an area of {3}"</span><span class="token punctuation">,</span> bigsquare<span class="token punctuation">.</span>Type<span class="token punctuation">,</span> bigsquare<span class="token punctuation">.</span>Sides<span class="token punctuation">,</span> bigsquare<span class="token punctuation">.</span>Sidelength<span class="token punctuation">,</span> bigsquare<span class="token punctuation">.</span>Area<span class="token punctuation">)</span><span class="token punctuation">;</span>
    Console<span class="token punctuation">.</span><span class="token function">WriteLine</span><span class="token punctuation">(</span><span class="token string">"A {0} with {1} sides of length {2} has an area of {3}"</span><span class="token punctuation">,</span> triangle<span class="token punctuation">.</span>Type<span class="token punctuation">,</span> triangle<span class="token punctuation">.</span>Sides<span class="token punctuation">,</span> triangle<span class="token punctuation">.</span>Sidelength<span class="token punctuation">,</span> triangle<span class="token punctuation">.</span>Area<span class="token punctuation">)</span><span class="token punctuation">;</span>
  <span class="token punctuation">}</span>
<span class="token punctuation">}</span>
</code></pre>
<p>Executing the above code will print the following:</p>
<p>A square with 4 sides of length 1 has an area of 1
A square with 4 sides of length 2 has an area of 4
A triangle with 3 sides of length 3 has an area of 3.9</p>
<h2>Exercise</h2>
<p>Make a class <code class="  language-csharp">Vehicle</code> with the properties <code class="  language-csharp"><span class="token keyword">string</span> Type</code>, <code class="  language-csharp"><span class="token keyword">int</span> NumTires</code>, <code class="  language-csharp"><span class="token keyword">int</span> Year</code>, and <code class="  language-csharp"><span class="token keyword">bool</span> Runs</code>, and create:</p>
<p>A <code class="  language-csharp">car</code>: <code class="  language-csharp">Type <span class="token operator">=</span> car</code> with <code class="  language-csharp">NumTires <span class="token operator">=</span> <span class="token number">4</span></code> from <code class="  language-csharp">Year <span class="token operator">=</span> <span class="token number">2000</span></code> which <code class="  language-csharp">Runs <span class="token operator">=</span> <span class="token keyword">true</span></code>
An <code class="  language-csharp">oldcar</code>: <code class="  language-csharp">Type <span class="token operator">=</span> car</code> with <code class="  language-csharp">NumTires <span class="token operator">=</span> <span class="token number">4</span></code> from <code class="  language-csharp">Year <span class="token operator">=</span> <span class="token number">1980</span></code> which <code class="  language-csharp">Runs <span class="token operator">=</span> <span class="token keyword">false</span></code>
A <code class="  language-csharp">bike</code>: <code class="  language-csharp">Type <span class="token operator">=</span> bike</code> with <code class="  language-csharp">NumTires <span class="token operator">=</span> <span class="token number">2</span></code> from <code class="  language-csharp">Year <span class="token operator">=</span> <span class="token number">2017</span></code> which <code class="  language-csharp">Runs <span class="token operator">=</span> <span class="token keyword">true</span></code></p>
<p>Watch out for the capitalizations! </p>
            </div>

</center>


<iframe width="100%" height="475" src="https://dotnetfiddle.net/Widget/CsScript" frameborder="0"></iframe>