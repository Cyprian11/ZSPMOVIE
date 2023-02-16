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
                <h1>Dodaj film</h1>
                <div class="doprawej">
    <?php
            session_start();
            $con = new mysqli("127.0.0.1","root","","ZSPMOVIE");
            echo '<b>Zalogowany jako: </b><b><h2>'.$_SESSION["user_email"].'</h2></b>';
            if(isset($_POST["nazwa1"]) && isset($_POST["opis1"])){

                $sql ="INSERT INTO filmy  (`nazwa`,`opis`,`typ`) VALUES('".$_POST["nazwa1"]."','".$_POST["opis1"]."','".$_POST["typ1"]."')";
                $res = $con->query($sql);
            }
            $sql="SELECT * FROM filmy JOIN uzytkownicy ON filmy.id=uzytkownicy.id ";
            $res = $con->query($sql);  
            $rows = $res->fetch_all(MYSQLI_ASSOC);
        ?>
        <center>
        <a href="login.php" class="myButton">Strona główna</a>
        </center>
        <a href="../index.php" class="myButton">Wyloguj</a>
        </div>
         <form method="POST">
                <b>Nazwa filmu: <input type="text" name="nazwa1"><br>
                Opis filmu:  <input type="text" name="opis1"><br>
                Typ/Gatunek filmu: <input type="text" name="typ1"><br></b>
        <input type="submit" name="submit1">
        <h1>Lista filmów</h1>
        <?php
               
               for($i=0; $i < count($rows); $i++){
                // print_r($rows[$i]);
                echo.'Nazwa przedmiotu: '.
                $rows[$i]["nazwa"]
                ."<br>".
                .'Opis: '.
                $rows[$i]["opis"]
                ."<br>".
                'sprzedawca: '
                .$rows[$i][".$_SESSION["user_email"]."]."<br><br>".'</div>';
                
            }
          
               
               
               ?>
        </center>
        </div>
    </body>
</html>