<html>
<head>
	<title>Halaman Login</title>
		<link rel="stylesheet" href="CSS/css.css"/>
		<style type="text/css">
	   		body{background-image:url(gambar/k.jpg); background-size:cover}
			textarea,input,select {
			background-color: #FDFBFB;
			border: 1px solid #BBBBBB;
			padding: 2px;
			margin: 1px;
			font-size: 14px;
			color: #808080;
		</style>
</head>
<body>
	<div id="kiri">
		<center>
			<img src="gambar/logo.jpg">
			<font color="black"><br>
			<br>SMA NEGERI 1 BANYUWANGI</br>
		</center>
		<div class="menu-wrap">
		<ul>
			<li><a href="index.php">Beranda</a></li>
		</ul>
	</div>
	</div>
	<table width="100%" style="margin-top: 10%;">
	<tr>
	<td align="center" valign="middle">
		<div class="notice" style="color: #c1c1c1; font-size: 30px">Login<br /></div><br />
		<table width="280" bgcolor="#fff" height="180" style="border: 1px solid #cccccc; padding: 0px;border-radius:10px;" cellpadding="0" cellspacing="0">
			<tr>
				<td align="center" valign="middle" height="175" colspan="2">
					<form class="form-horizontal" action="#" method="POST" >
							<table width="100" style="background-color: #ffffff">
								<tr><td align="right">Username </td>
										<td><input style="width: 80px" name="user" type="text"/></td>
								</tr>
								<tr><td align="right">Password </td>
										<td><input style="width: 80px" name="pass" type="password"/></td>
								</tr>
								<tr><td>&nbsp;</td>
										<td><input type="submit" name="login" value="LOGIN"></td>
								</tr>
							</table>
					</form>
				</td>
			</tr>
		</table>
		</td>
		</table>
	</body>
</html>