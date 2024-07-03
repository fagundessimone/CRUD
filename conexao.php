<?php
try{
    $host = ('localhost');
    $port = ('5432');
    $user = ('postgres');
    $pass = ('');
    $bancodb = ('lista_usuarios');

    $conectar = new PDO("pgsql:host=$host;port=$port;dbname=$bancodb", $user, $pass);
}catch(PDOException $e){
    echo 'Falha ao conectar no banco de dados: '.$e->getMessage();
}

?>
