<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Surat</h1>
        <a href="<?= base_url('surat/') ?>tambah_surat" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas text-white-50"></i>Tambah Surat</a>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message') ?>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>ID Surat</td>
                <td>Tanggal Masuk</td>
                <td>Kode Surat</td>
                <td>Tanggal Surat</td>
                <td>Pengirim</td>
                <td>Kepada</td>
                <td>ID JenisSurat</td>
                <td>Subject</td>
                <td>Keterangan</td>
                <td>Berkas Surat</td>
                <td>ID User</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listsurats->result_array() as $list) :
                $id_surat = $list['id_surat'];
                $tgl_masuk = $list['tgl_masuk'];
                $kode_surat = $list['kode_surat'];
                $tgl_surat = $list['tgl_surat'];
                $pengirim = $list['pengirim'];
                $kepada = $list['kepada'];
                $id_jenissurat = $list['id_jenissurat'];
                $subject = $list['subject'];
                $keterangan = $list['keterangan'];
                $upload_surat = $list['upload-surat'];
                $id_user = $list['id_user'];

            ?>
                <tr>
                    <td><?php echo $id_surat; ?> </td>
                    <td><?php echo date("d-m-Y", strtotime($tgl_masuk)); ?> </td>
                    <td><?php echo $kode_surat; ?> </td>
                    <td><?php echo $tgl_surat; ?> </td>
                    <td><?php echo $pengirim; ?> </td>
                    <td><?php echo $kepada; ?> </td>
                    <td><?php echo $id_jenissurat; ?> </td>
                    <td><?php echo $subject; ?> </td>
                    <td><?php echo $keterangan; ?> </td>
                    <td><?php echo $upload_surat; ?> </td>
                    <td><?php echo $id_user; ?></td>
                    <td>
                        <a href="#hapusjsurat<?php echo $id_surat; ?>" class="badge badge-danger" data-toggle="modal">Hapus</a>
                    </td>
                </tr>
                <!-- Menghapus Surat-->
                <div class="modal fade" id="hapussurat<?php echo $id_surat; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="myModalLabel">Hapus Jenis Surat</h3>
                            </div>
                            <form class="form-horizontal" method="post" action="<?php echo base_url('surat/') . 'hapus_surat' ?>">
                                <div class="modal-body">
                                    <p>Yakin ingin menghapus <b><?php echo $id_surat; ?></b></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id_surat" value="<?php echo $id_surat; ?>">
                                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                    <button class="btn btn-danger">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Ending Menghapus Surat-->
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
</div>