<?php
$name = $_POST['name'];
$email = $_POST['email'];
$checkin = $_POST['Masuk'];
$checkout = $_POST['Keluar'];
$roomtype = $_POST['roomtype'];

$data = "Nama: $name\nEmail: $email\nTanggal Masuk: $checkin\nTanggal Keluar: $checkout\nTipe Kamar: $roomtype\n\n";
$file_path = 'booking.txt';


$file = fopen($file_path, 'a');
if ($file) {
    fwrite($file, $data);
    fclose($file);
    echo 'Pemesanan berhasil! Data telah disimpan.';
} else {
    echo 'Terjadi kesalahan saat menyimpan data.';
}
?>
