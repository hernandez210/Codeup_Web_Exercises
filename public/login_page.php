<?php
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sign In Form</title>
		<link rel="stylesheet" href="/css/login_page.css">
	</head>
	<body>
		<h1>LOGIN PAGE</h1>
			<nav>
				<ul>
					<li>login
				<a href="#">Login</a>
					</li>
					<li>forgot password
						<a href="#">Forgot password</a></li>
					<li>forgot username
						<a href="#">Forgot username</a></li>
				</ul>
			</nav>
		<header>
		<h2>New member Login</h2>
		</header>
			<p>
				User Login
			</p>
		<h5>Answer the following questions to become a member</h5>
			<p>
				<form method="POST" action="/login_page.php">            
					<label for="username">Username</label>
					<input id="username" name="username" type="text">
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password">
			</p>
			<p>
				<label for="password">Re-enter password</label>
				<input id="password" name="password" type="password">
					<button type="button" value="login">Check Username</button>
				</form>
			</p>
			<p>
				Send me an email and let me know what you think.
			</p>
			<form>
				<p>
					<label for="to">To</label>
					<input id="to" name="to" type="text">
				</p>
				<p>
					<label for="from">From</label>
					<input id="from" name="from" type="text">
				</p>
				<p>
					<label for="subject">Subject</label>
					<input id="subject" name="subject" type="text">	
						<textarea id="email_body" name="email_body" placeholder="Type text here!!!!!"></textarea>
				</p>
				<p>
				<button type="button">Submit</button>
				</p>
			</form>
		<h2>Multiple Choice Questions</h2>
			<p>
				Do you love me?
			</p>
			<label>
				<input type="checkbox" name="q1" value="yes">Yes
			</label>
			<label>
				<input type="checkbox" name="q1" value="no" >No
			</label>
			<p>
				Do you smile?
			</p>
			<p>
				<label>
					<input type="radio" name="q1" value="yes">Yes
				</label>
				<label>
					<input type="radio" name="q1" value="no" >No
				</label>
			</p>
			Do you smell it?
			</p>
			<p>
				<label>
					<input type="radio" name="q1" value="yes">Yes
				</label>
				<label>
					<input type="radio" name="q1" value="no" >No
				</label>
					<button type="button">Submit Answers</button>
			</p>
			<p>
				<label for="kids">How many kids do you want?</label>
					<select id="kids" name="kids" multiple>
						<option>0</option>
						<option>2</option>
						<option>4</option>
						<option>6</option>
						</select>
				<button type"button">Submit</button>
			</p>
	</body>
</html>