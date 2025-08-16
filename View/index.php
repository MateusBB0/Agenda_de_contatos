<h1>Agenda</h1>
<form action="../Controllers/CreateController.php" method="POST">


<label>Nome</label>
    <input type="text" name="nome" required>
<br>

<label>Email</label>
    <input type="email" name="email" required>
<br>

<label>Telefone</label>
    <input type="tel" name="tel" pattern="[0-9]{2} [9]{1}[0-9]{4}-[0-9]{4}" required placeholder="Exemplo: (22) 92222-0982">
    <br>
    <input type="submit" value="Enviar" name="submit">

</form>