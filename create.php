<?php
include('db/db.php');

$result = $db->query('SELECT * FROM clients');

if(isset($_POST['valider']) && isset($_POST['lastname']) && isset($_POST['firstname'])){



$insertion = $db->prepare('INSERT INTO clients(lastname,firstname,email,peopleNumber,address,phone,birthdate,departureDate, arrivalDate, bedroom, requirements) VALUES(:lastname, :firstname, :email, :peopleNumber, :address, :phone, :birthdate, :departureDate, :arrivalDate, :bedroom, :requirements)');
create($insertion);
header('Location: index.php');
}

function create($insertion){


	$insertion->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
	$insertion->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
	$insertion->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
	$insertion->bindValue(':peopleNumber', $_POST['peopleNumber'], PDO::PARAM_INT);
	$insertion->bindValue(':address', $_POST['address'], PDO::PARAM_STR);
	$insertion->bindValue(':phone', $_POST['phone'], PDO::PARAM_INT);
	$insertion->bindValue(':birthdate', $_POST['birthdate'], PDO::PARAM_INT);
	$insertion->bindValue(':departureDate', $_POST['departureDate'], PDO::PARAM_INT); 
	$insertion->bindValue(':arrivalDate', $_POST['arrivalDate'], PDO::PARAM_INT);
	$insertion->bindValue(':bedroom', $_POST['bedroom'], PDO::PARAM_INT);
	$insertion->bindValue(':requirements', $_POST['requirements'], PDO::PARAM_INT);
	$insertion->execute();
}





