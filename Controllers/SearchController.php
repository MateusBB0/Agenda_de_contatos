<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="../src/style.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0&icon_names=person_book" />
</head>
<body class="bg-gray-950">
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
       echo"<section class='center_section inline-block w-2xl'>";
        foreach ($prepare_search as $contact) {
           echo '<div class="grid content-center dark:bg-gray-800 max-w-sm p-6 rounded-md hover:bg-neutral-secondary-medium">';
           echo "<p class='mb-3 text-2xl font-semibold tracking-tight text-heading leading-8'> {$contact['nome']}</p>";
           echo "<p class='text-body'>{$contact['email']}</p>";
           echo "<p class='text-body'>{$contact['telefone']}</p>";
           echo "</div><br>";
           
        }
        echo"</section>";

    }else{
       header("location:../View/index.php");
    }
    
    }
}
}
$search = new SearchController();
$search->showSearchBar();
?>

</body>