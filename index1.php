
<?php include 'conn.php'; ?>

<?php 


$query_choice = "SELECT * FROM choice ORDER BY choice_id";
$choice = mysqli_query($con,$query_choice) or die(mysqli_error());
$row_choice = mysqli_fetch_assoc($choice);
$totalRows_choice = mysqli_num_rows($choice);

$query_testing = "SELECT * FROM testing ";
$testing = mysqli_query($con,$query_testing) or die(mysqli_error());
$row_testing = mysqli_fetch_assoc($testing);
$totalRows_testing = mysqli_num_rows($testing);


?>


        <h1 class="mb-3 text-center">สื่อการเรียนรู้</h1>
        <hr>
        <ul class="list-group list-group-flush text-center">
          <?php if ($totalRows_choice > 0) {?>
            <?php do { ?>

              <?php 
              $c =  $row_choice['choice_id']; 
              $user_id = $_SESSION['UserID'];
              $sql3="SELECT * From user_learning WHERE user_id = $user_id AND choice_id = $c";
              $db_query3=mysqli_query($con,$sql3) or die(mysqli_error());
              $result3=mysqli_fetch_array($db_query3);
              $totalRows_query3 = mysqli_num_rows($db_query3);

              ?>

              <?php if ($totalRows_query3 > 0){ ?>

                <?php if ($result3['user_learning_af'] == 'ยังไม่ทำ'){ ?>
                 <li class="list-group">
                  <h3>

                    <a href="choice.php?choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff"><?php echo $row_choice['choice_name']; ?></a> <b style="color: #FF5733"> <font size="3"> ทำแบบทดสอบก่อนเรียนแล้ว </font></b>
                  </h3>
                </li>

              <?php }else{ ?>
                <li class="list-group">
                  <h3>
                    
                    <a href="watch.php?choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff&cff"><?php echo $row_choice['choice_name']; ?></a> <b style="color: red"> <font size="3">ทำแบบทดสอบแล้ว</font></b>
                  </h3>
                </li>

              <?php  } ?>


            <?php }else{?>

             <li class="list-group">
              <h3>
                
                <a href="choice.php?choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&bff=bff"><?php echo $row_choice['choice_name']; ?></a> <b> <font size="3">ยังไม่ทำแบบทดสอบ</font></b>
              </h3>
            </li>
          <?php } ?>

          <hr>

        <?php } while ($row_choice = mysqli_fetch_assoc($choice)); ?>
      <?php }
      mysqli_free_result($choice);
      ?>

    </ul>