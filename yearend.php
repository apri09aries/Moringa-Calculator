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

function writeMsg() {
$m = 1;
$ref = 15/100;
$paket = $_POST["paket"];
switch ($paket) {
    case "Silver":
        $gen_2 = 1.5/100;
        break;
    case "Gold":
        $gen_2 = 1.75/100;
        break;
    case "Platinum":
      $gen_2 = 2/100;
      break;
      default:
      $gen_2 = 0;
}
$gen_8 = (50/100)*$gen_2;
$gen_15 = (30/100)*$gen_2;
$mengajak = $_POST["mengajak"];
$tumbuh = $_POST["tumbuh"];
$avpremi = 2650000;
$t_member = $mengajak;

do {
if ($m == 1) {
  $bonus_ref = ($t_member * $avpremi * $ref);
} elseif ($m >= 2 and $m <= 7) {
  $t_memberNEW = ($t_member*$tumbuh)/100;
  $bonus_gen2 = ($t_memberNEW * $avpremi * $gen_2);
  $bonus_ref = $bonus_ref + $bonus_gen2;
  $t_member = $t_member + $t_memberNEW;
} elseif ($m >= 8 && $m <= 14) {
  $t_memberNEW = ($t_member*$tumbuh)/100;
  $bonus_gen8 = ($t_memberNEW * $avpremi * $gen_8);
  $bonus_ref = $bonus_ref + $bonus_gen8;
  $t_member = $t_member + $t_memberNEW;
} elseif ($m >= 15 && $m <= 24) {
  $t_memberNEW = ($t_member*$tumbuh)/100;
  $bonus_gen15 = ($t_memberNEW * $avpremi * $gen_15);
  $bonus_ref = $bonus_ref + $bonus_gen15;
  $t_member = $t_member + $t_memberNEW;
}
$m++;
} while ($m <= 24);
echo rupiah(round($bonus_ref));
}

$nama = $_POST["nama"];
$tanggal = $_POST["tanggal"];
$paket = $_POST["paket"];
$mengajak = $_POST["mengajak"];
$tumbuh = $_POST["tumbuh"];
$biday = new DateTime($tanggal);
$today = new DateTime();
$diff = $today->diff($biday);
$avpremi = 2650000;

$n = 2;
$hitung_mengajak = $mengajak;
do {
$hitung_mengajak = $hitung_mengajak + ($hitung_mengajak*$tumbuh)/100;
$n++;
} while ( $n <= 24);
$total_jaringan = $hitung_mengajak;

$m = 1;
$ref = 15/100;
$gen_2 = 1.5/100;
$gen_8 = (50/100)*$gen_2;
$gen_15 = (50/100)*$gen_8;
$t_member = $mengajak;

