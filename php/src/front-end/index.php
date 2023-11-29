<!DOCTYPE html>
<html lang="en">

<head>
  <title>Joke app</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="#" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="img/logo.png" alt="">
        </a>
      </div>
      <div class="col-md-3 text-end">
        <div class="row">
          <div class="col-6">
            <div class="row float-right" style="color: #969696">Handicrapted by</div>
            <div class="row float-right">Jim HLS</div>
          </div>
          <div class="col-6">
            <img src="img/avatar.png" width="50px" height="50px" alt="">
          </div>
        </div>
      </div>
    </header>
  </div>
  <div class="sub-header" style='background-color: #00B65A'>
    <div class="container py-5">
      <div class="h2 text-center text-white mt-4 font-weight-bold">A joke a day keeps the docter away</div>
      <div class="p text-center text-white mt-3 mb-5 font-weight-normal">If you joke wrong way, your teeth have to pay.
        (Serious)</div>
    </div>
  </div>
  <div class="main border-bottom">
    <div class="container text-center py-5">
      <div class="content mb-5">
        <p class="joke-text text-left" id="jokeText" style='color: #646464'>Loading joke...</p>
        <p class="joke-id d-none" id="jokeId">0</p>
      </div>
      <div class="line text-center">
        <hr class="w-75">
      </div>
      <div class="button-container m-0 m-md-4 p-0 p-md-4">
        <div class="w-50 mx-auto row">
          <button type='button' onclick="vote('like')" class='btn btn-primary col-12 col-md-5'>This is Funny!</button>
          <div class="col-md-1"></div>
          <button type='button' onclick="vote('dislike')" class='btn btn-success col-12 col-md-5 mt-md-0 mt-4'>This
            is not funny.</button>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="container text-center my-4">
      <div class="description">
        <div class="p">The website is created as part of Hlsolutions program. The materials contained on
          this
          website are provided for general</div>
        <div class="p">information only and do not consitute any form of advice. HLS assumes no
          responsibility
          for the accuracy of any particular statement and</div>
        <div class="p">acceps no liability for any loss or damage which may arise from reliance on the
          information contained this site</div>
      </div>
      <div class='mt-3' style='color: #646464'>Copyright 2021 HLS</div>
    </div>
  </div>

  <!-- Include your JavaScript file -->
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>