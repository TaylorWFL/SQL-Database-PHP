<html>
<head>
	<title>Books Database</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script>
		function addRecord()
		{
			document.theForm.action='add.php';
        		document.theForm.submit();
		}
		function updateRecord()
		{
                        document.theForm.action='update.php';
                        document.theForm.submit();
		}

        function deleteRecord()
        {
                document.theForm.action='delete.php';
                document.theForm.submit();
        }
	</script>
</head>
<body>
	<h1 align="center">Books Database</h1>
	<form name='theForm' method='post'>
		<input type='button' value='Add Record' onClick='addRecord()'>
		<input type='button' value='Delete Record' onClick='deleteRecord()'>
		<input type='button' value='Update Record' onClick='updateRecord()'>

		<?php
				$mysql_access = mysql_connect("localhost", "n00687362", 'Drakos$$h');
				if (!$mysql_access)
      				{
      					echo "Connection failed.";
      					exit;
     				}
				mysql_select_db("n00687362");				

				$query = "select * from Books";
	
				$result = mysql_query($query);

				echo "<table border='1' cellpadding='5'>";
				echo "<tr>";
				echo "<th>Select</th><th>ISBN</th><th>Title</th><th>Author</th><th>Genre</th><th>Publish Date</th><th>Copies Sold</th>";
				echo "</tr>";

				while ($record = mysql_fetch_array($result)) {
					
					echo "<tr>";
					echo "<td><input type='radio' value='$record[0]' name='isbn'></td>";
					echo "<td>$record[0]</td>";
                    echo "<td>$record[1]</td>";
                    echo "<td>$record[2]</td>";
                    echo "<td>$record[3]</td>";
                    echo "<td>$record[4]</td>";
                    echo "<td>$record[5]</td>";
					echo "</tr>";
				}
				echo "</table>";

				mysql_close($mysql_access);
		?>	
	</form>
	<br>
	<?php
	error_reporting(0);
	$error = $_GET['error'];
    echo "$error<br>";
?>
<br>
<a href='../index.html'>Go Back to Homepage</a>
<br>
<a href='img.html'>ER Diagram</a>
</body>
</html>