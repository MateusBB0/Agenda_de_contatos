<?php 
include("../View/layout/top_bar.php");
?>
<form action="../Controllers/searchController.php" method="GET" class="flex items-center max-w-lg mx-auto mt-5">   
    <label for="voice-search" class="sr-only">Search</label>
    <div class="relative w-full">
     
        <input type="search" name="search" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 relative top-1" placeholder="Pesquise" required />
    
    </div> 
<section class="inline  ">
    <button onclick="searchData()" class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 relative top-7">
        <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>Search
    </button>

    
        <a href='../View/newContact.php'  class=" inline-flex focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-3.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 relative -top-4.5 left-76/100 ">+ Novo Contato</a>
    

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
        window.location = 'SearchController.php?search='+pesquisa.value;

    }

</script>
