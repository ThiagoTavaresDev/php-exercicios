<?php 



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = '';
    $email = '';
    $nome = filter_input(INPUT_POST,'nome', FILTER_UNSAFE_RAW);
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);

    if ($nome && $email) {
        $message = 'Dados Salvos.';
    } else {
        $message = 'Dados Inválidos.';
    }
    var_dump($nome);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio-php-1</title>
</head>
<body>

<form action="valida-form.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?= $nome ?>">
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= $email ?>">
    <input type="submit" value="salvar">
</form>
<span><?= htmlspecialchars($message) ?></span>

</body>
</html>