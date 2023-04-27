<?php
class fornecedores_model{
    var $tabela = 'fornecedores';
    var $conexao = '';
    var $geradorQuery = '';

        /**
         * construtor da Classe
         */
    function __construct(){
        $this->geradorQuery = new query_mysql();
        $this->geradorQuery->setTabela($this->tabela);
    }

    /**
     * configura a conexão com o banco de dados
     *
     * @param object $conexao
     */
    function setConexao($conexao) {
        $this->conexao = $conexao;
    }
    /**
     * retorna todas as linhas da tabela clientes
     *
     * @return array
     */
    function getAll() {
        $listagemFornecedores = array();
        $sql = $this->geradorQuery->selecionarTodos();
        $result = $this->conexao->query($sql);
        while ($linha=$result->fetch_array()) {
           $listagemFornecedores[] = $linha;
        }
        
        return $listagemFornecedores;
    }


function getByID($id) {
    $sql = $this->geradorQuery->getById($id);
    $result = $this->conexao->query($sql);
    $linha = $result->fetch_array();
    return $linha;
}

function updateByID($id, $dados) {

        $sql = $this->geradorQuery->updateByID($id, $dados);
        $result = $this->conexao->query($sql);
        return $result;
    }
}