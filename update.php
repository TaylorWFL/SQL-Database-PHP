<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style.css">
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

	$query = "Select * from Books where ISBN=" . $isbn;
	$result = mysql_query($query);
	$record = mysql_fetch_array($result);

	$isbn = $record[0];
	$title = $record[1];
	$author = $record[2];
	$genre = $record[3];
	$pubDate = $record[4];
	$numSold = $record[5];

?>
<table>
<form action='update_p.php' method='post'>
	<tr>
		<td>ISBN:</td><td><input type='text' name='isbn' <?php echo "value='$isbn'"; ?>></td>
	</tr>
        <tr>
                <td>Title:</td><td><input type='text' name='title' <?php echo "value='$title'"; ?>></td>
        </tr>
        <tr>
                <td>Author:</td><td><input type='text' name='author' <?php echo "value='$author'"; ?>></td>
        </tr>
        <tr>
                <td>Genre:</td><td><input type='text' name='genre' <?php echo "value='$genre'"; ?>></td>
        </tr>
        <tr>
                <td>Publish Date(Month Year):</td><td><input type='text' name='pubDate' <?php echo "value='$pubDate'"; ?>></td>
        </tr>
        <tr>
                <td>Copies Sold:</td><td><input type='text' name='numSold' <?php echo "value='$numSold'"; ?>></td>
        </tr>
	<tr>
		<td colspan='2'><input type='submit' value='Update Record'></td>
		<input type='hidden' <?php echo "value='$isbn'"; ?> name='oldIsbn'>
	</tr>
</form>
</table>

<br>
<a href='index.php'>Go Back</a>

</body>
</html>