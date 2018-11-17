function PoetryForm() {
    var poemtext = document.getElementById("poemarea").method;
    document.getElementById("poemarea").innerHTML = poemtext;
    console.log(poemtext);
}

var container = $("#container");

var width = container.innerWidth;
var height = container.innerHeight;
var viewAngle = 90;
var nearClipping = 0.1;
var farClipping = 555;
var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera( viewAngle, width / height, nearClipping, farClipping );
var renderer = new THREE.WebGLRenderer();
var loader = new THREE.FontLoader();
var radius = 100, theta = 0;
var spheres = [];

if ( WEBGL.isWebGLAvailable() === false ) {
    document.body.appendChild( WEBGL.getWebGLErrorMessage() );
}
var container;
var camera, scene, renderer;
var spheres = [];
var mouseX = 0;
var mouseY = 0;
var windowHalfX = window.innerWidth / 2;
var windowHalfY = window.innerHeight / 2;
document.addEventListener( 'mousemove', onDocumentMouseMove, false );
init();



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
var scene = new THREE.Scene(); // initialising the scene
scene.background = new THREE.Color( 0x228B22 );

container.appendChild( renderer.domElement );

function animate() {
    requestAnimationFrame( animate );
    renderer.render( scene, camera );
    render();
  }
  animate();

  var material = new THREE.MeshBasicMaterial( { color: 0xffffff, envMap: scene.background } );
    var geometry = new THREE.SphereBufferGeometry( 5, 5, 5);
            for ( var i = 0; i < 500; i ++ ) {
                var mesh = new THREE.Mesh( geometry, material );
                mesh.position.x = Math.random() * 10000 - 5000;
                mesh.position.y = Math.random() * 10000 - 5000;
                mesh.position.z = Math.random() * 10000 - 5000;
                mesh.scale.x = mesh.scale.y = mesh.scale.z = Math.random() * 3 + 1;
                scene.add( mesh );
                spheres.push( mesh );
            }

  var light = new THREE.PointLight(0xFFFF33);
light.position.x = 0;
light.position.y = 6;
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