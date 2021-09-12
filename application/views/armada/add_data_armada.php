<section class="content-header">
    <h1> Tambah data Paket
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('armada') ?>" class="btn btn-success btn-xs"><i class="fa fa-undo "></i>Kembali data paket</a></li>

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
                    <form action="<?= site_url('armada/prosess') ?>" method="POST">
                        <div class="form-group">
                            <label> Nama Mobil * </label>
                            <input type="hidden" name="id" value="<?= $armada->id_armada ?>">
                            <input type="text" name="nama_mobil" class="form-control" value="<?= $armada->nama_mobil ?>">
                        </div>
                        <div class="form-group">
                            <label> No Plat * </label>
                            <input type="text" name="no_plat" class="form-control" value="<?= $armada->no_plat ?>">
                        </div>
                        <div class="form-group">
                            <label> Tahun * </label>
                            <input type="text" name="tahun" class="form-control " value="<?= $armada->tahun ?>">
                        </div>
                        <div class="form-group">
                            <label> Jenis Mobil * </label>
                            <input type="text" name="jenis_mobil" class="form-control " value="<?= $armada->jenis_mobil ?>">
                        </div>
                        <div class="form-group">
                            <label> No Mesin * </label>
                            <input type="text" name="no_mesin" class="form-control " value="<?= $armada->no_mesin ?>">
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