<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once (__ROOT__.'./bd/connection.php');

class DataBase extends DataBaseService{

    public function adicionarPedido($cnpj, $id_categoria, $valor, $data_pedido, $dimensao, $peso, $rua, $numero, $bairro, $cidade, $complemento) {

            // Preparando o comando SQL
            $sql = "INSERT INTO pedido (`cnpj`, `id_categoria`, `valor`, `data_pedido`, `dimensao`, `peso`, `rua`, `numero`, `bairro`, `cidade`, `complemento` ) ";
            $sql = $sql."VALUES (".$cnpj.", '".$id_categoria."', ".$valor.", '".$data_pedido."', '".$dimensao."', '".$peso."', '".$rua."', '".$numero."', '".$bairro."', '".$cidade."', '".$complemento."') ";
        echo $sql;
            if(mysqli_query($this->conn, $sql)) {
                header("location: ../cadastropedido.php?status=sucess");
            } else {
                echo("Falha ao realizar o cadastro" . $sql . mysqli_error($this->conn));
            }
    }
}

    if(!empty($_POST)) {
        $cnpj = $_POST['cnpj'];
        $id_categoria = $_POST['id_categoria'];
        $valor = $_POST['valor'];
        $data_pedido = $_POST['data_pedido'];
        $dimensao = $_POST['dimensao'];
        $peso = $_POST['peso'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $complemento = $_POST['complemento'];

        $realizarCadastro = new DataBase();
        $realizarCadastro -> adicionarPedido($cnpj, $id_categoria, $valor, $data_pedido, $dimensao, $peso, $cidade, $rua, $bairro, $numero, $complemento);
    };
    
?>