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

   h2 {
      display:inline-block;
      width: 30%;
      font-size: 48px;
      height: 80px;
   }

   .buttons {
      height:50px;
      margin-bottom:100px;
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
   var rewind_audio = function() {
      document.getElementById('player').currentTime=0;
   }
</script>
</head>
<body>
   <h1>Queen of Calm</h1>
   <div class="buttons">
      <h2 onclick="play_audio()">Play</h2>
      <h2 onclick="rewind_audio()">Restart</h2>
    </div> 
    <audio id="player" controls>
     <source src="Queenofcalm.m4a" type="audio/mp4">
     Your browser does not support the audio element.
    </audio>
</body>
</html>
