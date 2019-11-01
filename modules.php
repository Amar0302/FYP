<head>
<body>

     <title>Modules </title>
     </head>
     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <?php
	include 'navigation.php';
	?>

  <style>
  body {
  margin: 0 auto;
  max-width: 80em;
  padding: 1em 0;
}

.grid {
  /* Grid Fallback */
  display: flex;
  flex-wrap: wrap;
  
  /* Supports Grid */
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  grid-auto-rows: minmax(150px, auto);
  grid-gap: 1em;
}

.module {
  /* Demo-Specific Styles */
  background: #eaeaea;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 250px;
  
  /* Flex Fallback */
  margin-left: 5px;
  margin-right: 5px;
  flex: 1 1 200px;
}

/* If Grid is supported, remove the margin we set for the fallback */
@supports (display: grid) {
  .module {
    margin: 0;
  }
}

{
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}


/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 100%;
  display: none; /* Hide columns by default */
}

/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

/* Add a grey background color on mouse-over */
.btn:hover {
  background-color: #ddd;
}

/* Add a dark background color to the active button */
.btn.active {
  background-color: #666;
   color: white;
}
  </style>

     </section>
 <br></br>
 <br></br>


 <div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('firstyear')"> First Year</button>
  <button class="btn" onclick="filterSelection('secondyear')"> Second Year</button>
  <button class="btn" onclick="filterSelection('thirdyear')"> Third Year</button>
</div>
<br></br>

 
 
 <div class="grid">
  <div class ="column firstyear">
  <a class="module">Analysis</a>
  </div>
  <div class ="column firstyear">
  <a class="module">Linear Algebra</a>
  </div>
  <div class ="column firstyear">
  <a class="module">Mathematical Thinking</a>
  </div>
  <div class ="column firstyear">
  <a class="module">Mathematical Methods</a>
  </div>
  <div class ="column firstyear">
  <a class="module">Computing and Numerical Methods</a>
  </div>
  <div class ="column firstyear">
  <a class="module">Geometry and Groups</a>
  </div>
  <div class ="column firstyear">
  <a class="module">Probability and Statistics</a>
  </div>
  <div class ="column firstyear">
  <a class="module">Mechanics</a>
  </div>
  <div class ="column firstyear">
  <a class="module">Analysis 2</a>
  </div>
  <div class ="column firstyear">
  <a class="module">Mathematical Methods 2</a>
  </div>
  <div class ="column secondyear">
  <a class="module">Probability Theory</a>
  </div>
  <div class ="column secondyear">
  <a class="module">Applied Statistics</a>
  </div>
  <div class ="column secondyear">
  <a class="module">Complex Variables</a>
  </div>
  <div class ="column secondyear">
  <a class="module">ODEs & Calculus of Variations</a>
  </div>
  <div class ="column secondyear">
  <a class="module">Introduction to Stochastic Processes</a>
  </div>
  <div class ="column thirdyear">
  <a class="module">Number Theory</a>
  </div>
  <div class ="column thirdyear">
  <a class="module">Graph Theory</a>
  </div>
  <div class ="column thirdyear">
  <a class="module">Cryptography and Network Security</a>
  </div>
  <div class ="column thirdyear">
  <a class="module">Vibration and Waves</a>
  </div>
  <div class ="column thirdyear">
  <a class="module">Game Theory</a>
  </div>
  <div class ="column thirdyear">
  <a class="module">Medical Statistics</a>
  </div>
</div>

<script src="js/boxes.js"></script>
</body>
