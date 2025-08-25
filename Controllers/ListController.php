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
        case 'deleteSubmit':
            $this->deleteSubmit();
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
            // 'data' => $_SESSION['data']
        ];
        
        $newContact = new Contacts();
        $newContact->setNome($contato['nome']);
        $newContact->setEmail($contato['email']);
        $newContact->setTelefone($contato['tel']);
        // $newContact->setData($contato['data']);


        $createContact = new contactsDao();
        return $createContact->create($newContact);

        // echo "Contato adicionado com sucesso!";
        header("Location: ../View/index.php");
        
}
// Mostrar todos os contatos
public function showContacts() {
    $readAllContacts = new contactsDao();
    return $readAllContacts->read();
    header("Location: ../View/index.php");
}

// Submit do formulário edit.php
public function updateSubmit(){
    global $id;
    $id =  $_SESSION['id'];
    if(isset($id)){
        $editContact = [
            // 'id' => $id,
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'tel' => $_POST['tel'],
            'data' => $_POST['data']

        ];
        $UpContact = new Contacts();
        $UpContact->setNome($editContact['nome']);
        $UpContact->setEmail($editContact['email']);
        $UpContact->setTelefone($editContact['tel']);
        $UpContact->setData($editContact['data']);

        $updateContact = new contactsDao();
        $updateContact->update($UpContact);
        return header("Location:../View/index.php");

    }else{
        echo "ERRO";
    }

} 
public function deleteSubmit() {
    if(isset($_POST['id'])){
    $id =$_POST['id'];
    $deleteContact = new contactsDao();
    $deleteContact->delete($id);
    // return header('Location../View/index.php');
    echo 'lllll';
    echo $id;
    }else{
        echo "ERRO: Contato não foi deletado!";
    }
}

}
if(isset($_POST['action'])){
$ListC = new ListController();
$ListC->showActions($_POST["action"]);
}
