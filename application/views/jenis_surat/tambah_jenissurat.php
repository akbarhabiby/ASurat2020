<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Jenis Surat</h1>
        <a href="<?= base_url('jenis_surat') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas text-white-50"></i>List Jenis Surat</a>
    </div>

    <div class="row">
        <div class="col-lg-7">
            <form method="POST" action="<?= base_url('jenis_surat/tambah_jenissurat'); ?>">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jenis Surat</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="jenis_surat">
                    </div>
                </div>
                <div class=" form-group row">
                    <div class="col-sm-1">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
</div>