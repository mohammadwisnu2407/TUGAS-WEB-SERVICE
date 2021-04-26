<?php

Header('Content-type: text/xml');
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "data_xml") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');
//menampilkan data dari database, table tb_anggota
$sql = "select * from angkkn ";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('angkkn');
    $track->addChild('nama', $row['nama']);
    $track->addChild('alamat', $row['alamat']);
    $track->addChild('jurusan', $row['jurusan']);
}

print($xml->asXML());
//tutup koneksi ke database
mysqli_close($connection);
?>