   <div class="col-md-3">
   	<ul class="list-group">
   		<a href="index.php" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> หน้าหลัก <i class="fa fa-home text-muted fa-lg"></i></a>
   		<?php if(isset($_SESSION["Userlevel"]) == "M"): ?>

   			<a href="index.php?learning" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> บทเรียน <i class="fa fa-list text-muted fa-lg"></i></a>

   			<a class="dropdown-toggle border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action" href="#" data-toggle="dropdown"> ข้อมูล </a>

            <a href="score.php?user_id=<?php echo $_SESSION["UserID"]; ?>" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ข้อมูลคะแนน <i class="fa fa-list-ol text-muted fa-lg"></i></a>

            <ul class="dropdown-menu">
            <li>
               <a href="editprofile.php?user_id=<?php echo $_SESSION["UserID"]; ?>" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ข้อมูลผู้ใช้ </a>
            </li>
            <li>
               <a href="edit_password.php?user_id=<?php echo $_SESSION["UserID"]; ?>" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> เปลี่ยนรหัสผ่าน </a>
            </li>


         </ul>

         <a href="logout.php" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ออกจากระบบ <i class="fa fa-sign-out text-muted fa-lg"></i></a>
      <?php endif ?>
   </ul>
</div>

</li>