<?php

    abstract class Dao {
        protected function criaConexao(){
            $scon="port= host= dbname= user= password=";
            return pg_connect($scon);
        }
        abstract public function listar(int $limit, int $offset);
        abstract public function buscar($key);
        abstract public function inserir($obj);
        abstract public function deletar($obj); 
        abstract public function alterar($obj); 
    }
    
?>