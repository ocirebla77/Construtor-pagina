<?php

$mysql = new mysqli('localhost','root','','blog');
$mysql->set_charset('utf8');

if($mysql==true){
  
    echo "banco conectado!";
}else{
    echo "erro na conexao";
}


?>