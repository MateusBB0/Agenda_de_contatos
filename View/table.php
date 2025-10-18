<?php
include('../View/layout/top_bar.php');
?>
<body>
    <!-- Table-fixed: para renderizar mais rápido!! -->
     <div class='table-class flex flew-row mt-5 ml-6 dark:bg-gray-500'>
    <table class="table-auto rounded-lg">
        <!-- Cabeçalho -->
        <thead class="text-2xl text-gray-800 dark:bg-gray-700">
            <tr>
                <th class="">Nome</th>
                <th class="">Email</th>
                <th class="" colspan="3">Telefone</th>
                <!-- <th></th> <th></th> -->
                
            </tr>
        </thead>
        <tr class="tr border-white border-b-2">
            <td class="py-10  text-xl">Mateus</td>
            <td class="py-10  text-xl">mateus@gmail.com</td>
            <td class="py-10  text-xl">21 0983756747</td>

            
            <td class="py-10 pl-2 text-xl"><button>editar</button> </td>   
            <td class="py-10 pl-2 text-xl"><button>deletar</button></td> 
            
        </tr>
        <tr class="tr  border-white border-b-2">
            <td class="py-10  text-xl">João</td>
            <td class="py-10  text-xl">joao@gmail.com</td>
            <td class="py-10  text-xl">21 0983756337</td>

             
            <td class="py-10 pl-2 text-xl"><button>editar</button></td>    
            <td class="py-10 pl-2 text-xl"><button>deletar</button></td>
            
        </tr>
        <tr class="tr  border-white border-b-2">
            <td class="py-10  text-xl">Marcos</td>
            <td class="py-10  text-xl">joão@gmail.com</td>
            <td class="py-10  text-xl">21 3333333333</td>

            
            <td class="py-10  text-xl"><button>editar</button></td>    
            <td class="py-10  text-xl"><button>deletar</button></td>
            
        </tr>

    </table>
    </div>
</body>
</html>