<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
    <?php include_once "styles.php"; ?>
    <!--styles css--> 
  </head>
  <body>
  <!--navbar-->
  <?php include_once "header.php"; ?>
  <!--end of navbar-->
    <div class="wrapper">
      <h1>Image Editor</h1>
      
      <!--Form for collecting image URL -->
      <form id="urlBox" class = "center">
        <input class="url-box" type="url" id="imgUrl" placeholder="Paste any image link and hit enter to start playing.">
      </form>

      <!--Controls for CSS filters via range input-->
      <div class="sliders">
        <form id="imageEditor">
          <p>
            <label for="gs">Grayscale</label>
            <input id="gs" name="gs" type="range" min=0 max=100 value=0>
          </p>

          <p>
            <label for="blur">Blur</label>
            <input id="blur" name="blur" type="range" min=0 max=10 value=0>
          </p>

          <p>
            <label for="br">Brightness</label>
            <input id="br" name="br" type="range" min=0 max=200 value=100>
          </p>

          <p>
            <label for="ct">Contrast</label>
            <input id="ct" name="ct" type="range" min=0 max=200 value=100>
          </p>

          <p>
            <label for="huer">Hue Rotate</label>
            <input id="huer" name="huer" type="range" min=0 max=360 value=0>
          </p>

          <p>
            <label for="opacity">Opacity</label>
            <input id="opacity" name="opacity" type="range" min=0 max=100 value=100>
          </p>

          <p>
            <label for="invert">Invert</label>
            <input id="invert" name="invert" type="range" min=0 max=100 value=0>
          </p>

          <p>
            <label for="saturate">Saturate</label>
            <input id="saturate" name="saturate" type="range" min=0 max=500 value=100>
          </p>

          <p>
            <label for="sepia">Sepia</label>
            <input id="sepia" name="sepia" type="range" min=0 max=100 value=0>
          </p>

          <input type="reset" form="imageEditor" id="reset" value="Reset" />

        </form>
      </div>  

      <!--container where image will be loaded-->
      <div id="imageContainer" class="center">
      
           <span>
        
        
<img id="blah" src="http://placehold.it/400x300 alt="your image" style="width: 100%; height: 25em;" />
<input type='file' onchange="readURL(this);" />
    </span>              
  
    <button style="float: right;">Save </button>

</div>
</div>


    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-58515343-1', 'auto');
      ga('send', 'pageview');


           function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>

  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    

  <?php include_once "script.php"; ?>
  </body>
</html>