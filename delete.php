<?php 

include('user.php');


if (isset($_GET['id'])) {
    include('db/connection.php');
    include('db/user.php');

    if (isset($_POST('delete'))) {
        echo 'Voulez vous vraiment supprimer votre réservation ?';
        if(isset($_POST('validate'))){
            delete($_GET['id'], $db);
            header('Location: index.php');
        }
        if(isset($_POST('refuse'))){
            header('Location: index.php');
        }
    }

} 

else {
    echo 'Error : id manquant'; die();
}

delete($id, $db);

?>