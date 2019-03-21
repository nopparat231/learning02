
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php  if (isset($_POST['email'])) { 


  $email = $_POST['email'];

  include('conn.php');
  $checkemail = "SELECT * FROM user WHERE email = '$email'";
  $resultemail = mysqli_query($con,$checkemail);
  $objResult = mysqli_fetch_array($resultemail);
  $numemail = mysqli_num_rows($resultemail);
  $massage = "<h2>สวัสดีคุณ : <b>".$objResult['Firstname']."</b></h2><br><h1> รหัสผ่านของคุณคือ : ".$objResult['Password']."</h1>";
  if ($numemail > 0 ){
    
    require_once('./sentmailer/class.phpmailer.php');

    $mail = new PHPMailer();
    $mail->CharSet = "UTF-8";
    
    $mail->IsHTML(true);
    $mail->IsSMTP();
                    $mail->SMTPAuth = true; // enable SMTP authentication
                    $mail->SMTPSecure = ""; // sets the prefix to the servier
                    $mail->Host = "free.mboxhosting.com"; // sets GMAIL as the SMTP server
                    $mail->Port = 25; // set the SMTP port for the GMAIL server
                    $mail->Username = "learning2019@learning2019.ga"; // GMAIL username
                    $mail->Password = 'nopparat23.'; // GMAIL password
                    $mail->From = "learning2019@learning2019.ga"; // "name@yourdomain.com";
                    //$mail->AddReplyTo = "support@thaicreate.com"; // Reply
                    $mail->FromName = "learning2019";  // set from Name
                    $mail->Subject = "รหัสผ่านสำหรับเว็บ learning2019"; 
                    $mail->Body = $massage;
                    
                    $mail->AddAddress($email); // to Address

                    if($mail->send()) {
                     
                      ?>

                      <script type="text/javascript">
                        var $ws = 'index.php';

                        setTimeout(function () { 
                          swal({
                            title: "กรุณาตรวจสอบ รหัสผ่านที่ E-mail",

                            type: "success",

                            confirmButtonText: "ตกลง"
                          },
                          function(isConfirm){
                            if (isConfirm) {
                              window.location.href = $ws;
                            }
                          }); }, 50);

                        </script>

                      <?php }else{ ?>

                        <script type="text/javascript">
                          var $ws = 'index.php';

                          setTimeout(function () { 
                            swal({
                              title: " Server มีปัญหา กรุณารอสักครู่แล้วลองใหม่",

                              type: "error",

                              confirmButtonText: "ตกลง"
                            },
                            function(isConfirm){
                              if (isConfirm) {
                                window.location.href = $ws;
                              }
                            }); }, 50);


                          </script>

                        <?php   }

                      }else{ ?>

                       <script type="text/javascript">
                        var $ws = 'index.php';

                        setTimeout(function () { 
                          swal({
                            title: "ไม่พบที่อยู่ E-Mail กรุณาตรวจสอบ E-mail ที่ท่านใช้สมัคร",

                            type: "error",

                            confirmButtonText: "ลองใหม่อีกครั้ง"
                          },
                          function(isConfirm){
                            if (isConfirm) {
                              window.location.href = $ws;
                            }
                          }); }, 50);


                        </script>

                      <?php  }
                    }

                    ?>
