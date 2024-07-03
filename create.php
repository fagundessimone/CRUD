<?php
require_once('conexao.php');
$description = filter_input(INPUT_POST, 'description');
if($description){
    $sql = $pdo->prepare("INSERT INTO task (description) VALUES (:description)");
    $sql -> binValue(':description', $description);
    $sql->execute();
    header('Location: ../index.php');
    exit; 
} else {
    header('Location: ../index.php');
    exit; 
}
?>