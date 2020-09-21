<div class="col-lg-7">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Lokasi Balaidesa
        </div>
        <div class="panel-body">
        
        <div id="mapid" style="width: 100%; height: 500px;"></div>

        

        </div>
    </div>
</div>
<div class="col-lg-5">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Input Data
        </div>
        <div class="panel-body">
        <!-- <form role="form"> -->
        <?php  
        echo validation_errors('<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');

        

        echo form_open('desa/edit'); ?>
            <div class="form-group">
                <label>Nama Desa</label>
                <input type="text" name="nama_desa" value="<?= set_value('nama_desa') ?>" class="form-control" placeholder="Nama Desa">            
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat"  value="<?= set_value('alamat') ?>" class="form-control" placeholder="Alamat">            
            </div>
            <div class="form-group">
                <label>No Telp</label>
                <input type="text" name="telp" value="<?= set_value('telp') ?>" class="form-control" placeholder="No Telp">            
            </div>
            <div class="form-group">
                <label>Latitude</label>
                <input type="text" name="latitude" id="Latitude" class="form-control" placeholder="Latitude" readonly>            
            </div>
            <div class="form-group">
                <label>Longitude</label>
                <input type="text" name="longitude" id="Longitude" class="form-control" placeholder="Longitude" readonly>            
            </div>
            <div class="form-group">
                <label>Deskreipsi</label>
                <textarea name="deskripsi" cols="40" class="form-control" ></textarea>           
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        <?= form_close(); ?>
        <!-- </form> -->
        </div>
    </div>
</div>

