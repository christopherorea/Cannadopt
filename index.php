﻿<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		Can-Adopt
	</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<body>
<style>
	iframe {
	    position: absolute;
	    top:0;
	    left: 0;
	    width: 100%;
	    height: 100%;
	}
	.neat{
		text-align: center;
		margin-top: 100px;
		background-color: rgb(255,255,255,.7);
		width: 500px;
		margin-left: 30%;
		padding-top: 50px;
		padding-bottom: 50px;
		border-radius: 20px;
	}
	body{
		background-size: cover;
		background-image: url(https://i.pinimg.com/originals/d5/d4/82/d5d48229c263a68436bf07460589bb5b.jpg);
		margin: 0;
	}
	h3{
		color:#fff;
	}
	h1{
		color:#36b5dc;
	}
</style>
<?php		
		error_reporting(0);
		function datos(){
		echo "<div class=\"neat\" ><h1>Bienvenido a Extranet de Can-Adopt</h1><form action=\"index.php\" method=\"post\">
		<p>Name: <input type=\"text\" name=\"name\"></p>
		<p>Pass: <input type=\"password\" name=\"pass\"></p>
		<p><input type=\"submit\" name=\"submit\" value=\"submit\"></p>
		</form></div>";
		}
		$nuevo=$_POST["name"];
		$nuevoc=$_POST["pass"];
		if($nuevo!='edith' || $nuevoc!=1234){
			datos();	
		}
		else{
			echo "<h3>Bienvenido a Can-Adopt</h3>";
			echo "<p><iframe src=\"https://160300420.wixsite.com/misitio-2\"></iframe></p>";
		}
?>
</body>
</hmtl>