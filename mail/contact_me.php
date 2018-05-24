<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
//$to = 'nyirinkwayaherve@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
//$from =  "info@onlinelacolombieregisto.com";

//$email_subject = "Website Contact Form:  $name";
//$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
//$headers = "From: info@onlinelacolombieregisto.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//$headers .= "Reply-To: $email_address";   
//mail($to,$email_subject,$email_body,$headers);


                $subject = "Customers Support ";
				$to = '$email';
				$from =  "info@onlinelacolombieregisto.com";
				
				
				//data
				    $emess = "Your Name: ".$name."\r\n";
			       
			        $emess.= "Your Email: ".$email_address."\r\n";
			
			        $emess.= "Your Phone Number: ".$phone."\r\n";    
			        
			        $emess.= "".$message."\r\n";   
			        
			        //$emess.= "Link: http://onlinelacolombieregisto.com" ."\r\n";
			        
			        //$emess.= "Date Registered:".$joining_date."\r\n";
			        
			        //$emess.= "NB: This email address and password is valid ONLY for 1 day. After that duration it will be deleted.";
				
				//Headers
				$headers  = "MIME-Version: 1.0\r\n";
				//$headers .= "Content-type: text/html; charset=UTF-8\r\n";
				
				$headers .= "From: KODEN Team <".$from."> ";
				
				mail($to,$subject,$emess,$headers);



return true;         
?>
