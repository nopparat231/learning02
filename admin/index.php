<?php
if(session_status() == PHP_SESSION_NONE){
    //session has not started
  session_start();
}
?>

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
<?php include '../conn.php'; ?>

<?php include 'datatables.php'; ?>

<body>

<?php 

$in = isset($_REQUEST['in']);
$sh = isset($_REQUEST['showchoice']);
$shs = isset($_REQUEST['showchoice_s']);

if ($in <> '') {
  include 'index_scoreall.php';
}elseif ($sh <> '') {
  include 'showchoice.php';
}elseif ($shs <> '') {
  include 'showchoice_sub.php';
}

 ?>

</div>
</div>
</div>
</div>
<style>
  .footer {
   position: fixed;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
 }
</style>
<?php include 'footer_admin.php'; ?>
</body>

</html>