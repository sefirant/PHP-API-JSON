<?php
include "koneksi.php";
$success = true;
$message = "";
$code = "";

$ambil = mysqli_query($koneksi, "SELECT * FROM data");
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
echo json_encode($hasil); //cobain //apa hayoo > echonya didalem ?bukan anjir > tambahin $data? nggak sepele nepol ouyyy apa si ye hasilnya hapus? g udh jadi kurang satu character, ingett pelajarane pak amirrr, dasar program , lamaa lahh oh anjir:v aku fokus ke echo malah :v, kalo error kayak barusan biasane kurang ; error unexpected
//kan datanya banyak tapi masih array yang sama, jadi pake nya looping,perulangan?pakenya while
//caranya gini
//bikin variabel baru buat ngambil data perbarus dari tabAKel 
//HAHAHAHA JADI EYYY lol bntr. knp?
//lanjut tinggal datane

//HIH APA :"ha" DENG ERROR ya liat error apa LI. tadi udh salah yang itu pdhl LINE 7 APA SI HA > mysqli_query bener mbok?yg teliti ohh
 //json encode tuh gunane buat nampilin data dalam bentuk json, any question?? enggaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa enggaaaa bebbbbb lahhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh niatttttttttttttttttttttttttt ayooooooooooooooooo lanjuttttttttttttttttttttttttttttttttttttttttttttttt beb bebbbbb bebebb g bosenn,rada ngantuk tok beb beb beb beb lah bebeb laaaam:"(((((,ntar nunggu mood, dah nggak mood > lahh bebeb yahh bebebb laa bukan bosennn ,ngantuk bebbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb. beb? ;"(" tadi malem be kuat sampe jam 1, sekarang baru jam 9  ngantuk :) aku g bobo siang ooo. beb maaf :( bebebbb la ayo
		//bikin koneksi dulu. cocomang la berasa mapel pak aic asli:") NAH
// cobain dibrowser .di save dulu. ENGGA,ITU YG DATA KAN KOSONG ,DIISI APA? AKU kLUaPlA, data tuh mau ngambil apa? hmm apa?ya apa aku nanya, mau nampilin apa ntar di data > array?y > genah?
	//gini caranya 
	// ehhh kamu nulis ulang ini dulu deng tak hapus
	//oh iya belum di echo echo buat apa?la mbok udhh dari kemaren,lupa - _-, buat nampilin data, kaya console.w iyaoiyaiya
	//jadi mbok tapi "data nya masih kosong" yash bentar jal, udh mirip mbok sama gambarnya pak aic tinggal diisi datanyamyoi
	//pahami dulu
	//pertama kan bikin array
	//tau array mbok ? tauuu,keranjang yg bisa diisiiii nahh iyaa 
	//pertama bikin keranjang yang isinya = tulisan sukses, trus data dari database, message, sama code
	// sekarangg bikin kerangka json nya > masih panjang kah?? nggak lumayan > h3h3 aja
	// nah kalo udh sekarang bikin exception handlingtanyaaa kek exception handling tuh apa
	// jadi pakenya tuh if > lupa bebbbb wio woiii woiw bwebb BEBBBBB BENER? AKU LUPA MYSQLI APA ITU HAA

	//gini algoritmanya dulu
	/*
		jika data lebih dari 0 , maka success = true, message = berhasil, code =200
		paham ?? yayay
	*/
	//implementasinya gini
			/* data dari database yang udh dibuat kemaren diconvert jadi json
														apa itu json? json itu data yang bisa diakses dari berbagai platform mulai dari web,android,ios,windows dan lain lain
														mudeng?
														wow ya
														nah sekarang kan bikin ekceptionya dulu kalo didatabase ada datanya munculny apa
														kalo nggak ada datanya munculnya apa
														gituu.
												*/
	// jika data yang diambil dari database data_siswa dan table data lebih dari 0
    // selain itu maka,cepet tanya yang ngga mudeng jadi tu ntar kek nginput data gt apa gmn?, nggak ini kita mau
	//pahamin algoritmanya mulai dari bikin koneksi, bikin variabel, ngincludin koneksi ke beda file, ngambil data dari tabel include td buat apa?kan kita butuh koneksi di index php, bukan cuma dikoneksi php, soalnya ini make oop, jadi dipisah pisah, sebenernya bisa bikin variabel koneksi di index.php, tapi itu bkn oop, biar lebih ringkes juga codingannya, gampang dibaca juga
	//paham ? mayan bikin sendiri exceptionya
    //ayo bikin HHHH COCOMANG kok g keluar y?audah si bodo amat tulis aja
