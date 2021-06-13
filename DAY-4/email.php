<?php
	$mail=$_POST['mail'];
	$server="localhost:3306";
	$dbname="web-development";
	$username="pravana";
	$password="123456";
	$sFlag=0;
	$conn=mysqli_connect($server,$username,$password,$dbname);
	if(!$conn)
	{
		echo 'server connection failure';
		$sFlag=0;
	}
	else
	{
		echo 'Server connection authorized';
		$sFlag=1;
	}
	echo '<br/>';
	if($sFlag==1)
	{
		$sql="INSERT INTO contact_form(email) values(".$mail");";
		$a=mysqliquery($conn,$sql);
		if($a)
		{
			echo "Data inserted successfully";
		}
		else
		{
			echo $conn->error;
		}
	}
?>