jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
    	var audio = document.getElementById('audio');
  		var source = document.getElementById('audioSource');
  		source.src = $(this).data("href");
  		console.log(source.src);
  		audio.load(); //call this to just preload the audio without playing
  		audio.play(); //call this to play the song right away
        //window.location = $(this).data("href");
    });
});