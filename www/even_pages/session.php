<?php
session_start();

$_SESSION['var'] = 'value';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Titre de ma page</title>
	</head>
	<body>
		<h1>var_dump($_SESSION)</h1>
		<pre><?php var_dump($_SESSION); ?></pre>
		<p>$_SESSION['var'] =  <?php echo $_SESSION['var']; ?><br /></p>
	</body>
</html>
