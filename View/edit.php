<?php

use Controllers\Connection;
use Model\Contacts;
require("layout/top_bar.php");
require("../Controllers/connection.php");

    session_start();

    $id = $_POST['id'];
    $_SESSION['id'] = $id;

    $selectContact = "SELECT * FROM contatos WHERE id = :id";
    $startActionContact = Connection::getConn()->prepare($selectContact);
    $startActionContact->bindParam(':id', $id, PDO::PARAM_INT);
    $startActionContact->execute();

    if($startActionContact->rowCount() >0){
            $arrayResult = $startActionContact->fetchAll(\PDO::FETCH_ASSOC);
            //  $arrayResult;
        }else{
            echo "Houve uma falha na exposição dos contatos";
        }


?>
<?php foreach($arrayResult as $info): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .pointer{
            cursor: pointer;
        }

    </style>
</head>
<body>
    

<div class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900 px-4">
    <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6">
        
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6">
            Editar contato
        </h2>

        <form action="../Controllers/ListController.php" method="POST" class="space-y-4">

            <div>
                <label class="block text-sm text-gray-600 dark:text-gray-300 mb-1">Nome</label>
                <input type="text" name="nome"
                    value="<?= $info['nome']; ?>"
                    class="w-full rounded-md border border-gray-300 dark:border-gray-600
                    bg-transparent px-3 py-2 text-gray-800 dark:text-white
                    focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>

            <div>
                <label class="block text-sm text-gray-600 dark:text-gray-300 mb-1">Email</label>
                <input type="email" name="email"
                    value="<?= $info['email']; ?>"
                    class="w-full rounded-md border border-gray-300 dark:border-gray-600
                    bg-transparent px-3 py-2 text-gray-800 dark:text-white
                    focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>

            <div>
                <label class="block text-sm text-gray-600 dark:text-gray-300 mb-1">Telefone</label>
                <input type="tel" name="tel"
                    value="<?= $info['telefone']; ?>"
                    class="w-full rounded-md border border-gray-300 dark:border-gray-600
                    bg-transparent px-3 py-2 text-gray-800 dark:text-white
                    focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    required>
            </div>

            <input type="hidden" name="data" value="<?= $info['data']; ?>">
            <input type="hidden" name="action" value="updateSubmit">

            <div class="flex justify-end gap-3 pt-4">
                <a href="../View/index.php"
                   class="px-4 py-2 text-sm rounded-md border border-gray-300
                   text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                    Cancelar
                </a>

                <button type="submit"
                    class="px-5 py-2 text-sm font-medium rounded-md
                    bg-blue-600 text-white hover:bg-blue-700
                    focus:ring-4 focus:ring-blue-300">
                    Salvar alterações
                </button>
            </div>

        </form>
    </div>
</div>


</body>
</html>
<?php endforeach;?>