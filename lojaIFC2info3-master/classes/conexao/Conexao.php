<?php

require_once __DIR__."/../../config/config.php"; //.. serve para sair de pastas

class Conexao{


    public static function getConexao(){

        try {
            $conexao = new PDO("mysql:host=".HOST.";dbname=" . BANCO, USUARIO, SENHA);
            //é necessário configurar um atributo para ser informado os erros no mysql

        }catch (Exception $e){
            echo "Ocorreu um erro: {$e->getMessage()} na linha {$e->getLine()}";
         }

        return $conexao;

    }
}

