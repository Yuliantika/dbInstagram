<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$host="localhost";
$user="root";
$password= "";
$namad=$_GET['namad'];
$namab=$_GET['namab'];
$namap=$_GET['namap'];
$email=$_GET['email'];
$pass=$_GET['pass'];
echo "<tr><td>Nama Depan</td><td>:</td><td>$namad</td></tr>";
echo "<tr><td>Nama Belakang</td><td>:</td><td>$namab</td></tr>";
echo "<tr><td>Email</td><td>:</td><td>$email</td></tr>";
echo "<tr><td>Kata Sandi</td><td>:</td><td>$pass</td></tr>";

echo "<tr><td colspan=3><hr>";
echo "</table><hr>";
{
$conn=mysql_connect($host,$user,$password);
mysql_select_db("dbforminsta");
$sql="insert to tforminsta value ('$namad','$namab','$email','$pass')";
$hasil=mysql_query($sql,$conn); echo "Data berhasil di simpan";
}
 ?>
</body>
</html>
