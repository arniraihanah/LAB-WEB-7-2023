<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Mahasiswa</title>
</head>

<body>
    <h1>Halaman Mahasiswa</h1>
    <form method="get">
        <input type="hidden" name="aksi" value="tampil">
        <button type="submit">Show Student Data</button>
    </form>
    <!-- pakai get karena ingin mengambil nilai yang sudah ada di server
    di tekanpi baru munculki -->

</body>

</html>
<?php
$server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "db_mahasiswa";

function ambilDataMahasiswa()
{
    global $server, $db_username, $db_password, $db_name;

    $conn = new mysqli($server, $db_username, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Your connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT  id, Nama, NIM, Prodi FROM tb_mahasiswa";
    $result = $conn->query($sql);

    $data = array();

    if ($result->num_rows > 0) { //Jika hasil pencarian data lebih dari 0, itu berarti ada data yang cocok
        while ($row = $result->fetch_assoc()) { //ni adalah cara untuk mengambil satu baris data dari hasil pencarian (query) database, dan menyimpannya dalam variabel yang disebut "$row". Proses ini akan terus berlangsung selama masih ada baris data yang bisa diambil.
            $data[] = $row; //Setiap kali mengambil satu baris data, kita menambahkannya ke dalam "array" yang disebut "$data." Jadi, setiap baris data yang diambil dari database akan disimpan di dalam array ini.
        }
    }

    $conn->close();
    return $data;
}

function tampilkanTabelMahasiswa()
{
    $dataMahasiswa = ambilDataMahasiswa();

    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Nama</th>';
    echo '<th>NIM</th>';
    echo '<th>Prodi</th>';
    echo '</tr>';
    echo '</thead>';

    echo '<tbody>';
    foreach ($dataMahasiswa as $row) {
        echo '<tr>';
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['Nama']}</td>";
        echo "<td>{$row['NIM']}</td>";
        echo "<td>{$row['Prodi']}</td>";
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}

if (isset($_GET['aksi']) && $_GET['aksi'] === 'tampil') {
    tampilkanTabelMahasiswa();
}

// if (isset($_GET['aksi']) && $_GET['aksi'] === 'tampil') {
//     if (tabelMahasiswaKosong()) {
//         echo "Tabel mahasiswa kosong. Tidak ada data yang tersedia.";
//     } else {
//         tampilkanTabelMahasiswa();
//     }
// }

// function tabelMahasiswaKosong()
// {
//     // Fungsi ini digunakan untuk memeriksa apakah tabel mahasiswa kosong
//     // Anda dapat mengganti ini dengan kode SQL sesuai dengan struktur database Anda
//     // Jika tidak ada data di tabel mahasiswa, kembalikan nilai true, jika ada data, kembalikan false.
//     //return true; // jika tabel kosong
//     // Contoh: return false; // jika tabel memiliki data
// }

?>