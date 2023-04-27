<?php
class clientes_model {
    var $tabela = 'clientes';
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
        $listagemClientes = array();
        $sql = $this->geradorQuery->selecionarTodos();
        $result = $this->conexao->query($sql);
        while ($linha=$result->fetch_array()) {
            $linha['data_nascimento'] = strtotime($linha['data_nascimento']);
            $linha['data_nascimento'] = date('d/m/Y', $linha['data_nascimento']);
            $listagemClientes[] = $linha;
        }
        
        return $listagemClientes;
    }


function getByID($id) {
    $sql = $this->geradorQuery->getById($id);
    $result = $this->conexao->query($sql);
    $linha = $result->fetch_array();
    $linha['data_nascimento'] = strtotime($linha['data_nascimento']);
    $linha['data_nascimento'] = date('d/m/Y', $linha['data_nascimento']);
    return $linha;
}

function updateByID($id, $dados) {
    if (isset($dados['data_nascimento'])) {
        $dados['data_nascimento'] = strtotime(str_replace('/', '-', $dados['data_nascimento']));
        $dados['data_nascimento'] = date('Y-m-d', $dados['data_nascimento']);
        }

        $sql = $this->geradorQuery->updateByID($id, $dados);
        $result = $this->conexao->query($sql);
        return $result;
    }

function setUsers($dados){
   
    if (isset($dados['data_nascimento'])) {
        $dados['data_nascimento'] = strtotime(str_replace('/', '-', $dados['data_nascimento']));
        $dados['data_nascimento'] = date('Y-m-d', $dados['data_nascimento']);
        }

     $sql = $this->geradorQuery->cadastro($dados);
     $result = $this->conexao->query($sql);
     return $result;

}
}