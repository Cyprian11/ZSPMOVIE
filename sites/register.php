<html>

    <head>
    <link rel="stylesheet" href="../css/style.css">
    <?php
    include('../includes/header.php')
    ?>

   </head>

    <body>
<div class="tlo">
        <center>
            <h1>REJESTRACJA↓</h1>

            <form method="POST">
            Imię: <input type="text" name="imie"><br>
            Nazwisko: <input type="text" name="nazwisko"><br>
            E-mail: <input type="text" name="e-mail"><br>
            Hasło: <input type="password" name="haslo"><br>
            
            <input type="submit" name="submit">
            </form>
            <a href="../index.php"><input type="button" name="submit2" value="Logowanie"></a>
</center>
</div>
        
         <?php
            session_start();
            $con = new mysqli("127.0.0.1","root","","ZSPMOVIE");
            print_r($_POST);
            if (isset($_POST["imie"])){
                
                $sql="INSERT INTO uzytkownicy (`Imie`,`Nazwisko`,`Email`,`Haslo`,`Admin`) VALUES ('".$_POST['imie']."','".$_POST['nazwisko']."','".$_POST['e-mail']."','".$_POST['haslo']."','0' ) ";
                $res = $con->query($sql);
            }
            // $offers = $res->fetch_array(MYSQLI_ASOC);
            // $res->fetch_all();

         ?>

    </body>

    

</html>