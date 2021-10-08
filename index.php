<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<?php
    session_start();
    $_SESSION["color"] = "";
?>
<body>
    <div class="form-border">
        <form action="" method="POST">
            <div class="form">
                <div class="username">
                    <label id="user_label" for="user"><b>Felhasználónév :</b></label>
                    <input id="user_input"type="text" placeholder="Felhasználónév megadása" name="user" required>
                </div>
                <div class="password">
                    <label id= "pass_label" for="pass"><b>Jelszó :</b></label>
                    <input id= "pass_input" type="password" placeholder="Jelszó megadása" name="pass" required>
                </div>
                </table>
                <div class="button">
                    <button type="submit">Bejelentkezés</button>
                </div>
            </div>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $_POST["user"];
                    $_POST["pass"];
                include 'login.php';
                }
            ?>
        </form>
    </div>
</body>
</html>
