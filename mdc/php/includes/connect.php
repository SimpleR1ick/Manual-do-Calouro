<?php

// Dados para conexão com banco de dados local
$host = "localhost";
$port = "5432";
$db = "Manual_do_Calouro";
$user = "postgres";
$pass = "252804277353"; // Senha variavel 

$connect = pg_connect("host=$host port=$port dbname=$db user=$user password=$pass");
/*
// Dados para conexão com o banco de elephatnSQL
$host = "kesavan.db.elephantsql.com";
$user = "jqvnqgvm";
$db = "jqvnqgvm";
$pass = "IKXmlWoguZUV-Rav8eB14MghUUXaZAk8";

// Conexão com banco de dados
$connect = pg_connect("host=$host dbname=$db user=$user password=$pass");
*/
// Definindo a conexão como uma constante global
define('CONNECT', $connect)

?>