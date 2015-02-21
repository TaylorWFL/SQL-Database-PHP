<html>
<head>
	
</head>
<body>
	<?php
	$isbn = $_POST['isbn'];

	$mysql_access = mysql_connect("localhost", "n00687362", 'Drakos$$h');
	if (!$mysql_access)
      	{
      		echo "Connection failed.";
      		exit;
     	}
	mysql_select_db("n00687362");

	$query = "DELETE FROM Books WHERE ISBN=" . $isbn;

	mysql_query($query);

	mysql_close($mysql_access);
	
	
	header("Location:index.php");
	?>
</body>
</html>