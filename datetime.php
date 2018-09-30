<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN SUCCCESS!</title>
	<style type="text/css">
	body{
		background-color: #475e84;
	}
		h1{
			font-family: segoe ui;
			text-align: center;
			color: white;
			font-size: 70px;
		}
		div{
			left: 0;
    		line-height: 200px;
   			margin: auto;
   			margin-top: -250px;
    		position: absolute;
    		top: 50%;
    		width: 100%;
			font-family: segoe ui;
			font-size: 40px;
			color: white;
			text-align: center;
		}
		#top{
			top: 50%;
		}
		#bot{
			top: 65%;
		}
	</style>
</head>
<body>
	
	<div id="top">
		<h1><b>WELCOME!</b></h1>
		
	</div>
	<div id="bot">
		<?php
			if (date("H")<11) {
				echo "Selamat Pagi";
			}
			elseif (date("H")<15) {
				echo "Selamat Siang";
			}
			elseif (date("H")<18) {
				echo "Selamat Sore";
			}
			else{
				echo "Selamat Malam";
			}

		?>
	</div>
</body>
</html>