<?php
   //DB drtails
   $dbHost = 'localhost';
   $dbUsername = 'root';
   $dbPassword = '';
   $dbName = 'government';
   
   //create connection and select DB
   $ db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
   echo "ASa";
   //check connection
   if($db->connect_error){
	   die("connection failed:" . $db->connect_error);
   }
   //get image data from database
   $result = $db->query("SELECT image FROM dbcon1");//WHERE id =($_get('id']}");
   
    if($result->num_rows>0){
		$imgData = $result->fetch_assoc();
		
		//Render image
		//Header ("content-type:image/jpg");
		echo '<img src="data:image/jpeg;based64,'.base64_encode($imgData['image']).'"height="" width="400"/>';
	 } else{
		echo 'image not found...';
	 }
	 ?>
   