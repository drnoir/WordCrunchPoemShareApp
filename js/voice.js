

$( document ).ready(function() {
    var poem = $("#poem").html();
    $( "TextToSpeech" ).click(function( event ) {
 
        responsiveVoice.speak(poem);
 
    });
 
});