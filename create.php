<?php 

include('db/user.php');

if(isset($_POST['firstname']) && $_POST['firstname'] !== ""){
	
	create($req, $db);
	

header('Location: show.php');


}

?>

