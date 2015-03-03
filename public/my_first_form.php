<?php

var_dump($_GET);
var_dump($_POST)

?>

<html>
<head>My First HTML Form
	<style>
	body {
		text-align: center;
	}
	</style>
</head>
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
				<label for="mailing_list">
		    		<input type="checkbox" id="mailing_list" name="mailing_list" value="yes">
		    		<label for="mailing_list">Save copy to your sent folder?</label>
				</label>
			</p>
			<p>
				<button type="submit">Send!</button>
			</p>
		</form>
		<h2>My Multiple Choice Test</h2>
			<form method "POST" action="my_first_form.php">
				
				<p>What is pyroclastic flow?</p>
				<label>
			    	<input type="radio" id="q1a" name="q1" value="current">
			    	a river current
				</label>
				<label>
			    	<input type="radio" id="q1b" name="q1" value="lava">
			    	lava flow
				</label>
				<label>
			    	<input type="radio" id="q1c" name="q1" value="runoff">
			    	runoff
				</label>
				<label>
			    	<input type="radio" id="q1d" name="q1" value="ashgas">
			    	ash and gas flow
				</label>
				<p>
				<button type="submit">Send!</button>
				</p>
				<p>I've got one less (___?) without you.</p>
				<label>
			    	<input type="radio" id="q2a" name="q2" value="problem">
			    	Problem
				</label>
				<label>
			    	<input type="radio" id="q2b" name="q2" value="question">
			    	Question
				</label>
				<label>
			    	<input type="radio" id="q2c" name="q2" value="answer">
			    	Answer
				</label>
				<label>
			    	<input type="radio" id="q2d" name="q2" value="statement">
			    	Statement
				</label>
				<p>
				<button type="submit">Send!</button>
				</p>
				<p>What are you learning in CodeUp?</p>
					<label><input type="checkbox" id="code1" name="os[]" value="php"> Php</label>
					<label><input type="checkbox" id="code2" name="os[]" value="html"> HTML</label>
					<label><input type="checkbox" id="code3" name="os[]" value="css"> CSS</label>
				<p>
					<button type="submit">Send!</button>
				</p>
				<label for="os">What color rhymes with new?</label>
					<select id="yes" name="yes" multiple>
   						<option value="blue">Blue</option>
  						<option value="red">Red</option>
  						<option value="green">Green</option>
					</select>
					<p>
					<button type="submit">Send!</button>
					</p>
			</form>
			<h2>Select Testing</h2>
			<form>
				<label for="transmission">Do you like Spaghetti?</label>
					<select id="transmission" name="transmission">
    					<option value="1">Yes</option>
    					<option value="0">No</option>
					</select>
				<p>
					<button type="submit">Send!</button>
				</p>
				<label for="os">Isn't spaghetti the best?</label>
					<select id="yes" name="yes" multiple>
   						<option value="it's the best">It's the best!</option>
  						<option value="who doesn't agree?">Who doesn't agree?</option>
  						<option value="of course!">Of course it is!</option>
					</select>
					<p>
					<button type="submit">Send!</button>
					</p>
			</form>
	</body>
</html>

