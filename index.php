<?php
//tuliskan loopingnya di sini
// mencoba untuk edit file
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<label>Masukkan Angka</label>
		<input type="text" name="angka">
		<input type="submit">
	</form>

	<?php
	$tes = $_POST["angka"];
	for($i=0;$i<=$tes;$i++){
		for($k=$tes-$i;$k>=1;$k--){
			echo "* ";

		}
		echo "<br>";

	}
?>
</body>
</html>
