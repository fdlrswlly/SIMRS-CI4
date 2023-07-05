<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>

<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Registrasi Pasien</h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="cari" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-outline-secondary" type="submit">Go!</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="x_content">
            <div class="table-responsive">
                <!-- Button trigger modal -->
                <a href="<?php echo base_url('DataPasien/input'); ?>" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="icon text-white-50"><i class="fa fa-plus"></i></span>
                    <span class="text">Tambahkan Data</span>
                </a>
                <div class="table-responsive">

                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th class="column-title">ID Pasien</th>
                                <th class="column-title">Nama Pasien</th>
                                <th class="column-title">Alamat</th>
                                <th class="column-title">No. Telepon</th>
                                <th class="column-title">RT</th>
                                <th class="column-title">RW</th>
                                <th class="column-title">Kelurahan</th>
                                <th class="column-title">Tanggal Lahir</th>
                                <th class="column-title">Jenis Kelamin</th>
                                <th class="column-title">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($regispasien as $x) : ?>
                                <tr class="even pointer">
                                    <td><?php echo $x['id_pasien']; ?></td>
                                    <td><?php echo $x['nama_pasien']; ?></td>
                                    <td><?php echo $x['alamat']; ?></td>
                                    <td><?php echo $x['no_telp']; ?></td>
                                    <td><?php echo $x['RT']; ?></td>
                                    <td><?php echo $x['RW']; ?></td>
                                    <td><?php echo $x['nama_kelurahan']; ?></td>
                                    <td><?php echo $x['tgl_lahir']; ?></td>
                                    <td><?php echo $x['jk_pasien']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/DataPasien/cetakkartupasien/<?php echo $x['id_pasien']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-print"></i>Cetak</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('parsial/footer'); ?>