<?php
namespace Model;
use Model\Contacts;
use Controller\Connection;
// Crud para o banco de dados
class contactsDao extends Contacts{
    public function create(Contacts $c){
        // Criar o contato

        $sql = "INSERT INTO contatos(nome, email, telefone) VALUES(?, ?, ?)";
        $stmt =  Connection::getConn()->prepare($sql);
        $stmt->bindValue(1, $c->getNome());
        $stmt->bindValue(2, $c->getEmail());
        $stmt->bindValue(1, $c->getTelefone());

        $stmt->execute();

    }

    public function read(){
        // Analisar dados para a barra de pesquisa
    }

    public function update(Contacts $c){
        // Editar contatos
    }

    public function delete($id){
        // Deletar contatos
    }
}
