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
        $contato = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'tel' => $_POST['tel'],
            'data' => $_SESSION['data']
        ];
        // $nome = $_POST['nome'];
        // $email = $_POST['email'];
        // $telefone = $_POST['tel'];
        // $data = $_SESSION['data'];

        // $lowerNome = strtolower($contato['nome']);

        $newContact = new Contacts();
        $newContact->setNome($contato['nome']);
        $newContact->setEmail($contato['email']);
        $newContact->setTelefone($contato['tel']);
        $newContact->setData($contato['data']);


        $createContact = new contactsDao();
        $createContact->create($newContact);


}
CreateSubmit();
echo "Contato adicionado com sucesso!";
}
