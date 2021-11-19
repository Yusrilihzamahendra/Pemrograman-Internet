<!DOCTYPE html>
<html>
<head><title>Yusril Ihza Mahendra</title></head>
<body>
<form method="post">
<table>
<label>Masukan Angka 1
<br><input type="" name="angka1"/><br>
<label>Masukan Angka 2
<br><input type="" name="angka2"/><br>
<?php
$hasil = "";
if(isset($_POST['jumlahkan'])){
$hasil = $_POST['angka1'] + $_POST['angka2'];
}
?>
<input type="submit" name="jumlahkan" value="Jumlahkan"><br>
<input type="text" name="hasil" disabled value="<?php echo $hasil;?>">
</table>
</form>
</body>
</html>