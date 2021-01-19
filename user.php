<?php 

include('db/db.php');

$req = $db->query('SELECT * FROM clients');


function create($clients, $db) {
	$req = $db->prepare('INSERT INTO clients(lastname, firstname, email, peopleNumber, address, phone, birthdate, departureDate , arrivalDate, bedroom, requirements) VALUES (:lastname, :firstname, :email, :peopleNumber, :address, :phone, :birthdate, :departureDate, :arrivalDate, :bedroom, :requirements)');
	$req->execute([
        'lastname' => $_POST['lastname'],
        'firstname' => $_POST['firstname'],
        'email' => $_POST['email'],
        'peopleNumber' => $_POST['peopleNumber'],
        'address' => $_POST['address'],
        'phone' => $_POST['phone'],
        'birthdate' => $_POST['birthdate'],
        'departureDate' => $_POST['departureDate'],
        'arrivalDate' => $_POST['arrivalDate'],
        'bedroom' => $_POST['bedroom'],
        'requirements' => $_POST['requirements']
    ]);

}

function delete($id, $db) {
	$del = $db->prepare('DELETE FROM clients WHERE id=:id');
	$del->execute([
		'id' => $_POST['id'],
        'lastname' => $_POST['lastname'],
        'firstname' => $_POST['firstname'],
        'email' => $_POST['email'],
        'peopleNumber' => $_POST['peopleNumber'],
        'address' => $_POST['address'],
        'phone' => $_POST['phone'],
        'birthdate' => $_POST['birthdate'],
        'departureDate' => $_POST['departureDate'],
        'arrivalDate' => $_POST['arrivalDate'],
        'bedroom' => $_POST['bedroom'],
        'requirements' => $_POST['requirements']
	]);
}

function update($id, $db) {
	$upd = $db->prepare('UPDATE clients SET lastname=:lastname, firstname=:firstname, email=:email, peopleNumber=:peopleNumber, address=:address, phone=:phone, birthdate=:birthdate, departureDate=:departureDate, arrivalDate=:arrivalDate,  bedroom=:bedroom WHERE id=:id');
    $upd->execute([
        'id' => $_POST['id'],
        'lastname' => $_POST['lastname'],
        'firstname' => $_POST['firstname'],
        'email' => $_POST['email'],
        'peopleNumber' => $_POST['peopleNumber'],
        'address' => $_POST['address'],
        'phone' => $_POST['phone'],
        'birthdate' => $_POST['birthdate'],
        'departureDate' => $_POST['departureDate'],
        'arrivalDate' => $_POST['arrivalDate'],
        'bedroom' => $_POST['bedroom'],
        'requirements' => $_POST['requirements']
]);
}



?>