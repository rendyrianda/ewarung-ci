<!-- section2 flower card -->
<section class="d-none d-lg-block mb-5">
    <div class="container">
        <div class="row">
            <div class="col my-5">
                <h4> <?= $judul ?></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?= $this->session->flashdata('message');
                ?>
            </div>
            <?php $i = 1; ?>
            <?php foreach ($produk as $us) : ?>
                <div class="col-4">
                    <div class="card pink-back mb-3" style="max-width: 35rem;">
                        <div class="card-body mx-auto border-top-0">
                            <img src="<?= base_url('assets/img/produk/') . $us['img_product']; ?>" style="width:100px" class="img-thumbnail">
                        </div>
                        <div class="card-footer bg-white">
                            <h5 class=""><?= $us['nama_product'] ?></h5>
                            <div class="d-flex mt-4">
                                <button class="form-control card-button rounded-pill border border-primary">Stok : <?= $us['stok'] ?></button>
                                <button style="margin-left: 10px;" class="form-control card-button rounded-pill border border-primary"><?= $us['ktgr_product'] ?></button>
                            </div>
                            <div class="d-flex mt-3">
                                <p class="price-tag">Rp.<?= $us['harga_product'] ?></p>
                                <i class="fas fa-shopping-cart pt-2 pl-3"></i>
                            </div>
                            <div class="align-items-center">
                                <a href="<?= base_url('User/keranjang/') . $us['id'] ?>" class="badge badge-warning badge-block">Beli</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>