<html>
	<meta http-equiv="Refresh" content="2; url=http://nagancon.ipower.com/NaganConstruction_Finished/index.html">
		<?php 
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\Exception;
			require 'PHPMailer/src/Exception.php';
			require 'PHPMailer/src/PHPMailer.php';
			
			$mail = new PHPMailer;
			$mail->From = "bot@naganconstruction.com";
			$mail->FromName = "Email_Bot";
			
			$message = nl2br("Submitted By: " . $_POST['name'] .  
					"\nAddress: " . $_POST['address'] .
					"\nUnionized: " . $_POST['Union'] . 
					"\nPrevaling Wage: " . $_POST['Wage'] . 
					"\nInsurance Liability: " . $_POST['Insurance'] . "\r\n");
			
			if (isset($_FILES['attachment2']['name']) && $_FILES['attachment2']['name'] != "") {
				$file = "attachment/" . basename($_FILES['attachment2']['name']);
				move_uploaded_file($_FILES['attachment2']['tmp_name'], $file);
			} else 
				$file = "";
			
			$mail->addAddress("eray@naganconstruction.com", "Eray");
			$mail->addCC("nadir@naganconstruction.com", "Nadir");     
			//$mail->addAddress("bagryanskiy.boris@gmail.com", "Boris");
			$mail->addAttachment($file); 

			$mail->isHTML(true);
			$mail->Subject = "Employment Request";
			$mail->Body = $message;
					
			$mail->AltBody = $message;

			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
				echo "Mailer Error: Invalid Email Address" ;
			} elseif(!$mail->send()) {
				echo "Mailer Error: " . $mail->ErrorInfo;
			} 
			else {
				echo "  <body style=margin:0;>
							<div style='line-height:100vh;'>
							 <div style='text-align:center;vertical-align: center;'>
							   <div>
								 Your Application Has Been Submited!
							   </div>
							 </div>
						   </div>
					   </body>";
			}
		?>
<html>
