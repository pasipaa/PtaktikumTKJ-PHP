<?php
$nama_kelompok = "SnoopyFan";
$kelas = "XI RPL 7";

$anggota = [
    [
        "nama" => "Keyza Alvaro Faiq",
        "absen" => 14,
        "foto" => "varo.jpeg"
    ],
    [
        "nama" => "Keyza Nadine Kusuma Ramadani",
        "absen" => 15,
        "foto" => "keyza.jpeg"
    ],
    [
        "nama" => "Lanang Tegar Cahyo Islam",
        "absen" => 17,
        "foto" => "tegar.jpeg"
    ],
    [
        "nama" => "Shifa Zahra Novrisha",
        "absen" => 31,
        "foto" => "shifa.jpeg"
    ],
    [
        "nama" => "Talitha Alya Aurely",
        "absen" => 33,
        "foto" => "talitha.jpeg"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Web Kelompok <?= $nama_kelompok; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f4ff;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #1e88e5;
        }
        .kelas {
            text-align: center;
            color: #555;
            margin-bottom: 30px;
        }
        .card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 15px;
            margin: 15px 0;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .card img {
            width: 120px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 20px;
            border: 3px solid #90caf9;
        }
        .biodata p {
            margin: 6px 0;
            color: #333;
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            color: #777;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Kelompok <?= $nama_kelompok; ?></h1>
    <div class="kelas">Kelas <?= $kelas; ?></div>

    <?php foreach ($anggota as $a): ?>
        <div class="card">
            <img src="images/<?= $a['foto']; ?>" alt="<?= $a['nama']; ?>">
            <div class="biodata">
                <p><strong>Nama:</strong> <?= $a['nama']; ?></p>
                <p><strong>No Absen:</strong> <?= $a['absen']; ?></p>
                <p><strong>Kelas:</strong> <?= $kelas; ?></p>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="footer">
        Praktikum Web Server Dinamis PHP • <?= date("Y"); ?>
    </div>
</div>

</body>
</html>