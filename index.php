<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.2.1.css">
</head>

<body>
 
<?php include 'navbar.php'; ?>

  <div class="py-2">
    <div class="container">
      <div class="row">
     
<?php include 'menu.php'; ?>
<?php include 'model.php'; ?>

<?php
$regis = isset($_GET['register']);

 if ($regis <> ''): ?>
   <div class="col-md-9 bg-light">
  <?php include 'register.php'; ?>
</div>
<?php else: ?>
        <div class="col-md-9 bg-light">
          <div class="embed-responsive embed-responsive-16by9">
            <video src="https://static.pingendo.com/video-placeholder.mp4" class="embed-responsive-item" controls="controls"> Your browser does not support HTML5 video. </video>
          </div>
          <h4 class="">Heading 4 <span class="badge badge-pill badge-warning">!</span></h4>
          <ol class="">
            <li>One</li>
            <li>Two</li>
            <li>Three</li>
          </ol>
        </div>

<?php endif ?>

      </div>
    </div>
  </div>
<?php include 'footer.php'; ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

</html>