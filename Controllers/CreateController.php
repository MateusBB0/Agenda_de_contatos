<?php
namespace Controllers;
use Model\Contacts;
use Model\contactsDao;
session_start();
require('connection.php');
require ('../Model/contacts.php');
require ('../Model/contactsDao.php');


if (isset($_POST['submit'])) {
    function CreateSubmit() {
        // Pegar as variáveis dos inputs
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['tel'];
        $data = $_SESSION['data'];

        $newContact = new Contacts();
        $newContact->setNome($nome);
        $newContact->setEmail($email);
        $newContact->setTelefone($telefone);
        $newContact->setData($data);


        $createContact = new contactsDao();
        $createContact->create($newContact);


}
CreateSubmit();
echo "Contato adicionado com sucesso!";
}
