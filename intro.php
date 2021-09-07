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
        .loader {
            position: fixed;
            z-index: 99;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loader > img {
            width: 200px;
        }

        .loader.hidden {
            animation: fadeOut 0.5s;
            animation-fill-mode: forwards;
        }

        @keyframes fadeOut {
            100% {
                opacity: 0;
                visibility: hidden;
            }
        }

        .thumb {
            width: 140%;
            top: 0;
            left: 0;
            right: 0;
        }
        .vrouw {
            display: block;
            margin-left:auto;
            margin-right: auto;
            width:55%;
            margin-top:-100px;
        }
        h1 {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
            margin-top:50px;
        }
        p {
            text-align: center;
            margin-top: -25px;
            font-family: 'Nunito', sans-serif;
            margin-bottom: 20px;
        }
        .verder {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 70%;
        }
</style>
</head>
<body>
    <script type="text/javascript">
        window.addEventListener("load", function () {
            const loader = document.querySelector(".loader");
            setTimeout(function () {loader.className += " hidden";},1200)
        });
        
    </script>
    <h2 id-"title"></h2>
    <img src="/assets/blue_top.png" class="thumb"/>
    <img src="/assets/vrouw.png" class="vrouw"/>
    <h1>U besteld, wij bezorgen</h1>
    <p>U doet uw bestelling</p>

    <div class="loader">
        <img src="/assets/coptergif.gif"/>
    </div>
    <form action="/pages/intro2.php">
            <input type="image" src="assets/verderknop.png"  class="verder">
    </form>
</body>
</html>