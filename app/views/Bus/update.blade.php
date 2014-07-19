@include ('layout.bus.bus')

<?php
foreach ($bus as $value) {
    $idbus = $value->id;
    $merek = $value->merek_bus;
    $tahun = $value->tahun_pembuatan;
    $nostnk = $value->nomer_stnk;
    $warna = $value->warna;
    $kapasitas = $value->kapasitas;
}
?>

<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel panel-heading">
            <div class="glyphicon glyphicon-plus">
                Update Data Bus
            </div>
        </div>
        <div class="panel panel-body">
            <form class="form-horizontal" action="<?php echo URL::to('/bus/update/proses/' . $idbus) ?>">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="merekbus">Merek Bus</label>
                    </div>
                    <input type="text" name="merekbus" value="<?php echo $merek; ?>" required>
                    <p style="color: red"> {{ $errors->first('merekbus') }} </p>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="tahunpembuatan">Tahun Pembuatan</label>
                    </div>
                    <input type="text" name="tahunpembuatan" value="<?php echo $tahun; ?>" required>
                    <p style="color: red"> {{ $errors->first('tahunpembuatan') }} </p>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="nomorstnk">Nomor Polisi</label>
                    </div>
                    <input type="text" name="nomerstnk" value="<?php echo $nostnk; ?>" required>
                    <p style="color: red"> {{ $errors->first('nomerstnk') }} </p>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="warna">Warna</label>
                    </div>
                    <input type="text" name="warna" value="<?php echo $warna; ?>" required>
                    <p style="color: red"> {{ $errors->first('warna') }} </p>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="kapasitas">Kapasitas</label>
                    </div>
                    <input type="text" name="kapasitas" value="<?php echo $kapasitas; ?>" required>
                    <p style="color: red"> {{ $errors->first('kapasitas') }} </p>
                </div>
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="form-group">
                        <a><button class="btn btn-primary glyphicon glyphicon-plus" type="submit">Simpan</button></a>
                        <a><button class="btn btn-danger glyphicon glyphicon-refresh" type="reset">Reset</button></a>
                        <!--                    <a><button class="btn btn-warning glyphicon glyphicon-arrow-left">Batal</button></a>-->
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

