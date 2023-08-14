<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            Dashboard <small< /small>
        </h2>
    </div>
</div>
<!-- /. ROW  -->
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-green">
                <div class="panel-body">
                    <i class="fa fa-bar-chart-o fa-5x"></i>
                    <h3><?= $produk ?></h3>
                </div>
                <div class="panel-footer back-footer-green">
                    Jumlah Produk

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-blue">
                <div class="panel-body">
                    <i class="fa fa-shopping-cart fa-5x"></i>
                    <h3><?= $penjualan ?> </h3>
                </div>
                <div class="panel-footer back-footer-blue">
                    Jumlah Penjualan
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-primary text-center no-boder bg-color-brown">
                <div class="panel-body">
                    <i class="fa fa-users fa-5x"></i>
                    <h3><?= $us ?> </h3>
                </div>
                <div class="panel-footer back-footer-brown">
                    Jumlah Pelanggan
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>