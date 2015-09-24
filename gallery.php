<?php session_start(); ?>
<html>

<head>
  <title>13th Annual Alumni Meet &middot; Gallery</title>
  <?php include 'topHead.php'; ?>
  <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
  <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
  <!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> -->
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container">
    <div class="jumbotron">
      <!-- <form class="form-inline">
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-success btn-lg">
            <i class="glyphicon glyphicon-leaf"></i>
            <input id="borderless-checkbox" type="checkbox">Borderless
          </label>
          <label class="btn btn-primary btn-lg">
            <i class="glyphicon glyphicon-fullscreen"></i>
            <input id="fullscreen-checkbox" type="checkbox">Fullscreen
          </label>
        </div>
      </form> -->
      <br>

      <div id="links">
        <a href="img/gallery1/1.JPG" title="" data-gallery>
          <img src="img/gallery1/thumbnails/1.JPG" alt="NAME" id="thumb">
        </a>
        <a href="img/gallery1/2.JPG" title="" data-gallery>
          <img src="img/gallery1/thumbnails/2.JPG" alt="Name" id="thumb">
        </a>
        <a href="img/gallery1/3.JPG" title="" data-gallery>
          <img src="img/gallery1/thumbnails/3.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/4.JPG" title="" data-gallery>
          <img src="img/gallery1/thumbnails/4.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/5.JPG" title="" data-gallery>
          <img src="img/gallery1/thumbnails/5.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/6.JPG" title="" data-gallery>
          <img src="img/gallery1/thumbnails/6.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/7.JPG" title="" data-gallery>
          <img src="img/gallery1/thumbnails/7.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/8.JPG" title="" data-gallery>
          <img src="img/gallery1/thumbnails/8.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/9.JPG" title="" data-gallery>
          <img src="img/gallery1/thumbnails/9.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/10.JPG" title="" data-gallery>
          <img src="img/gallery1/thumbnails/10.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/11.JPG" title="" data-gallery>
          <img src="img/gallery1/thumbnails/11.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/12.JPG" title="" data-gallery>
          <img src="img/gallery1/thumbnails/12.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/13.JPG" title="" data-gallery>
          <img src="img/gallery1/thumbnails/13.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/14.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/14.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/15.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/15.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/16.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/16.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/17.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/17.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/18.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/18.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/19.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/19.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/20.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/20.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/21.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/21.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/22.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/22.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/23.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/23.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/24.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/24.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/25.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/25.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/26.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/26.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/27.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/27.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/28.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/28.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/29.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/29.JPG" alt="" id="thumb">
        </a>
        <!-- <a href="img/gallery1/30.JPG" data-gallery>
              <img src="img/gallery1/thumbnails/30.JPG" alt="" id="thumb">
              </a> -->
        <a href="img/gallery1/31.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/31.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/32.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/32.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/33.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/33.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/34.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/34.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/35.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/35.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/36.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/36.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/37.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/37.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/38.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/38.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/39.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/39.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/40.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/40.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/41.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/41.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/42.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/42.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/43.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/43.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/44.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/44.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/45.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/45.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/46.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/46.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/47.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/47.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/48.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/48.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/49.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/49.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/50.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/50.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/51.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/51.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/52.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/52.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/53.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/53.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/54.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/54.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/55.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/55.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/56.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/56.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/57.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/57.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/58.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/58.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/59.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/59.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/60.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/60.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/61.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/61.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/62.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/62.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/63.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/63.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/64.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/64.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/65.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/65.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/66.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/66.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/67.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/67.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/68.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/68.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/69.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/69.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/70.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/70.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/71.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/71.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/72.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/72.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/73.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/73.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/74.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/74.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/75.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/75.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/76.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/76.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/77.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/77.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/78.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/78.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/79.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/79.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/80.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/80.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/81.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/81.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/82.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/82.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/83.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/83.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/84.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/84.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/85.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/85.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/86.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/86.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/87.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/87.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/88.JPG" data-gallery>
          <img src="img/gallery1/thumbnails/88.JPG" alt="" id="thumb">
        </a>
        <a href="img/gallery1/89.jpg" title="Students Alumni Cell Team" data-gallery>
          <img src="img/gallery1/thumbnails/89.jpg" alt="" id="thumb">
        </a>
      </div>
    </div>
  </div>


  <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
  <div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" aria-hidden="true">&times;</button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body next"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left prev">
              <i class="glyphicon glyphicon-chevron-left"></i> Previous
            </button>
            <button type="button" class="btn btn-primary next">
              Next
              <i class="glyphicon glyphicon-chevron-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script> -->
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- <script src="js/bootstrap-image-gallery.min.js"></script> -->
<script src="js/bootstrap-image-gallery.js"></script>
<script src="js/demo.js"></script>

</html>
