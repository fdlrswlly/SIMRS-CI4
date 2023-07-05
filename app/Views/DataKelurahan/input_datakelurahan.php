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
                <h3>Tambah Kelurahan</h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Masukkan Data kelurahan</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="<?php echo base_url() ?>/DataKelurahan/simpan" method="post"
                        enctype="multipart/form-data">
                                <!-- <label>ID Kelurahan<span class="required">*</span></label> -->
                                <input type="hidden" class="form-control" value="<?php echo $id_kelurahan; ?>"
                                    name="id_kelurahan">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama kelurahan <span class="required">*</span></label>
                                    <input type="text" id="text-input" name="nama_kelurahan"
                                        placeholder="Masukkan Nama Kelurahan" class="form-control">
                                    <small
                                        class="form-text text-muted"><?php echo $pesan_validasi->getError('nama_kelurahan'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Nama Kecamatan<span class="required">*</span></label>
                                    <input type="text" id="text-input" name="nama_kecamatan"
                                        placeholder="Masukkan Nama Kecamatan" class="form-control">
                                    <small
                                        class="form-text text-muted"><?php echo $pesan_validasi->getError('nama_kecamatan'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Nama Kota<span class="required">*</span></label>
                                    <input type="text" id="text-input" name="nama_kota" placeholder="Masukkan Nama Kota"
                                        class="form-control">
                                    <small
                                        class="form-text text-muted"><?php echo $pesan_validasi->getError('nama_kota'); ?></small>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>
                                        Simpan</button>
                                    <a href="./datakelurahan" class="btn btn-danger"><i class="fa fa-ban"></i> Cancel</a>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('parsial/footer'); ?>