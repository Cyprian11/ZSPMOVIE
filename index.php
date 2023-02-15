<html>
    <head>
    
    <?php
    include('includes/header.php');
    ?>
</head>
<body>
<center>
<div class="tlo">
        <center>
        <div class="tlo2">
            <h1>😀Witaj w wypożyczalni filmów!😀</h1><br>
            <h1>Welcome in Witkowo</h1> 
        </div>
        </center>

        <br><h1>LOGOWANIE</h1>
            <form method="POST">
            E-mail: <input type="text" name="email"><br>
            Haslo: <input type="password" name="haslo"><br>
            <input type="submit" name="submit">
        
 


</center>

    

    
 <center>
<?php
session_start();

$con = new mysqli("127.0.0.1","root","","ZSPMOVIE");
            // print_r($_POST);
             if(isset($_POST['email']) && isset($_POST['haslo'])){
                $sql = "SELECT * FROM uzytkownicy WHERE Email='".$_POST['email']."'AND Haslo='".$_POST['haslo']."'";
                $res = $con->query($sql);
            
                $user = $res->fetch_array(MYSQLI_ASSOC);
                if (($user)>0){
                    $_SESSION["user_email"]=$user["Email"];
                    $_SESSION["user_haslo"]=$user["Haslo"];
                    header("location: sites/login.php");
                }
            else{
                    echo "!!Nieprawidłowy login lub hasło!!";
                }
            
            }
            
    ?>
    </center>
    
        
        
        
<center>
            <div class="tlo2">
            <b><p><a href="sites/register.php" target="_blank">REJESTRACJA<br><u>Kliknij aby się zerejestrować</u></a></p><b>
            </div>
        
</center>
    
        
        
        
  
</body>




    </html>