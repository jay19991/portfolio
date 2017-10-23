<?php 
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$msg = $_POST['msg'];

		$to = "pateljay19991@gmail.com";
		$subject = "Portfolio Website Message";
		$message = "Name: ".$name."\n"."Phone: ".$phone."\n". "Wrote the Following: "."\n\n".$msg;
		$headers = "Form: .$email;

        
        if(mail($to, $subject, $message, $headers))
        {
			echo "Sent Sucessfully! Thank You" .$name. " We will contact you shortly! ";
		}
		else{
			echo "Something went Wrong!";
		}
	}	
?>