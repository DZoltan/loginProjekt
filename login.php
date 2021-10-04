<?php
    include 'password.php';

    $mysqli = mysqli_connect("localhost", "root", "", "adatok",3306);
    $email = (string) $_POST["user"];
    $password = $_POST["pass"];
     
    $obj = new Password();

    if( $obj -> getPassword($email."*".$password)){
        $szin =  mysqli_query($mysqli, "select Titkos from tabla where username = '" . $email . "'");

        while ($eredmeny= mysqli_fetch_row($szin))
        {
        echo  $eredmeny[0];
        }
    }
    else{
    }

    
    

?>