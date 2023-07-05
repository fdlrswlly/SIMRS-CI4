<html>

<head>
    <title>Cetak Kartu</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #000000;
        text-align: center;

    }
</style>

<body>
    <div style="font-size: 30px; color: '#000000'"><i>RUMAH SAKIT ENGGAL DAMANG</i></div>
    <h4>Jl. Margasari, Kecamatan Pasawahan, Kabupaten Purwakarta</h4>
    <hr>
    <hr>
    <center>
        <p>KARTU PASIEN RS ENGGAL DAMANG: </p>
    </center>
    <!-- <p> 
        No.Transaksi : <?php //echo $transaksi['no_transaksi'] 
                        ?><br>
        Nama Muzzaki : <?php //echo $transaksi['nama_muzzaki'] 
                        ?><br>
        Jenis Zakat : <?php //echo $transaksi['nama_jenis_zakat'] 
                        ?><br>
        Tgl.Pembayaran : <?php //echo $transaksi['tgl_pembayaran']; 
                            ?><br>
        Jumlah Bayar : <?php //$number =  $transaksi['jumlah_bayar'];
                        //$format = number_format($number, 0, ",", ".");
                        //echo $format;  
                        ?><br>
        Bank Yang Dituju : <?php //echo $transaksi['nama_bank'] 
                            ?><br>
        Status : <?php //echo $transaksi['status'] 
                    ?><br>
    </p> -->
    <table cellpadding="2">
        <tr>
            <th><strong>ID Pasien</strong></th>
            <th><strong>Nama</strong></th>
            <th><strong>Alamat</strong></th>
            <th><strong>No.HP</strong></th>
            <th><strong>RT</strong></th>
            <th><strong>RW</strong></th>
            <th><strong>Kelurahan</strong></th>
            <th><strong>Tgl.Lahir</strong></th>
            <th><strong>Jenis Kelamin</strong></th>
        </tr>
        <tr>
            <td><?php echo $pasien['id_pasien']
                ?></td>
            <td><?php echo $pasien['nama_pasien'];
                ?></td>
            <td><?php echo $pasien['alamat'];
                ?></td>
            <td><?php echo $pasien['no_telp'];
                ?></td>
            <td><?php echo $pasien['RT'];
                ?></td>
            <td><?php echo $pasien['RW'];
                ?></td>
            <td><?php echo $pasien['nama_kelurahan'];
                ?></td>
            <td><?php echo $pasien['tgl_lahir']; ?></td>
            <td><?php echo $pasien['jk_pasien']; ?></td>
        </tr>
    </table>
    <br>
</body>

</html>