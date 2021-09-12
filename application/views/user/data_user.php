<section class="content-header">
    <h1>
        master data user<small>master user data</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url() ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">master user data </h3>

            <div class="box-tools pull-right">
                <a href="<?= site_url('user/add') ?>" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> tambah data user </a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-responsive table-striped" id="table1">
                <thead>
                    <tr>
                        <th style="width: 5%;">no</th>
                        <th>name</th>
                        <th>username</th>
                        <th>address</th>
                        <th>level</th>
                        <th>action</th>
                        <!-- <?php print_r($user) ?> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($user->result() as $key => $value) { ?>
                            <td><?= $no++ ?></td>
                            <td><?= $value->name  ?></td>
                            <td><?= $value->username  ?></td>
                            <td><?= $value->address      ?></td>
                            <td><?php
                                if ($value->level == 1) {
                                    echo 'Administrator';
                                } else if ($value->level == 2) {
                                    echo 'Master User';
                                } ?>
                            </td>
                            <td>
                                <form action="<?= site_url('user/del/' . $value->user_id) ?>" method="POST">
                                    <input type="hidden" name="user_id" value="<?= $value->user_id ?>">
                                    <button class="btn btn-primary btn-xs" onclick="return confirm('Yakin Data Di Hapuss!!')"><i class="fa fa-trash"> </i></button>
                                    <a href="<?= site_url('user/edit/' . $value->user_id) ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil "></i></a>
                                </form>
                            </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">

        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->