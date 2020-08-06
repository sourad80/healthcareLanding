<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$msg=$_POST['msg'];

		$to='xyz.123@mail.com'; // Receiver Email ID, Replace with your email ID
		$message="Name :".$name."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo '<script>alert("Sent Successfully! Thank you, we will contact you shortly!")</script>';
		}
		else{
			echo "Something went wrong!";
		}
	}
?>