<html>
<head>
<style>
   body {
      width: 100%;
      font-family: arial, sans-serif;
      text-align: center;
      background-image: url('background.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      color:white;
   }

   h1 {
      margin-top: 100px;
      font-size: 300%;
   }

   audio {
      margin:0 auto;
      width: 90%;
   }
</style>
<script>

   var play_audio = function() {
      document.getElementById('player').play();
   }
</script>
</head>
<body>
   <h1>Queen of Calm</h1>
    <audio id="player" controls>
     <source src="Queenofcalm.m4a" type="audio/mp4">
     Your browser does not support the audio element.
    </audio>
</body>
</html>
