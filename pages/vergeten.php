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
        .p1 {
            font-family: 'Nunito', sans-serif;
            margin-left: 75px;
            color: white;
            
        }
        .p2{
            font-family: 'Nunito', sans-serif;
            margin-left: 75px;
            color: white;
            margin-bottom: 140px;
            margin-top: -20px; 
        }
        .gebruikersnaam {
            position: absolute; 
            margin-left:75px;
            width: 66%;
            margin-bottom: 55px;
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
        .inloggen {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 72%;
        }
        .doos {
            position: absolute;
            left: 0;
            bottom: 0;
            margin-bottom: 50px;
            margin-left: 50px;
        }
        .back {
            position: absolute;
            width: 4%;
            margin-top: 15px;
            margin-left: 75px;
        }
</style>
</head>
<body>
    <form action="inloggen.php">
            <input type="image" src="../assets/Terug_pijltje.png"  class="back">
    </form>
    <img src="/assets/blue_top.png" class="thumb"/>
    <h1>Wachtwoord Vergeten</h1>
    <p class="p1">Wij sturen u een berichtje, hierna kunt u</p>
    <p class="p2">uw wachtwoord veranderen</p>
    <form action="">
        <img src="/assets/email.png" class="gebruikersnaam"><input type="" class="gebruikerinput" placeholder="Email / Telefoonnummer"></img>
    </form>
    <form action="inloggen.php">
            <input type="image" src="../assets/versturen.png"  class="inloggen">
    </form>
    <img src="../assets/grotedoos2.png" class="doos">
</body>
</html>