switch ($paket) {
  case "Silver":
      $nabung = 1500000;
      $kembali = 7500000;
      $bgroup = "1,5 %";
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
      $bgroup = "1,75 %";
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
      $bgroup = "2 %";
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
        <div class="row">
          <!-- Table Data Tabungan -->
            <div class="col-md-6">
                <div id="rcorners2" class="container">
                    <h3 style="text-align: center;font-weight: bold;">Manfaat Tabungan</h3>
                    <table class="table table-sm table-borderless">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <?php echo $nama;?>
                                </td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>
                                    <?php echo $diff->y.' Tahun';?>
                                </td>
                            </tr>
                            <tr>
                                <td>Paket</td>
                                <td>
                                    <?php echo $paket;?>
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
            <div class="col-md-6">
                <div id="rcorners2" class="container fluid">
                    <h3 style="text-align: center;font-weight: bold;">Manfaat Bisnis</h3>
                    <table class="table table-sm table-borderless">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <?php echo $nama;?>
                                </td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>
                                    <?php echo $diff->y.' Tahun';?>
                                </td>
                            </tr>
                            <tr>
                                <td>Paket</td>
                                <td>
                                    <?php echo $paket;?>
                                </td>
                            </tr>
                            <tr>
                                <td>Bonus Group</td>
                                <td>
                                    <?php echo $bgroup;?>
                                </td>
                            </tr>
                            <tr>
                                <td>Mampu Mengajak</td>
                                <td>
                                    <?php echo $mengajak;?> Orang</td>
                            </tr>
                            <tr>
                                <td>Av. Premi</td>
                                <td>
                                    <?php echo rupiah($avpremi);?>
                                </td>
                            </tr>
                            <tr>
                                <td>Pertumbuhan Jaringan</td>
                                <td>
                                    <?php echo $tumbuh;?> %</td>
                            </tr>
                            <tr>
                                <td>Index Gen 8-14</td>
                                <td>
                                    0,5</td>
                            </tr>
                            <tr>
                                <td>Index Gen 15-24</td>
                                <td>
                                    0,3</td>
                            </tr>
                            <tr>
                                <td>Bonus (24 Bulan)</td>
                                <td nowrap>
                                    <?php writeMsg();?>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="container table-responsive" style="border-style:none;">
                    <h3 style="text-align: center;font-weight: bold;">Table Bonus</h3>
                    <table style="vertical-align: middle;" class="table table-striped table-sm">
                        <thead style="color: white;background-color:#00CF70;" class="">
                            <tr>
                                <th style="width:10%;text-align: center;vertical-align: middle;" wrap>Bulan ke -</th>
                                <th style="width:15%;text-align: center;vertical-align: middle;" wrap>New Member</th>
                                <th style="width:15%;text-align: center;vertical-align: middle;" wrap>Akumulasi Member</th>
                                <th style="width:20%;text-align: right;vertical-align: middle;" wrap>Silver</th>
                                <th style="width:20%;text-align: right;vertical-align: middle;" wrap>Gold</th>
                                <th style="width:20%;text-align: right;vertical-align: middle;" wrap>Platinum</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                    $no = 0;
                    $nama = $_POST["nama"];
                    $paket = $_POST["paket"];
                    $mengajak = $_POST["mengajak"];
                    $tumbuh = $_POST["tumbuh"];
                    $tambahan = $mengajak;
                    $avpremi = 2650000;
                    $ref = 15/100;

                    $t_bonus_silver = 0;
                    $t_bonus_gold = 0;
                    $t_bonus_platinum = 0;

                    $gen_2_silver = 1.5/100;
                    $gen_2_gold = 1.75/100;
                    $gen_2_platinum = 2/100;

                    $gen_8_silver = (50/100)*$gen_2_silver;
                    $gen_8_gold = (50/100)*$gen_2_gold;
                    $gen_8_platinum = (50/100)*$gen_2_platinum;

                    $gen_15_silver = (30/100)*$gen_2_silver;
                    $gen_15_gold = (30/100)*$gen_2_gold;
                    $gen_15_platinum = (30/100)*$gen_2_platinum;

                    do {
                    $no++;

                    echo "<tr>";
                    echo "<td style='text-align: center;'>".$no."</td>";
                    echo "<td style='text-align: center;'>".number(round($tambahan))."</td>";
                    echo "<td style='text-align: center;'>".number(round($mengajak))."</td>";

                    if ($no == 1) {
                      $bonus_silver = ($tambahan * $avpremi * $ref);
                      $bonus_gold = ($tambahan * $avpremi * $ref);
                      $bonus_platinum = ($tambahan * $avpremi * $ref);
                    } elseif ($no >= 2 and $no <= 7) {
                      $bonus_gen2_silver = ($tambahan * $avpremi * $gen_2_silver);
                      $bonus_gen2_gold = ($tambahan * $avpremi * $gen_2_gold);
                      $bonus_gen2_platinum = ($tambahan * $avpremi * $gen_2_platinum);
                      $bonus_silver = $bonus_gen2_silver;
                      $bonus_gold = $bonus_gen2_gold;
                      $bonus_platinum = $bonus_gen2_platinum;
                    } elseif ($no >= 8 && $no <= 14) {
                      $bonus_gen8_silver = ($tambahan * $avpremi * $gen_8_silver);
                      $bonus_gen8_gold = ($tambahan * $avpremi * $gen_8_gold);
                      $bonus_gen8_platinum = ($tambahan * $avpremi * $gen_8_platinum);
                      $bonus_silver = $bonus_gen8_silver;
                      $bonus_gold = $bonus_gen8_gold;
                      $bonus_platinum = $bonus_gen8_platinum;
                    } elseif ($no >= 15 && $no <= 24) {
                      $bonus_gen15_silver = ($tambahan * $avpremi * $gen_15_silver);
                      $bonus_gen15_gold = ($tambahan * $avpremi * $gen_15_gold);
                      $bonus_gen15_platinum = ($tambahan * $avpremi * $gen_15_platinum);
                      $bonus_silver = $bonus_gen15_silver;
                      $bonus_gold = $bonus_gen15_gold;
                      $bonus_platinum = $bonus_gen15_platinum;
                    }

                    $tambahan = ($mengajak * $tumbuh)/100;
                    $mengajak = $mengajak + $tambahan;

                    echo "<td style='text-align: right;' nowrap>".number(round($bonus_silver))."</td>";
                    echo "<td style='text-align: right;' nowrap>".number(round($bonus_gold))."</td>";
                    echo "<td style='text-align: right;' nowrap>".number(round($bonus_platinum))."</td>";
                    echo "</tr>";
                    $t_bonus_silver = $t_bonus_silver + $bonus_silver;
                    $t_bonus_gold = $t_bonus_gold + $bonus_gold;
                    $t_bonus_platinum = $t_bonus_platinum + $bonus_platinum;
                    } while ($no < 24);
                    ?>
                            <tr>
                                <th style="text-align: center;">TOTAL</th>
                                <th style="text-align: center;" colspan="2">
                                    <?php echo number(round($total_jaringan));?>
                                </th>
                                <th style="text-align: right;" nowrap>
                                    <?php echo number(round($t_bonus_silver));?>
                                </th>
                                <th style="text-align: right;" nowrap>
                                    <?php echo number(round($t_bonus_gold));?>
                                </th>
                                <th style="text-align: right;" nowrap>
                                    <?php echo number(round($t_bonus_platinum));?>
                                </th>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>

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
