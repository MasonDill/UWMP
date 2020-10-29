<?php
include_once 'dbh.php';
?>


<html>
	<head>
	</head>

	<body>
	<p align="center">
		<?php drawContacts(); ?>
	</p>

	Welcome <?php echo $_POST["name"]; ?><br>
	Your email address is: <?php echo $_POST["email"]; ?>

	</body>

</html>