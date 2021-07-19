<?= $this->extend('_layouts/_layouts') ?>
<?= $this->section('content') ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Halaman Admin</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                    <li class="breadcrumb-item active">Agenda</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah agenda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('admin/agenda_tambah'); ?>" enctype="multipart&#x2F;form-data" method="post" accept-charset="utf-8">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input required type="text" name="nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input required type="text" name="keterangan" class="form-control" placeholder="Keterangan">
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input required type="file" name="file" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php foreach ($agenda as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit agenda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url('admin/agenda_edit') ?>/<?= $value['id'] ?>" enctype="multipart&#x2F;form-data" method="post" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input required type="text" value="<?= $value['nama'] ?>" name="nama" class="form-control" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input required type="text" value="<?= $value['keterangan'] ?>" name="keterangan" class="form-control" placeholder="Keterangan">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input required type="file" name="file" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h3 class="card-title">Halaman Konfigurasi Admin</h3>
                            </div>
                            <div class="col-4">
                                <div class="float-sm-right">
                                    <a data-toggle="modal" data-target="#tambah" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus"></i> <span>Tambah agenda</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" id="print">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card text-center">
                                    <div class="card-header bg-primary">
                                        Daftar Agenda
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Keterangan</th>
                                                    <th scope="col">Foto</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($agenda as $key => $value) { ?>
                                                    <tr>
                                                        <th scope="row"><?= $key + 1 ?></th>
                                                        <td><?= $value['nama'] ?></td>
                                                        <td><?= $value['keterangan'] ?></td>
                                                        <td><img src="/media/agenda/<?= $value['file'] ?>" width="50" height="50"></td>
                                                        <td><a data-toggle="modal" data-target="#edit<?= $value['id'] ?> " class="btn btn-warning btn-sm">
                                                                <i class="fa fa-pen"></i>
                                                            </a>
                                                            <a onclick="c()" href="/agenda_hapus/<?= $value['id'] ?>" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<script>
    function c() {
        confirm("Ingin menghapus?");
    }
</script>
<?= $this->endSection() ?>

<?= $this->section('script') ?>

<?= $this->include('dashboard/script') ?>

<?= $this->endSection() ?>