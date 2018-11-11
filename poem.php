<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custum.css">

  </head>
  <body>
 
   <div id ="canvas">
    
    <div id = "poem">
      <h1><?php echo $_POST["poemtitle"]; ?></h1>
      <p><?php echo $_POST["poemarea"]; ?></p>
      <h2>Poem chosen by <?php echo $_POST["name"]; ?></h2>
      <div class = "row"></div>
    <button type="button" class="btn btn-secondary btn-lg">Send Poem</button>

    </div>

   </div>

  </body>
  <script src="js/three.min.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/<?php echo $_POST["canvas-render"]; ?>.js"></script>
  
	<script src="js/shader/CopyShader.js"></script>
		<script src="js/shader/DigitalGlitch.js"></script>

		<script src="js/postprocessing/EffectComposer.js"></script>
		<script src="js/postprocessing/RenderPass.js"></script>
		<script src="js/postprocessing/MaskPass.js"></script>
		<script src="js/postprocessing/ShaderPass.js"></script>
		<script src="js/postprocessing/GlitchPass.js"></script>
</html>  