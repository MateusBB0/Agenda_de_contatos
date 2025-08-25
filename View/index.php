<?php
use Controllers\ListController;
require("../Controllers/ListController.php");
include_once("layout/searchContact.php");


$readContact = new ListController;
$_SESSION['read'] = $readContact->showContacts();

foreach ($readContact->showContacts() as $info) {
    echo $info['nome'] ."<br>";
    echo $info['email'] ."<br>";
    echo $info['telefone'] ."<br>";
    echo "<form action='edit.php' method='POST'>
    
        <input type='hidden' value=".$info['id']." name='id'>
        <input type='submit' value='Editar'>
        
        </form>";

    echo "<form action='../Controllers/ListController.php' method='POST'>
        <input type='hidden' value='".$info['id']."' name='id'>
        <input type='hidden' name ='action' value='deleteSubmit'>
        <input type='submit' value='Deletar'>
        
        </form>";
    echo "<hr>";
}   

echo "<div>
    <a href='newContact.php'>Adicionar um novo contato</a>
</div>";

?>