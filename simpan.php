<?php
include "koneksi.php";

$nama_pelanggan = $_POST['nama_pelanggan'];
$nama_produk = $_POST['nama_produk'];
$kategori = $_POST['kategori'];
$email = $_POST['email'];
$telp = $_POST['telp'];


// Get the form data
$to = "mlygeeky@gmail.com";
$subject = "FumiArt Purchase Notice";
$headers = "From: $email\n";

// Send the email
mail($to, $subject, "$nama_pelanggan, $nama_produk, $kategori, $telp", $headers);

$simpan = mysqli_query($con, "INSERT INTO form (nama_pelanggan,nama_produk,kategori,email,telp)
VALUES('$nama_pelanggan','$nama_produk','$kategori','$email','$telp')");

if($simpan){
    if(isMobile()){
        $url_wa = 'whatsapp://send/';
    }
    else{
        $url_wa = 'https://web.whatsapp.com/send';
    }

    $tujuan = $_POST['tujuan'];

    $url_wa .=  '?phone=6281210064022 ' . $tujuan . 
                '&text=Halo aku ingin membeli produk anda ' .$nama_produk. ' kategori ' .$kategori.
                // '* %0A%0AAlamat:%20' . $nama_pj . 
                '%0ANama : %20' .$nama_pelanggan.
                '%0ANo.tlp : %20' . $telp . 
                '%0AEmail : %20' . $email . 
                // '%0A%0Pada Acara' .  $nama_event  .
                // ' %0A%0ANo.tlp:%20dengan tema' . $tema . 
                // ' %0A%0ANo.tlp:%20pada hari' . $start_event . 
                // ' %0A%0ANo.tlp:%20sampai dengan' . $end_event . 
                // ' %0A%0ANo.tlp:%20rentang usia' . $rentang_usia . 
                // ' %0A%0ANo.tlp:%20banyak audiens' . $jumlah_audiens . 
                '%0ASekian rincian pembelian %20'.
                '%0AKlik link berikut untuk kembali ke fumiart :  https://klikyuk.com/ngankngonk/hisyam/fumiart/index.html#';

    header('Location: ' . $url_wa);
}

// UNTUK MENDETEKSI DEVICE
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
} 
// header("location:shop.php");
?>