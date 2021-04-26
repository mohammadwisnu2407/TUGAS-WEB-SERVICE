<?php
 
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "data_xml") or die("Error " . mysqli_error($connection));
// membuka file XML
$file = simplexml_load_file("data.xml");
 
$i = 1;
echo 'Data Anggota baru :<br />';
foreach ($file as $key => $value) {
    echo $i . "<br />";
    echo "nama : " . $value->nama . "<br />";
    echo "alamat : " . $value->alamat . "<br />";
    echo "jurusan : " . $value->jurusan . "<br /><br />";
    $sql = "INSERT into angkkn(nama,alamat,jurusan) VALUES('" . $value->nama . "','" . $value->alamat . "','" . $value->jurusan . "')";
    mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
    $i++;
}
//tutup koneksi ke database
mysqli_close($connection);
?>