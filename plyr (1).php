 <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <title>Live Stream</title>

    <!-- JW Player Script -->
    <script src="https://ssl.p.jwpcdn.com/player/v/8.32.1/jwplayer.js"></script>
    <script>jwplayer.key = "XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo";</script>

    <!-- Basic Styling -->
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: black;
        }
        #player {
            width: 100vw;
            height: 100vh;
        }
    </style>
</head>

<body>
    <!-- JW Player Container -->
    <div id="player"></div>

    <!-- JW Player Initialization -->
    <script>
        jwplayer("player").setup({
            file: "<?php echo $mp4fle; ?>",
            image: "<?php echo $prvimg; ?>",
            width: "100%",
            height: "100%",
            autostart: false,
            mute: true,
            controls: true,
            repeat: false,
            preload: "none",
            stretching: "uniform",
            abouttext: "PashCinema",
            aboutlink: "https://www.pashcinama.online",
            advertising: {
                client: "vast",
                skipoffset: 5,
                tag: ""
            }
        });
    </script>

    <!-- Popunder Ad Script -->
    <script type="text/javascript" src="//pl26336247.profitableratecpm.com/d1/1d/1c/d11d1cd5c035e96cb05f043583702cbe.js"></script>

</body>
</html>
