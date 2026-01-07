<?php
use Controllers\ListController;
// Definir o título
$title = "Agenda";
?>

<body class="bg-gray-950 text-gray-200">

<?php

require("../Controllers/ListController.php");
include_once("layout/searchContact.php");


$readContact = new ListController;
$_SESSION['read'] = $readContact->showContacts();
include("layout/table_bar.php");
foreach ($readContact->showContacts() as $info) {
            
    echo ' 
        <tr class="border-b border-gray-800 hover:bg-gray-800 transition">
        <td class="px-6 py-4 text-sm md:text-base text-gray-100">'.$info['email'].'</td>
        <td class="px-6 py-4 text-sm md:text-base text-gray-100">'. $info['nome'] . '</td>
            <td class="px-6 py-4 text-sm md:text-base text-gray-100">'.$info['telefone'].'</td>
            <td>
                <form action="edit.php" method="POST">
                <input type="hidden" value='.$info['id'].' name="id">
                <input type="submit" class=" px-4 py-2 mr-3 text-sm font-medium rounded-md bg-emerald-600 text-white hover:bg-emerald-700 focus:outline-none focus:ring-4 focus:ring-emerald-300 transition" value="Editar">
                </form>
            
            </td>
            <td>
                <form action="../Controllers/ListController.php" method="POST">
                <input type="hidden" value='.$info['id'].' name="id">
                <input type="hidden" name ="action" value="deleteSubmit">
                <input type="submit" class="px-4 py-2 mr-3 text-sm font-medium rounded-md bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-300 transition" value="Deletar">
                </form>
            </td>             
            
        </tr>

    ';
} 
?>
  
</table>
    </div>

<?php
// echo "<div>
//     <a href='newContact.php' class='focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800'>+ Novo contato</a>
// </div>";

?>

</body>
</html>
