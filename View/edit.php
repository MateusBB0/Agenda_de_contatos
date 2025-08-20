<?php

    session_start();

    $id = $_POST['id'];

?>

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
    <input type="text" name="nome" required>
<br>

<label>Email</label>
    <input type="email" name="email" required>
<br>

<label>Telefone</label>
    <input type="tel" name="tel" pattern="[0-9]{2} [9]{1}[0-9]{4}-[0-9]{4}" required placeholder="Exemplo: (22) 92222-0982">
    <br>
    <input type="hidden" name="action" value="updateSubmit">
    <input type="submit" value="Enviar" name="submit">

    

</form>

</body>
</html>