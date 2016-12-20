<?php
//CEK SESSION
session_start();
if(empty($_SESSION["username"]))
{
	header("location: index.php?page=login");
}
?>

<?php
if(!empty($_GET["edit"]))
{
	$kode = $_GET["edit"];
	//TAMPIL DATA DETAIL
	$data = $database -> detailData($con,$kode);
?>
<html>
<head>
	<title>Halaman Admin</title>
</head>
		<link href="CSS/css.css" rel="stylesheet" type="text/css">
		
		<style type="text/css">
	   		body{background-image:url(gambar/k.jpg); background-size:cover}
			h1{	font-family:arial; text-align:center;}
			body{color:black; font-family:arial;}	
			input{color:black; font-family:arial;}
			h5{font-style:italic;}		
		</style>
<body>
	<div id="kiri">
		<center>
			<img src="gambar/logo.jpg">
			<font color="black"><br>
			<br>SMA NEGERI 1 BANYUWANGI</br>
		</center>
		<div class="menu-wrap">
		<ul>
			<li><a href="index.php?page=admin">Home</a></li>
		</ul>
	</div>
	</div>
	<form action="#" method="POST">
<table  width="452" border="0" align="center"  cellpadding="0" cellspacing="1"  bgcolor="#000" style="padding: 2px">
        <tr>
            <td  height="40" align="center"  bgcolor="green"><font  color="black">
            <b><h1>EDIT DATA</h1></b></font></td>
        </tr>
        <tr>
           <td  bgcolor="yellow"><table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0">
        </tr>
		<tr>
<pre>

	Nama Lengkap 	: <input type="text" value="<?php echo $data["nama"]; ?>" name="nama"><br>
	Tempat Lahir 	: <input type="text" value="<?php echo $data["Tempat_lahir"]; ?>" name="tempat"><br>
	Tanggal lahir 	: <input type="text" value="<?php echo $data["Tanggal_lhir"]; ?>" name="tanggal"><br>
	Jenis Kelamin 	: <input type="text" value="<?php echo $data["jenis_kelamin"]; ?>" name="kelamin"><br>
	Agama 		: <input type="text" value="<?php echo $data["agama"]; ?>" name="agama"><br>
	Alamat 		: <input type="text" value="<?php echo $data["alamat"]; ?>" name="alamat"><br>
	Kewarganegaraan : <input type="text" value="<?php echo $data["kewarganegaraan"]; ?>" name="warga"><br>
	Asal Sekolah 	: <input type="text" value="<?php echo $data["asalsekolah"]; ?>" name="asalse"><br>
	Alamat Sekolah 	: <input type="text" value="<?php echo $data["alamatsekolah"]; ?>" name="alamatse"><br>
	Tahun Ajaran 	: <input type="text" value="<?php echo $data["tahun_ajaran"]; ?>" name="ajaran"><br>

	Nama Orang tua 	: <input type="text" value="<?php echo $data["orangtua"]; ?>" name="ayah"><br>
	Pekerjaan 	: <input type="text" value="<?php echo $data["pekerjaan"]; ?>" name="kerja"><br>
	Nilai UN 	: <input type="text" value="<?php echo $data["skhun"]; ?>" name="nilai"><br>
	<input type="submit" name="edit" value="EDIT DATA">
</pre>
</form>
<?php
}
else
{
?>
<link href="CSS/log.css" rel="Stylesheet" type="text/css">
	<div id="menu">
		<ul>
			<li><a href="index.php?page=admin">Home</a></li>
			<li><a href="index.php?page=ganti_pass">Ganti Password</a>
			<li><a href="index.php?page=logout">Keluar</a></li>
		</ul>
	</div>
	<br></br>
	<hr color="blue">
	<br></br>
	<div id="kiri">
		<center>
			<img src="gambar/logo.jpg">
			<font color="black"><br>
			<br>SMA NEGERI 1 BANYUWANGI</br>
		</center>
	</div>
<center><h2>Daftar Pendaftar</h2></center>

<html>
<head>
		<style type="text/css">
	   		body{background-image:url(gambar/k.jpg); background-size:cover}
		</style>
	<title>Daftar</title>
</head>
<body>
<table cellpadding="4" cellspacing="0" border="1" width="100%">
	<tr>
		<th>No.</th>
		<th>Nama Pendaftar</th>
		<th>Tempat lahir</th>
		<th>Tanggal lahir</th>
		<th>Jenis Kelamin</th>
		<th>Agama</th>
		<th>Alamat</th>
		<th>Kewarganegaraan</th>
		<th>Asal Sekolah</th>
		<th>Alamat Sekolah</th>
		<th>Tahun Ajaran</th>
		
		<th>Nama Orang Tua</th>
		<th>Pekerjaan</th>
		<th>Nilai UN</th>
		<th>Perintah</th>
	</tr>

	<?php
	//READ (Membaca Data)
	$no=1;
	$data = $database -> tampil($con);
	foreach($data as $value)
	{
		echo '
		<tr>
			<td>'.$no.'</td>
			<td>'.$value["nama"].'</td>
			<td>'.$value["Tempat_lahir"].'</td>
			<td>'.$value["Tanggal_lhir"].'</td>
			<td>'.$value["jenis_kelamin"].'</td>
			<td>'.$value["agama"].'</td>
			<td>'.$value["alamat"].'</td>
			<td>'.$value["kewarganegaraan"].'</td>
			<td>'.$value["asalsekolah"].'</td>
			<td>'.$value["alamatsekolah"].'</td>
			<td>'.$value["tahun_ajaran"].'</td>
			
			<td>'.$value["orangtua"].'</td>
			<td>'.$value["pekerjaan"].'</td>
			<td>'.$value["skhun"].'</td>
			<td>
				<a href="index.php?page=admin&edit='.$value["id_pendaftar"].'"><img src="gambar/edit.png"></a> | 
				<a href="index.php?page=admin&delete='.$value["id_pendaftar"].'"><img src="gambar/hapus.png"></a>
			</td>
		</tr>
		';
		$no++;
	}
	?>
</table>
<br></br>
<div id="menu">
		<ul>
			<li  style="float:right"><a href="index.php" target="window">Tambah Pendaftar</a></li>
		</ul>
</div>
<?php
}
?>
</body>
</html>