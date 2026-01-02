<?php
include('../View/layout/top_bar.php');
?>
<body>
    <!-- Table-fixed: para renderizar mais rápido!! -->
     <div class='table-class rounded-3xl mt-5 ml-6 dark:bg-gray-500 w-4xl'>
        <h1 class=" pb-5 text-center text-white text-5xl rounded-t-3xl! bottom-px bg-gray-700 border-r-zinc-700 border-b-1">
            <span class="material-symbols-outlined text-5xl!">
                person_book
            </span>Contatos
        </h1>
    <table class="">
        <!-- Cabeçalho -->
        <thead class="text-2xl text-gray-800 dark:bg-gray-700">
            <tr class="table-auto">
                <th class="px-8 py-3 "><img class='relative top-8 -left-5' src="../src/person.png" alt="" width="30px">Nome</th>
                <th class="px-8 py-3"><img class='relative top-8 left-8' src="../src/email.png" alt="" width="30px">Email</th>
                <th class=" px-8 py-3"><img class='relative top-8 md:-left-3 -left-5' src="../src/phone.png" alt="telefone" width="30px">Telefone</th>
                <th></th> <th></th>   
            </tr>
        </thead>
        <tr class="tr border-white border-b-2 size-full">
            <td class="px-10 py-10 text-xl">Mateus</td>
            <td class="px-10 py-10 text-xl">mateus@gmail.com</td>
            <td class="px-10 py-10 text-xl">21 0983756747</td>

            <td><button type="button" class=" mx-7.5 py-2.5 px-2.5 text-xl text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Editar</button></td>
            <td><button type="button" class="mx-7.5 px-2.5 py-2.5 text-xl focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Deletar</button></td> 
            
        </tr>
        <tr class="tr  border-white border-b-2">
            <td class="px-10 py-10 text-xl">João</td>
            <td class="px-10 py-10 text-xl">joao@gmail.com</td>
            <td class="px-10 py-10 text-xl">21 0983756337</td>

             
            <td><button type="button" class="mx-7.5 py-2.5 px-2.5 text-xl text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg  dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Editar</button></td>    
            <td><button type="button" class="mx-7.5 px-2.5 py-2.5 text-xl focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Deletar</button></td> 
        </tr>
        <tr class="tr  border-white border-b-2">
            <td class="px-10 py-10 text-xl ">Marcos</td>
            <td class="px-10 py-10 text-xl">marcos@gmail.com</td>
            <td class="px-10 py-10 text-xl">21 3333333333</td>

            
            <td><button type="button" class=" mx-7.5 py-2.5 px-2.5 text-xl text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Editar</button></td>   
            <td><button type="button" class="mx-7.5 px-2.5 py-2.5 text-xl focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Deletar</button></td> 
        </tr>

    </table>
    </div>
</body>
</html>