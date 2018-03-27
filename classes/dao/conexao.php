<?php

abstract class Conexao {
    
    private static $SERVER = "localhost";
    private static $USER = "root";
    private static $PASSWORD = "";
    PRIVATE static $DATABASE = "loja";
    
    public static function conectar() {
        return mysqli_connect(
                Conexao::$SERVER,
                Conexao::$USER,
                Conexao::$PASSWORD,
                Conexao::$DATABASE
        );
        
    }
    
}

