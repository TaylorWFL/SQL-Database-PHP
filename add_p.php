<html>
<head>
	
</head>
<body>
<?php
		$isbn = (int) $_POST['isbn'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $genre = $_POST['genre'];
        $pubDate = $_POST['pubDate'];
        $numSold = (int) $_POST['numSold'];

	$mysql_access = mysql_connect("localhost", "n00687362", 'Drakos$$h');
	if (!$mysql_access)
      	{
      		echo "Connection failed.";
      		exit;
     	}
	mysql_select_db("n00687362");

	if($isbn != 0){
		if($numSold != 0){
			$query = "INSERT INTO Books (ISBN, Author, Title, Genre, PublishDate, numSold) VALUES";
			$query = $query . "('$isbn', '$author', '$title', '$genre', '$pubDate', '$numSold')";
			mysql_query($query);
			mysql_close($mysql_access);
			header("Location:index.php");
		}
		else{
			mysql_query($query);
			mysql_close($mysql_access);
			header("Location:add.php?error=Copies Sold is not a number or is empty.");
		}
		
	}
	else{
		mysql_query($query);
		mysql_close($mysql_access);
		header("Location:add.php?error=ISBN is not a number or is empty.");
	}
?>
</body>
</html>