<?php
// Definir o título
$title = "Novo Contato";
include_once("../View/layout/top_bar.php");
?>


<!-- Persquisa de contatos -->
<?php
include('layout/searchContact.php');

?>
<div class="md:flex">
<div class="max-w-md pl-25 items-center justify-center mt-1.5 dark:bg-gray-800 rounded-lg w-120 h-160 h- mx-auto">
<h1 class="underline text-4xl mb-4">Agenda</h1>
<form action="../Controllers/ListController.php" method="POST">


<label>Nome</label>
    <input type="text" name="nome" required class="block min-w-0 border-b-gray-950 outline-2 rounded-xl m-1">
<br>

<label>Email</label>
    <input type="email" name="email" required class="block min-w-0 border-b-gray-950 outline-2 rounded-xl m-2">
<br>

<label>Telefone</label>
    <input type="tel" name="tel" pattern="[0-9]{2} [9]{1}[0-9]{4}-[0-9]{4}" required placeholder="Exemplo: (22) 92222-0982" class="block min-w-0 border-b-gray-950 outline-2 rounded-xl m-1">
    <br>
    <input type="hidden" name="action" value="createSubmit">
    <input type="submit" value="Enviar" name="submit">

</form>

    <a href='index.php'>Home page</a>
</div>   
    </div>