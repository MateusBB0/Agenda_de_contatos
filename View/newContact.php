<?php
// Definir o título
$title = "Novo Contato";
include_once("../View/layout/top_bar.php");
?>


<!-- Persquisa de contatos -->
<?php
include('layout/searchContact.php');

?>
<body class="bg-gray-950">
    

<section class="md:flex">
<div class="max-w-md justify-items-center mt-1.5 dark:bg-gray-800 rounded-lg w-120 h-160 h- mx-auto ">

    <div class="flex! flex-row">

    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" viewBox="0 0 24 24">
    <path fill-rule="evenodd" d="M7 2a2 2 0 0 0-2 2v1a1 1 0 0 0 0 2v1a1 1 0 0 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 8a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
    </svg>
    <h1 class=" text-4xl mb-4 text-gray-50">Agenda de contatos</h1>
    
    </div>

<form action="../Controllers/ListController.php" method="POST">

    <div class="mb-5 mt-10">
    <label class="text-sky-50">Nome</label>
    <input type="text" name="nome" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nome">
    </div>

    <div class="mb-5">
    <label class="text-sky-50">Email</label>
    <input type="email" name="email" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="exemplo@gmail.com">
    </div>

    <div class="mb-5">
    <label class="text-sky-50">Telefone</label>
    <input type="tel" name="tel" pattern="[0-9]{2} [9]{1}[0-9]{4}-[0-9]{4}" required placeholder="Exemplo: (22) 92222-0982" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
    </div>

    <input type="hidden" name="action" value="createSubmit">
    <!-- <input type="submit" value="Enviar" name="submit" class="text-stone-50 bg-slate-950 hover:bg-slate-900 pl-8 pr-8 p-4 items-center rounded-xl"> -->

    <div class="flex! flex-col">
    <input type="submit" value="Enviar" name="submit" class=" text-white border-2 border-amber-50 bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
    <a href='index.php' class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 mt-50 text-center dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Home page</a>
    </div>
</form>

    
</div>   
</section>

</body>