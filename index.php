<?php 
include("db/conn.php"); 

//Select total number of poems from db
$totalpoems= "SELECT * FROM poems";
if ($conn->query($totalpoems) >0) {
  echo "Records in DB";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>WordCrunch - 3D Poem Generator</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custum.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Lobster" rel="stylesheet">
  </head>
  <body>
  <div id = "container">
    <div class = "col-md-2"></div>  
      <div class = "col-md-6 whitebg"> 
        <h1>WordCrunch</h1>
        <i class="far fa-edit fa-7x right"></i>
        <h3>Send a 3D poem to a friend</h3>
        <p>Fill in the form below with a poem of your own or a well known poem and WordCrunch will
          render a 3D scene with your poem to share with a friend</p>
        <div class = "row-fluid formbg">
          
          <form action="poem.php?id='<?php echo $_GET['poem_id'];?>'" method="post">

          <div class="form-group">
            <!-- Set canvas to be rendered -->
            <label for="name">Choose your 3D Background</label>
            <select class="form-control" name="canvasrender">
                <option value="canvas">Cubes</option>
                <option value="matrix">GlitchMash</option>
                <option value="cubes2">Cubes Pysch</option>
                <option value ="reflections">Reflecting Spheres</option>
                <option>5</option>
              </select>
            </div>
          <!-- Poem id - fix to auto increment -->
          <div class="form-group">
            <label for id>Give Your Poem a unique ID</label>
            <input type="name" class="form-control" id="poem_id" placeholder="poem_id" name="poem_id">
            <h3 id = "poemid"></h3>
          </div>
    <!-- Username        -->
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="name" class="form-control" id="name" placeholder="Name" name="name">
          </div>
    <!-- user input for name of poem -->
          <div class="form-group">
            <label for="poemname">Name of Poem</label>
            <input type="name" class="form-control" id="name" placeholder="Poem name" name="poemtitle">
        </div>

          <div class="form-group">
              <label for="poem">Poem:</label>
                <textarea class="form-control" rows="20" id="poemarea" name="poemarea"></textarea>
          </div>
            <!-- submit for forms  -->
            <button type="submit" class="btn btn-default" onclick="PoetryForm()">Submit</button>
          </form>
  </div>
  <div class = "col-md-2"></div>  
</div>
  
  </body>
  <script src="js/three.min.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  
	<script src="js/shader/CopyShader.js"></script>
		<script src="js/shader/DigitalGlitch.js"></script>

		<script src="js/postprocessing/EffectComposer.js"></script>
		<script src="js/postprocessing/RenderPass.js"></script>
		<script src="js/postprocessing/MaskPass.js"></script>
		<script src="js/postprocessing/ShaderPass.js"></script>
		<script src="js/postprocessing/GlitchPass.js"></script>
    <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
 
</html>  
