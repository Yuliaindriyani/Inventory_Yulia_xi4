<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Inventory</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Jenis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../barang">Barang</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container"></div>
    <h1>Data Jenis</h1>
    <table border="1" class="table table-bordered table-striped">
    <a href="tambah.php" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i> Tambah Jenis Baru</a>
        <tr>
            <th>No.</th>
            <th>ID Jenis</th>
            <th>Nama Jenis</th>
            <th>Aksi</th>
        </tr>
        <?php
            include '../../config/koneksi.php';
            $query = mysqli_query($conn, "SELECT * FROM jenis");
            $no=1;
            if(mysqli_num_rows($query)){
                while($result=mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td scope="row"><?php echo $no ?></td>
                        <td><?php echo $result['id_jenis']?></td>
                        <td><?php echo $result['nama_jenis']?></td>
                        <td>
                            <a href="edit.php?id_jenis=<?php echo $result['id_jenis']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                    }
                } else{
                    echo "Data kosong";
                }
        ?>
    </table>
</body>
</html>