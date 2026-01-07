<?php
// Definir o título
$title = "Novo Contato";
include_once("../View/layout/top_bar.php");
?>

<body class="bg-gray-950 text-gray-200">

<!-- Persquisa de contatos -->
<?php
include('layout/searchContact.php');

?>


<section class="min-h-screen flex items-center justify-center px-4">
<div class="w-full max-w-md bg-gray-900 rounded-xl shadow-lg p-6">

    <!-- Título -->
    <div class="flex items-center gap-3 mb-6">

    <svg class="w-8 h-8 text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" viewBox="0 0 24 24">
    <path fill-rule="evenodd" d="M7 2a2 2 0 0 0-2 2v1a1 1 0 0 0 0 2v1a1 1 0 0 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H7Zm3 8a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm-1 7a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
    </svg>
    <h1 class=" text-2xl font-semibold text-white">Agenda de contatos</h1>
    
    </div>
<!-- Formulário -->
<form action="../Controllers/ListController.php" method="POST">

    <div>
    <label class="block text-sm mb-1 text-gray-300">Nome</label>
    <input type="text" name="nome" required class="w-full rounded-md border border-gray-700 bg-gray-800 px-3 py-2 text-sm text-white focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Nome">
    </div>

    <div class="mb-5">
    <label class="block text-sm mb-1 text-gray-300">Email</label>
    <input type="email" name="email" required class="w-full rounded-md border border-gray-700 bg-gray-800 px-3 py-2 text-sm text-white focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="exemplo@gmail.com">
    </div>

    <div class="mb-5">
    <label class="block text-sm mb-1 text-gray-300">Telefone</label>
    <input type="tel" name="tel" pattern="[0-9]{2} [9]{1}[0-9]{4}-[0-9]{4}" required placeholder="Exemplo: (22) 92222-0982" class="w-full rounded-md border border-gray-700 bg-gray-800 px-3 py-2 text-sm text-white focus:ring-2 focus:ring-blue-500 focus:outline-none" >
    </div>

    <input type="hidden" name="action" value="createSubmit">
    <!-- <input type="submit" value="Enviar" name="submit" class="text-stone-50 bg-slate-950 hover:bg-slate-900 pl-8 pr-8 p-4 items-center rounded-xl"> -->

    <div class="flex justify-end gap-3 pt-4">
    <input type="submit" value="Enviar" name="submit" class="px-4 py-2 text-sm rounded-md border border-gray-600 text-gray-300 hover:bg-gray-800 transition">
    <a href='index.php' class="px-5 py-2 text-sm font-medium rounded-md bg-blue-600 text-whitehover:bg-blue-700 focus:ring-4 focus:ring-blue-300 transition">Home page</a>
    </div>
</form>

    
</div>   
</section>

</body>