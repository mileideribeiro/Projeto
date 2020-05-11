<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "test";
	$PicNum = $_GET["PicNum"];

	$conn = mysqli_connect("localhost", "root","", "test");
	$result=mysqli_query($conn,"SELECT * FROM adim WHERE ID=$PicNum"); 
	$row=mysqli_fetch_object($result); 
	Header( "Content-type: image/gif"); 
	echo $row->imagem; 
?>