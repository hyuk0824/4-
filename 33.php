<!DOCTYPE html>
<html>

  <head>
    <title>HTML5 Audio Player </title>
    <!-- Uncomment the following meta tag if you have issues rendering this page on an intranet site. -->
    <!--  <meta http-equiv="X-UA-Compatible" content="IE=9"/> -->
    <script type="text/javascript">
        // Global variable to track current file name.
        var currentFile = "";
        function playAudio() {
            // Check for audio element support.
            if (window.HTMLAudioElement) {
                try {
                    var oAudio = document.getElementById('myaudio');
                    var btn = document.getElementById('play');
                    var audioURL = document.getElementById('audiofile');

                    //Skip loading if current file hasn't changed.
                    if (audioURL.value !== currentFile) {
                        oAudio.src = audioURL.value;
                        currentFile = audioURL.value;
                    }

                    // Tests the paused attribute and set state.
                    if (oAudio.paused) {
                        oAudio.play();
                        btn.textContent = "Pause";
                    }
                    else {
                        oAudio.pause();
                        btn.textContent = "Play";
                    }
                }
                catch (e) {
                    // Fail silently but show in F12 developer tools console
                     if(window.console && console.error("Error:" + e));
                }
            }
        }
             // Rewinds the audio file by 30 seconds.

        function rewindAudio() {
             // Check for audio element support.
            if (window.HTMLAudioElement) {
                try {
                    var oAudio = document.getElementById('myaudio');
                    oAudio.currentTime -= 30.0;
                }
                catch (e) {
                    // Fail silently but show in F12 developer tools console
                     if(window.console && console.error("Error:" + e));
                }
            }
        }

             // Fast forwards the audio file by 30 seconds.

        function forwardAudio() {

             // Check for audio element support.
            if (window.HTMLAudioElement) {
                try {
                    var oAudio = document.getElementById('myaudio');
                    oAudio.currentTime += 30.0;
                }
                catch (e) {
                    // Fail silently but show in F12 developer tools console
                     if(window.console && console.error("Error:" + e));
                }
            }
        }

             // Restart the audio file to the beginning.

        function restartAudio() {
             // Check for audio element support.
            if (window.HTMLAudioElement) {
                try {
                    var oAudio = document.getElementById('myaudio');
                    oAudio.currentTime = 0;
                }
                catch (e) {
                    // Fail silently but show in F12 developer tools console
                     if(window.console && console.error("Error:" + e));
               }
            }
        }

    </script>
  </head>

  <body>
    <p>
      <input type="file" id="audio/*" capture="microphone" />
    </p>
    <audio id="myaudio">
      HTML5 audio not supported
    </audio>
    <button id="play" onclick="playAudio();">
      Play
    </button>

    <button onclick="rewindAudio();">
      Rewind
    </button>
    <button onclick="forwardAudio();">
      Fast forward
    </button>
    <button onclick="restartAudio();">
      Restart
    </button>

  </body>

</html>
