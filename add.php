<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	
<table>
<form action='add_p.php' method='post'>
	<tr>
		<td>ISBN:</td><td><input type='text' name='isbn'></td>
	</tr>
        <tr>
                <td>Title:</td><td><input type='text' name='title'></td>
        </tr>
        <tr>
                <td>Author:</td><td><input type='text' name='author'></td>
        </tr>
        <tr>
                <td>Genre:</td><td><input type='text' name='genre'></td>
        </tr>
        <tr>
                <td>Publish Date(Month:Year):</td><td><input type='text' name='pubDate'></td>
        </tr>
        <tr>
                <td>Copies Sold:</td><td><input type='text' name='numSold'></td>
        </tr>
	<tr>
		<td colspan='2'><input type='submit' value='Add Record'></td>
</form>
</table>
<br>
<?php
        error_reporting(0);
        $error = $_GET['error'];
        echo "$error<br>";
?>
<a href='index.php'>Go Back</a>
</body>
</html>