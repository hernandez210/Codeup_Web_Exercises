<?php
	var_dump($_GET);
?>
<!DOCTYPE HTML>
	<html>
		<head>
			<title>Form without forms</title>
		</head>
		<body>
			<p><h1>
				Forms_without_forms
			</h1></p>
				<a href="?greeting=Hello+codeup!">click me!</a>
			<p>
				<form method="GET" action="/my_first_form.php">
				<label for="username">Username: </label>
				<input type="text" name="username" placeholder="username" id="username">
				<label for="password">Password:</label>
				<input type="password" name="password" placeholder="password">
			</p>
			<p>
				<textarea name="comment"> this is my comment</textarea> <br>
				<label> is Codeup awesome? 
				<input type="checkbox" value="of course" name="codeup_awesome" checked="checked">
				</label>
			<p>
				do you like these foods:
			</p>
				<label>meat <input type="checkbox" name="meat" value="yes"</label>
				<label>yogurt <input type="checkbox" name="yogurt" value="yes"</label>
			<p>
				<input type="submit">
			</p>
			</p>
	
				</form>
	</html>