<?php
	$str_email=$_POST["text_email"];
	$int_num=$_POST['text_contact_number'];
	$vchr_ps=$_POST['text_password'];
	$conn=mysqli_connect('localhost','root','','myapp');
	//mysql_select_db('myapp');
	mysqli_query($conn,"insert into user_details values($int_num,'$str_email','$vchr_ps');");
	?>