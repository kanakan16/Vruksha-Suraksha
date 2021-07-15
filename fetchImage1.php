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
	$im = $_POST['img'];
	$sql1 = "insert into eximg1(img) values('$im')";
	$result1 = mysqli_query($con,$sql1);
	//img variable
	$sql = "select img from eximg1";
	$result = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result)){
	//$row = mysqli_fetch_assoc($result);
	//mysqli_close($con);

	//header("Content-type: image/jpg");
	//echo ($row['img']);
	//echo "<img src=".base64_encode(stripslashes($row['img'])). "width=175 height=200/>";
	echo "<img src=".$row['img']."/>";
	}
	
?>

<img src="<?=$row['img']?>" width="175" height="200" />