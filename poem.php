
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custum.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Lobster" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  </head>
  <body>
   <div id ="canvas">
    
    <div id = "poem">
      <h1><?php echo $_POST["poemtitle"]; ?></h1>
      <p id = "poemarea"><?php echo nl2br ($_POST ["poemarea"]); ?></p>
      <h2>Poem chosen by <?php echo $_POST["name"]; ?></h2>
      <div class = "row"></div>
    <button type="button" class="btn btn-secondary btn-lg">Send Poem</button>
    <button id ="TextToSpeech">Hear Poem</button>
    <!-- <button type="button" class="btn btn-secondary btn-lg" onclick='responsiveVoice.speak("<?php echo $_POST["poemarea"]; ?>");' value='🔊 Play'/>Hear Poem</button>
    <input onclick='responsiveVoice.speak("Hello World");' type='button' value='🔊 Play' /> -->
    </div>

   </div>

  </body>
  <script src="js/three.min.js"></script>
  <script src="js/<?php echo $_POST["canvas-render"]; ?>.js"></script>
  
	<script src="js/shader/CopyShader.js"></script>
		<script src="js/shader/DigitalGlitch.js"></script>

		<script src="js/postprocessing/EffectComposer.js"></script>
		<script src="js/postprocessing/RenderPass.js"></script>
		<script src="js/postprocessing/MaskPass.js"></script>
		<script src="js/postprocessing/ShaderPass.js"></script>
		<script src="js/postprocessing/GlitchPass.js"></script>
    <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
    <script>
        var poem = $("#poemarea").text();

        $(document).ready(function() {
        $("#TextToSpeech").click(function(){
          console.log("eventfired", poem);
          responsiveVoice.speak(poem, "UK English Male", {pitch: 0.8},{rate: 0.9});
        })
      }); 
    </script>
</html>  

