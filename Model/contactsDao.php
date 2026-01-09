<?php
namespace Model;
use Model\Contacts;
use Controllers\Connection;
// require("contacts.php");
// Crud para o banco de dados
class contactsDao extends Contacts{
    // Criar o contato
    public function create(Contacts $c){
        
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
        
        header("Location: ../View/index.php");

    }

    public function read(){
        // Analisar dados para a barra de pesquisa
        $sql = "SELECT * FROM contatos";
        $stmt = Connection::getConn()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() >0){
            $arrayResult = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $arrayResult;
        }else{
            echo "Houve uma falha na exposição dos contatos";
        }

    }

    public function update(Contacts $c){
        global $id;
        $sql = "UPDATE contatos SET nome = ?, email = ?, telefone = ? WHERE id= '".$id."'";
        $stmt = Connection::getConn()->prepare($sql);
        $stmt->bindValue(1, $c->getNome());
        $stmt->bindValue(2, $c->getEmail());
        $stmt->bindValue(3, $c->getTelefone());

        return $stmt->execute();
        
    }

    public function delete($id){
        $sql = "DELETE FROM contatos WHERE id = ? ";
        $stmt = Connection::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return header('location: ../View/index.php');

    }
}
