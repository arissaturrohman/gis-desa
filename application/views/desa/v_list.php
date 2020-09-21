
<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
         <?= $title; ?>
         </div>
       <!-- /.panel-heading -->
    <div class="panel-body">
    <?php 
    if ($this->session->flashdata('pesan')) {
        echo '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
        echo $this->session->flashdata('pesan');
        echo '</div>';
     }
    ?>
<div class="table-responsive">
    <a href="<?= base_url('desa/input')?>" class="btn btn-primary btn-sm">Tambah</a>
    <div><br></div>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr>
        <th>No</th>
        <th>Nama Desa</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Latitude</th>
        <th>Longitude</th>
        <th>Aksi</th>
        </tr>
        </thead>
        <tbody>

        <?php $no=1; foreach($desa as $key => $data){ ?>
        <tr>
        <td><?= $no++; ?></td>
        <td><?= 'Desa '.$data->nama_desa; ?></td>
        <td><?= $data->alamat; ?></td>
        <td><?= $data->telp; ?></td>
        <td><?= $data->latitude; ?></td>
        <td><?= $data->longitude; ?></td>
        <td>
            <a href="<?= base_url('desa/edit/'.$data->id_desa) ?>" class="btn btn-success btn-sm">edit</a> | 
            <a href="" class="btn btn-danger btn-sm">hapus</a>
        </td>
        </tr>
        <?php } ?>
        </tbody>
</table>
         </div>
         </div>
         </div>
         </div>