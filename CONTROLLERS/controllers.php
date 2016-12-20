<?php
//ROUTING
if(!empty($_GET["page"]))
{
	$page = strtolower(mysql_real_escape_string($_GET["page"]));
	if($page == "login")
	{
		//PROSES LOGIN
		if (!empty($_POST["user"]) && !empty($_POST["pass"])) 
		{
			$user = mysql_real_escape_string($_POST["user"]);
			$pass = mysql_real_escape_string(md5($_POST["pass"]));
			$database -> login($con,$user,$pass);
		}
		include("views/login.php");
	}
	else if ($page == "admin") 
	{
			//DELETE
			if(!empty($_GET["delete"]))
			{
				$kode = $_GET["delete"];
				$database -> hapusData($con,$kode);
			}

			//EDIT 
			if(!empty($_POST["edit"]))
		{
			$kode = $_GET["edit"];
			$nama = mysql_real_escape_string($_POST["nama"]);
			$tempat = mysql_real_escape_string($_POST["tempat"]);
			$tanggal = mysql_real_escape_string($_POST["tanggal"]);
			$kelamin = mysql_real_escape_string($_POST["kelamin"]);
			$agama = mysql_real_escape_string($_POST["agama"]);
			$alamat = mysql_real_escape_string($_POST["alamat"]);
			
			$warga = mysql_real_escape_string($_POST["warga"]);
			$asalse = mysql_real_escape_string($_POST["asalse"]);
			$alamatse = mysql_real_escape_string($_POST["alamatse"]);
			$ajaran = mysql_real_escape_string($_POST["ajaran"]);
			
			$ayah = mysql_real_escape_string($_POST["ayah"]);
			$kerja = mysql_real_escape_string($_POST["kerja"]);
			$nilai = mysql_real_escape_string($_POST["nilai"]);
			
			$database -> editData($con,$nama,$tempat,$tanggal,$kelamin,$agama,$alamat,$warga,$asalse,$alamatse,$ajaran,$ayah,$kerja,$nilai,$kode);
		}
			
			include("views/admin.php");
	}
	else if ($page == "logout") 
		{
			session_start();
			session_destroy();
			header("location: index.php?page=login");
		}
	else if($page == "ganti_pass")
		{
			if(!empty($_POST['ganti_pass']))
			{
				$new_pass = mysql_real_escape_string(md5($_POST['new_pass']));
				$konf_pass = mysql_real_escape_string(md5($_POST['konf_pass']));
				if($new_pass==$konf_pass)
			{
				$database->ganti_pass($con, $new_pass);
			}
	else
			{
				header("location: index.php?page=admin");
			}
			
		}
		include("views/ganti_password.php");
	}		
	else
	{
		include("views/index.php");
	}	
}
//DEFAULT
else
{
	//PROSES INPUT DATA PENDAFTAR
	if(!empty($_POST["daftar"]))
	{
			$nama = mysql_real_escape_string($_POST["nama"]);
			$tempat = mysql_real_escape_string($_POST["tempat"]);
			$tanggal = mysql_real_escape_string($_POST["tanggal"]);
			$kelamin = mysql_real_escape_string($_POST["kelamin"]);
			$agama = mysql_real_escape_string($_POST["agama"]);
			$alamat = mysql_real_escape_string($_POST["alamat"]);
			
			$warga = mysql_real_escape_string($_POST["warga"]);
			$asalse = mysql_real_escape_string($_POST["asalse"]);
			$alamatse = mysql_real_escape_string($_POST["alamatse"]);
			$ajaran = mysql_real_escape_string($_POST["ajaran"]);
			
			$ayah = mysql_real_escape_string($_POST["ayah"]);
			$kerja = mysql_real_escape_string($_POST["kerja"]);
			$nilai = mysql_real_escape_string($_POST["nilai"]);
		
		$input = $database -> daftar($con,$nama,$tempat,$tanggal,$kelamin,$agama,$alamat,$warga,$asalse,$alamatse,$ajaran,$ayah,$kerja,$nilai);
	}
	include("views/form.php");
}
?>