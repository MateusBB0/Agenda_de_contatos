<?php
use Controllers\ListController;
// Definir o título
$title = "Agenda";
// include_once("layout/top_bar.php");
?>

<body>

<?php

require("../Controllers/ListController.php");
include_once("layout/searchContact.php");


$readContact = new ListController;
$_SESSION['read'] = $readContact->showContacts();
include("layout/table_bar.php");
foreach ($readContact->showContacts() as $info) {
    // echo $info['nome'] ."<br>";
    // echo $info['email'] ."<br>";
    // echo $info['telefone'] ."<br>";
    // echo "<form action='edit.php' method='POST'>
    
    //     <input type='hidden' value=".$info['id']." name='id'>
    //     <input type='submit' value='Editar'>
        
    //     </form>";

    // echo "<form action='../Controllers/ListController.php' method='POST'>
    //     <input type='hidden' value='".$info['id']."' name='id'>
    //     <input type='hidden' name ='action' value='deleteSubmit'>
    //     <input type='submit' value='Deletar'>
        
    //     </form>";
    // echo "<hr>";
    
        
    echo ' 
        <tr class="tr border-white border-b-2">
            <td class="px-10 py-10 text-xl">'. $info['nome'] . '</td>
            <td class="px-10 py-10 text-xl">'.$info['email'].'</td>
            <td class="px-10 py-10 text-xl">'.$info['telefone'].'</td>
            <td>
                <form action="edit.php" method="POST">
                <input type="hidden" value='.$info['id'].' name="id">
                <input type="submit" class=" mx-7.5 py-2.5 px-2.5 text-xl text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700" value="Editar">
                </form>
            
            </td>
            <td>
                <form action="../Controllers/ListController.php" method="POST">
                <input type="hidden" value='.$info['id'].' name="id">
                <input type="hidden" name ="action" value="deleteSubmit">
                <input type="submit" class="mx-7.5 px-2.5 py-2.5 text-xl focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" value="Deletar">
                </form>
            </td>             
            
        </tr>

    ';
} 
?>
  
</table>
    </div>

<?php
echo "<div>
    <a href='newContact.php'>Adicionar um novo contato</a>
</div>";

?>

</body>
</html>
