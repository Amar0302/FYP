<?php 
$db_host = 'localhost'; // Server Name
$db_user = 'phanl'; // Username
$db_pass = 'PLe9aVqXmJ'; // Password
$db_name = 'phanl'; // Database Name


$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); 
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
} 
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

//if(isset($_GET["orderBy"]))  {
//	header("Location: view.php?orderBy='orderBy'");
//}
?>
<html>
<head>
	<title>Account Details</title>
	<link type= "text/css" rel = "stylesheet" href = "css/mainstylesheet.css" />

	<style type="text/css">

table {
	margin: auto;
	font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
	font-size: 12px;
}
table td {
	transition: all .5s;
}

/* Table */
.data-table {
	border-collapse: collapse;
	font-size: 14px;
	min-width: 537px;
}

.data-table th, 
.data-table td {
	border: 1px solid #e1edff;
	padding: 7px 17px;
}
.data-table caption {
	margin: 7px;
}

/* Table Header */
.data-table thead th {
	background-color: green;
	color: #FFFFFF;
	border-color: #6ea1cc !important;
	text-transform: uppercase;
}

/* Table Body */
.data-table tbody td {
	color: #353535;
}
.data-table tbody td:first-child,
.data-table tbody td:nth-child(4),
.data-table tbody td:last-child {
	text-align: right;
}

.data-table tbody tr:nth-child(odd) td {
	background-color: #fffff0;
}
.data-table tbody tr:hover td {
	background-color: #ffffa2;
	border-color: #ffff0f;
}

/* Table Footer */
.data-table tfoot th {
	background-color: #e5f5ff;
	text-align: right;
}
.data-table tfoot th:first-child {
	text-align: left;
}
.data-table tbody td:empty
{
	background-color: #ffcccc;
}
.get-data-body {
	font-size: 15px;
	color: #343d44;
	font-family: "segoe-ui", "open-sans", tahoma, arial;
	padding: 0;
	margin: 0;
}



	</style> 
</head>
<body class = "get-data-body">
				
				</select>
			</p>
	<table class="data-table">
		<caption class="title">User Statistics</caption>
		<thead>
			<tr>
				<th>user id</th>
				<th>Module Name</th>
				<th>Module Score (/10)</th>
				<th>Time Taken (min)</th>
				
			</tr>
		</thead>
		<tbody>
		<?php
			$no 	= 1;
			$total 	= 0;
			
        		 
			while ($row = mysqli_fetch_array($query)) {
				$userid = $row['userid'];
				$sql = mysql_query("SELECT *  FROM userscores");
				$imageRow = mysql_fetch_array($sql);
				$viewpicture = '';

				if(!empty($imageRow['imageId'])) 
					$viewpicture = $imageRow['imageId'];

				echo "<tr>
						<td>{$row['userid']}</td>
						<td>{$row['modulename']}</td>
						<td>{$row['userscore']}</td>
						<td>{$row['usertime']}</td>
					

					</tr>";
				$no++;
			} 
			$count = mysqli_num_rows($query);
			if ($count == 0 ) {
				echo '<center><p style=color:red ;> <i><strong>No results, please try again </i></strong></p></center>';
			}	
		?>
		</tbody>
		<tfoot>
			</tfoot>
	</table>

</body>
</html>