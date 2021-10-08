
<style>
p {
  color: red;
  text-align: center;
  font-size: larger;
}
</style>
<?php
    include 'password.php';

    $mysqli = mysqli_connect("localhost", "root", "", "adatok",3306);
    $email = (string) $_POST["user"];
    $password = $_POST["pass"];
     
    $obj = new Password();

    if( $obj -> getPassword($email."*".$password)){
        $color =  mysqli_query($mysqli, "select Titkos from tabla where username = '" . $email . "'");

        while ($result= mysqli_fetch_row($color))
        {
            $_SESSION["color"] =  $result[0];
            header("Location: profile.php");
        }
    }
    else{
        echo "<p>A felhasználónév vagy a jelszó nem megfelelő!</p>";
        //session_destroy();
        sleep(3);
        header("Location: http://www.police.hu/");
        
    }

    
    

?>