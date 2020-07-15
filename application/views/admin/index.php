<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Input</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Total Akun -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Keuntungan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?= $totalakun ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-600"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Surat -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Produk Terjual</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?= $totalsurat ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-envelope fa-2x text-gray-600"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Disposisi -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sisa Produk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totaldisposisi ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-envelope-open-text fa-2x text-gray-600"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Disposisi -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Reset Data</div>
                            <a href="#" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> Reset</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>




    </div>

</div>

</div>