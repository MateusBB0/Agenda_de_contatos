<?php

use Controllers\Connection;
use Model\Contacts;
require("layout/top_bar.php");
require("../Controllers/connection.php");

    session_start();

    $id = $_POST['id'];
    $_SESSION['id'] = $id;

    $selectContact = "SELECT * FROM contatos WHERE id = '".$id."' ";
    $startActionContact = Connection::getConn()->prepare($selectContact);
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
    

<div class="grid content-center dark:bg-gray-800 max-w-sm p-6 rounded-md hover:bg-neutral-secondary-medium " >
    
    <form action="../Controllers/ListController.php" method="POST">

    <!-- <label>Nome</label> -->
        <input class='mb-3 text-2xl font-semibold tracking-tight text-heading leading-8' type="text" name="nome" value="<?php echo $info['nome'];?>" required>
    <br>
    <!-- <label>Email</label> -->
        <input class='text-body border-b  border-white' type="email" name="email" value="<?php echo $info['email'];?>" required>
    <br>
    <br>
    <!-- <label>Telefone</label> -->
        <input class='text-body border-b border-white' type="tel" name="tel" pattern="[0-9]{2} [9]{1}[0-9]{4}-[0-9]{4}" required placeholder="Exemplo: (22) 92222-0982" value="<?php echo $info['telefone'];?>">
        <br>
        <input class="text-body" type="hidden" name="data" value="<?php echo $info['data'] ?>">
        <input class="text-body" type="hidden" name="action" value="updateSubmit">
        <br>
        <input class=" pointer text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-full text-sm px-4 py-2.5 focus:outline-none" type="submit" value="Enviar" name="submit">
        <br>
    <?php  //echo $info['data']; ?>

    </form>

</div>

</body>
</html>
<?php endforeach;?>