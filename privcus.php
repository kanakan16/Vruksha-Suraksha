<?php
	//connection
	$con = mysqli_connect("localhost","root","","government");
	//check connection
	if($con)
	{
		echo "connnection success";
	}
	else
	{
		echo "connection un sucess";
	}
  $name = $_POST['name'];
  $appadd = $_POST['appadd'];
  $locadd = $_POST['locadd'];
  $mblno = $_POST['mblno'];
  $date = $_POST['date'];
  
  $wno = $_POST['wno'];
  $sno = $_POST['sno'];
  $landmark = $_POST['landmark'];
  $email = $_POST['email'];
  $landno = $_POST['landno'];
  $pur = $_POST['pur'];
  $notf = $_POST['notf'];
  $eltf = $_POST['eltf'];
  $girth = $_POST['girth'];
  $radio = $_POST['radio'];
	
$sql = "insert into dbcon values('$name','$appadd','$locadd','$mblno','$date','$wno','$sno','$landmark','$email','$landno','$pur','$notf','$eltf','$girth','$radio')";

if(mysqli_query($con,$sql))
	{
		echo "<br>inserted";
	}
	else
	{
		echo "not inserted";
	}
?>