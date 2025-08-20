<?php
use Controllers\ListController;

require("../Controllers/ListController.php");

$readContact = new ListController;

foreach ($_SESSION['read'] as $info) {
    echo $info['nome'] ."<br>";
    echo $info['email'] ."<br>";
    echo $info['telefone'] ."<br>";
    echo "<form action='edit.php' method='POST'>
    
        <input type='hidden' value=".$info['id']." name='id'>
        <input type='submit' value='Editar'>
        
        </form>";
    echo "<hr>";
}   

echo "<div>
    <a href='newContact.php'>Adicionar um novo contato</a>
</div>";

?>