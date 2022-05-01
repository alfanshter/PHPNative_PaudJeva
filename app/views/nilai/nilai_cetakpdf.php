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
        font-size: 14px;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg th {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg .tg-0pky {
        border-color: inherit;
        text-align: left;
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
        <img src="<?= base_url ?>/img/logopaud.png" alt="" width="113" height="109">
        <center>
            <div style="margin-left: 150px;">
                <p style="font-weight: bold;text-transform:uppercase; font-size:small">PAUD ASSIBYAN</p>
                <p style=" font-weight: bold;text-transform:uppercase; font-size:small">LAPORAN NILAI SISWA</p>
                <p style=" font-weight: bold;text-transform:uppercase; font-size:small">KELAS : <?= $data['kelas'] ?>
                </p>
                <p style=" font-weight: bold;text-transform:uppercase; font-size:small">
                    <?php 
                $bulan = $bulan[(int)date('m')];
                $tanggal = date('d');
                $tahun = date('Y');
                echo "TANGGAL DAN BULAN : $tanggal $bulan"
                ?>
                </p>
                <p style=" font-weight: bold;text-transform:uppercase; font-size:small">TAHUN : <?= $tahun ?></p>
            </div>
            <br>

        </center>

    </div>

    <table class="tg">
        <thead>
            <tr>
                <th class="tg-0pky">No</th>
                <th class="tg-0pky">Tgl</th>
                <th class="tg-0pky">Nama</th>
                <th class="tg-0pky">Bermain</th>
                <th class="tg-0pky">Ikrar Bersama</th>
                <th class="tg-0pky">Senam Irama</th>
                <th class="tg-0pky">Bernyanyi</th>
                <th class="tg-0pky">Berdoa</th>
                <th class="tg-0pky">Pijakan Sebelum Bermain</th>
                <th class="tg-0pky">Pijakan Setelah Bermain</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['nilai'] as $item) :?>
            <tr>
                <td class="tg-0pky" rowspan="2">1</td>
                <td class="tg-0pky" rowspan="2"><?= $item['tanggal'] ?></td>
                <td class="tg-0pky" rowspan="2"><?= $item['nama'] ?></td>
                <td class="tg-0pky"><?= $item['bermain'] ?></td>
                <td class="tg-0pky"><?= $item['ikrar_bersama'] ?></td>
                <td class="tg-0pky"><?= $item['senam_irama'] ?></td>
                <td class="tg-0pky"><?= $item['bernyanyi'] ?></td>
                <td class="tg-0pky"><?= $item['berdoa'] ?></td>
                <td class="tg-0pky"><?= $item['pijakan_sebelum_bermain'] ?></td>
                <td class="tg-0pky"><?= $item['pijakan_setelah_bermain'] ?></td>
            </tr>
            <tr>
                <td class="tg-0pky" colspan="7">Komentar : <?= $item['komentar'] ?></td>
            </tr>
            <?php endforeach?>

        </tbody>
    </table>
    <br><br>

    <div id="flex" class="absolute">
        <table id="tabel1" style="border: 0ch">
            <tr id="tabel1">
                <td id="tabel1">Serang , <?= $tanggal ?> <?= $bulan ?> <?= $tahun ?></td>
            </tr>
            <tr id="tabel1">
                <td id="tabel1">Kepala Sekolah Paud Assibyan <br><br><br><br><br><br></td>
            </tr>
            <tr>
                <td id="tabel1" style="text-align: center">Zulfa Lutfiani</td>
            </tr>
        </table>

    </div>

    <script>
    window.print();
    </script>
</body>

</html>