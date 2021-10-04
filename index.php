<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <div class="form">
            <div class="username">
                <label for="user"><b>Felhasználónév :</b></label>
                <input type="text" placeholder="Felhasználónév megadása" name="user" required>
            </div>
            <div class="password">
            <label for="pass"><b>Jelszó :</b></label>
                <input type="password" placeholder="Jelszó megadása" name="pass" required>
            </div>
            <div class="button">
                <button type="submit">Bejelentkezés</button>
            </div>
        </div>
<?php 
?>
    </form>
</body>
</html>
