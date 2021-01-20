<?php 





$clients = $db->query('SELECT * FROM clients');

if(isset($_POST['lastname']) && isset($_POST['firstname'])  && isset($_POST['email'])  && isset($_POST['peopleNumber'])  && isset($_POST['address'])  && isset($_POST['phone'])  && isset($_POST['birthdate']) && isset($_POST['departureDate'])  && isset($_POST['arrivalDate'])  && isset($_POST['bedroom'])  && isset($_POST['requirements'])) {

$clients = [
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
];

}

function create($db) {
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
                'requirements' => $_POST['requirements']);
}

function delete($del) {
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

function update($upd) {
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
