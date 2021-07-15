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
   $pur = $_POST['pur'];
  $notf = $_POST['notf'];
  $girth = $_POST['girth'];
  $radio1 = $_POST['radio1'];
   $radio2 = $_POST['radio2'];
    $radio3 = $_POST['radio3'];
	$image = $_POST['image'];
   $id = $_POST['id'];
	
$sql = "insert into dbcon1 values('$name','$appadd','$locadd','$mblno','$date','$wno','$sno','$landmark','$email','$pur','$notf','$girth','$radio1','$radio2','$radio3','$image','$id')";

if(mysqli_query($con,$sql))
	{
		echo "<br>inserted";
	}
	else
	{
		echo "not inserted";
	}
?>