<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
    <?php
    $namaLengkap = $_POST['first']. " " . $_POST['last'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] :'Tidak Ada';
    $negara = $_POST['country'];
    $bahasa = isset($_POST['bahasa']) ? implode(", ", $_POST['bahasa']) : 'Tidak Ada';
    $bio = $_POST['bio'];
    ?>

    <div class="container mt-5">
        <div class="card bg-info">
            <div class="card-body">
                <h1 class="card-title text-center text-white">SELAMAT DATANG <?= $namaLengkap?> ! </h1>
                <h2 class="card-subtitle mb-2 text-white">Terima kasih telah bergabung di Website Kami. Media Belajar kita bersama.</h2>

                <h4 class="card-text text-white">Nama Lengkap : <?= $namaLengkap?>  </h4>
                <h4 class="card-text text-white">Jenis Kelamin : <?= $gender?> </h4>
                <h4 class="card-text text-white">Negara : <?= $negara?> </h4>
                <h4 class="card-text text-white">Bahasa yang Dikuasai : <?= $bahasa?> </h4>
                <h4 class="card-text text-white">Bio : <?= $bio ?> </h4>
            </div>
        </div>
    </div>
</body>
</html>
