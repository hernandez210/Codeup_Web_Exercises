<?php
	var_dump($_POST);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>codeup.dev</title>
			<link rel="stylesheet" href="salmon.css">
	</head>
	<body>
		<p>
			<h1>My First_Form</h1>
		</p>
		<form method="POST" action="/my_first_form.php">
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="username">
			</p>		
			<p>
				<label for="password" >Password</label>
				<input id="password" name="password" type="password" placeholder="type password">
			</p>
			<p>
				<input id="username" name="user_id" type="hidden" value="12345">
				<input type="submit" value="Login">
			</p>
			<p>
				<textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="type here"></textarea>
			</p>
		</form>
		
		<label>
			Want to compose an email?
			<input type="checkbox" name="email">
		</label>
		<p>
			<label for="username">
				TO
				<input id="username" name="username" type="text" placeholder="username">
			</label>
		</p>
		<p>
			<label for="from">From</label>
			<input id="from" name="from" type="text">
		</p>
		<p>
			<label for="subject">Subject</label>
			<input id="subject" name="subject" type="text">
		</p>
		<textarea name="email body"></textarea>
			<input type="submit">
				 <form>
				 	<h1> Multiple Choice</h1>
					 	<label> Do I sit in the front?
					 		<input type="radio" name="q1" value="yes">yes
					 	</label>
					 	<label>
				 			<input type="radio" name="q1" value="no">no
				 		</label>
				 			<p>
				 				<label> Do I own a MAC?
							 		<input type="radio" name="q1" value="yes">yes
							 	</label>
							 	<label>
							 		<input type="radio" name="q1" value="no">no
							 	</label>
							 	<label>
									<input type="radio" name="q1" value="who cares">who cares
								</label>
							</p>
							<p>
								<label>Are you also hungry?</label>
									 <input type="radio" name="q2" value="yes">yes
								 </label>
								 <label>
								 	<input type="radio" name="q2" value="no">no
								 </label>
								 <label>
								 	<input type="radio" name="q2" value="kinda of">kinda of
								 </label>
							</p>
							<p>
								<label> How many slices can you eat?</label>
									<label for="slices"></label>
										<select name="slices" id="slices" multiple>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3"selected>3</option>
											<option value="4">4</option>
										</select>
							</p>
								<label>which is your fav?</label>
									<label for="color">Color?</label>
										<select name="color" id="color" multiple>
											<option value="1"> red </option>
											<option value="2">blue </option>
											<option value="3"selected> yellow </option>
											<option value="4"> pink</option>
											<option value="5"> black</option>
												<input type="submit">
										</select>
			
				</form>
				<form>
					<h3>Select testing</h3>
						<p>
							Do u like codeup?
						</p>
							<label for="codeup"</label>
								<select name="answers" id="answers">
									<option value="1">Yes</option>
									<option value="0" selected>NO</option>
								</select>
								<input type="submit">
				</form>
		</body>
</html>
