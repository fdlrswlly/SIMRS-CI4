<?php echo view('parsial/header'); ?>
<?php echo view('parsial/sidebar'); ?>
<title>Tambah Kelurahan</title>
<!-- Font Awesome -->
<link href="<?php echo base_url('theme'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Registrasi Pasien</h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Registrasi Pasien</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="<?php echo base_url() ?>/DataPasien/simpan" method="post" enctype="multipart/form-data">
                        <!-- <label>ID Kelurahan<span class="required">*</span></label> -->
                        <input type="hidden" class="form-control" value="<?php echo $id_pasien; ?>" name="id_pasien">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Pasien <span class="required">*</span></label>
                                <input type="text" id="text-input" name="nama_pasien" placeholder="Masukkan Nama Pasien" class="form-control">
                                <small class="form-text text-muted"><?php echo $pesan_validasi->getError('nama_pasien'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>Alamat<span class="required">*</span></label>
                                <textarea name="alamat" rows="9" placeholder="Masukkan Alamat" class="form-control"></textarea>
                                <small class="form-text text-muted"><?php echo $pesan_validasi->getError('nama_kecamatan'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>No.Telepon<span class="required">*</span></label>
                                <input type="text" id="text-input" name="no_telp" placeholder="Masukkan Nomor Telepon" class="form-control">
                                <small class="form-text text-muted"><?php echo $pesan_validasi->getError('no_telp'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>RT<span class="required">*</span></label>
                                <input type="text" id="text-input" name="RT" placeholder="Masukkan RT" class="form-control">
                                <small class="form-text text-muted"><?php echo $pesan_validasi->getError('RT'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>RW<span class="required">*</span></label>
                                <input type="text" id="text-input" name="RW" placeholder="Masukkan RW" class="form-control">
                                <small class="form-text text-muted"><?php echo $pesan_validasi->getError('RW'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>Kelurahan <span class="required">*</span></label>
                                <select class="form-control" name="tb_kelurahan">
                                    <option value="" disabled selected>Choose option</option>
                                    <?php foreach ($dropdownkelurahan as $row) { ?>
                                        <option value="<?= $row['id_kelurahan']; ?>"><?= $row['nama_kelurahan']; ?>
                                        </option>
                                    <?php  }
                                    ?>
                                </select>
                                <small class="form-text text-muted"><?php echo $pesan_validasi->getError('tb_kelurahan'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir<span class="required">*</span></label>
                                <input type="date" id="text-input" name="tgl_lahir" class="form-control">
                                <small class="form-text text-muted"><?php echo $pesan_validasi->getError('tgl_lahir'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin<span class="required">*</span></label>
                                <select class="form-control" name="jk_pasien">
                                    <option>Choose option</option>
                                    <option>Laki Laki</option>
                                    <option>Perempuan</option>
                                </select>
                                <small class="form-text text-muted"><?php echo $pesan_validasi->getError('jk_pasien'); ?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>
                                Simpan</button>
                            <a href="./datapasien" class="btn btn-danger"><i class="fa fa-ban"></i> Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('parsial/footer'); ?>