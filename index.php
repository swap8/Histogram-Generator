 <!DOCTYPE html>
  <html>
    <head>
    <title>Material Histogram</title>

      <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/histogram.css" />
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>

      <nav>
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo"><img id="logo" src="img/flylogo.png"></a>
          <h5 class="brand-logo center">Histogram Generator</h5>
        </div>
      </nav>

      <div class="row">
        <div class="col s12 m8 offset-m2">
          <div class="card">
            <div class="card-content">
              <p>This is a image histogram generator. It generates histogram based on pixels in an image.<br>Upload a Image..</p>
            </div>
            <div class="card-action">
              <form enctype="multipart/form-data" action="" method="POST">
                <input type="hidden" name="MAX_FILE_SIZE" value="5120000" />
                <label class="btn waves-effect waves-light green">
                Browse&hellip; <input type="file" style="display: none;" name="upload_img" id="upload-img">
                </label>
                <input type="submit" name="submit" id="submit" value="Upload" class="waves-effect waves-light btn green right">
              </form>
            </div>
          </div>
        </div>
      </div>

      <div style="display:none;margin:auto" id="hide-post-pic">
        <div class="row">
          <div class="col s12 m8 offset-m2">
            <div class="card">
              <div class="card-content">
                <img src="" id="upload-post-img" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="hide-histogram">
        <div class="row">
          <div class="col s12 m8 offset-m2">
            <div class="card">
              <div class="card-content">
                <?php
                include("upload.php")
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script src="js/histogram.js" type="text/javascript"></script>

</body>
</html>
