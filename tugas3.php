<?php
$m1 = ['nama' => 'Andi Santoso', 'nim' => '0111111', 'nilai' => 95];
$m2 = ['nama' => 'Budi Kurniawan', 'nim' => '0111112', 'nilai' => 80];
$m3 = ['nama' => 'Candi Bandur', 'nim' => '0111113', 'nilai' => 78];
$m4 = ['nama' => 'Denis Caputra', 'nim' => '0111114', 'nilai' => 76];
$m5 = ['nama' => 'Erik Manahel', 'nim' => '0111115', 'nilai' => 86];
$m6 = ['nama' => 'Fatril Nusonto', 'nim' => '0111116', 'nilai' => 50];
$m7 = ['nama' => 'Gayama Harustia', 'nim' => '0111117', 'nilai' => 20];
$m8 = ['nama' => 'Isma Lonoto', 'nim' => '0111118', 'nilai' => 30];
$m9 = ['nama' => 'Jami Sayir', 'nim' => '0111119', 'nilai' => 70];
$m10 = ['nama' => 'Karni Buato', 'nim' => '0111110', 'nilai' => 65];

$ar_mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

//deklarasikan nama-nama judul pada tabel header menggunakan looping array
$ar_judul = ['No', 'Nama Mahasiswa', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

//Buatlah Agregat nilai dan Gunakan Agregat function di array serta tampilkan hasilnya pada table di tfoot => Nilai Tertinggi, Nilai Terendah, Nilai rata-rata, Jumlah Mahasiswa, Jumlah keseluruhan nilai jika di gabungkan
$jumlah_nilai = array_column($ar_mahasiswa, 'nilai');
$nilai_total = array_sum($jumlah_nilai);
$nilai_tertinggi = max($jumlah_nilai);
$nilai_terendah = min($jumlah_nilai);
$jumlah_mahasiswa = count($ar_mahasiswa);
$nilai_rata2 = $nilai_total / $jumlah_mahasiswa;

$footer = [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'Nilai Rata-Rata' => $nilai_rata2,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai' => $nilai_total
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <title>Tugas 3 - Daftar Nilai Mahasiswa</title>
</head>

<body>
    <h3 style="margin-top: 30px;" align="center">Daftar Nilai Mahasiswa</h3>
    <br>
    <table class="table table-bordered" border="1" cellpadding="10" , cellspacing="2" width="100%">
        <thead class="table-dark">
            <tr>
                <?php foreach ($ar_judul as $judul) { ?>
                    <th style="text-align: center;">
                        <?= $judul ?>
                    </th>
                <?php } ?>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            $no = 1;
            foreach ($ar_mahasiswa as $mahasiswa) {

                //1. Keterangan => Ternary minimal nilai 65 dinyatakan Lulus
                $keterangan = ($mahasiswa['nilai'] >= 65) ? 'Lulus' : 'Gagal';

                //2. Grade IF Multi Kondisi => A, B, C, D, E
                if($mahasiswa['nilai']<=100 && $mahasiswa['nilai'] > 85) $grade = 'A';
                elseif ($mahasiswa['nilai'] <= 85 && $mahasiswa['nilai'] > 75) $grade = 'B';
                elseif ($mahasiswa['nilai'] <= 75 && $mahasiswa['nilai'] > 50)
                    $grade = 'C';
                elseif ($mahasiswa['nilai'] <= 50 && $mahasiswa['nilai'] >= 30)
                    $grade = 'D';
                else $grade = 'E';

                //3. Predikat Switch Case dari Grade => Memuaskan, Bagus, Cukup, Kurang, Buruk
                switch($grade) {
                    case 'A':
                        $predikat = 'Memuaskan';
                        break;
                    case 'B' :
                        $predikat = 'Bagus';
                        break;
                    case 'C' :
                        $predikat = 'Cukup';
                        break;
                    case 'D' :
                        $predikat = 'Kurang';
                        break;
                    default :
                        $predikat = 'Buruk';
                }

                ?>
                <tr style="text-align: center;">
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <?= $mahasiswa['nama'] ?>
                    </td>
                    <td>
                        <?= $mahasiswa['nim'] ?>
                    </td>
                    <td>
                        <?= $mahasiswa['nilai'] ?>
                    </td>
                    <td>
                        <?= $keterangan ?>
                    </td>
                    <td>
                        <?= $grade ?>
                    </td>
                    <td>
                        <?= $predikat ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php
            foreach ($footer as $foot => $hasil) {
                ?>
                <tr>
                    <th style="text-align: right;" colspan="3">
                        <?= $foot ?>
                    </th>
                    <th style="text-align: center;" colspan="5">
                        <?= $hasil ?>
                    </th>
                </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>

</html>