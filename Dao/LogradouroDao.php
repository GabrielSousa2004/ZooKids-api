<?php
header('Access-Control-Allow-Origin: *');

    require_once ('Conexao.php');

    
    class LogradouroDao{
        public static function insert($log){
            $conexao = Conexao::conectar();
            // Prepara a consulta SQL
            $query = "INSERT INTO tblogradouro (idUsuario, cepLogradouro, nomeLogradouro, bairroLogradouro, numLogradouro, cidadeLogradouro, ufLogradouro) VALUES (?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $log['idUsuario']);
            $stmt->bindValue(2, $log['cepLogradouro']);
            $stmt->bindValue(3, $log['nomeLogradouro']);
            $stmt->bindValue(4, $log['bairroLogradouro']);
            $stmt->bindValue(5, $log['numLogradouro']);
            $stmt->bindValue(6, $log['cidadeLogradouro']);
            $stmt->bindValue(7, $log['ufLogradouro']);
            
            $stmt->execute();
                    // Retornar o ID do usuário inserido
        return $conexao->lastInsertId();
        }

        // public static function selectAll(){
        //     $conexao = Conexao::conectar();
        //     $query = "SELECT * FROM tbUser";
        //     $stmt = $conexao->prepare($query);
        //     $stmt->execute();
        //     return $stmt->fetchAll();
        // }

        // public static function selectById($id){
        //     $conexao = Conexao::conectar();
        //     $query = "SELECT * FROM tbuser WHERE id = ?";
        //     $stmt = $conexao->prepare($query);
        //     $stmt->bindValue(1, $id);
        //     $stmt->execute();
        //     return $stmt->fetch(PDO::FETCH_ASSOC);
        // }
        // public static function delete($id){
        //     $conexao = Conexao::conectar();
        //     $query = "DELETE FROM tbuser WHERE id = ?";
        //     $stmt = $conexao->prepare($query);
        //     $stmt->bindValue(1, $id);
        //     return  $stmt->execute();
        // }
        // public static function update($user) {
        //     $conexao = Conexao::conectar();
        //     // Prepara a consulta SQL
        //     $query = "UPDATE tbuser 
        //               SET nome = ?, 
        //                   email = ?, 
        //                   senha = ?, 
        //                   telefone = ?, 
        //                   cep = ?, 
        //                   endereco = ?, 
        //                   numero = ?, 
        //                   bairro = ?, 
        //                   cidade = ? 
        //               WHERE id = ?";
        //     $stmt = $conexao->prepare($query);
        //     $stmt->bindValue(1, $user['nome']);
        //     $stmt->bindValue(2, $user['email']);
        //     $stmt->bindValue(3, $user['senha']);
        //     $stmt->bindValue(4, $user['telefone']);
        //     $stmt->bindValue(5, $user['cep']);
        //     $stmt->bindValue(6, $user['endereco']);
        //     $stmt->bindValue(7, $user['numero']);
        //     $stmt->bindValue(8, $user['bairro']);
        //     $stmt->bindValue(9, $user['cidade']);
        //     $stmt->bindValue(10, $user['id']);
        //     $stmt->execute();
        
            // Fechar a conexão com o banco de dados
           // $conexao = null;
        // }
        
    }
?>