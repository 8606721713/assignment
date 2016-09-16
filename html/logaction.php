<?php
$str_email=$_POST["text_email"];
	$vchr_ps=$_POST['text_password'];
	$conn=mysqli_connect('localhost','root','','myapp');
	$query=mysqli_query($conn,"select*from user_details where vchr_emailid='$str_email' and vchr_password='$vchr_ps';");
	if (mysqli_num_rows($query)==1)
	 {
	header("location:new.html");	
	}
	else
	{
	
		echo "invalid";
			} 

			?>
