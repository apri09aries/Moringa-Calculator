<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simulasi Manfaat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <style>
        .jumbotron {
            background: url("https://moringaku.com/img/logo-trans-white.png") no-repeat center center;
            background-color: #00CF70;
        }

        .card-footer {
            background-color: #00CF70;
            margin:25px 0px 0px 0px;
        }


        #rcorners2 {
            border-radius: 10px;
            border: 2px solid #73AD21;
            width: auto;
            height: auto;
            margin: 5px;
        }
    </style>
</head>

<body>

    <?php
function rupiah($angka)
{
  $jadi = "Rp ".number_format($angka, 0, ',', '.').",-";
  return $jadi;
}

function number($angka)
{
  $jadi = number_format($angka, 0, ',', '.');
  return $jadi;
}

// function writeMsg() {
// $m = 1;
// $ref = 15/100;
// $paket = $_POST["paket"];
// switch ($paket) {
//     case "Silver":
//         $gen_2 = 1.5/100;
//         break;
//     case "Gold":
//         $gen_2 = 1.75/100;
//         break;
//     case "Platinum":
//       $gen_2 = 2/100;
//       break;
//       default:
//       $gen_2 = 0;
// }
// $gen_8 = (50/100)*$gen_2;
// $gen_15 = (30/100)*$gen_2;
// $mengajak = $_POST["mengajak"];
// $tumbuh = $_POST["tumbuh"];
// $avpremi = 2650000;
// $t_member = $mengajak;
//
// do {
// if ($m == 1) {
//   $bonus_ref = ($t_member * $avpremi * $ref);
// } elseif ($m >= 2 and $m <= 7) {
//   $t_memberNEW = ($t_member*$tumbuh)/100;
//   $bonus_gen2 = ($t_memberNEW * $avpremi * $gen_2);
//   $bonus_ref = $bonus_ref + $bonus_gen2;
//   $t_member = $t_member + $t_memberNEW;
// } elseif ($m >= 8 && $m <= 14) {
//   $t_memberNEW = ($t_member*$tumbuh)/100;
//   $bonus_gen8 = ($t_memberNEW * $avpremi * $gen_8);
//   $bonus_ref = $bonus_ref + $bonus_gen8;
//   $t_member = $t_member + $t_memberNEW;
// } elseif ($m >= 15 && $m <= 24) {
//   $t_memberNEW = ($t_member*$tumbuh)/100;
//   $bonus_gen15 = ($t_memberNEW * $avpremi * $gen_15);
//   $bonus_ref = $bonus_ref + $bonus_gen15;
//   $t_member = $t_member + $t_memberNEW;
// }
// $m++;
// } while ($m <= 24);
// echo rupiah(round($bonus_ref));
// }
//
 $nama = $_POST["nama"];
 $tanggal = $_POST["tanggal"];
 $paket = $_POST["paket"];
// $mengajak = $_POST["mengajak"];
// $tumbuh = $_POST["tumbuh"];
 $biday = new DateTime($tanggal);
 $today = new DateTime();
 $diff = $today->diff($biday);
