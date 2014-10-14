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
		<input id="Username" name="Username" type="text" placeholder="Username">
	</p>
	<p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Password">
    </p>
    <p>
		<label for="name">Name</label>
        <input id="name" name="name" type="text" placeholder="Enter your Name">
     </p>
     <p>
     	<button type="submit">Let's a go!</button>
    </p>
</form>

</body>
</html>
