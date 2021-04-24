<?php 
error_reporting(0);
if(isset($_POST['submit'])) {
	$angka1 = $_POST['input1'];
	$angka2 = $_POST['input2'];
	$operator = $_POST['operator'];
if (!$angka1 == "" AND !$angka2 == "") {
	

	if ($operator == "tambah") {
		$hasil = $angka1 + $angka2;
	} elseif ($operator == "kurang"){
		$hasil = $angka1 - $angka2;
	}elseif ($operator == "kali"){
		$hasil = $angka1 * $angka2;
	}elseif ($operator == "bagi"){
		$hasil = $angka1 / $angka2;
	} }else {
		$isi = "silahkan isi nilai terlebih dahulu";
	}

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>kalkulator</title>
	<link rel="stylesheet" type="text/css" href="styled.css">
</head>
<body>
<div class="container"><br><br><br><br>
	
<div class="kalkulator">
	<h1>Kalkulator Sederhana</h1><br>
		<form method="post" action="">
			<input type="text" name="input1" placeholder="masukkan angka pertama"> <br><br>
			</select><br>
			<input type="text" name="input2" placeholder="masukkan angka kedua"> <br><br>
			<label>Pilih operator </label> <select name="operator">
				<option value="tambah">tambah</option>
				<option value="kurang">kurang</option>
				<option value="kali">kali</option>
				<option value="bagi">bagi</option>
			</select><br><br>
			<button type="submit" name="submit">submit</button>

			<div class="hasil"><textarea> <?php echo $hasil.$isi; ?></textarea></div>
		</form>
	</div>
</div>
</body>
</html>