<?php
try {
    $dbd=new PDO('mysql:host=localhost; dbname=spabeauty2', 'root', '');
    //echo "Connexion reussi";
    
} catch (Exception $th) {
    echo'Error'.$th->getMessage();
}
?>