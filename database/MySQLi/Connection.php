<?php

namespace Database\MySQLi;

class Connection{
    private static $instance;
    private $connection;
    private function __construct(){
        $this->make_connection();
          
    }
    public static function getInstance(){
        if(!self::$instance instanceof self)
            self::$instance = new self();
        return self:: $instance;
        
    }

    public function get_database_instance(){
        return $this->connection;
    }


    private function make_connection(){
    $server = "localhost";
    $username = "root";
    $password = "14953478";
    $database = "finanzas_personales";

    //$mysqli = new mysqli($server, $username, $password, $database) forma procedural
    $mysqli = new \mysqli($server, $username, $password, $database);//orientada a objetos

    //comprobar conexion de forma procedural
    /*if(!$mysqli)
        die('fallo la conexion: '.mysqli_connect_error());*/

    //comprobar conexion de forma orientada a objetos
    if($mysqli->connect_errno)
        die('fallo la conexion: '.$mysqli->connect_error);

    $setnames = $mysqli->prepare("SET NAMES 'utf8'");//para usar cualquier caracter en las consultas
    $setnames->execute(); 
    $this->connection = $mysqli;   
    }





}

