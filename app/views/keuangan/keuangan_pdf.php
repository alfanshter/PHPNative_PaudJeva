<?php 

	$bulan = array (
		1 =>   	'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
		);

        $bulan = $bulan[(int)date('m')];
        $tanggal = date('d');
        $tahun = date('Y');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <style type="text/css">
    .tg {
        border-collapse: collapse;
        border-spacing: 0;
    }

    .tg td {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 12px;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg th {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 12px;
        font-weight: normal;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg .tg-baqh {
        text-align: center;
        vertical-align: top
    }

    .tg .tg-1fm2 {
        background-color: #e5e5e5;
        text-align: center;
        vertical-align: top
    }

    #flex {
        display: inline-flex;
    }

    div.absolute {
        position: absolute;
        right: 0;
    }

    .flex-container {
        display: flex;
        background-color: DodgerBlue;
    }

    .flex-container>div {
        background-color: #f1f1f1;
        margin: 10px;
        padding: 20px;
        font-size: 30px;
    }

    div.absolute {
        position: absolute;
        right: 0;
    }

    div.judul {
        display: inline-flex;
        width: auto;
    }
    </style>

    <div class="judul">
        <img src="<?= base_url ?>/img/logopaud.png" alt="" width="93" height="89">
        <div style="margin-left: 150px;">
            <center>
                <p style="font-weight: bold;text-transform:uppercase; font-size:small">PAUD ASSIBYAN</p>
                <p style=" font-weight: bold;text-transform:uppercase; font-size:small">LAPORAN KEUANGAN BULANAN</p>
            </center>
            <p style=" text-transform:uppercase; font-size:12px">Bulan : <?= $data['bulan'] ?>
            </p>
            <p style=" text-transform:uppercase; font-size:12px">Tahun : <?= $data['tahun'] ?>
            </p>
            <p style="text-transform:uppercase; font-size:12px">Kelas : <?= $data['kelas'] ?>
            </p>
            <br>
            <br>

        </div>

        <br>


    </div>

    <center>
        <table class="tg">
            <thead>
                <tr>
                    <th class="tg-1fm2">No</th>
                    <th class="tg-1fm2">Nama</th>
                    <th class="tg-1fm2">Periode</th>
                    <th class="tg-1fm2">Jenis Tagihan/Keterangan</th>
                    <th class="tg-1fm2">Nominal</th>
                    <th class="tg-1fm2">Status Bayar</th>
                    <th class="tg-1fm2">Tgl Bayar</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=0; foreach($data['keuangan'] as $item) : $no++ ?>
                <tr>
                    <td class="tg-baqh"><?= $no ?></td>
                    <td class="tg-baqh"><?= $item['nama'] ?></td>
                    <td class="tg-baqh"><?= $item['bulan'] ?></td>
                    <td class="tg-baqh"><?= $item['jenis_surat'] ?></td>
                    <td class="tg-baqh"><?= $item['biaya'] ?></td>
                    <td class="tg-baqh"><?= $item['status'] ?></td>
                    <td class="tg-baqh"><?= $item['tanggal'] ?></td>
                </tr>

                <?php endforeach;?>

            </tbody>
        </table>
        <p style="margin-left: 120px;font-size:12px ; font-family: Arial, sans-serif;">Total : Rp.
            <?= $data['sumbiaya']['total'] ?></p>
    </center>
    <br><br>
    <div id="flex" class="absolute">
        <table id="tabel1" style="border: 0ch">
            <tr id="tabel1">
                <td id="tabel1">Serang , <?= $tanggal ?> <?= $bulan ?> <?= $tahun ?></td>
            </tr>
            <tr id="tabel1">
                <td id="tabel1">Kepala Paud Assibyan <br><br><br><br><br><br></td>
            </tr>
            <tr>
                <td id="tabel1" style="text-align: center">Cucun Sutinah, S.Pd</td>
            </tr>
        </table>

    </div>
    <script>
    window.print();
    </script>
</body>

</html>