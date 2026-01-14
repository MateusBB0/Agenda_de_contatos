<?php 
include("../View/layout/top_bar.php");
?>
<form action="../View/findContacts.php" method="GET" class="max-w-6xl mx-auto mt-6 px-4">   

<section class="flex flex-col md:flex-row gap-3">

    <label for="voice-search" class="sr-only">Search</label>
    
    <div class="relative flex-1">
     
        <input type="search" name="search" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 relative top-1 md:w-xl" placeholder="Pesquise" required />
    
    </div> 

        <button onclick="searchData()" class="flex justify-center items-center py-2.5 px-3 ms-2 text-sm md:w-24 sm:w-24 font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 relative">
            <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>Search
        </button>
        
        <a href='../View/newContact.php'  class="flex items-center justify-center md:w-48 sm:w-48 sm:justify-center px-4 py-2.5 text-sm font-medium rounded-md bg-emerald-600 text-white hover:bg-emerald-700 focus:ring-4 focus:ring-emerald-300 transition">+ Novo Contato</a>
    

</section>
</form>





<script>
    var pesquisa = document.getElementById("search");

    pesquisa.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            searchData();
        }   
    });


    function searchData(){
        window.location = 'findContacts.php?search='+pesquisa.value;

    }

</script>


