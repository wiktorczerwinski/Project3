<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8"
    <meta name="viewport" content="width=device-width, initial-scale=0.6">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <title>CopterMail</title>

    <style media="screen">
        .thumb {
            width: 110%;
            margin-top: -10px;
            margin-left: -10px;
            right: 0;
        }
        h1 {
            font-family: 'Nunito', sans-serif;
            margin-top: -200px;
            margin-left: 75px;
            color:white ;
        }
        p {
            font-family: 'Nunito', sans-serif;
            margin-left: 75px;
            color: white;
            margin-bottom: 150px;
        }
        .gebruikersnaam {
            position: absolute; 
            margin-left:75px;
            width: 66%;
            margin-bottom: 15px;
        }
        .wachtwoord {
            display: block;
            position: absolute;
            margin-left: 75px;
            width: 66%;
            margin-top: 10px;
            margin-bottom: 35px;
        }
        .gebruikerinput{ 
        position: relative;
        margin-left: 27%;
        height: 5vh;
        background: transparent;
        border: 0px;
        font-size: 15px;
        color: white;
        font-family: 'Nunito', sans-serif;
        outline: none;
        }
        .wachtwoordinput{ 
        position: relative;
        margin-left: 27%;
        height: 5vh;
        background: transparent;
        border: 0px;
        font-size: 15px;
        color: white;
        font-family: 'Nunito', sans-serif;
        margin-top: 10px;
        outline: none;
        margin-bottom: 20px;
        }
        .inloggen {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 72%;
        }
        .dozen {
            position: absolute;
            right: 0;
            bottom: 0;
            margin-bottom: 50px;
            margin-right: 50px;
        }
        .vergeten {
            color:black;
            font-family: 'Nunito', sans-serif;
            font-size: 8px;
            position: absolute;
            margin-top:-20px;
            right:0;
            margin-right:100px;
            text-decoration: none;
        }
        .ngebruiker {
            color:black;
            font-family: 'Nunito', sans-serif;
            font-size: 8px;
            position: absolute;
            margin-top:-12px;
            right:0;
            margin-right:100px;
        }
        .nieuwegebruiker {
            color:black;
            font-family: 'Nunito', sans-serif;
            font-size: 8px;
            position: absolute;
            margin-top:-2px;
            right:0;
            margin-right:100px;
            text-decoration: none;
        }
</style>
</head>
<body>
    <img src="/assets/blue_top.png" class="thumb"/>
    <h1>Inloggen</h1>
    <p>Log in met uw gebruikersnaam en wachtwoord</p>
    <form action="">
        <img src="/assets/gebruiker.png" class="gebruikersnaam"><input type="" class="gebruikerinput" placeholder="Gebruikersnaam"></img>
        <img src="/assets/wachtwoord.png" class="wachtwoord"><input type="" class="wachtwoordinput" placeholder="wachtwoord"></img>
    </form>
    <a href="../pages/vergeten.php" class="vergeten">Wachtwoord vergeten?</a>
    <form action="index.php">
            <input type="image" src="../assets/inloggen.png"  class="inloggen">
    </form>
    <img src="../assets/dozen.png" class="dozen">
    <p class="ngebruiker">Nieuwe gebruiker?</p>
    <a href="../pages/nieuwe_gebruiker.php" class="nieuwegebruiker">Maak een nieuwe account aan!</a>
</body>
</html>