<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Disposisi</h1>
        <a href="<?= base_url('disposisi') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas text-white-50"></i> Tambah Disposisi</a>
    </div>

    <div class="row">
        <div class="col-lg-9">
            <?= form_open_multipart('disposisi/tambah_disposisi') ?>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Penerima Disposisi</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="penerima_disposisi">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Surat Balasan</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="tglsurat_balasan">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Uraian</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="uraian">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID Surat</label>
                <div class="col-sm-5">
                    <?php
                    $dd_surat_attribute = 'class="form-control select2"';
                    echo form_dropdown('id_surat', $dd_surat, $surat_selected, $dd_surat_attribute);
                    ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID User</label>
                <div class="col-sm-5">
                    <?php
                    $dd_user_attribute = 'class="form-control select2"';
                    echo form_dropdown('id_user', $dd_user, $user_selected, $dd_user_attribute);
                    ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="status" placeholder="terkirim" readonly>
                </div>
            </div>
            <div class=" form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
            </form>
        </div>
    </div>

</div>
</div>