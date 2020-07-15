<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Surat</h1>
        <a href="<?= base_url('surat') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas text-white-50"></i>List Surat</a>
    </div>

    <div class="row">
        <div class="col-lg-9">
            <?= form_open_multipart('surat/tambah_surat') ?>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Masuk</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="tgl_masuk">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Surat</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="kode_surat" value="AR/39.1/20-">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Surat</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="tgl_surat">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pengirim</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="pengirim">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kepada</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="kepada">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID Jenis Surat</label>
                <div class="col-sm-5">
                    <?php
                    $dd_jenissurat_attribute = 'class="form-control select2"';
                    echo form_dropdown('id_jenissurat', $dd_jenissurat, $jenissurat_selected, $dd_jenissurat_attribute);
                    ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Subject</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="subject">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="keterangan">
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