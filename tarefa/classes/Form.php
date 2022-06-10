<?php
    class Form{
        public static function cadastrar($nome,$email,$telefone,$senha,$sexo,$nasc,$cidade,$estado,$endereco){
            $sql = Mysql::conectar()->prepare("INSERT INTO `usuarios` VALUES (null,?,?,?,?,?,?,?,?,?)");
            $sql->execute(array($nome,$email,$telefone,$senha,$sexo,$nasc,$cidade,$estado,$endereco));
        }
    }
?>