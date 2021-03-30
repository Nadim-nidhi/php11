
<?php include "header.php"; ?>

<div class="container py-5 my-5 bg-primary">
<div class="row">
	<div class="col-5">
	 <form action="" method="GET">
	 	<input type="text" name="fullname" class="form-control mb-2" placeholder="Full name">
	 	<input type="email" name="email" class="form-control mb-2" placeholder="Email">
	 	<input type="text" name="mn" class="form-control mb-2" placeholder="Mobile number">
	  <input type="submit" name="btn" class="btn btn-danger" value="click here">
	
    </form>
   

</div>
<div class="col-7 text-white">  
<?php

if (isset($_GET['btn'])) {
	
	$name= $_GET['fullname'];
	$email= $_GET['email'];
	$mn= $_GET['mn'];

	echo $name."<br>".$email."<br>".$mn;
}

?></div>
</div>





</div>

<?php include "footer.php"; ?>