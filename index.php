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
           <br>
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


</body>

</html>