<?php

use Controllers\Connection;
use Model\Contacts;

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
</head>
<body>
    


<h1>Agenda</h1>
<form action="../Controllers/ListController.php" method="POST">


<label>Nome</label>
    <input type="text" name="nome" value="<?php echo $info['nome'];?>" required>
<br>

<label>Email</label>
    <input type="email" name="email" value="<?php echo $info['email'];?>" required>
<br>

<label>Telefone</label>
    <input type="tel" name="tel" pattern="[0-9]{2} [9]{1}[0-9]{4}-[0-9]{4}" required placeholder="Exemplo: (22) 92222-0982" value="<?php echo $info['telefone'];?>">
    <br>
    <input type="hidden" name="data" value="<?php echo $info['data'] ?>">
    <input type="hidden" name="action" value="updateSubmit">
    <input type="submit" value="Enviar" name="submit">
    <br>
 <?php echo $info['data']; ?>

</form>

</body>
</html>
<?php endforeach;?>