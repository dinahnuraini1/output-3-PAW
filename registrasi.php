<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			justify-content: center;
			align-items: center;
			display: flex;
		}
		.container{
			background-color: pink;
			position: relative;
			margin-top: 100px;
			width: 450px;
			height: auto;
			text-align: left;
			border-radius: 5px;
		}
		h1{
			margin: 20px 40px;
			margin-bottom:0 ;
		}
		form{
			margin: 0 40px;
		}
		.font{
			font-weight: bold;
			font-family: arial;
		}
		.teks {
			padding: 0 5px;
			height: 30px;
			width: 350px;
		}
		.tombol{
			color: brown;
			font-weight: bold;
			outline: none;
			height: 30px;
			width: 365px;
			margin: 25px 0 30px 0;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 >Identitas Diri</h1>
		<hr>
		<form action="coba.php" method="post" name="form">
			<div class="font">Nama:</div> 
			<input type="text" name="nama" class="teks">
			<div class="font">NIM :</div>
			<input type="number" name="nim" class="teks">
			<div class="font">Kelas :</div>
			<input type="text" name="kelas" class="teks">
			<input type="submit" name="submit" value="Kirim" class="tombol">
		</form>
	</div>
</body>
</html>