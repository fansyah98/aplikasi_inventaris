<section class="content-header">
    <h1> Tambah data Paket
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('paket') ?>" class="btn btn-success btn-xs"><i class="fa fa-undo "></i>Kembali data paket</a></li>

    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Tambah data paket </h3>

        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-6 ">
                    <form action="<?= site_url('paket/prosess') ?>" method="POST">
                        <div class="form-group">
                            <label> Paket Sewa * </label>
                            <input type="hidden" name="id" value="<?= $paket->id_paket ?>">
                            <input type="text" name="paket_sewa" class="form-control" value="<?= $paket->paket_sewa ?>">
                        </div>
                        <div class="form-group">
                            <label> Harga sewa * </label>
                            <input type="number" name="harga_sewa" class="form-control" value="<?= $paket->harga_sewa ?>">
                        </div>
                        <div class="form-group">
                            <label> Fasilitas * </label>
                            <input type="text" name="fasilitas" class="form-control" value="<?= $paket->fasilitas ?>">
                        </div>
                        <div class="form-group">
                            <label> hari sewa * </label>
                            <input type="text" name="waktu_sewa" class="form-control date" value="<?= $paket->waktu_sewa ?>">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-warning btn-xs"> simpan data <i class=" fa fa-save"></i> </button>
                            <button type="reset" class="btn btn-danger btn-xs "> <i class="fa fa-undo"></i> reset data </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>