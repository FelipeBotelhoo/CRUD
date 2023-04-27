<?php
class usuarios_model {
    var $tabela = 'usuarios';
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
     * Configura a conexão do Model
     * 
     * @param object $conexao Conexão com o banco de Dados
     * @return void
     */
    function setConexao($conexao) {
        $this->conexao = $conexao;
    }

    function getConexao() {
        return $this->conexao;
    }

    /**
     * Valida os dados de login
     * 
     * @param string $email Email do usuário
     * @param string $senha Senha do usuário
     * 
     * @return array
     */
    function validarUsuario($email, $senha) {
        $sql = 'SELECT * FROM '.$this->tabela.' WHERE email="'.$email.'" AND senha="'.$senha.'"';
        $result = $this->conexao->query($sql);
        $dadosUsuario = $result->fetch_array();
        return $dadosUsuario;
    }



    function getAll() {
        $listagemUsuarios = array();
        $sql = $this->geradorQuery->selecionarTodos();
        $result = $this->conexao->query($sql);
        
        while($linha=$result->fetch_array()){
            $listagemUsuarios[]=$linha;
        }
        return $listagemUsuarios;
    }


    function getByID($id) {
        $sql = $this->geradorQuery->getById($id);
        $result = $this->conexao->query($sql);
        $linha = $result->fetch_array();
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


}