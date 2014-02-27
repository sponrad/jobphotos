<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Jobphotos</title>
  </head>


  <body>
    <h1>JobPhotos</h1>
    <form>
      <input type="text" name="folderName" id="folderName" placeholder="Job No."/>
    </form>

    <video autoplay></video>
    <img src="" height=480 width=640 id="img">
    <canvas style="display:none;" id="canvas"></canvas>

    <script>
     var errorCallback = function(e) {
       console.log('Reeeejected!', e);
     };
     var video = document.querySelector('video');
     var canvas = document.querySelector('canvas');
     var ctx = canvas.getContext('2d');
     var localMediaStream = null;

     

     function sizeCanvas(canvas, img) {
       // video.onloadedmetadata not firing in Chrome so we have to hack.
       // See crbug.com/110938.
       setTimeout(function() {
	 canvas.width = video.videoWidth;
	 canvas.height = video.videoHeight;
	 img.height = video.videoHeight;
	 img.width = video.videoWidth;
       }, 100);
     }
     
     function snapshot() {
       if (localMediaStream) {
	 ctx.drawImage(video, 0, 0, 640, 480);
	 document.querySelector('img').src = canvas.toDataURL('image/webp');
       }
     }

     video.addEventListener('click', snapshot, false);

     navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
     navigator.getUserMedia({video: true}, function(stream) {
       video.src = window.URL.createObjectURL(stream);
       localMediaStream = stream;
       sizeCanvas(document.querySelector('canvas'), document.querySelector('img'));
     }, errorCallback);
    </script>

  </body>

</html>
