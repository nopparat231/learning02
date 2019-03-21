<?php session_start();?>
<meta charset="UTF-8" />

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


<?php
include('conn.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
$Firstname = $_REQUEST["Firstname"];
$Lastname = $_REQUEST["Lastname"];
$Username = $_REQUEST["Username"];
$Password = $_REQUEST["Password"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$Userlevel = "M";
$Status = "N";
$session_id = session_id();

$check = "SELECT Username FROM user WHERE '$Username' = Username ";
$result = mysqli_query($con,$check);
$num = mysqli_num_rows($result);

$checkemail = "SELECT email FROM user WHERE email = '$email'";
$resultemail = mysqli_query($con,$checkemail);
$numemail = mysqli_num_rows($resultemail);

if ($numemail > 0 ){ ?>

	<script type="text/javascript">

		var $ws = 'index.php';

		setTimeout(function () { 
			swal({
				title: "E-mail นี้มีผู้ใช้แล้ว กรุณาลองใหม่อีกครั้ง",

				type: "error",

				confirmButtonText: "ลองใหม่อีกครั้ง"
			},
			function(isConfirm){
				if (isConfirm) {
					window.location.href = $ws;
				}
			}); }, 50);
		</script>

	<?php }elseif ($num > 0 ){ ?>

		<script type="text/javascript">

			var $ws = 'index.php';

			setTimeout(function () { 
				swal({
					title: "ชื่อผู้ใช้นี้มีผู้ใช้แล้ว กรุณาลองใหม่อีกครั้ง",

					type: "error",

					confirmButtonText: "ลองใหม่อีกครั้ง"
				},
				function(isConfirm){
					if (isConfirm) {
						window.location.href = $ws;
					}
				}); }, 50);
			</script>

		<?php }else{
	//เพิ่มเข้าไปในฐานข้อมูล
			$sql = "INSERT INTO user(Firstname, Lastname, Username, Password, email ,phone , Userlevel , session_id ,  Status)
			VALUES('$Firstname', '$Lastname', '$Username', '$Password', '$email' , '$phone' , '$Userlevel'  , '$session_id', '$Status')";

			$result1 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
			$ID = mysqli_insert_id($con) or die ("Error in query: $sql " . mysqli_error());
			$ma = "http://learning2019.atwebpages.com/register_db_active.php?sid=".$session_id."&ID=".$ID."<br>";
           $massage = "<h3> กรุณากดลิ้งค์ เพื่อยืนยันการสมัคร </h3><br>".$ma;
      }
	//ปิดการเชื่อมต่อ database
      mysqli_close($con);

	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
      require_once('sentmailer/class.phpmailer.php');
      if($result1){

       

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
                    $mail->Subject = "ยืนยันการสมัครสมาชิก learning2019"; 
                    $mail->Body = $massage;
                    
                    $mail->AddAddress($email); // to Address

                    if($mail->send()){
                         ?>


                         <script type="text/javascript">

                             var $ws = 'index.php';

                             setTimeout(function () { 
                                 swal({
                                     title: "สมัครสมาชิกสำเร็จ กรุณายืนยันที่ E-mail ที่ท่านสมัคร",

                                     type: "success",

                                     confirmButtonText: "ยืนยัน"
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
                                    title: "ส่งเมล์ไม่สำเร็จ",

                                    type: "error",

                                    confirmButtonText: "ลองใหม่อีกครั้ง"
                               },
                               function(isConfirm){
                                    if (isConfirm) {
                                        window.location.href = $ws;
                                   }
                              }); }, 50);

                         </script>


                    <?php } ?>
                    
               <?php }else{ ?>
                   <script type="text/javascript">

                       var $ws = 'index.php';

                       setTimeout(function () { 
                           swal({
                               title: "สมัครสมาชิกไม่สำเร็จ",

                               type: "error",

                               confirmButtonText: "ลองใหม่อีกครั้ง"
                          },
                          function(isConfirm){
                               if (isConfirm) {
                                   window.location.href = $ws;
                              }
                         }); }, 50);

                    </script>
                    <?php }?>