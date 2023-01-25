<html>
    <head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <center>
        <div class="zao-zielone">
            <h1>😀Witaj w wypożczalni filmów!😀</h1><br>
            <h1>Welcome in Witkowo</h1>

</div>
        <h1>LOGOWANIE</h1>
            <form method="POST">
            E-mail: <input type="text" name="email"><br>
            Haslo: <input type="password" name="haslo"><br>
            <input type="submit" name="submit">
            </center>
            <center>
            <div class="zao-rozowe">
            <b><p><a href="register.php" target="_blank">REJESTRACJA<br><u>Kliknij aby się zerejestrować</u></a></p><b>
</center>
</div>
</div>
<?php

$con = new mysqli("127.0.0.1","root","","ZSPMOVIE");
            print_r($_POST);
             if(isset($_POST['email']) && isset($_POST['haslo'])){
                $sql = "SELECT * FROM uzytkownicy WHERE Email='".$_POST['email']."'AND Haslo='".$_POST['haslo']."'";
                $res = $con->query($sql);
                
                $user = $res->fetch_array(MYSQLI_ASSOC);
                if (count($user)>0){
                    $_SESSION["user_email"]=$user["email"];
                    $_SESSION["user_haslo"]=$user["haslo"];
                    header("location: stronaglowna.php");
                }
            }
    ?>
</body>




    </html>