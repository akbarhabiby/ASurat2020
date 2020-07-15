<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Akun</h1>
        <a href="<?= base_url('akun') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas text-white-50"></i>List Akun</a>
    </div>

    <div class="row">
        <div class="col-lg-9">
            <?= form_open_multipart('akun/edit') ?>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="username" value="<?= $user['username'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Fullname</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="fullname" value="<?= $user['fullname'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-5">
                    <input type="text" name="level" class="form-control" value="<?= $user['level']; ?>">
                </div>
            </div>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <p class="text-gray-800">
                    Catatan:<br>
                    <b>Level 1</b> Sebagai Admin<br>
                    <b>Level 2</b> Sebagai User</p>
            </div>
            <div class=" form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
            </form>
        </div>
    </div>


</div>
</div>