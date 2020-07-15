<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Jenis Surat</h1>
        <a href="<?= base_url('jenis_surat/') ?>tambah_jenissurat" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas text-white-50"></i> Tambah Jenis Surat</a>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message') ?>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>Nomor</td>
                <td>Jenis Surat</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $id = 1; ?>
            <?php
            foreach ($listjenissurat->result_array() as $list) :
                $id_jenissurat = $list['id_jenissurat'];
                $jenis_surat = $list['jenis_surat'];
            ?>
                <tr>
                    <th scope="row"><?= $id ?></th>
                    <td><?php echo $jenis_surat; ?> </td>
                    <td>
                        <a href="#hapusjsurat<?php echo $id_jenissurat; ?>" class="badge badge-danger" data-toggle="modal">Hapus</a>
                    </td>
                </tr>

                <!-- Menghapus Jenis Surat-->
                <div class="modal fade" id="hapusjsurat<?php echo $id_jenissurat; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="myModalLabel">Hapus Jenis Surat</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url('jenis_surat/') . 'hapus_jenissurat' ?>">
                                <div class="modal-body">
                                    <p>Yakin ingin menghapus <b><?php echo $jenis_surat; ?></b></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id_jenissurat" value="<?php echo $id_jenissurat; ?>">
                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                    <button class="btn btn-danger">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Ending Menghapus Jenis Surat-->
                <?php $id++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
</div>