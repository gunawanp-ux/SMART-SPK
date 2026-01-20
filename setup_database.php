<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "metode_smart");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

// Query untuk membuat tabel tbl_analisis
$query_create_table = "CREATE TABLE tbl_analisis (
    id_analisis INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama_kriteria VARCHAR(255) NOT NULL,
    bobot INT(11) NOT NULL
)";

// Eksekusi query untuk membuat tabel
if (mysqli_query($koneksi, $query_create_table)) {
    echo "Tabel tbl_analisis berhasil dibuat.<br>";

    // Data dummy untuk dimasukkan ke dalam tabel
    $dummy_data = [
        ['nama_kriteria' => 'Nilai Raport', 'bobot' => 30],
        ['nama_kriteria' => 'Absensi', 'bobot' => 20],
        ['nama_kriteria' => 'Keaktifan', 'bobot' => 20],
        ['nama_kriteria' => 'Kepribadian', 'bobot' => 15],
        ['nama_kriteria' => 'Kejuaraan', 'bobot' => 15]
    ];

    // Query untuk memasukkan data dummy
    $query_insert_data = "INSERT INTO tbl_analisis (nama_kriteria, bobot) VALUES (?, ?)";
    $stmt = mysqli_prepare($koneksi, $query_insert_data);

    foreach ($dummy_data as $data) {
        mysqli_stmt_bind_param($stmt, "si", $data['nama_kriteria'], $data['bobot']);
        mysqli_stmt_execute($stmt);
    }

    echo "Data dummy berhasil dimasukkan ke dalam tabel tbl_analisis.";
} else {
    echo "Error creating table: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
