<?php

class query_mysql {
    var $tabela = '';

    /**
     * 
     *  @return string
     */
    
    function selecionarTodos(){
        return 'SELECT * FROM '.$this->tabela;
    }

    /**
     * @param integer $id Identificador da linha para a exclusão
     *
     * @return string
     */
    
     function deletarBase() {
        return 'DELETE FROM '.$this->tabela;
    }

    function deletarByID($id) {
        return $this->deletarBase().' WHERE id='.$id;
    }
    
    /**
     * 
     * @param string $tabela Tabela para a criação dos querys
     * 
     * @return void
     */
    
    function setTabela($tabela){
        $this->tabela = $tabela;
    }
    
    /**
     * 
     * @return string
     */
    
    function getTabela(){
        return $this->tabela;
    }

    /**
     * Retorna a query responsável por selecionar
     * uma linha da tabela, utilizando o ID como identificador
     * 
     * @param int $id Identificador da linha
     * 
     * @return string
     */
    function getByID($id) {
        return 'SELECT * FROM ' .$this->tabela . ' WHERE id=' . $id;
    }
    function updateByID($id, $dados) {
        
        $sql = 'UPDATE '.$this->tabela.' SET ';
        $campos = '';
        foreach ($dados as $key => $value) {
            if ($campos != "") {
                $campos .=',';
            }
            if (!is_numeric($value)) {
                $value = '"'.addslashes($value).'"';
            }
            $campos .= $key.'='.$value;
        }

        $sql .= $campos.' WHERE id='.$id;

        return $sql;
    }

    
   //cadastro cliente
    function cadastro($dados){
       
        $sql='INSERT INTO '.$this->tabela.' ' ;
        $campos='';
        $values='';

        foreach($dados as $key =>$value){
            
            if($campos != ""){
                $campos .=',';
            }

            if($values != ""){
                $values .= ',';
            }

            if(!is_numeric($value)){
                $value ='"'.addslashes($value).'"';
            }

            $campos.= $key;
            $values.= $value;
        }

        $sql .='('.$campos.') VALUES ('.$values.')';

        return $sql;
    }
}