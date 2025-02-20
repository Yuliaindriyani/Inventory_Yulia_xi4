<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Tambah Jenis Baru</title>
</head>
<body>
    <h1>Tambah Jenis Baru</h1>
    <form action="simpan.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Jenis</label>
    <input type="number" class="form-control" name="id_jenis" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Jenis</label>
    <input type="text" class="form-control" name="nama_jenis" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>