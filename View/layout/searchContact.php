<form action="../Controllers/SearchController.php" method="POST">

    <input type="search" name="search" id="search" placeholder="Pesquisar">
    <button onclick="searchData()">
        <p>pesquisa</p>
    </button>

</form>

<script>
    var pesquisa = document.getElementById("search");
    function searchData(){
        window.location = 'SearchController.php?search=' + search.value;
    }

</script>