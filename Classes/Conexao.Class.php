<?php

define("HOST", "localhost");
define("BANCO", "galeria");
define("USUARIO", "root");
define("SENHA", "");

class Conexao{
    private $conexaoSQL;
    private $charset;
    
    private function MontaConexao() {
        try{
            $this->charset = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
            $this->conexaoSQL = new PDO("mysql:host=" . HOST . ";dbname=" . BANCO . ";", USUARIO, SENHA, $this->charset);
            $this->conexaoSQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $erros) {
            die("Erro: #".$erros->getCode()."<br>
        Mensagem:".$erros->getMessage()."<br>
        No arquivo:".$erros->getFile()."<br>
        Na linha:".$erros->getLine()
    );
        }
        
    }
    
    public function ExecutaConexao() {
        $this->MontaConexao();
        return $this->conexaoSQL;
    }
}
?>