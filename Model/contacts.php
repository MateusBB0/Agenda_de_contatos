<?php
namespace Model;
class Contacts {
   public $id; 
   public $nome;
   public $email;
   public $telefone;
   public $data;

    // Validar dados
   public function setId($id) {
    $this->id = $id;
   }

   public function setNome($nome){
    $this->nome = $nome;
   }

    public function setEmail($email){
    $this->email = $email;
   }

    public function setTelefone($telefone){
    $this->telefone = $telefone;
   }

   public function setData($data){
    $this->data = $data;
   }

    // Pegar dados
    public function getId(){
        return $this->id;
    }   

    public function getNome(){
        return $this->nome;
    } 
    
    public function getEmail(){
        return $this->email;
    }   

    public function getTelefone(){
        return $this->telefone;
    }
    public function getData(){
        return $this->data;
    }
}
