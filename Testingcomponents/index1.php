<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
    <h2>Reduce or Compress Image Size While Uploading in PHP</h2>
    <form method="post" name="upload_form" id="upload_form" enctype="multipart/form-data" action="upload.php">
    <label>Choose Images to Upload</label>
    <input type="file" name="upload_images" id="image_file">
    <div class="file_uploading hidden">
    <label> </label>
    <img src="uploading.gif" alt="Uploading......"/>
    </div>
    </form>
    <div id="uploaded_images_preview"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    <!-- <script type="text/javascript" src="scripts/jquery.form.js"></script> -->
<script type="text/javascript" src="upload.js"></script>
  </body>
</html>
