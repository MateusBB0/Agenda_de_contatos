<?php
require('connection.php');
$title = $_GET['search'];
include("../View/layout/searchContact.php");
use Controllers\Connection;
class SearchController{

public function showSearchBar(){
if(isset($_GET['search'])){
    $search = $_GET['search'];
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
        
    }else{
       header("location:../View/index.php");
    }
    
    }
}
}
$search = new SearchController();
$search->showSearchBar();
?>

