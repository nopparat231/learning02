   <div class="col-md-3">
   	<ul class="list-group">
   		<a href="index.php?in" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> หน้าหลัก <i class="fa fa-home text-muted fa-lg"></i></a>
   		<?php if(isset($_SESSION["Userlevel"]) == "A"): ?>

           <!--  <a href="scoreall.php" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action">คะแนนผู้ใช้งานทั้งหมด <i class="fa fa-sign-out text-muted fa-lg"></i></a> -->
           <a href="index.php?showchoice" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action">หมวดหมู่ทั้งหมด <i class="fa fa-sign-out text-muted fa-lg"></i></a>
           <a href="index.php?showchoice_s"class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action">คำถามทั้งหมด <i class="fa fa-sign-out text-muted fa-lg"></i></a>
          

         <a href="logout.php" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ออกจากระบบ <i class="fa fa-sign-out text-muted fa-lg"></i></a>
      <?php endif ?>
   </ul>
</div>

</li>