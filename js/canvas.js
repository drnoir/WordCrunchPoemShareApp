function PoetryForm() {
    var poemtext = document.getElementById("poemarea").method;
    document.getElementById("poemarea").innerHTML = poemtext;
    console.log(poemtext);
}

var width = window.innerWidth;
var height = window.innerHeight;
var viewAngle = 45;
var nearClipping = 0.1;
var farClipping = 9999;
var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera( viewAngle, width / height, nearClipping, farClipping );
var renderer = new THREE.WebGLRenderer();
var loader = new THREE.FontLoader();
var radius = 100, theta = 0;

//Load background texture
new THREE.TextureLoader();
loader.load('/img/space.jpg' , function(texture)
            {
             scene.background = texture;  
            });


renderer.setSize( width, height );
container = document.getElementById( 'canvas' );
document.body.appendChild(container);

renderer = new THREE.WebGLRenderer();
renderer.setSize( width, height );

container.appendChild( renderer.domElement );

function animate() {
    requestAnimationFrame( animate );
    renderer.render( scene, camera );
    render();
  }
  animate();



  loader.load( 'fonts/helvetiker_bold.typeface.json', function ( font ) {
  
      var textGeo = new THREE.TextGeometry( "Hello World", {
  
          font: font,
  
          size: 200,
          height: 50,
          curveSegments: 12,
          color : 0x0ffffff,
          bevelThickness: 2,
          bevelSize: 5,
          bevelEnabled: true
  
      } );
  
      var textMaterial = new THREE.MeshPhongMaterial( { color: 0x000000 } );
  
      var mesh = new THREE.Mesh( textGeo, textMaterial );
      mesh.position.set( 40, 40, 40 );
  
      scene.add( mesh );
  
  } );

  var geometry = new THREE.BoxBufferGeometry( 50, 50, 50);
				for ( var i = 0; i < 500; i ++ ) {
					var object = new THREE.Mesh( geometry, new THREE.MeshLambertMaterial( { color:  0x0ffffff } ) );
					object.position.x = Math.random() * 800 - 400;
					object.position.y = Math.random() * 800 - 400;
					object.position.z = Math.random() * 800 - 400;
					object.rotation.x = Math.random() * 2 * Math.PI;
					object.rotation.y = Math.random() * 2 * Math.PI;
					object.rotation.z = Math.random() * 2 * Math.PI;
					object.scale.x = Math.random() + 0.5;
					object.scale.y = Math.random() + 0.5;
					object.scale.z = Math.random() + 0.5;
					scene.add( object );
        }
        

  var light = new THREE.PointLight(0xFFFFFF);
light.position.x = 0;
light.position.y = 10;
light.position.z = 0;
scene.add(light);

function render() {
  theta += 0.1;
  camera.position.x = radius * Math.sin( THREE.Math.degToRad( theta ) );
  camera.position.y = radius * Math.sin( THREE.Math.degToRad( theta ) );
  camera.position.z = radius * Math.cos( THREE.Math.degToRad( theta ) );
  camera.lookAt( scene.position );
  camera.updateMatrixWorld();

  renderer.render( scene, camera );

}