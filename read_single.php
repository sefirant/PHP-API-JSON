<?php
include "koneksi.php";
$id = '';
$success = true;
$message = "";
$code = "";
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
$ambil = mysqli_query($koneksi, "SELECT * FROM data where id = '$id'");
if (mysqli_num_rows($ambil)>0){
$success = true;
$message = "YEY BERHASIL";
$code = "200";
}
else {
	$success = false;
	$message = "GAJADI";
	$code = 204;
}
$hasil = array();
$hasil ["sukses"] = $success;
$hasil ["data"] = array();
$hasil ["pesan"] = $message;
$hasil ["kode"] = $code;


//strukturnya sama tapi isinya beda, makane dilooping
//cara pakeknyak wouy ayay
while($row = mysqli_fetch_assoc($ambil)){   //artinya selama masih ada data diquery maka ditampilin berdasarkan baris yang disimpen di variabel $row, lanjutin sendiri ,apanya yg dilanjutinya itu li di database banyak colom rus apa lanjutin aja strukturnya sama kek itu
	$data['id'] = $row["id"];
	$data['username'] = $row["username"];
	$data['password'] = $row["password"];
	$data['level'] = $row["level"];
	$data['fullname'] = $row["fullname"];
	array_push($hasil["data"],$data);
}
echo json_encode($hasil);