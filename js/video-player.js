$( document ).ready(function() {
  'use strict';

  // Does the browser actually support the video element?
  var supportsVideo = !!document.createElement('video').canPlayType;

  if (supportsVideo) {
  	// Obtain handles to main elements
	$('.videoCon').each(function(index){
		var videoContainer = $(this);
		var video = videoContainer.find('.video');
		var videoControls = videoContainer.find('.controls');
	
		// Hide the default controls
		video.get(0).controls = false;

		// Display the user defined video controls
		videoControls.css({"display":"flex"});

		// Obtain handles to buttons and other elements
		var playpause = videoContainer.find('.play');
		var mute = videoContainer.find('.mute');
		var volinc = videoContainer.find('.volinc');
		var voldec = videoContainer.find('.voldec');
		var progress = videoContainer.find('.prog');
		var progressBar = videoContainer.find('.progress-bar');
		var fullscreen = videoContainer.find('.fs');;

		// Check if the browser supports the Fullscreen API
		var fullScreenEnabled = !!(document.fullscreenEnabled || document.mozFullScreenEnabled || document.msFullscreenEnabled || document.webkitSupportsFullscreen || document.webkitFullscreenEnabled || document.createElement('video').webkitRequestFullScreen);
		// If the browser doesn't support the Fulscreen API then hide the fullscreen button
		if (!fullScreenEnabled) {
		  fullscreen.style.display = 'none';
		}

		// Change the volume
		var alterVolume = function(dir) {
			var currentVolume = Math.floor(video.get(0).volume * 10) / 10;
			if (dir === '+') {
				if (currentVolume < 1) video.get(0).volume += 0.1;
			}
			else if (dir === '-') {
				if (currentVolume > 0) video.get(0).volume -= 0.1;
			}
		}

		// Set the video container's fullscreen state
		var setFullscreenData = function(state) {
			videoContainer.get(0).setAttribute('data-fullscreen', !!state);
		}

		// Checks if the document is currently in fullscreen mode
		var isFullScreen = function() {
			return !!(document.fullScreen || document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || document.fullscreenElement);
		}

		// Fullscreen
		var handleFullscreen = function() {
			// If fullscreen mode is active...	
				if (isFullScreen()) {
					// ...exit fullscreen mode
					// (Note: this can only be called on document)
					if (document.exitFullscreen) document.exitFullscreen();
					else if (document.mozCancelFullScreen) document.mozCancelFullScreen();
					else if (document.webkitCancelFullScreen) document.webkitCancelFullScreen();
					else if (document.msExitFullscreen) document.msExitFullscreen();
					setFullscreenData(false);
				}
				else {
				  // ...otherwise enter fullscreen mode
					// (Note: can be called on document, but here the specific element is used as it will also ensure that the element's children, e.g. the custom controls, go fullscreen also)
			  if (videoContainer.get(0).requestFullscreen) videoContainer.get(0).requestFullscreen();
				  else if (videoContainer.get(0).mozRequestFullScreen) videoContainer.get(0).mozRequestFullScreen();
				  else if (videoContainer.get(0).webkitRequestFullScreen) {
						// Safari 5.1 only allows proper fullscreen on the video element. This also works fine on other WebKit browsers as the following CSS (set in styles.css) hides the default controls that appear again, and 
				// ensures that our custom controls are visible:
				// figure[data-fullscreen=true] video::-webkit-media-controls { display:none !important; }
				// figure[data-fullscreen=true] .controls { z-index:2147483647; }
						video.get(0).webkitRequestFullScreen();
					}
					else if (videoContainer.get(0).msRequestFullscreen) videoContainer.get(0).msRequestFullscreen();
					setFullscreenData(true);
				}
		}

		// Only add the events if addEventListener is supported (IE8 and less don't support it, but that will use Flash anyway)
		if (document.addEventListener) {
			// Wait for the video's meta data to be loaded, then set the progress bar's max value to the duration of the video
			video.on('loadedmetadata', function() {
				progress.get(0).setAttribute('max', video.get(0).duration);
			});

			// Add events for all buttons
			playpause.on('click', function(e) {
				if (video.get(0).paused || video.get(0).ended) video.get(0).play();
				else video.get(0).pause();
			});


			mute.on('click', function(e) {
				video.get(0).muted = !video.get(0).muted;
			});
			volinc.on('click', function(e) {
				alterVolume('+');
			});
			voldec.on('click', function(e) {
				alterVolume('-');
			});
			fullscreen.on('click', function(e) {
				handleFullscreen();
			});

			// As the video is playing, update the progress bar
			video.on('timeupdate', function() {
			// For mobile browsers, ensure that the progress element's max attribute is set
			if (!progress.get(0).getAttribute('max')) progress.get(0).setAttribute('max', video.get(0).duration);
				progress.get(0).value = video.get(0).currentTime;
				progressBar.get(0).style.width = Math.floor((video.get(0).currentTime / video.get(0).duration) * 100) + '%';
			});

		  // React to the user clicking within the progress bar
		  progress.on('click', function(e) {
			var pos = (e.pageX  - this.get(0).offsetLeft) / this.get(0).offsetWidth;
			video.get(0).currentTime = pos * video.get(0).duration;
		  });

			// Listen for fullscreen change events (from other controls, e.g. right clicking on the video itself)
			document.addEventListener('fullscreenchange', function(e) {
				setFullscreenData(!!(document.fullScreen || document.fullscreenElement));
			});
			document.addEventListener('webkitfullscreenchange', function() {
				setFullscreenData(!!document.webkitIsFullScreen);
			});
			document.addEventListener('mozfullscreenchange', function() {
				setFullscreenData(!!document.mozFullScreen);
			});
			document.addEventListener('msfullscreenchange', function() {
				setFullscreenData(!!document.msFullscreenElement);
			});
		}
	 });
  }
});
