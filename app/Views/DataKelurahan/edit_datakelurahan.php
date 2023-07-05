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
                <h3>Edit Kelurahan</h3>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Ubah Data kelurahan</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="<?php echo base_url() ?>/DataKelurahan/proses_edit" method="post" enctype="multipart/form-data">
                        <!-- <label>ID Kelurahan<span class="required">*</span></label> -->
                        <input type="hidden" class="form-control" value="<?php echo $x['id_kelurahan']; ?>" name="id_kelurahan">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Kelurahan <span class="required">*</span></label>
                                <input type="text" id="text-input" name="nama_kelurahan" value="<?php echo $x['nama_kelurahan']; ?>"  class=" form-control">
                                
                            </div>
                            <div class="form-group">
                                <label>Nama Kecamatan<span class="required">*</span></label>
                                <input type="text" id="text-input" name="nama_kecamatan" value="<?php echo $x['nama_kecamatan']; ?>" class=" form-control">
                                
                            </div>
                            <div class="form-group">
                                <label>Nama Kota<span class="required">*</span></label>
                                <input type="text" id="text-input" name="nama_kota" value="<?php echo $x['nama_kota']; ?>" class=" form-control">
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>
                                    Simpan</button>
                                <a href="./DataKelurahan/datakelurahan" class="btn btn-danger"><i class="fa fa-ban"></i> Cancel</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('parsial/footer'); ?>