// $avpremi = 2650000;
//
// $n = 2;
// $hitung_mengajak = $mengajak;
// do {
// $hitung_mengajak = $hitung_mengajak + ($hitung_mengajak*$tumbuh)/100;
// $n++;
// } while ( $n <= 24);
// $total_jaringan = $hitung_mengajak;
//
// $m = 1;
// $ref = 15/100;
// $gen_2 = 1.5/100;
// $gen_8 = (50/100)*$gen_2;
// $gen_15 = (50/100)*$gen_8;
// $t_member = $mengajak;
//
switch ($paket) {
  case "Silver":
      $nabung = 1500000;
      $kembali = 7500000;
      if ($diff->y < 30) {
          $sakit = 85000000;
      } elseif ($diff->y <40) {
          $sakit = 65000000;
      } elseif ($diff->y <50) {
          $sakit = 40000000;
      } elseif ($diff->y <=55) {
          $sakit = 25000000;
      } else {
          $sakit = "<b>* Maks 55 Tahun dan Min 1 Tahun *</b>";
      }
      break;
  case "Gold":
      $nabung = 3000000;
      $kembali = 15450000;
      if ($diff->y < 30) {
          $sakit = 240000000;
      } elseif ($diff->y <40) {
          $sakit = 180000000;
      } elseif ($diff->y <50) {
          $sakit = 110000000;
      } elseif ($diff->y <=55) {
          $sakit = 70000000;
      } else {
          $sakit = "<b>* Maks 55 Tahun dan Min 1 Tahun *</b>";
      }
      break;
  case "Platinum":
      $nabung = 5000000;
      $kembali = 26250000;
      if ($diff->y < 30) {
          $sakit = 450000000;
      } elseif ($diff->y <40) {
          $sakit = 330000000;
      } elseif ($diff->y <50) {
          $sakit = 200000000;
      } elseif ($diff->y <=55) {
          $sakit = 135000000;
      } else {
          $sakit = "<b>* Maks 55 Tahun dan Min 1 Tahun *</b>";
      }
      break;
  default:
  $nabung = 0;
  $kembali = 0;
  $sakit = 0;
}

$kecelakaan = ($sakit*200)/100;

?>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1></h1>
        <p></p>
    </div>

    <div class="container" style="margin-top:30px">
        <form class="" action="yearend.php" method="POST">
          <div class="row">
            <!-- Table Data Tabungan -->
              <div class="col-sm-6">
                  <div id="rcorners2" class="container">
                      <h3 style="text-align: center;font-weight: bold;">Manfaat Tabungan</h3>
                      <table class="table table-sm table-borderless">
                          <thead>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>Nama</td>
                                  <td>
                                      <input type="text" class="form-control" value="<?php echo $nama;?>" placeholder="Nama" name="nama" readonly>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Usia</td>
                                  <td>
                                      <input type="text" class="form-control" value="<?php echo $diff->y.' Tahun';?>" placeholder="Tanggal Lahir" name="" readonly>
                                      <input type="hidden" class="form-control" value="<?php echo $tanggal;?>" placeholder="Tanggal Lahir" name="tanggal">
                                  </td>
                              </tr>
                              <tr>
                                  <td>Paket</td>
                                  <td>
                                      <input type="text" class="form-control" value="<?php echo $paket;?>" placeholder="Nama" name="paket" readonly>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Nabung Per-tahun (5X)</td>
                                  <td nowrap>
                                      <?php echo rupiah($nabung);?>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Uang Kembali (Akhir Tahun ke-7)</td>
                                  <td nowrap>
                                      <?php echo rupiah($kembali);?>
                                  </td>
                              </tr>

                              <tr>
                                  <th style="text-align:center;" colspan="2">Manfaat Proteksi</th>
                              </tr>
                              <tr>
                                  <td>Meninggal (Sakit)</td>
                                  <td nowrap>
                                      <?php echo rupiah($sakit);?>
                                  </td>
                              </tr>
                              <tr style="vertical-align: middle;">
                                  <td>Meninggal (Kecelakaan)</td>
                                  <td nowrap>
                                      <?php echo rupiah($kecelakaan);?>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>

              </div>
              <!-- Table Data Bisnis -->
              <div class="col-sm-6">
                  <div id="rcorners2" class="container">
                      <h3 style="text-align: center;font-weight: bold;">Simulasi Bisnis</h3>
                      <div class="form-group">
                          <input type="number" class="form-control" placeholder="Mengajak Orang" name="mengajak" required>
                      </div>
                      <div class="form-group">
                          <input type="number" class="form-control" placeholder="Pertumbuhan Jaringan (%)" name="tumbuh" required>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-success btn-block">Hitung Bonus</button>
                      </div>

                  </div>

              </div>

          </div>
        </form>



    </div>

    <div class="card-footer">
        <p></p>
    </div>

    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>

</body>

</html>
