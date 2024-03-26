<?php
$nama = "Annisa Luthfi Fadillah";
$umur = 20;
$domisili = "Palembang";
$jurusan = "Teknik Informatika";
$RP_SD = "SDN 21 Palembang";
$RP_SMP = "SMP Negeri 17 Palembang";
$RP_SMA = "SMA Negeri 10 Palembang";
$RP_Kuliah = "Universitas Sriwijaya";
$email = "annisalthf@gmail.com";
$nomor_telepon = '085758739213';
$github = "https://github.com/annssluthfi/";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas 1 - Web Design</title>
</head>

<body bgcolor="#49d4e3">
    <h1 align="center">Biodata Saya</h1>
    <div id="opening">
        <p align="justify">
            <img src="https://media.licdn.com/dms/image/C5603AQGTGcTD9sO-Jw/profile-displayphoto-shrink_200_200/0/1648288030969?e=2147483647&v=beta&t=45hDVvj4-6JbDwsfWF0QIXJqfu7mdInQZO3EJzZLKXw"
                alt="" width="10%" align="left" hspace="10" />
            Saya adalah mahasiswa semester 6 jurusan <?= $jurusan ?> (S-1)
            Universitas Sriwijaya Palembang, Indonesia. Saya memiliki antusiasme dalam
            mengembangkan website dan mendesain tampilan website desktop maupun
            mobile. Saya juga berpengalaman dalam kerjasama tim baik dalam lingkungan
            kuliah ataupun organisasi.
        </p>
    </div>

    <div id="dataDiri">
        <fieldset>
            <legend>
                <b>
                    <font size="5" color="blue" face="calibri"> Tentang Saya </font>
                </b>
            </legend>
    
            <ol type="A">
                <li>Data Diri</li>
                <ul type="square">
                    <li>Nama : <?= $nama ?></li>
                    <li>Umur : <?= $umur ?> tahun</li>
                    <li>Domisili : <?= $domisili ?></li>
                </ul>
                <br>
    
                <li>Riwayat Pendidikan</li>
                <ul type="square">
                    <li>SD : <?= $RP_SD ?></li>
                    <li>SMP : <?= $RP_SMP ?></li>
                    <li>SMA : <?= $RP_SMA ?></li>
                    <li>Kuliah : <?= $RP_Kuliah ?></li>
                </ul>
                <br>
    
                <li>Kontak</li>
                <ul type="square">
                    <li>Email : <?= $email ?></li>
                    <li>Nomor Telepon : <?= $nomor_telepon ?></li>
                    <li>Link Github : <a href="<?= $github ?>">Klik Link</a></li>
                </ul>
                <br>
            </ol>
        </fieldset>
    </div>
</body>

</html>