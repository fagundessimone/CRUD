<?php
require_once('conexao.php');
$users = [];
$sql=$pdo->query("SELECT * FROM users ORDER BY id ASC");
if($sql->rowCount()>0){
    $bds = $sql->fecthAll(PDO::FETCH_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>listadeusuarios</title>
</head>
<body>
    <div id="lista-usuarios">
            <h1>Lista de usuários</h1>
            <form action="actions/create.php" method='post' class="lista-usuarios-form">
                <input type="text" name="id" placeholder="ID" required>
                <input type="text" name="nome" placeholder="Nome" required>
                <input type="text" name="email" placeholder="E-mail" required>
                <button type="submit" class="form-button">Enviar</button>
            </form>
            <div id="dados">
                <?php foreach($bds as $user):?>
                <div class="dados">
                <p class="dados-description">
                <?=$user['id']?> <?=$user['name']?> <?=$user['email']?>
                </p>
                <div class="dados-actions">
                    <a class="action-button edit-button">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a href="actions/delete.php?id<?=$user['id']?>" class="action-button delete-button">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </div>
                <form action="actions/update.php" method='POST' class="lista-usuarios-form edit-dados hidden">
                    <input type="text" name="description" placeholder="Edite os dados aqui" value: <?=$user['id']?> <?=$user['name']?> <?=$user['email']?>>
                    <button type="submit" class="form-button confirm-button">
                            <i class="fa-solid fa-check"></i>
                    </button>
                </form>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>