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
    <h1>Wypożyczalnia filmów</h1>
    <h2>Wypożycz film już dziś!</h2>
</center>
        <div class="doprawej">
            
    <?php
            session_start();
            $con = new mysqli("127.0.0.1","root","","ZSPMOVIE");
            echo '<label>Zalogowany jako: <h2><b>'.$_SESSION["user_email"].'</b></h2></label>';
            

    ?>
    
    
    <br>
    
    <center><a href="../sites/movie-add.php" class="myButton">Dodaj film</a></center><a href="../index.php" class="myButton">Wyloguj</a>
    
    </div>
    

    

</body>
    </html>