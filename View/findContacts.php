<?php 
use Controllers\SearchController;
require("../Controllers/SearchController.php");

$search = new SearchController();
$search->showSearchBar();

if ($prepare_search->rowCount() > 0) {
       echo"<section class='max-w-6xl mx-auto px-4 mt-8' >";
        foreach ($prepare_search as $contact) {
           echo '<div class="bg-gray-900 rounded-xl shadow-md p-5 mb-4 border border-gray-800 hover:bg-gray-800 transition " >';
           echo "<p class=text-lg font-semibold text-white mb-1'> {$contact['nome']}</p>";
           echo "<p class='text-sm text-gray-300'>{$contact['email']}</p>";
           echo "<p class='text-sm text-gray-400'>{$contact['telefone']}</p>";
           echo "</div>";
           
        }
        echo"</section>";

    }else{
      header("location:../View/index.php");

   }

?>
<center><a href='index.php' class=" px-4 py-2 text-sm rounded-md border border-gray-600 text-gray-300 hover:bg-gray-800 transition">Home page</a></center>
</body>
