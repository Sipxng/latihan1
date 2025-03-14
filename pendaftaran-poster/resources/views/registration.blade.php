<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body>
    <h1>Formulir Pendaftaran</h1>
    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Nama Peserta:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="class">Kelas:</label>
        <input type="text" id="class" name="class" required><br><br>

        <label for="title">Judul Poster:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="poster">File Poster (Format: JPG/PNG, Maksimal 2MB):</label>
        <input type="file" id="poster" name="poster" accept=".jpg,.jpeg,.png" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
