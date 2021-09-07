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
        .naam {
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
        .email {
            display: block;
            position: absolute;
            margin-left: 75px;
            width: 66%;
            margin-top: 5px;
            margin-bottom: 35px;
        }
        .nummer {
            display: block;
            position: absolute;
            margin-left: 75px;
            width: 66%;
            margin-top: 3px;
            margin-bottom: 35px;
        }
        .naaminput{ 
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
        .nummerinput{ 
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
        .emailinput{ 
        position: relative;
        margin-left: 27%;
        height: 4vh;
        background: transparent;
        border: 0px;
        font-size: 15px;
        color: white;
        font-family: 'Nunito', sans-serif;
        outline: none;
        margin-top: 8px;
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
        margin-top: 7px;
        outline: none;
        margin-bottom: 20px;
        }
        .inloggen {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 72%;
        }
</style>
</head>
<body>
    <img src="/assets/blue_top.png" class="thumb"/>
    <h1>Nieuwe Account</h1>
    <p>Vul uw gegevens hieronder in</p>
    <form action="">
        <img src="/assets/naam.png" class="naam"><input type="" class="naaminput" placeholder="Naam"></img>
        <img src="/assets/nummer.png" class="nummer"><input type="" class="nummerinput" placeholder="Telefoonnummer"></img>
        <img src="/assets/email.png" class="email"><input type="" class="emailinput" placeholder="Email"></img>
        <img src="/assets/wachtwoord.png" class="wachtwoord"><input type="" class="wachtwoordinput" placeholder="wachtwoord"></img>
    </form>
    <form action="index.php">
            <input type="image" src="../assets/inloggen.png"  class="inloggen">
    </form>
</body>
</html>