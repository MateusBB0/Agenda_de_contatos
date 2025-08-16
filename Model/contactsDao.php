<?php
namespace Model;
use Model\Contacts;
use Controller\Connection;
// Crud para o banco de dados
class contactsDao extends Contacts{
    public function create(Contacts $c){
        // Criar o contato
        date_default_timezone_set('America/Sao_Paulo');
        $d = date('Y:m:d h:i:s');

        $sql = "INSERT INTO contatos(nome, email, telefone, data) VALUES(?, ?, ?, ?)";
        $stmt =  Connection::getConn()->prepare($sql);
        $stmt->bindValue(1, $c->getNome());
        $stmt->bindValue(2, $c->getEmail());
        $stmt->bindValue(3, $c->getTelefone());
        $stmt->bindValue(4, $d);

        $stmt->execute();
        $_SESSION['data'] = $d;
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
