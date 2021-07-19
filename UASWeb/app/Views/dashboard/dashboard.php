<?= $this->extend('_layouts/_layouts') ?>
<?= $this->section('content') ?>
<!--Author : FAHMI PRAYOGA-->
<?= $this->include('dashboard/_partials/breadcrumb/breadcrumb') ?>

<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h3 class="card-title">Dashboard</h3>
                            </div>
                            <?php if (!session()->get('id')) { ?>
                                <div class="col-4">
                                    <div class="float-sm-right">
                                        <a href="/ambil_antrian" class="btn btn-primary btn-sm">
                                            <i class="fa fa-plus"></i> <span>Ambil Antrian</span>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card text-center">
                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <?php foreach ($agenda as $key => $value) { ?>
                                                <div class="carousel-item <?php if ($key == 0) { ?> active <?php } ?>">
                                                    <img class="d-block w-100 " src="/media/agenda/<?= $value['file'] ?>" alt="First slide" />
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5><?= $value['nama'] ?></h5>
                                                        <p><?= $value['keterangan'] ?></p>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card text-center">
                                    <div class="card-header bg-primary">
                                        Panggilan Antrian
                                    </div>
                                    <div class="card-body">
                                        <h1 style=font-size:160px><?php if ($dipanggil[0]) {
                                                                        echo $dipanggil[0]['no_antrian'];
                                                                    } else {
                                                                        echo '-';
                                                                    } ?> </h1>
                                    </div>
                                    <div class="card-footer bg-primary">
                                        <?php if ($dipanggil[0]) {
                                            echo 'Loket ' . $dipanggil[0]['loket'];
                                        } else {
                                            echo '-';
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($loket as $key => $value) { ?>
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <div class="card-header bg-primary">
                                        Loket <?= $value['loket'] ?>
                                    </div>
                                    <div class="card-body">
                                        <h1><?= $no_antrian[$key] ?></h1>
                                    </div>
                                    <div class="card-footer">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>
</section>
<?= $this->endSection() ?>
<!--Author : FAHMI PRAYOGA-->
<?= $this->section('script') ?>

<?= $this->include('dashboard/script') ?>

<?= $this->endSection() ?>