<!DOCTYPE html>
<html>

<head>
  <title>SIMULASI | Edioo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="./css/style.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary">
    <div class="container-fluid cont-nav">
      <a class="navbar-brand brand-name" href=".">EDIO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav nav-menu">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href=".">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./about.php">ABOUT AUTHOR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">SIMULATION</a>
          </li>
        </ul>
      </div>
      <div class="right-side-desc">
        <p>Educational Website for Video Learning</p>
      </div>
    </div>
  </nav>
  <div class="kotak1">
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 order-2 order-sm-2  order-md-2 order-lg-1 kolom">
        <div class=" video-row">
          <div class="row row-video">
            <div class="col-12 order-last">
              <div class="video-prev" id="video1">
                <video class="mt-2 vid-prev" muted autoplay loop>
                  <source src='./video/default-move.mp4' id='videotrick'> Your browser does not support the
                  video tag.</video>
                <p class="movement">MOVEMENT</p>
              </div>
            </div>
            <div class="col-12 order-first">
              <div class="video-move" id="video2">
                <video class="mt-2 vid-move" muted autoplay loop>
                  <source src='./video/default-prev.mp4' id='videotrick'> Your browser does not support the
                  video tag.</video>
                <p class="prev">PREVIEW</p>
              </div>
            </div>
          </div>
          <hr>
          <div class="penjelasan md">
              <p class="angleexp"></p>
              <p class="frameexp"></p>
              <p class="moveexp"></p>
          </div>
        </div>
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-6 order-1 order-sm-1 col-md-12 order-md-1 order-lg-2">
        <div class="row">
          <div class="col-12">
            <div class="fungsi">
              <div class="funcition">
                <p class="angle">CAMERA ANGLE</p>
                <center>
                  <input type="range" class="anglecam" min="1" max="5" step="1" /><br /><span id="angle_value">Eye
                    Level</span><br />
                </center>
              </div>
              <div class="funcition">
                <p class="frame">FRAME SIZE</p>
                <center>
                  <input type="range" class="framesize" min="1" max="7" step="1" list="steplist" /><br /><span
                    id="frame_value">Medium Close Up</span><br />
                </center>
              </div>
              <div class="funcition">
                <p class="angle">CAMERA MOVEMENT</p>
                <center>
                  <select class="move">
                    <option value="Arc 1">Arc</option>
                    <option value="Crab 2">Crab</option>
                    <option value="Dolly 3">Dolly</option>
                    <option value="Panning 4">Panning</option>
                    <option value="Pedestal 5">Pedestal</option>
                    <option value="Tilting 6">Tilting</option>
                    <option value="Zoom 7">Zooming</option>
                  </select>
                </center>
              </div>
              <center>
                <button value="Simulate" id="simulate">.REC</button>
              </center>
            </div>
          </div>
          <div class="col-12 garis">
            <hr color="black" />
            <div class="penjelasan lg">
              <p class="angleexp"></p>
              <p class="frameexp"></p>
              <p class="moveexp"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="kotak2">
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog .modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <center>
            <p>TUNGGU SEBENTAR
              <div class="spinner-border text-danger" role="status">
              </div>
            </p>
          </center>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="./javascript/script.js"></script>
</body>

</html>