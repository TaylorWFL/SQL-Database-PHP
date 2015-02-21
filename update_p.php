<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<?php
		$isbn = (int) $_POST['isbn'];
		$oldIsbn = $_POST['oldIsbn'];
		$title = $_POST['title'];
        $author = $_POST['author'];
        $genre = $_POST['genre'];
        $pubDate = $_POST['pubDate'];
        $numSold = (int) $_POST['numSold'];
        $error1 = "Copies Sold must be a number greater than 0 and cannot be empty. Record was not updated.<br> Please try again.";
        $error2 = "ISBN must be a number greater than 0 and cannot be empty. Record was not updated.<br> Please try again.";

	$mysql_access = mysql_connect("localhost", "n00687362", 'Drakos$$h');
	if (!$mysql_access)
      	{
      		echo "Connection failed.";
      		exit;
     	}
	mysql_select_db("n00687362");

	$query = "UPDATE Books ";
	$query = $query . "SET ISBN='$isbn', Title='$title', Author='$author', Genre='$genre', PublishDate='$pubDate', numSold=$numSold";
	$query = $query . " WHERE ISBN=$oldIsbn";

	if($isbn > 0){
		if($numSold > 0){
			echo $query;
			mysql_query($query);
			mysql_close($mysql_access);
			header("Location:index.php"); // Everything works
		}
		else{ //Copies Sold is not a Number
			mysql_close($mysql_access);
			header("Location:index.php?error=" . $error1);
		}
	}
	else{ // ISBN is not a number
		mysql_close($mysql_access);
		header("Location:index.php?error=" . $error2);
	}
?>
</body>
</html>