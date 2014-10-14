<?php

var_dump($_GET);
var_dump($_POST)

?>

<html>
<head>My First HTML Form</head>
<body>

<form method="POST" action="my_first_form.php">
	<p>
		<label for="Username">Username</label>
		<input id="Username" name="Username" type="text">
	</p>
	<p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password">
    </p>
    <p>
        <input type="submit">
    </p>
</form>

</body>
</html>
