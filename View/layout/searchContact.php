<?php 
include("../Controllers/searchController.php");
?>
<form action="" method="GET">

    <input type="search" name="search" id="search" placeholder="Pesquisar">
     <button onclick="searchData()">
        <p>pesquisa</p>
    </button>

</form>

<script>
    var pesquisa = document.getElementById("search");

    pesquisa.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            searchData();
        }   
    });


    function searchData(){
        window.location = 'SearchContact.php?search='+pesquisa.value;

    }

</script>
