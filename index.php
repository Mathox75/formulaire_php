<?php
include('db/db.php');
include('db/user.php');



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	
	<div class="form-div">
		<h1 class="title"> Formulaire de réservation</h1>
		<br>

		<form method="post" action="create.php" class="op">
			<div class="form_group">
				<label for="firstname">Prénom :</label>
				<input type="text" name="firstname" placeholder="votre prénom">
			
				<label for="lastname">Nom :</label>
				<input type="text" name="lastname" placeholder="votre nom">
			</div>

			<br>

			<div class="form_group">
				<label for="email">Email :</label>
				<input type="email" name="email" placeholder="votre email">
			</div>
			
			<br>

			<div class="form_group">
				<label for="address">Adresse :</label>
				<input type="text" name="address" placeholder="votre adresse">
			</div>

			<br>

			<div class="form_group">
				<label for="phone">Numéro de téléphone :</label>
				<input type="number" name="phone" placeholder="votre numéro">
			</div>

			<br>

			<div class="form_group">
				<label for="birthdate">Date de naissance :</label>
				<input type="number" name="birthdate" placeholder="JJ" class="birth">/<input type="number" name="birthdate" placeholder="MM" class="birth">/<input type="number" name="birthdate" placeholder="YYYY" class="birth">
			</div>

			<br>

			<div class="form_group">
				<label for="peopleNumber">Nombre de personne(s) :</label>
				<select name="peopleNumber">
					<option value="-"<?php if (isset($_POST["peopleNumber"]) && $_POST['peopleNumber'] === "-") echo " selected"; ?>>-</option>
					<option value="1"<?php if (isset($_POST["peopleNumber"]) && $_POST['peopleNumber'] === "1") echo " selected"; ?>>1</option>
					<option value="2"<?php if (isset($_POST["peopleNumber"]) && $_POST['peopleNumber'] === "2") echo " selected"; ?>>2</option>
					<option value="3"<?php if (isset($_POST["peopleNumber"]) && $_POST['peopleNumber'] === "3") echo " selected"; ?>>3</option>
					<option value="4"<?php if (isset($_POST["peopleNumber"]) && $_POST['peopleNumber'] === "4") echo " selected"; ?>>4</option>
					<option value="5"<?php if (isset($_POST["peopleNumber"]) && $_POST['peopleNumber'] === "5") echo " selected"; ?>>5</option>
					<option value="6"<?php if (isset($_POST["peopleNumber"]) && $_POST['peopleNumber'] === "6") echo " selected"; ?>>6</option>
					<option value="7"<?php if (isset($_POST["peopleNumber"]) && $_POST['peopleNumber'] === "7") echo " selected"; ?>>7</option>
					<option value="8"<?php if (isset($_POST["peopleNumber"]) && $_POST['peopleNumber'] === "8") echo " selected"; ?>>8</option>
					<option value="9"<?php if (isset($_POST["peopleNumber"]) && $_POST['peopleNumber'] === "9") echo " selected"; ?>>9</option>
					<option value="10"<?php if (isset($_POST["peopleNumber"]) && $_POST['peopleNumber'] === "10") echo " selected"; ?>>10</option>
				</select>
			</div>

			<br>

			<div class="form_group">
				<label for="departureDate">Date d'arrivée :</label>
				<input type="text" name="departureDate" placeholder="votre date d'arrivée">
			</div>

			<br>

			<div class="form_group">
				<label for="arrivalDate">Date de départ :</label>
				<input type="text" name="arrivalDate" placeholder="votre date de départ">
			</div>

			<br>

			<div class="form_group">
	            <label for="bedroom">Type de chambre :</label>
				<input type="text" name="bedroom" placeholder="ex: suite, familliale, régulière etc...">
			</div>

            <br>

            <div class="form_group">
				<label for="requirements">Suggestions :</label>
				<textarea type="text" class="req" name="requirements" placeholder="Suggestions (facultatif)" cols="50" rows="10"></textarea>
			</div>

			<br>
			<br>

            <div class="form_submit">
				<button type="submit"  class="send">Faire une Réservation</button>
			</div>
		</form>
	</div>
</body>
</html>

?>

