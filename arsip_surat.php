<?php 
  $conn = mysqli_connect("localhost","root","","desa_paku");
  $sql = mysqli_query($conn,"SELECT * FROM surat_domisili");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- my css -->
    <link rel="stylesheet" href="style1.css" />

    <title>Desa Paku</title>
  </head>
  <body id="home" style="background-image: url(img/background1.jpg); background-size: cover">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgb(85, 55, 0)">
      <div class="container">
        <img src="img/logo 1.png" alt="Polewali Mandar" width="50" height="50" />
        &nbsp
        <a class="navbar-brand" href="#">Desa Paku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.html">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="profil.html">Profil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Permohonan Surat </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="surat_domisili.html">Surat Domisili</a></li>
                <li><a class="dropdown-item" href="surat_keterangan pindah.html">Surat Keterangan Pindah</a></li>
                <li><a class="dropdown-item" href="surat_sktm.html">Surat SKTM</a></li>
                <li><a class="dropdown-item" href="surat_pengantar.html">Surat Pengantar</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Arsip Surat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.html">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <center>
      <table style="margin-top: 15px auto; padding-top: 50px; padding-bottom: 50px; padding-left: 10px; padding-right: 10px">
        <tr>
          <td></td>
        </tr>
        <tr>
          <td>
            <center>
              <table style="margin-top: 150px; margin-left: auto; margin-right: auto; border: 1px solid #007cc3; background-color: rgb(255, 255, 255); border-spacing: 1px; text-align: center">
                <thead style="background-color: #ddefef; text-align: center">
                  <td style="padding: 10px; border: 1px solid #007cc3">NO</td>
                  <td style="padding: 10px; border: 1px solid #007cc3">Nama Lengkap</td>
                  <td style="padding: 10px; border: 1px solid #007cc3">Jenis Kelamin</td>
                  <td style="padding: 10px; border: 1px solid #007cc3">Tanggal Lahir</td>
                  <td style="padding: 10px; border: 1px solid #007cc3">Tempat Lahir</td>
                  <td style="padding: 10px; border: 1px solid #007cc3">Nomor KTP/KK</td>
                  <td style="padding: 10px; border: 1px solid #007cc3">Kewarganegaraan</td>
                  <td style="padding: 10px; border: 1px solid #007cc3">Agama</td>
                  <td style="padding: 10px; border: 1px solid #007cc3">Alamat Asal</td>
                </thead>
                <tbody style="border: 1px solid #007cc3; color: #007cc3; padding: 20px">
                <?php $i=1;?>
                <?php while ($row = mysqli_fetch_assoc($sql)) : ?>
                  <td style="padding: 10px; border: 1px solid #007cc3"><?= $i; ?></td>
                  <td style="padding: 10px; border: 1px solid #007cc3"><?= $row['nama_lengkap'];?></td>
                  <td style="padding: 10px; border: 1px solid #007cc3"><?= $row['jenis_kelamin'];?></td>
                  <td style="padding: 10px; border: 1px solid #007cc3"><?= $row['tanggal_lahir'];?></td>
                  <td style="padding: 10px; border: 1px solid #007cc3"><?= $row['tempat_lahir'];?></td>
                  <td style="padding: 10px; border: 1px solid #007cc3"><?= $row['no_ktp/kk'];?></td>
                  <td style="padding: 10px; border: 1px solid #007cc3"><?= $row['kewarganegaraan'];?></td>
                  <td style="padding: 10px; border: 1px solid #007cc3"><?= $row['agama'];?></td>
                  <td style="padding: 10px; border: 1px solid #007cc3"><?= $row['alamat_asal'];?></td>
                <?php $i++; ?>
                <?php endwhile; ?> 
                </tbody>
              </table>
            </center>
          </td>
        </tr>
        <tr>
          <td><br /><br /></td>
        </tr>
      </table>
    </center>
    <!-- footer -->
    <footer class="text-white pt-2 pb-1 text-center" style="background-color: rgb(85, 55, 0); margin-top: 700px"><br /></footer>
    <!-- akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
