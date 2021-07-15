<!DOCTYPE html>
<html lang="en">
<head>
  <title>VRUKSHA SURAKSHA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
	<style>
body  {
  background-image: url("download (1).jpg");
  background-repeat: no-repeat;
    background-size: cover;
  background-attachment: fixed;
}	
	p{
			font-family:Gill Sans MT;
			font-size:18px;
			color:#009900;
		}
		table{
		font-family:arial,sans-serif;
		border-collapse:collapse;
		width:100%;
		}
		td,th{
		border:1px solid #dddddd;
		text-align:left;
        font-size:18px;
		padding:8px;
		}
	
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}

	</style>
	
	
	</head>

	
	
	
	
<body><!-- style="height:1000px"-->
<div>
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#427626;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-family:copperplate gothic;font-size:28px;font-weight:bold;">VRUKSHA SURAKSHA <span class="glyphicon glyphicon-tree-conifer"></span></h2></a>
    </div>
	<ul class="nav navbar-nav" style="font-family:Gill Sans MT";>
      <li><a href="welcome.html">HOME</a></li>
     
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">APPLICATION<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="private.html"> private property</a></li>
			
          <li><a href="govt.html">governament property</a></li>
        
        </ul>
      </li>
	  
	  <li><a href=""><span class="glyphicon glyphicon-list-alt"> APPLICATION STATUS</span></a></li>
      
    </ul>
    </ul>
	<ul class="nav navbar-nav navbar-right">
		<li style="font-family:Gill Sans MT";><a href="admin.html"><span class="glyphicon glyphicon-user" >  ADMIN  </span></a></li>
		
	 </ul>
      
    
  </div>
</nav>
</div><br>
<div class="container">

	<?php
//mysql connection
define('DB_NAME','government');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');

$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$link)
{
	die('could not connect:'.mysql_error());
}
$db_selected=mysql_select_db(DB_NAME,$link);
if(!$db_selected)
{
	die('can\'t use'.DB_NAME.':'.mysql_error());
}
echo 'connected successfully';

$sql = "SELECT * FROM dbcon";

$records = mysql_query($sql);


?>

	<h1 style="color:#E82102;font-family:High Tower Text;font-weight:bold;text-align:center;text-decoration:";>REPORTS</h1><BR>
	<h2 style="color:#E82102;font-family:High Tower Text;font-weight:bold;text-align:left;text-decoration:";>Appointments</h2><br>
	<div class="row">
	<div class="col-md-2">
	
	</div>
	<div class="col-md-10">
		<div style="";>
			<table class="table">
			<tr>
				<th>name</th>
				<th>application add</th>
				<th>location add</th>
				<th>mobile no</th>
				<th>date</th>
				<th>ward no</th>
				<th>servey no</th>
				<th>landmark</th>
				<th>email</th>
				<th>landno</th>
				<th>purpose</th>
				<th>no of trees to be felled</th>
				<th>extant land to felled</th>
				<th>girth of tree</th>
				<th>dangers</th>
				<th>fileToUpload</th>
				<th>adhar number</th>
				<th><span class="glyphicon glyphicon-trash">Remove</span></th>
				<th><span class="glyphicon glyphicon-envelope">EMAIL</span></th>
			</tr>	
			
			<?php
				while($dbcon=mysql_fetch_assoc($records)){
					echo "<tr>
							<td>".$dbcon['name']."</td>
							<td>".$dbcon['appadd']."</td>
							<td>".$dbcon['locadd']."</td>
							<td>".$dbcon['mblno']."</td>
							<td>".$dbcon['date']."</td>
							<td>".$dbcon['wno']."</td>
							<td>".$dbcon['sno']."</td>
							<td>".$dbcon['landmark']."</td>
							<td>".$dbcon['email']."</td>
							<td>".$dbcon['landno']."</td>
							<td>".$dbcon['pur']."</td>
							<td>".$dbcon['notf']."</td>
							<td>".$dbcon['eltf']."</td>
							<td>".$dbcon['girth']."</td>
							<td>".$dbcon['radio']."</td>
							<td>".$dbcon['fileToUpload']."</td>
							 <td>".$dbcon['id']."</td>";
							echo "<td><a href=deleterecordgovt.php?id=".$dbcon['id']."><span class='glyphicon glyphicon-trash'></span></a></td> ";
                            echo "<td><a  href=https://mail.google.com/mail/u/0/#inbox><span class='glyphicon glyphicon-envelope' ></span></a></td> ";
						
						echo"  </tr> "; 
				}
			?>
			</table>
		</div>
	</div>
	<div class="col-md-8">
	
	</div>
	</div>
</div> <br><br><br><br><br><br><br><br><br><br><br>

<div>
<br><br><br>
<nav class="navbar navbar-inverse navbar-fixed-bottom"style="background-color:#427626">
  <div class="container-fluid">
    <div class="navbar-footer">
      <ul class="nav navbar-nav navbar-left">
	    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
		<li><a href="#"><span class="fa fa-twitter"></span></a></li>
		<li><a href="#"><span class="fa fa-skype"></span></a></li>
	  
     
    </ul>
   <ul>
      <ul class="nav navbar-nav navbar-right">
		<li ><a href="#" style="font-family:copperplate gothic;">VRUKSHA SURAKSHA@gmail.com</a></li>
      <li><a href="#" style="font-family:copperplate gothic;">CopyRight@2018 All Rights Reserved</a></li>
    </ul>
    </div>
  </div>
</body>
</html>	