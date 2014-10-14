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
     	<button type="submit">Let's a go!</button>
    </p>
</form>

<form method="POST" action="my_first_form.php">
	<p>
		<label for="to">To:</label>
		<input id="to" name="to" type="text" placeholder="Enter Recipient">
	</p>
	<p>
		<label for="from">From:</label>
		<input id="from" name="from" type="text" placeholder="Enter Sender">
	</p>
	<p>
		<label for="subject">Subject:</label>
		<input id="subject" name="subject" type="text" placeholder="Enter Subject">
	</p>
	<p>
		<textarea id="body" name="body" type="text" placeholder="Enter Email Body"></textarea>
	</p>
	<p>
	<button type="submit">Send!</button>
	</p>
</body>
</html>
