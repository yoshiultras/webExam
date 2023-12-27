<?php

    if (!empty($_POST['login']) && !empty($_POST['password'])) {

        header('Location: /exam/index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    include('./sections/header.php');
    ?>
    <div class="container mt-5">
        <form method="post">
            <div class="form-group">
                <label for="login">Логин</label>
                <input class="form-control" type="text" name="login" id="login">
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <br>
            <button class="btn btn-primary" type="submit">
                Регистрация
            </button>
        </form>
    </div>
    <?php
    include('sections/footer.php');
    ?>
</body>
</html>