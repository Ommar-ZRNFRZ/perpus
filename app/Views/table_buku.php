<?php 
include "pisahadmin.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Buku</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
    .mx-auto {
      width: 900px;
    }

    .card {
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="mx-auto">
    <!----untuk memasukan data---->
    <div class="card">
      <div class="card-header">
        Create / edit data <?$_SESSION['username']?>
      </div>
      <div class="card-body">
        <?php
        if ($error) {
          ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
          </div>
          <?php
          header("refresh:3;url=admin.php"); //5 : detik
        }
        ?>
        <?php
        if ($sukses) {
          ?>
          <div class="alert alert-success" role="alert">
            <?php echo $sukses ?>
          </div>
          <?php
          header("refresh:3;url=admin.php"); //5 : detik
        }
        ?> 
        
        <form action="" method="POST" enctype="multipart/form-data">
           
          
          <div class="mb-3 row">
            <label for="game_name" class="col-sm-2 col-form-label">Judul Buku</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="game_name" name="game_name" value="<?php echo $game_name ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="date_released" class="col-sm-2 col-form-label">Penulis Id</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="date_released" name="date_released" value="<?php echo $date_released ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="developer" class="col-sm-2 col-form-label">Penerbit Id</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="developer" id="developer" value="<?php echo $developer ?>">
              </div>
            </div>
          <div class="mb-3 row">
            <label for="publisher" class="col-sm-2 col-form-label">Tahun</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="publisher" id="publisher" value="<?php echo $publisher ?>">
              </div>
            </div>
          <div class="mb-3 row">
            <label for="price" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="price" id="price" value="<?php echo $price ?>">
              </div>
            </div>
          <div class="mb-3 row">
            <label for="price" class="col-sm-2 col-form-label">Kategori Id</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="price" id="price" value="<?php echo $price ?>">
              </div>
            </div>
          <div class="mb-3 row">
            <label for="price" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="price" id="price" value="<?php echo $price ?>">
              </div>
            </div>
            <div class="col-12">
              <input type="submit" name="simpan" value="Simpan data" class="btn btn-primary">
            </div>
          </form>
          <!--untuk mengeluarkan data-->

        </div>
      </div>
      <div class="card">
        <div class="card-header text-white bg-secondary">
          data mahasiswa
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>

                <th scope="col">Judul Buku</th>
                <th scope="col">Penulis Id</th>
                <th scope="col">Penerbit Id</th>
                <th scope="col">Tahun</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Kategori Id</th>
                <th scope="col">Lokasi</th>
              </tr>
          </thead>
        </table>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"></script>
</body>

</html>