<?php
				$name	=$_POST['name'];
				$email	=$_POST['email'];
				$subject=$_POST['subject'];
				$message=$_POST['message'];

				$to=$email;

				$message="From:$name <br />".$message;

				$headers = "MIME-Version: 4.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
				// More headers
				$headers .= 'From: Thaniatrans.com <noreply@yourwebsite.com>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
				$headers .= 'Cc: erwinkristiawan37@gmail.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
				@mail($to,$subject,$message,$headers);
				if(@mail)
				{
				 echo '<script type="text/javascript">window.location="contact.php"</script>';
				}
?>