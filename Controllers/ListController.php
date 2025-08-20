<?php
namespace Controllers;
use Model\Contacts;
use Model\contactsDao;

session_start();

require('connection.php');
require ('../Model/contacts.php');
require ('../Model/contactsDao.php');
 
 class ListController {
    public function showActions($action){
    if(isset($action)) {
    $action = $_POST['action'];
   
    switch ($action) {
        case 'createSubmit':
            $this->CreateSubmit();
            break;
        case 'updateSubmit':
            $this->updateSubmit();
            break;
        default:
            echo "Ação Inválida";
            break;
    }

    }else{
        
        echo "ERRO";
    }

}
// Relacionado com a create() do model
   public function CreateSubmit() {
        // Pegar as variáveis dos inputs
        $contato = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'tel' => $_POST['tel'],
            'data' => $_SESSION['data']
        ];
        
        $newContact = new Contacts();
        $newContact->setNome($contato['nome']);
        $newContact->setEmail($contato['email']);
        $newContact->setTelefone($contato['tel']);
        $newContact->setData($contato['data']);


        $createContact = new contactsDao();
        $createContact->create($newContact);

        // echo "Contato adicionado com sucesso!";
        header("Location: ../View/index.php");
        
}

public function showContacts() {
    $readAllContacts = new contactsDao();
    $_SESSION['read'] = $readAllContacts->read();
    header("Location: ../View/index.php");
}
public function updateSubmit(){
        $editContact = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'tel' => $_POST['tel']
        ];
        $editContact = new Contacts();
        $editContact->setNome($editContact['nome']);
        $editContact->setEmail($editContact['email']);
        $editContact->setTelefone($editContact['tel']);
        $editContact->setData($editContact['data']);

        $updateContact = new contactsDao();
        $updateContact->update($editContact);

}  

}
if(isset($_POST['action'])){
$ListC = new ListController();
$ListC->showActions($_POST["action"]);
}
