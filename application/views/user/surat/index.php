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
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
</div>