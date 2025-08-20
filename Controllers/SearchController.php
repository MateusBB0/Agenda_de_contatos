<?php
use Controller\Connection;
require('connection.php');

include("../View/layout/searchContact.php");

if(isset($_POST['search'])){
    $search = $_POST['search'];
    $sql_search = "SELECT * FROM contatos WHERE nome = '".$search."' OR email = '".$search."' ";
    
    $prepare_search = Connection::getConn()->prepare($sql_search);
    $prepare_search->execute();
    if ($prepare_search->rowCount() > 0) {
        foreach ($prepare_search as $contact) {
           echo "<div>";
           echo "<p>{$contact['nome']}</p>";
           echo "<p>{$contact['email']}</p>";
           echo "<p>{$contact['telefone']}</p>";
           echo "</div><hr>";
           
        }
    }

}

?>