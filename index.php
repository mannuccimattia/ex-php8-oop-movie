<?php require_once "./utils/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "./utils/html_head.php" ?>
  <title>PHP Movies</title>
</head>

<body>
  <div class="container-fluid text-center py-5">
    <h1>PHP Movies</h1>
  </div>

  <div class="container">
    <div class="row mb-4">

      <?php
      foreach ($moviesArray as $movie) {
      ?>

        <div class="col-12 col-lg-6 col-xxl-3 g-3">
          <div class="card">
            <div class="card-img-top">
              <img src="<?php echo $movie["url"] ?>" class="rounded-top" alt="cover">
            </div>
            <div class="card-title ps-3 pt-2">
              <h4><?php echo $movie["title"] ?></h4>
            </div>
            <div class="card-text ps-3 mb-2">
              <div><b>Director:</b> <?php echo $movie["director"] ?></div>
              <div><b>Year:</b> <?php echo $movie["release"] ?></div>
              <div><b>Running time:</b> <?php echo $movie["running"] ?> minutes</div>
              <div><b>Genres:</b> <?php echo $movie["genre"] ?></div>
              <div><b>Country:</b> <?php echo $movie["country"] ?></div>
            </div>
          </div>
        </div>

      <?php
      }
      ?>

    </div>
  </div>
</body>

</html>