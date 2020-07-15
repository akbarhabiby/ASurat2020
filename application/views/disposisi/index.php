<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Disposisi</h1>
        <a href="<?= base_url('disposisi/') ?>tambah_disposisi" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas text-white-50"></i> Tambah Disposisi</a>
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
                <td>Penerima Disposisi</td>
                <td>Tanggal Surat Balasan</td>
                <td>Uraian</td>
                <td>ID Surat</td>
                <td>ID User</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $id = 1; ?>
            <?php
            foreach ($listdisposisi->result_array() as $list) :
                $id_disposisi = $list['id_disposisi'];
                $penerima_disposisi = $list['penerima_disposisi'];
                $tglsurat_balasan = $list['tglsurat_balasan'];
                $uraian = $list['uraian'];
                $id_surat = $list['id_surat'];
                $id_user = $list['id_user'];
                $status = $list['status'];
            ?>
                <tr>
                    <th scope="row"><?= $id ?></th>
                    <td><?php echo $penerima_disposisi; ?> </td>
                    <td><?php echo $tglsurat_balasan; ?> </td>
                    <td><?php echo $uraian; ?> </td>
                    <td><?php echo $id_surat; ?> </td>
                    <td><?php echo $id_user; ?> </td>
                    <td><?php echo $status; ?> </td>
                    <td>
                        <a href="#hapusdisposisi1<?php echo $id_disposisi; ?>" class="badge badge-danger" data-toggle="modal">Hapus</a>
                    </td>
                </tr>

                <!-- Menghapus Disposisi-->
                <div class="modal fade" id="hapusdisposisi1<?php echo $id_disposisi; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="myModalLabel">Hapus Jenis Surat</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url('disposisi/') . 'hapus_disposisi' ?>">
                                <div class="modal-body">
                                    <p>Yakin ingin menghapus <b><?php echo $id_disposisi; ?></b></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id_disposisi" value="<?php echo $id_disposisi; ?>">
                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                    <button class="btn btn-danger">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Ending Menghapus Disposisi-->
                <?php $id++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>