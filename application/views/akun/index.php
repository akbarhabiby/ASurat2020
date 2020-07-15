<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">List Akun</h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>Nomor</td>
                <td>Username</td>
                <td>Nama Lengkap</td>
                <td>Level</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $id = 1; ?>
            <?php
            foreach ($listakun->result_array() as $list) :
                $id_user = $list['id_user'];
                $username = $list['username'];
                $fullname = $list['fullname'];
                $level = $list['level'];
            ?>
                <tr>
                    <th scope="row"><?= $id ?></th>
                    <td><?php echo $username; ?> </td>
                    <td><?php echo $fullname; ?> </td>
                    <td><?php echo $level; ?> </td>
                    <td>
                        <a href="#hapusakun<?php echo $id_user; ?>" class="badge badge-danger" data-toggle="modal">Hapus</a>
                    </td>
                </tr>

                <!-- Menghapus Akun-->
                <div class="modal fade" id="hapusakun<?php echo $id_user; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="myModalLabel">Hapus Akun</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url('akun/') . 'hapus_akun' ?>">
                                <div class="modal-body">
                                    <p>Yakin ingin menghapus <b><?php echo $fullname; ?></b></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                    <button class="btn btn-danger">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Ending Menghapus Akun-->
                <?php $id++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <p class="text-gray-800">
            Catatan:<br>
            <b>Level 1</b> Sebagai Admin<br>
            <b>Level 2</b> Sebagai User</p>
    </div>
</div>
</div>