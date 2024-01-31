<?php include 'header.php';
       include 'config.php';

if(isset($_POST['submit'])){
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    //insert query
    $sql = "INSERT INTO  contact (FistName,LastName,email,message)
    VALUE ('$FirstName','$LastName','$email','$message')";

    //execute query
    $result=mysqli_query($conn,$sql);

    //we will check
    if($result){
        echo "<script>alert('Submit Succesfuly')</script>";

    }
    else{
        die(mysqli_error($conn));
    }
}
?>	 
<div id="contact" class="contact">
	<div class="container">
		<h3>CONTACT US</h3>
		<p>Please contact us for all inquiries and purchase options.</p>
			<div class="cont-grids">
				<div class="col-md-6 contact-left">
					<form method="POST">
						 <input type="text" name="FirstName" placeholder="FistName" required="">
						 <input type="text" name="LastName" placeholder="LastName" required="">			 
						 <input class="user" name="email" type="text" placeholder="E-MAIL" required=""><br>
						 <textarea placeholder="MESSAGE" name="message"></textarea>
						 <input type="submit"  name="submit" value="SEND">
					</form>
				</div>
				<div class="col-md-6 contact-right">
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" frameborder="0" style="border:0"></iframe>
				</div>
				<div class="clearfix"></div>
			</div>
	</div>
</div>
					</div>