<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <title>Tugas 2 PHP - Form Belanja</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post" style="margin:30px;">
                    
                    <table class="table" border="2" cellpadding="10">
                        <thead>
                            <th class="table-success" colspan="2"><h3 align="center">Form Belanja</h3></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label for="">Nama Pelanggan</label>
                                </td>
                                <td>
                                    <input type="text" name="nama">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Produk Pilihan</label>
                                </td>
                                <td>
                                    <select name="produk" id="">
                                        <option value="TV">TV</option>
                                        <option value="Kulkas">Kulkas</option>
                                        <option value="Mesin Cuci">Mesin Cuci</option>
                                        <option value="AC">AC</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Jumlah Beli</label>
                                </td>
                                <td>
                                    <input type="number" name="jumlah" id="">
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <td class="table-success" align="center" colspan="2"><button type="submit" align="center">Kirim</button></td>
                        </tfoot>
                    </table>
                </form>
            </div>
            <div style="margin: 30px;" class="col-md-4">
                <table class="table" border="1" cellpadding="10">
                    <thead>
                        <th>Nama Barang</th>
                        <th>Harga Satuan</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TV</td>
                            <td>500.000</td>
                        </tr>
                        <tr>
                            <td>Kulkas</td>
                            <td>1.000.000</td>
                        </tr>
                        <tr>
                            <td>Mesin Cuci</td>
                            <td>1.500.000</td>
                        </tr>
                        <tr>
                            <td>AC</td>
                            <td>2.000.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <?php
        // Tambahkan pengecekan apakah form sudah disubmit sebelumnya
        if (isset($_POST['nama']) && isset($_POST['produk']) && isset($_POST['jumlah'])) {
            $nama = $_POST['nama'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];

            // Harga satuan
            switch ($produk) {
                case 'TV':
                    $hargasatuan = 500000;
                    break;
                case 'Kulkas':
                    $hargasatuan = 1000000;
                    break;
                case 'Mesin Cuci':
                    $hargasatuan = 1500000;
                    break;
                case 'AC':
                    $hargasatuan = 2000000;
                    break;
                default:
                    $hargasatuan = 0;
            }

            // Total belanja
            $totalBelanja = $jumlah * $hargasatuan;

            // Diskon
            $diskon = 0.20 * $totalBelanja;

            // PPN
            $ppn = 0.10 * ($totalBelanja - $diskon);

            // Harga bersih
            $hargaBersih = ($totalBelanja - $diskon) + $ppn;
            ?>
        <div style="margin: 30px;" align="center">
            <p>Nama Pelanggan: <?= $nama ?></p>
            <p>Produk Pilihan: <?= $produk ?></p>
            <p>Jumlah Beli: <?= $jumlah ?></p>
            <p>Harga Satuan: <?= $hargasatuan ?></p>
            <p>Total Belanja: <?= $totalBelanja ?></p>
            <p>Potongan Diskon: <?= $diskon ?></p>
            <p>PPN: <?= $ppn ?></p>
            <p>Harga bersih: <?= $hargaBersih ?> </p>
        <?php } ?>
    </div>
</body>

</html>