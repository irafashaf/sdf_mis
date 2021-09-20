<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SDF MIS</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body style="width: 50%; margin: auto">

	<p>Welcome to IPRC Ngoma SDF Program</p>
	<p> SDF is a program implemented by IPRC Ngoma to upskill the youth in IT related field If you want to register a new cooperative, 
		<!-- <a href="#">  click here.</a>  -->
	</p>

			

		<p> Fill this form to apply: </p>

		<form name="new_applicant_form" action="registration_confirmation.php" method="post">
			<p> First name: <input type="text" name="first_name" class="form-control"> </p>
			<p> Last name:  <input type="text" name="" class="form-control"></p>
			<p> Gender: <br>
				<input type="radio" id="female" name="gender" value="Female">
				<label for="female">Female</label><br>
				<input type="radio" id="male" name="gender" value="Male">
				<label for="male">Male</label><br>
			<p> Date of birth: <input type="date" name="date_of_birth"></p>
			<p>Highest academic level 
				<select name="highest_academic_level">
					<option value="primary">Primary</option>
					<option value="secondary">Secondary</option>
					<option value="university">University</option>
				</select>
			</p>
			<p> Province: <input type="text" name="province" class="form-control"></p>
			<p> District: <input type="text" name="district" class="form-control"></p>
			<p> Sector:   <input type="text" name="sector" class="form-control"></p>
			<p> Cell:     <input type="text" name="cell" class="form-control"></p>
			<p> Email:    <input type="email" name="email" class="form-control"></p>
			<p> Phone:    <input type="Phone" name="Phone" class="form-control"></p>
			<p> Password: <input type="password" name="password" class="form-control"></p>
			<p> Learning Option: <br>
				<input type="radio" id="iot" name="learning_option" value="1">
				<label for="iot">IOT</label><br>
				<input type="radio" id="sod" name="learning_option" value="2">
				<label for="sod">Software Development</label><br>
				<input type="radio" id="civil_engineering" name="learning_option" value="3">
				<label for="civil_engineering">Civil Engineering</label>
			</p>
			<p><input type="submit" name="submit" value="Submit" class="btn btn-primary"></p>
		</form>
	</div>
</body>
</html>