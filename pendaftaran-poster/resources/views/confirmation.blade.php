<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran</title>
</head>
<body>
    <h1>Konfirmasi Pendaftaran</h1>
    <p>Nama Peserta: {{ $name }}</p>
    <p>Kelas: {{ $class }}</p>
    <p>Judul Poster: {{ $title }}</p>
    
    <h2>File Poster:</h2>
    <img src="{{ Storage::url($poster) }}" alt="Poster" style="max-width: 500px;">

</body>
</html>
