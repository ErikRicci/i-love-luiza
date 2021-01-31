<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: rebeccapurple">
    <center>
        <h1 style="font-family: cursive">
            ATENÇÃO, ALGUÉM TÁ QUERENDO ZAP DA MINHA NAMORADA!
        </h1>
        <img style="width: 20vw" src="{{asset('safadao.gif')}}" alt="SAI DAQUI">
        <img style="width: 20vw" src="{{asset('safado.png')}}" alt="SEU BOBAO">
    </center>
    <!-- Reprodução simples de áudio -->
    <audio id="audiozin" src="{{asset('danger.mp3')}}" autoplay>
        O seu navegador não suporta o elemento <code>audio</code>.
    </audio>
    <script>
        var vid = document.getElementById("audiozin");
        vid.volume = 0.2;
    </script>
</body>
</html>
